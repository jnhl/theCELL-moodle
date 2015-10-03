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
 * Format Upgrade Path
 *
 * @author Mark Nielsen
 * @package format_folderview
 */
function xmldb_format_folderview_upgrade($oldversion = 0) {
    global $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2012121700) {

        // Define table format_folderview_display to be created
        $table = new xmldb_table('format_folderview_display');

        // Adding fields to table format_folderview_display
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('course', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('display', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table format_folderview_display
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Adding indexes to table format_folderview_display
        $table->add_index('course_userid', XMLDB_INDEX_UNIQUE, array('course', 'userid'));

        // Conditionally launch create table for format_folderview_display
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // folderview savepoint reached
        upgrade_plugin_savepoint(true, 2012121700, 'format', 'folderview');
    }

    if ($oldversion < 2013021200) {
        // Remove coursedisplay format option
        $DB->delete_records('course_format_options', array('format' => 'folderview', 'name' => 'coursedisplay'));

        // folderview savepoint reached
        upgrade_plugin_savepoint(true, 2013021200, 'format', 'folderview');
    }
    return true;
}