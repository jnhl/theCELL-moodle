<?php
/**
 * Moodlerooms Framework
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
 * @package mr
 * @author Mark Nielsen
 */

defined('MOODLE_INTERNAL') or die('Direct access to this script is forbidden.');

/**
 * @see mr_html_filter_abstract
 */
require_once($CFG->dirroot.'/local/mr/framework/html/filter/abstract.php');

/**
 * MR HTML Filter Text
 *
 * @author Mark Nielsen
 * @author Sam Chaffee
 * @package mr
 */
class mr_html_filter_textarea extends mr_html_filter_abstract {

    protected $attributes;

    /**
     * Construct
     *
     * @param string $name Filter name
     * @param string $label Filter label
     * @param bool $advanced Filter advanced form setting
     * @param string $field SQL field, defaults to $name
     * @param array $attributes
     */
    public function __construct($name, $label, $advanced = false, $field = NULL, $attributes = array()) {
        $this->attributes = $attributes;

        parent::__construct($name, $label, $advanced, $field);
    }
    /**
     * Add text input
     */
    public function add_element($mform) {
        $mform->addElement('textarea', $this->name, $this->label, $this->attributes);
        $mform->setType($this->name, PARAM_TEXT);
        $mform->setDefault($this->name, $this->preferences_get($this->name));

        if ($this->advanced) {
            $mform->setAdvanced($this->name);
        }

        return $this;
    }

    /**
     * Search by input value
     */
    public function sql() {
        global $DB;

        $preference = $this->preferences_get($this->name);
        if (!empty($preference)) {
            return array($DB->sql_like($this->field, '?', false, false), "%$preference%");
        }
        return false;
    }
}