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
require_once($CFG->dirroot.'/course/format/renderer.php');
require_once($CFG->dirroot.'/course/format/folderview/lib.php');

/**
 * Renderer for outputting the folderview course format.
 *
 * @copyright Copyright (c) 2009 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @package format_folderview
 * @author David Mills
 * @author Mark Nielsen
 */
class format_folderview_renderer extends format_section_renderer_base {
    /**
     * Generate the starting container html for a list of sections
     *
     * @return string HTML to output.
     */
    protected function start_section_list() {
        return html_writer::start_tag('ul', array('class' => 'folderview topics'));
    }

    /**
     * Generate the closing container html for a list of sections
     *
     * @return string HTML to output.
     */
    protected function end_section_list() {
        return html_writer::end_tag('ul');
    }

    /**
     * Generate the title for this section page
     *
     * @return string the page title
     */
    protected function page_title() {
        return get_string('topicoutline');
    }

    public function section_title($section, $course) {
        $title = get_section_name($course, $section);
        if ($section->uservisible) {
            $url = course_get_url($course, $section->section);
            if ($url) {
                $title = html_writer::link($url, $title);
            }
        }
        return $title;
    }

    protected function section_left_content($section, $course, $onsectionpage) {
        if ($onsectionpage or $section->section == 0) {
            return parent::section_left_content($section, $course, $onsectionpage);
        }
        $sectionname = get_section_name($course, $section);
        if ($section->uservisible) {
            $title    = get_string('showonlytopic', 'format_folderview', $sectionname);
            $expand   = get_string('sectionexpand', 'format_folderview', $sectionname);
            $collapse = get_string('sectioncollapse', 'format_folderview', $sectionname);
            $o = html_writer::link(
                course_get_url($course, $section->section),
                $this->output->pix_icon('spacer', '', 'format_folderview', array('class' => 'folder_icon')).html_writer::tag('span', $title, array('class' => 'accesshide')),
                array('title' => $title, 'data-before-aria-label' => $expand, 'data-after-aria-label' => $collapse, 'aria-hidden' => 'true', 'role' => 'button', 'class' => 'foldertoggle')
            );
        } else {
            $o = $this->output->pix_icon('folder', get_string('sectionnotavailable', 'format_folderview', $sectionname), 'format_folderview');
        }
        if (course_get_format($course)->is_section_current($section)) {
            $o .= get_accesshide(get_string('currentsection', 'format_'.$course->format));
        }
        return $o;
    }

    protected function section_edit_controls($course, $section, $onsectionpage = false) {
        global $PAGE;

        $sectionname = get_section_name($course, $section);

        if ($section->uservisible) {
            $title      = get_string('showonlytopic', 'format_folderview', $sectionname);
            $img        = html_writer::empty_tag('img', array('src' => $this->output->pix_url('one', 'format_folderview'), 'class' => 'icon one', 'alt' => $title));
            $onesection = html_writer::link(course_get_url($course, $section->section), $img, array('title' => $title));
        } else {
            $onesection = '';
        }
        if (!$PAGE->user_is_editing()) {
            if (!$onsectionpage and !empty($onesection)) {
                return array($onesection);
            }
            return array();
        }

        $coursecontext = context_course::instance($course->id);
        $controls = array();

        if (!$onsectionpage and has_capability('moodle/course:manageactivities', $coursecontext)) {
            $title      = get_string('sectionaddresource', 'format_folderview', $sectionname);
            $img        = html_writer::empty_tag('img', array('src' => $this->output->pix_url('t/add'), 'class' => 'icon add', 'alt' => $title));
            $controls[] = html_writer::link('#jumpto_addResource', $img, array('title' => $title, 'class' => 'add_widget'));
        }
        if (has_capability('moodle/course:update', $coursecontext)) {
            $url        = new moodle_url('/course/editsection.php', array('id' => $section->id, 'sr' => ($onsectionpage) ? $section->section : 0));
            $img        = html_writer::empty_tag('img', array('src' => $this->output->pix_url('t/edit'), 'class' => 'icon edit', 'alt' => get_string('edit')));
            $controls[] = html_writer::link($url, $img, array('title' => get_string('editsection', 'format_folderview', $sectionname)));
        }
        if (has_capability('moodle/course:setcurrentsection', $coursecontext)) {
            if ($onsectionpage) {
                $url = course_get_url($course, $section->section);
            } else {
                $url = course_get_url($course);
            }
            $url->param('sesskey', sesskey());

            if ($course->marker == $section->section) { // Show the "light globe" on/off.
                $url->param('marker', 0);
                $img        = html_writer::empty_tag('img', array('src' => $this->output->pix_url('i/marked'), 'class' => 'icon ', 'alt' => get_string('markedthistopic')));
                $controls[] = html_writer::link($url, $img, array('title' => get_string('markedthistopic'), 'class' => 'editing_highlight'));
            } else {
                $url->param('marker', $section->section);
                $img        = html_writer::empty_tag('img', array('src' => $this->output->pix_url('i/marker'), 'class' => 'icon', 'alt' => get_string('markthistopic')));
                $controls[] = html_writer::link($url, $img, array('title' => get_string('markthistopic'), 'class' => 'editing_highlight'));
            }
        }
        if (!$onsectionpage and !empty($onesection)) {
            $controls[] = $onesection;
        }

        return array_reverse(
            array_merge($controls, parent::section_edit_controls($course, $section, $onsectionpage))
        );
    }

    public function print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused) {
        // Passed sections is not always correct.
        $modinfo  = get_fast_modinfo($course);
        $sections = $modinfo->get_section_info_all();

        echo html_writer::start_tag('div', array('class' => 'multi-section'));
        echo $this->all_sections_visibility_toggles();
        echo $this->output->heading(get_section_name($course, $sections[0]), 2, 'mdl-align title headingblock header outline pagetitle', 'pagetitle');
        $this->action_menu($course, $sections[0], $sections, $modnames);
        parent::print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused);
        echo html_writer::end_tag('div');
    }

    public function print_single_section_page($course, $sections, $mods, $modnames, $modnamesused, $displaysection) {
        $modinfo = get_fast_modinfo($course);
        $course = course_get_format($course)->get_course();

        // Passed sections is not always correct.
        $sections = $modinfo->get_section_info_all();

        // Can we view the section in question?
        if (!($sectioninfo = $modinfo->get_section_info($displaysection))) {
            // This section doesn't exist
            print_error('unknowncoursesection', 'error', null, $course->fullname);
            return;
        }

        if (!$sectioninfo->uservisible) {
            if (!$course->hiddensections) {
                echo $this->start_section_list();
                echo $this->section_hidden($displaysection);
                echo $this->end_section_list();
            }
            // Can't view this section.
            return;
        }

        // Copy activity clipboard..
        echo $this->course_activity_clipboard($course, $displaysection);

        // Start single-section div
        echo html_writer::start_tag('div', array('class' => 'single-section'));

        // The requested section page.
        $thissection = $modinfo->get_section_info($displaysection);

        // Title with section navigation links.
        $sectionnavlinks = $this->get_nav_links($course, $modinfo->get_section_info_all(), $displaysection);
        $sectiontitle = '';
        $sectiontitle .= html_writer::start_tag('div', array('class' => 'section-navigation navigationtitle'));
        $sectiontitle .= html_writer::tag('span', $sectionnavlinks['previous'], array('class' => 'mdl-left'));
        $sectiontitle .= html_writer::tag('span', $sectionnavlinks['next'], array('class' => 'mdl-right'));
        // Title attributes
        $classes = 'sectionname';
        if (!$thissection->visible) {
            $classes .= ' dimmed_text';
        }
        $sectiontitle .= $this->output->heading(get_section_name($course, $displaysection), 3, $classes);

        $sectiontitle .= html_writer::end_tag('div');
        echo $sectiontitle;

        $this->action_menu($course, $sections[$displaysection], $sections, $modnames);

        // Now the list of sections..
        echo $this->start_section_list();

        echo $this->section_header($thissection, $course, true, $displaysection);
        // Show completion help icon.
        $completioninfo = new completion_info($course);
        echo $completioninfo->display_help_icon();

        echo $this->courserenderer->course_section_cm_list($course, $thissection, $displaysection);
        echo $this->courserenderer->course_section_add_cm_control($course, $displaysection, $displaysection);
        echo $this->section_footer();
        echo $this->end_section_list();

        // Display section bottom navigation.
        $viewallurl = html_writer::link(
            course_get_url($course, 0),
            get_string('section0name', 'format_folderview'),
            array('title' => get_string('viewalltopics', 'format_folderview'))
        );

        $sectionbottomnav = '';
        $sectionbottomnav .= html_writer::start_tag('div', array('class' => 'section-navigation mdl-bottom'));
        $sectionbottomnav .= html_writer::tag('span', $sectionnavlinks['previous'], array('class' => 'mdl-left'));
        $sectionbottomnav .= html_writer::tag('span', $sectionnavlinks['next'], array('class' => 'mdl-right'));
        $sectionbottomnav .= html_writer::tag('div', $this->section_nav_selection($course, $sections, $displaysection),
            array('class' => 'mdl-align'));
        $sectionbottomnav .= html_writer::div($viewallurl, 'viewall mdl-right');
        $sectionbottomnav .= html_writer::end_tag('div');
        echo $sectionbottomnav;

        // Close single-section div.
        echo html_writer::end_tag('div');
    }

    protected function section_nav_selection($course, $sections, $displaysection) {

        $courseurl = course_get_url($course, 0);

        $o = '';
        $sectionmenu = array();
        $sectionmenu[$courseurl->out(false)] = get_string('section0name', 'format_folderview');
        $modinfo = get_fast_modinfo($course);
        $section = 1;
        while ($section <= $course->numsections) {
            $thissection = $modinfo->get_section_info($section);
            $showsection = $thissection->uservisible or !$course->hiddensections;
            if (($showsection) && ($section != $displaysection)) {
                $courseurl->param('section', $section);
                $sectionmenu[$courseurl->out(false)] = get_section_name($course, $section);
            }
            $section++;
        }

        $select = new url_select($sectionmenu, '', array('' => get_string('jumpto')));
        $select->class = 'jumpmenu';
        $select->formid = 'sectionmenu';
        $o .= $this->output->render($select);

        return $o;
    }

    /**
     * This renders the expand/collapse all sections
     * widgets.
     *
     * @return string
     */
    public function all_sections_visibility_toggles() {
        $strexpandall   = get_string('expandall', 'format_folderview');
        $strcollapseall = get_string('collapseall', 'format_folderview');
        $url            = new moodle_url('#');
        $expandicon     = $this->output->pix_icon('t/switch_plus', $strexpandall);
        $collapseicon   = $this->output->pix_icon('t/switch_minus', $strcollapseall);

        $output  = html_writer::link($url, $expandicon,
            array('class' => 'expand-sections', 'role' => 'button'));
        $output .= html_writer::link($url, $collapseicon,
            array('class' => 'collapse-sections', 'role' => 'button'));

        return html_writer::tag('div', $output, array('id' => 'topiclinktop', 'class' => 'topiclistlink'));
    }

    /**
     * This renders the top tabs/menu for course administration
     *
     * @param stdClass $course
     * @param section_info $section
     * @param section_info[] $sections
     * @param array $modnames
     * @return void
     */
    public function action_menu($course, $section, $sections, $modnames) {
        if (!$this->page->user_is_editing()) {
            return;
        }
        require_once(__DIR__.'/lib.php');

        $coursecontext = context_course::instance($course->id);

        $isroot = ($section->section == 0);
        $hascourseupdate     = has_capability('moodle/course:update', $coursecontext);
        $hasmanageactivities = has_capability('moodle/course:manageactivities', $coursecontext);

        echo "<div id=\"menuPanel\" class=\"nodialog\" style=\"border-collapse:collapse\">";
        echo "<div id=\"menuPanelTabs\" class=\"menuPanelTabs\">";

        // Action Menu - links for adding content and editing page
        if ($isroot && $hascourseupdate) {
            $before = get_string('showaddtopic', 'format_folderview');
            $after  = get_string('hideaddtopic', 'format_folderview');
            $text   = get_string('addtopic', 'format_folderview');
            echo html_writer::tag('span', html_writer::link('#', $text, array('role' => 'button', 'data-before-aria-label' => $before, 'data-after-aria-label' => $after)), array('class' => 'tab', 'id' => 'tab_addTopic'));
        }
        if ($hasmanageactivities) {
            $before = get_string('showaddresource', 'format_folderview');
            $after  = get_string('hideaddresource', 'format_folderview');
            $text   = get_string('addresource', 'format_folderview');
            echo html_writer::tag('span', html_writer::link('#', $text, array('role' => 'button', 'data-before-aria-label' => $before, 'data-after-aria-label' => $after)), array('class' => 'tab', 'id' => 'tab_addResource'));
        }
        if ($this->page->user_can_edit_blocks()) {
            $before = get_string('showaddblock', 'format_folderview');
            $after  = get_string('hideaddblock', 'format_folderview');
            $text   = get_string('addblock', 'format_folderview');
            echo html_writer::tag('span', html_writer::link('#', $text, array('role' => 'button', 'data-before-aria-label' => $before, 'data-after-aria-label' => $after)), array('class' => 'tab', 'id' => 'tab_addBlock'));
        }
        if ($hascourseupdate) {
            echo html_writer::tag('span', html_writer::link(new moodle_url('/course/editsection.php?id='.$section->id), get_string('topicsettings', 'format_folderview')), array('class' => 'tab nodialog', 'id' => 'tab_editTopic'));
        }
        echo '</div>';

        // End of Action Menu

        echo '<div id="menuPanelDialog">';

        //output the Cancel button for all add dialogs
        $strclose = get_string('close', 'format_folderview');
        $icon     = $this->output->action_icon('#', new pix_icon('close', $strclose, 'format_folderview'), null, array('title' => $strclose, 'aria-label' => $strclose, 'role' => 'button'));
        echo html_writer::tag('div', $icon, array('id' => 'menuPanelClose'));

        echo $this->action_menu_add_topic_dialog($course);
        $this->action_menu_add_resources_dialog($course, $section, $sections, $modnames);
        echo $this->action_menu_add_block_dialog();

        echo '</div>'; //close dialog content area
        echo '</div>'; //close dialog container
    }

    /**
     * Renders dialog content for adding a new topic
     *
     * @param stdClass $course
     * @return string
     */
    public function action_menu_add_topic_dialog($course) {
        $output = '';
        if (has_capability('moodle/course:update', context_course::instance($course->id))) {
            $url = new moodle_url('/course/format/folderview/addsection.php', array(
                'sesskey'  => sesskey(),
                'courseid' => $course->id,
            ));

            $output .= html_writer::start_tag('div', array('id' => 'addTopic', 'class' => 'dialog', 'tabindex' => '-1', 'role' => 'region'));
            $output .= $this->output->heading(get_string('addtopic', 'format_folderview'), 3, 'dialoglabel');
            $output .= html_writer::start_tag('form', array('method' => 'post', 'action' => $url->out_omit_querystring()));
            $output .= html_writer::input_hidden_params($url);
            $output .= html_writer::tag('div', html_writer::label(get_string('sectiontitle', 'format_folderview'), 'newsection', true, array('class' => 'accesshide')));
            $output .= html_writer::empty_tag('input', array('id' => 'newsection', 'type' => 'text', 'size' => 50, 'name' => 'newsection', 'class' => 'focusonme'));
            $output .= html_writer::empty_tag('input', array('type' => 'submit', 'name' => 'addtopic', 'value' => get_string('addtopic', 'format_folderview')));
            $output .= html_writer::end_tag('form');
            $output .= html_writer::end_tag('div');
        }
        return $output;
    }

    /**
     * Renders dialog content for adding a new activity
     *
     * @param stdClass $course
     * @param section_info $section
     * @param section_info[] $sections
     * @param array $modnames
     * @return void
     */
    public function action_menu_add_resources_dialog($course, $section, $sections, $modnames) {
        global $CFG;

        if (!has_capability('moodle/course:manageactivities', context_course::instance($course->id))) {
            return;
        }
        $straddresource = get_string('addresource', 'format_folderview');
        $strresources  = get_string('resources', 'format_folderview');
        $stractivities = get_string('activities');
        $straddtotopic = get_string('addtotopic', 'format_folderview');

        $mods      = get_module_metadata($course, $modnames, $section->section);
        $fieldsets = array($stractivities => array(), $strresources => array());
        foreach ($mods as $mod) {
            if ($mod->archetype != MOD_ARCHETYPE_RESOURCE and $mod->archetype != MOD_ARCHETYPE_SYSTEM) {
                if (!empty($mod->types)) {
                    if (!array_key_exists($mod->title, $fieldsets)) {
                        $fieldsets[$mod->title] = array();
                    }
                    foreach ($mod->types as $type) {
                        if (empty($type->icon)) {
                            $type->icon = $mod->icon;
                        }
                        if (empty($type->name)) {
                            $type->name = $mod->name;
                        }
                        $fieldsets[$mod->title][] = $this->add_activity($type);
                    }
                } else {
                    $fieldsets[$stractivities][] = $this->add_activity($mod);
                }
            } else if ($mod->archetype == MOD_ARCHETYPE_RESOURCE) {
                $fieldsets[$strresources][] = $this->add_activity($mod);
            }
        }

        echo '<div id="addResource" class="dialog" tabindex="-1" role="region">';
        echo html_writer::link('#', '', array('name' => 'jumpto_addResource', 'aria-hidden' => 'true', 'tabindex' => '-1'));
        echo $this->output->heading($straddresource, 3, 'dialoglabel');
        echo '<form method="GET" action="'.$CFG->wwwroot.'/course/format/folderview/addmod.php">';
        echo '<input type="hidden" name="id" value="'.$course->id.'" />';
        echo '<input type="hidden" name="sesskey" value="'.sesskey().'" />';
        echo '<input id="addResourceHidden" type="hidden" name="add" value="" />';

        $output      = "";
        $itemspercol = floor(get_string('itemspercolumn', 'format_folderview'));
        $numcols     = floor(get_string('numberofcolumns', 'format_folderview'));
        foreach ($fieldsets as $fsname => $fstext) {
            if (count($fstext) > 0) {
                $totalitems = count($fstext);
                $colitems   = $itemspercol;
                if ($colitems == 0) {
                    $colitems = ceil($totalitems / $numcols);
                }
                $output = $output.'<div class="rescat"><div class="rescatlegend">'.$fsname.'</div><div class="column">';
                foreach ($fstext as $index => $item) {
                    if (($index != 0) and ($index % $colitems == 0)) {
                        $output = $output.'</div><div class="column">';
                    }
                    $output = $output.$item;
                }
                $output = $output.'</div><div class="clearfix"></div></div>';
            }
        }
        echo $output;

        //Output topic selector (which defaults to current topic)
        if ($section->section != 0) {
            $currenttopic = " (".get_string('currenttopic', 'format_folderview').")";
        } else {
            $currenttopic = '';
        }
        echo '<div id="divAddToSection">';
        echo '<label for="selAddToSection">'.$straddtotopic.'</label><br /><select id="selAddToSection" name="section">';
        foreach ($sections as $id => $asection) {
            $label = get_section_name($course, $asection);
            if ($section->section == $id) {
                echo "<option value=\"$id\" selected=\"selected\">$label$currenttopic</option>";
            } else {
                echo "<option value=\"$id\">$label</option>";
            }
        }
        echo '</select> ';
        echo '<input type="submit" name="do" id="addResourceButton" value="'.$straddresource.'" />';
        echo '</div>';

        echo '<div class="clearfix"></div></form></div>'; //close addResource
    }

    /**
     * HTML for adding an activity folderview style
     *
     * @param object $mod
     * @return string
     */
    protected function add_activity($mod) {
        if (empty($mod->help)) {
            $mod->help = get_string('nohelpforactivityorresource', 'moodle');
        }
        $options              = new stdClass();
        $options->trusted     = false;
        $options->noclean     = false;
        $options->smiley      = false;
        $options->filter      = false;
        $options->para        = true;
        $options->newlines    = false;
        $options->overflowdiv = false;

        if (!empty($mod->type)) {
            $data = str_replace('&amp;', '&', $mod->type);;
        } else {
            $data = $mod->name;
        }
        $help = format_text($mod->help, FORMAT_MARKDOWN, $options);
        $help = html_to_text($help);
        $link = html_writer::link('#', $mod->icon.' '.$mod->title, array('title' => $help, 'id' => 'add_mod_'.$mod->name));

        $output = html_writer::tag('div', $link, array('class' => 'restype addreslink', 'data-modname' => $data));

        $radioid = html_writer::random_id('addradio');
        $radio   = html_writer::empty_tag('input', array('type' => 'radio', 'name' => 'add', 'value' => $data, 'id' => $radioid));
        $label   = html_writer::label($mod->icon.' '.$mod->title, $radioid, false);

        $output .= html_writer::tag('div', $radio.$label, array('class' => 'addresradio'));

        return $output;
    }

    /**
     * Renders dialog content for adding a new block
     *
     * @return string
     */
    public function action_menu_add_block_dialog() {
        if (!$this->page->user_is_editing() || !$this->page->user_can_edit_blocks()) {
            return '';
        }
        $missingblocks = $this->page->blocks->get_addable_blocks();
        if (empty($missingblocks)) {
            $output = get_string('noblockstoaddhere');
        } else {
            $menu = array();
            foreach ($missingblocks as $block) {
                $blockobject = block_instance($block->name);
                if ($blockobject !== false && $blockobject->user_can_addto($this->page)) {
                    $menu[$block->name] = $blockobject->get_title();
                }
            }
            core_collator::asort($menu);

            foreach ($menu as $blockname => $blocktitle) {
                $menu[$blockname] = html_writer::link(new moodle_url($this->page->url, array('sesskey' => sesskey(), 'bui_addblock' => $blockname)), $blocktitle);
                $menu[$blockname] = html_writer::tag('div', $menu[$blockname]);
            }
            $output = html_writer::tag('span', get_string('addblock', 'format_folderview'), array('class' => 'accesshide dialoglabel'));

            $size = ceil(count($menu) / 3);

            foreach (array_chunk($menu, $size) as $chunk) {
                $output .= html_writer::tag('div', implode('', $chunk), array('class' => 'column'));
            }
            $output .= html_writer::tag('div', '&nbsp;', array('class' => 'clearfix'));
        }
        return html_writer::tag('div', $output, array('id' => 'addBlock', 'class' => 'dialog', 'tabindex' => '-1', 'role' => 'region'));
    }
}