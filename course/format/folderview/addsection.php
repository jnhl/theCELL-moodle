<?php
/**
 * Folder View Course Format
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
 *
 * @copyright Copyright (c) 2009 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @package format_folderview
 * @author David Mills
 * @author Mark Nielsen
 */

/**
 * Add a new course section
 *
 * @author Mark Nielsen
 * @package format_folderview
 */

require_once(dirname(dirname(dirname(__DIR__))).'/config.php');
require_once($CFG->dirroot.'/course/lib.php');

$courseid   = required_param('courseid', PARAM_INT);
$sectioname = required_param('newsection', PARAM_TEXT);
$context    = context_course::instance($courseid);

require_login($courseid, false, null, false, true);
has_capability('moodle/course:update', $context);
require_sesskey();

$course = course_get_format($courseid)->get_course();
$course->numsections++;

course_get_format($course)->update_course_format_options(
    array('numsections' => $course->numsections)
);
course_create_sections_if_missing($course, range(0, $course->numsections));

$modinfo = get_fast_modinfo($course);
$section = $modinfo->get_section_info($course->numsections, MUST_EXIST);
$DB->set_field('course_sections', 'name', $sectioname, array('id' => $section->id));
rebuild_course_cache($course->id);

redirect(course_get_url($course, $section->section));