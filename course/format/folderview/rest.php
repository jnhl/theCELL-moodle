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

define('AJAX_SCRIPT', true);
define('NO_DEBUG_DISPLAY', true);

require_once(dirname(dirname(dirname(__DIR__))).'/config.php');
require_once($CFG->dirroot.'/course/lib.php');

$courseid         = required_param('courseid', PARAM_INT);
$action           = required_param('action', PARAM_ALPHANUMEXT);
$expandedsections = optional_param('expandedsections', '', PARAM_SEQUENCE);

$PAGE->set_url(
    '/course/format/folderview/rest.php',
    array('courseid' => $courseid, 'action' => $action)
);

$course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
$coursecontext = context_course::instance($course->id);

require_login($course);
require_sesskey();

echo $OUTPUT->header(); // send headers

$requestmethod = $_SERVER['REQUEST_METHOD'];

switch ($requestmethod) {
    case 'POST':
        switch ($action) {
            case 'setexpandedsections':
                $expandedsections = explode(',', $expandedsections);
                $modinfo = get_fast_modinfo($course);

                $preference = array();
                foreach ($expandedsections as $collapsedsection) {
                    $section = $modinfo->get_section_info($collapsedsection);
                    if (!is_null($section)) {
                        $preference[] = $section->id;
                    }
                }
                if (empty($preference)) {
                    unset_user_preference("format_folderview_$course->id");
                    echo 'ok unset';
                } else {
                    set_user_preference("format_folderview_$course->id", implode(',', $preference));
                    echo 'ok set';
                }
                break;
        }
}