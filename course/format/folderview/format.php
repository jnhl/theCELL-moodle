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

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/filelib.php');
require_once($CFG->libdir.'/completionlib.php');

// Horrible backwards compatible parameter aliasing..
if ($topic = optional_param('topic', 0, PARAM_INT)) {
    $url = $PAGE->url;
    $url->param('section', $topic);
    debugging('Outdated topic param passed to course/view.php', DEBUG_DEVELOPER);
    redirect($url);
}
// End backwards-compatible aliasing..

$context = context_course::instance($course->id);

if (($marker >= 0) && has_capability('moodle/course:setcurrentsection', $context) && confirm_sesskey()) {
    $course->marker = $marker;
    course_set_marker($course->id, $marker);
}

// make sure all sections are created
$course = course_get_format($course)->get_course();
course_create_sections_if_missing($course, range(0, $course->numsections));

/** @var $sections section_info[] */
/** @var $renderer format_folderview_renderer */
$renderer = $PAGE->get_renderer('format_folderview');

if (!empty($displaysection)) {
    $renderer->print_single_section_page($course, $sections, $mods, $modnames, $modnamesused, $displaysection);
} else {
    $renderer->print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused);

    $pref     = get_user_preferences("format_folderview_$course->id", '');
    $expanded = array();
    foreach (explode(',', $pref) as $expandedsection) {
        foreach ($sections as $folderviewsection) {
            if ($folderviewsection->id == $expandedsection) {
                $expanded[] = $folderviewsection->section;
                break;
            }
        }
    }

    $PAGE->requires->strings_for_js(array(
        'topicexpanded',
        'topiccollapsed',
        'alltopicsexpanded',
        'alltopicscollapsed'
    ), 'format_folderview');

    $PAGE->requires->yui_module(
        'moodle-format_folderview-sectiontoggle',
        'M.format_folderview.init_sectiontoggle',
        array(array(
            'courseid'         => (int) $course->id,
            'ajaxurl'          => $CFG->wwwroot.'/course/format/folderview/rest.php',
            'expandedsections' => $expanded,
        ))
    );
}

$PAGE->requires->js('/course/format/folderview/format.js');

if ($PAGE->user_is_editing()) {
    $PAGE->requires->yui_module(
        'moodle-format_folderview-menu',
        'M.format_folderview.init_menu'
    );
}