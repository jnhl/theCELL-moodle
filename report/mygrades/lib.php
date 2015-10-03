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

defined('MOODLE_INTERNAL') || die;

/**
 * This function extends the navigation with the report items
 *
 * @param navigation_node $navigation The navigation node to extend
 * @param stdClass $course The course to object for the report
 * @param stdClass $context The context of the course
 */
 
function report_mygrades_extend_navigation(global_navigation $navigation) {
	$url = new moodle_url('/report/mygrades/index.php', array('course' => $course->id));
	$navigation->add(get_string('pluginname', 'report_mygrades'), $url, null, null, new pix_icon('i/report', ''));
}

 function report_mygrades_extend_navigation_user($navigation, $user, $course) {
	$url = new moodle_url('/report/mygrades/index.php' , array('userid'=>$user->id));
    $navigation->add(get_string('pluginname', 'report_mygrades'), $url, navigation_node::TYPE_SETTING, null, null, new pix_icon('i/report', ''));
}