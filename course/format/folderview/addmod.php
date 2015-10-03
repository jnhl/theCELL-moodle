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
 * Construct an add module URL from the folderview add
 * activity form.  This is used when screen reader and the
 * like are used.
 *
 * @author Mark Nielsen
 * @package format_folderview
 */

require_once(dirname(dirname(dirname(__DIR__))).'/config.php');

$courseid = required_param('id', PARAM_INT);
$add      = optional_param('add', '', PARAM_TEXT);
$section  = required_param('section', PARAM_INT);
$context  = context_course::instance($courseid);

require_login($courseid, false, null, false, true);
require_capability('moodle/course:manageactivities', $context);
require_sesskey();

if (empty($add)) {
    print_error('mustselectresource', 'format_folderview', new moodle_url('/course/view.php', array('id' => $courseid)));
}
redirect(new moodle_url('/course/mod.php?add='.$add, array(
    'id'      => $courseid,
    'section' => $section,
    'sesskey' => sesskey(),
)));