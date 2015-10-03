YUI.add('moodle-format_folderview-sectiontoggle', function (Y, NAME) {

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
 * Folderview section collapse and expand
 *
 * @module moodle-format_folderview-sectiontoggle
 */

var CSS = {
    MAINWRAPPER: '.course-content ul.folderview',
    ALLSECTIONS: '.course-content ul.folderview li.section',
    SECTION: 'li.section',
    SECTIONNAMELINK: '.sectionname a',
    TOGGLETARGET: '.left.side .foldertoggle',
    EXPANDALL: '#topiclinktop .expand-sections',
    COLLAPSEALL: '#topiclinktop .collapse-sections'
};

/**
 * Expands and collapses course sections
 *
 * @constructor
 * @namespace M.format_folderview
 * @class SectionToggle
 * @extends Y.Base
 */
function SECTIONTOGGLE() {
    SECTIONTOGGLE.superclass.constructor.apply(this, arguments);
}

SECTIONTOGGLE.NAME = NAME;
SECTIONTOGGLE.ATTRS = {
    /**
     * Current course ID, used for AJAX requests
     *
     * @attribute courseid
     * @type Number
     * @required
     */
    courseid: {
        validator: Y.Lang.isNumber
    },

    /**
     * Current course ID, used for AJAX requests
     *
     * @attribute ajaxurl
     * @type String
     * @required
     */
    ajaxurl: {
        validator: Y.Lang.isString
    },

    /**
     * Currently expanded sections
     *
     * @attribute expandedsections
     * @type Array
     * @default []
     * @optional
     */
    expandedsections: {
        value: [],
        validator: Y.Lang.isArray
    },

    /**
     * Aria live log
     *
     * Used to announce actions to users.
     *
     * @attribute liveLog
     * @type M.local_mr.init_livelog
     * @default M.local_mr.init_livelog
     * @required
     */
    liveLog: {
        readOnly: true,
        valueFn: function() {
            return M.local_mr.init_livelog({});
        }
    }
};

Y.extend(SECTIONTOGGLE, Y.Base,
    {
        initializer: function() {
            var sections = Y.all(CSS.ALLSECTIONS);

            this.init_section_attributes(sections);

            // Setup our watcher for clicks.
            var wrapperNode = Y.one(CSS.MAINWRAPPER);
            if (wrapperNode) {
                wrapperNode.delegate('click', this.handle_section_toggle, CSS.TOGGLETARGET + ', ' + CSS.SECTIONNAMELINK, this);
            }
            var expandNode = Y.one(CSS.EXPANDALL);
            if (expandNode) {
                expandNode.on('click', this.handle_expand_all, this);
            }
            var collapseNode = Y.one(CSS.COLLAPSEALL);
            if (collapseNode) {
                collapseNode.on('click', this.handle_collapse_all, this);
            }
            if (!sections.isEmpty()) {
                sections.on('drop', this.handle_drop, this);
            }
        },

        /**
         * Sets up aria attributes for expand/collapse sections
         * @param sections
         */
        init_section_attributes: function(sections) {
            if (sections.isEmpty()) {
                return;
            }
            sections.each(function(node) {
                // Expand the section if set in user preference.
                if (Y.Array.indexOf(this.get('expandedsections'), this.get_section_number(node)) !== -1) {
                    this.expand_section(node);
                } else {
                    this.collapse_section(node);
                }
            }, this);
        },

        /**
         * Determine if we should ignore this section or not
         * @param section
         * @returns {Boolean}
         */
        ignore_section: function(section) {
            return (!section || section.hasClass('orphaned') || this.get_section_number(section) === 0);
        },

        /**
         * Toggles a section
         * @param section
         */
        toggle_section: function(section) {
            if (this.ignore_section(section)) {
                return;
            }
            if (section.hasClass('expanded')) {
                this.collapse_section(section);
            } else {
                this.expand_section(section);
            }
        },

        /**
         * Collapses a section
         * @param section
         */
        collapse_section: function(section) {
            if (this.ignore_section(section)) {
                return;
            }
            Y.log('Collapsing section number: ' + this.get_section_number(section), 'debug', SECTIONTOGGLE.NAME);

            section.removeClass('expanded');
            this.update_section_labels(section, 'before-aria-label');
        },

        /**
         * Expands a section
         * @param section
         */
        expand_section: function(section) {
            if (this.ignore_section(section)) {
                return;
            }
            Y.log('Expanding section number: ' + this.get_section_number(section), 'debug', SECTIONTOGGLE.NAME);

            section.addClass('expanded');
            this.update_section_labels(section, 'after-aria-label');
        },

        /**
         * Update folder and section link to say either
         * "Expand topic X" or "Collapse topic X"
         * @param section
         * @param {String} dataAttribute The data attribute name to use
         */
        update_section_labels: function(section, dataAttribute) {
            var folder = section.one(CSS.TOGGLETARGET);
            var link   = section.one(CSS.SECTIONNAMELINK);

            if (!folder) {
                return; // This guy has the goods!
            }
            var nodes = [folder];
            if (link) {
                nodes.push(link);
            }
            var nodeList = new Y.NodeList(nodes);

            nodeList.setAttribute('aria-label', folder.getData(dataAttribute))
                .setAttribute('title', folder.getData(dataAttribute));
        },

        /**
         * Event handler for when a user clicks on a section folder
         * or section link
         * @param e
         */
        handle_section_toggle: function(e) {
            e.preventDefault();

            var section = e.target.ancestor(CSS.SECTION);
            if (this.ignore_section(section)) {
                return;
            }
            this.toggle_section(section);

            if (section.hasClass('expanded')) {
                this.get('liveLog').log_text(M.str.format_folderview.topicexpanded);
            } else {
                this.get('liveLog').log_text(M.str.format_folderview.topiccollapsed);
            }
            this.save_expanded_sections();
        },

        /**
         * Expand all sections
         * @param e
         */
        handle_expand_all: function(e) {
            e.preventDefault();

            Y.all(CSS.ALLSECTIONS).each(function(node) {
                this.expand_section(node);
            }, this);

            this.get('liveLog').log_text(M.str.format_folderview.alltopicsexpanded);

            this.save_expanded_sections();
        },

        /**
         * Collapse all sections
         * @param e
         */
        handle_collapse_all: function(e) {
            e.preventDefault();

            Y.all(CSS.ALLSECTIONS).each(function(node) {
                this.collapse_section(node);
            }, this);

            this.get('liveLog').log_text(M.str.format_folderview.alltopicscollapsed);

            this.save_expanded_sections();
        },

        /**
         * A file was dropped on a section, expand it
         * @param e
         */
        handle_drop: function(e) {
            var section = e.currentTarget;
            if (!section.test(CSS.SECTION)) {
                section = section.ancestor(CSS.SECTION);
            }
            if (section && !section.hasClass('expanded')) {
                this.expand_section(section);
                this.save_expanded_sections();
            }
        },

        /**
         * Saves the expanded sections at endpoint
         */
        save_expanded_sections: function() {
            var expanded = [];

            Y.all('li.section.expanded').each(function(node) {
                expanded.push(this.get_section_number(node));
            }, this);

            Y.io(this.get('ajaxurl'), {
                context: this,
                method: 'POST',
                data: {
                    courseid: this.get('courseid'),
                    expandedsections: expanded.join(','),
                    action: 'setexpandedsections',
                    sesskey: M.cfg.sesskey
                },
                on: {
                    complete: function(id, response) {
                        Y.log('Updated expanded sections: ' + response.responseText, 'debug', SECTIONTOGGLE.NAME);
                    },
                    failure: function(id, response) {
                        Y.log(response, 'error', SECTIONTOGGLE.NAME);
                    }
                }
            });
        },

        /**
         * Given a section node, get the section number
         * @param node
         * @return {Number}
         */
        get_section_number: function(node) {
            return Number(node.get('id').replace(/section-/i, ''));
        }
    }
);

M.format_folderview = M.format_folderview || {};
M.format_folderview.SectionToggle = SECTIONTOGGLE;
M.format_folderview.init_sectiontoggle = function(config) {
    return new SECTIONTOGGLE(config);
};


}, '@VERSION@', {"requires": ["base", "event", "io", "moodle-local_mr-livelog"]});
