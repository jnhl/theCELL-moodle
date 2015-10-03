<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * My Grades Report.
 *
 * @package   report_mygrades
 * @author    David Bezemer <david.bezemer@uplearning.nl>
 * @credits   Based on original work block_mygrades by Karen Holland, Mei Jin, Jiajia Chen
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once($CFG->libdir . '/gradelib.php');
require_once $CFG->dirroot . '/grade/report/overview/lib.php';
require_once $CFG->dirroot . '/grade/lib.php';

global $PAGE, $COURSE;
$url = new moodle_url('/report/mygrades/index.php');
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');
$PAGE->set_context(context_course::instance($COURSE->id));
$PAGE->navigation->add(get_string('pluginname', 'report_mygrades'), $url);
$PAGE->set_heading($COURSE->fullname);
$PAGE->set_title(get_string('pluginname', 'report_mygrades'));

$PAGE->requires->jquery();
$PAGE->requires->jquery_plugin('dataTables', 'report_mygrades');

require_login();

echo $OUTPUT->header();

$userid = optional_param('userid', 0, PARAM_INT);   // user id

if (empty($userid)) {
	$userid = $USER->id;
	$usercontext = context_user::instance($userid, MUST_EXIST);
} else {
	$usercontext = context_user::instance($userid, MUST_EXIST);
}
if ($userid != $USER->id && !has_capability('moodle/user:viewdetails', $usercontext)) {
	echo $OUTPUT->notification(get_string('usernotavailable', 'error'));
	die;
}

global $DB,$CFG;
$user = $DB->get_record('user', array('id' => $userid, 'deleted' => 0));
$userlinked = "<a href='".$CFG->wwwroot."/user/view.php?id=".$userid."'>".$user->firstname." ".$user->lastname."</a>";

if (empty($user->username)) {
	echo $OUTPUT->notification(get_string('userdeleted'));
	die;
}

echo $OUTPUT->heading(get_string('pluginname', 'report_mygrades')." ".get_string('for', 'calendar')." ".$userlinked);

class report_mygrades extends block_base {
	public function init() {
		$this->title = get_string('my_grades', 'report_mygrades');
	}
	
	public function get_content() {
		global $DB, $USER, $COURSE;
		
		$userid = optional_param('userid', 0, PARAM_INT);   // user id

		if ($this->content !== null) {
			return $this->content;
		}
		
		if (empty($userid)) {
			$userid = $USER->id;
		}
 
		$this->content = new stdClass;

		/// return tracking object
		$gpr = new grade_plugin_return(array('type'=>'report', 'plugin'=>'overview', 'userid'=>$USER->id));
 
		// Create a report instance
		$context = context_course::instance($COURSE->id);
		$report = new grade_report_overview($userid, $gpr, $context);

		$newdata=$this->grade_data($report);
		if (is_array($newdata))
		{
			if (count($newdata)>0)
			{
				$newtext="<table class=\"grades\" id=\"grades\"><thead><tr><th>".get_string('gradetblheader_course', 'report_mygrades')."</th><th>".get_string('gradetblheader_grade', 'report_mygrades')."</th></tr></thead>";
				foreach($newdata as $newgrade)
				{
					// need to put data into table for display here
					$newtext.="<tr><td>{$newgrade[0]}</td><td>{$newgrade[1]}</td></tr>";
				}
				$newtext.="</table>";
				$this->content->text = $newtext;
			}
		}
		else
		{
			$this->content->text = $newdata;
		}
		return $this->content;
	}

	public function instance_allow_multiple() {
		return false;
	}
	
	public function grade_data($report) {
		global $CFG, $DB, $OUTPUT;
		$data = array();
		
		if ($courses = enrol_get_users_courses($report->user->id, false, 'id, shortname, showgrades')) {
			$numusers = $report->get_numusers(false);

			foreach ($courses as $course) {
				if (!$course->showgrades) {
					continue;
				}

				$coursecontext = context_course::instance($course->id);

				if (!$course->visible && !has_capability('moodle/course:viewhiddencourses', $coursecontext)) {
					// The course is hidden and the user isn't allowed to see it
					continue;
				}

				$courseshortname = format_string($course->shortname, true, array('context' => $coursecontext));
				$courselink = html_writer::link(new moodle_url('/grade/report/user/index.php', array('id' => $course->id, 'userid' => $report->user->id)), $courseshortname);
				$canviewhidden = has_capability('moodle/grade:viewhidden', $coursecontext);

				// Get course grade_item
				$course_item = grade_item::fetch_course_item($course->id);

				// Get the stored grade
				$course_grade = new grade_grade(array('itemid'=>$course_item->id, 'userid'=>$report->user->id));
				$course_grade->grade_item =& $course_item;
				$finalgrade = $course_grade->finalgrade;

				$data[] = array($courselink, grade_format_gradevalue($finalgrade, $course_item, true));
			}
			
			if (count($data)==0) {
				return $OUTPUT->notification(get_string('noenrolments', 'report_mygrades'));
			} else {
				return $data;
			}
		} else {
			return $OUTPUT->notification(get_string('noenrolments', 'report_mygrades'));
		}
	}
}

$report = new report_mygrades;
$report->init();
$content = $report->get_content();
echo $content->text;
echo $OUTPUT->container_start('info');
echo $OUTPUT->container_end();
echo $OUTPUT->footer();
echo "<script>$('#grades').dataTable({'aaSorting': []});</script>";