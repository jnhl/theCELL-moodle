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

YUI.add('moodle-format_folderview-menu', function(Y) {
        var ADD_RESOURCE_ANCHOR = 'jumpto_addResource';

        var CSS = {
            TABSWRAPPER: '#menuPanelTabs',
            MAINWRAPPER: '#menuPanel',
            CLOSEICON: '#menuPanelClose',
            FOCUS: '.focusonme',
            TABS: 'span.tab a[role=button]',
            ADDRESOURCE: 'li.section .right .add_widget',
            SECTIONROOT: 'ul.folderview',
            ADDRESOURCESELECTOR: '#selAddToSection',
            ADDRESOURCETAB: '#tab_addResource a[role=button]',
            ADDRESOURCEDIALOG: '#addResource',
            ADDRESOURCELINK: '.restype a',
            ADDRESOURCELINKWRAPPER: '.addreslink',
            ADDRESOURCEHIDDEN: '#addResourceHidden',
            ADDRESOURCEANCHOR: 'a[name=' + ADD_RESOURCE_ANCHOR + ']',
            DIALOGLABEL: '.dialoglabel'
        };

        var MENUNAME = 'format_folderview_menu';

        var MENU = function() {
            MENU.superclass.constructor.apply(this, arguments);
        };

        Y.extend(MENU, Y.Base, {
                initializer: function(config) {
                    var closeNode = Y.one(CSS.CLOSEICON);
                    if (closeNode) {
                        closeNode.on('click', this.handle_close_button, this);
                    }
                    var rootNode = Y.one(CSS.SECTIONROOT);
                    if (rootNode) {
                        rootNode.delegate('click', this.handle_show_add_resource, CSS.ADDRESOURCE, this);
                    }
                    var resourceNode = Y.one(CSS.ADDRESOURCEDIALOG);
                    if (resourceNode) {
                        resourceNode.delegate('click', this.handle_add_resource, CSS.ADDRESOURCELINK, this);

                        // Move the anchor up to the tab
                        var addResourceNode = Y.one(CSS.ADDRESOURCETAB);
                        addResourceNode.setAttribute('name', ADD_RESOURCE_ANCHOR);

                        var anchorNode = resourceNode.one(CSS.ADDRESOURCEANCHOR);
                        if (anchorNode) {
                            anchorNode.remove(true);
                        }
                    }
                    this.init_aria();
                },

                /**
                 * Associate tabs to their regions
                 */
                init_aria: function() {
                    Y.all(CSS.TABSWRAPPER + ' ' + CSS.TABS).each(function(tab) {

                        var tabPanelId = tab.get('parentNode').get('id').replace('tab_', '');
                        var tabPanel = Y.one('#' + tabPanelId);

                        if (tabPanel === null) {
                            return;
                        }
                        tabPanel.plug(M.local_mr.ariacontrolled, {
                            ariaLabelledBy: tabPanel.one(CSS.DIALOGLABEL),
                            ariaState: 'aria-hidden'
                        });

                        // Run extra logic to show/hide tab
                        tabPanel.local_mr_ariacontrolled.on('beforeUpdateState', function(e) {
                            if (e.target.get('visible')) {
                                this.show_menu_panel(tabPanelId);
                            } else {
                                this.hide_menu_panel();
                            }
                        }, this);

                        tab.plug(M.local_mr.ariacontrol, { ariaControls: tabPanel });

                        // Close any OTHER tabs that might be open
                        tab.local_mr_ariacontrol.on('beforeToggle', function() {
                            var selectedTab = this.find_selected_tab();
                            if (selectedTab !== false && selectedTab.generateID() != tab.generateID()) {
                                selectedTab.local_mr_ariacontrol.toggle_state();
                            }
                        }, this);
                    }, this);
                },

                /**
                 * Find the currently selected tab
                 *
                 * Returns false if no tab is selected
                 * @return {*}
                 */
                find_selected_tab: function() {
                    var selectedTab = false;
                    Y.all(CSS.TABSWRAPPER + ' ' + CSS.TABS).each(function(tab) {
                        var nodePanel = tab.local_mr_ariacontrol.get('ariaControls');
                        if (nodePanel.local_mr_ariacontrolled.get('visible')) {
                            selectedTab = tab;
                        }
                    });
                    return selectedTab;
                },

                /**
                 * Given a section node, get the section number
                 * @param node
                 * @return {Number}
                 */
                get_section_number: function(node) {
                    return Number(node.get('id').replace(/section-/i, ''));
                },

                /**
                 * Handles the close dialog button
                 * @param e
                 */
                handle_close_button: function(e) {
                    e.preventDefault();

                    var tab = this.find_selected_tab();
                    if (tab !== false) {
                        tab.local_mr_ariacontrol.toggle_state();
                        tab.focus();
                    }
                },

                /**
                 * Handle section widget add resource click
                 * @param e
                 */
                handle_show_add_resource: function(e) {
                    var section = e.target.ancestor('li.section');
                    var selectedTab = this.find_selected_tab();
                    var resourceTab = Y.one(CSS.ADDRESOURCETAB);

                    if (selectedTab === false || resourceTab.generateID() != selectedTab.generateID()) {
                        resourceTab.local_mr_ariacontrol.toggle_state();
                    } else {
                        resourceTab.local_mr_ariacontrol.get('ariaControls').focus();
                    }

                    // IE needs this verbose processing for it to update
                    // Will be fixed with http://yuilibrary.com/projects/yui3/ticket/2528084
                    var sectionnum = this.get_section_number(section);
                    Y.all(CSS.ADDRESOURCESELECTOR + ' option').each(function(option) {
                        if (option.get('value') == sectionnum) {
                            option.set('selected', true);
                        } else {
                            option.set('selected', false);
                        }
                    });
                },

                /**
                 * Handle adding an actual resource from the "Add Resource" dialog
                 * @param e
                 */
                handle_add_resource: function(e) {
                    e.preventDefault();

                    var node = e.target.ancestor(CSS.ADDRESOURCELINKWRAPPER);
                    Y.one(CSS.ADDRESOURCEHIDDEN).set('value', node.getData('modname'));
                    e.target.ancestor('form').submit();
                },

                /**
                 * Show a tab/panel
                 * @param tabPanelId
                 */
                show_menu_panel: function(tabPanelId) {
                    Y.one(CSS.MAINWRAPPER).set('className', 'dlg_' + tabPanelId);
                    Y.one('body').addClass(tabPanelId.toLowerCase());
                },

                /**
                 * Hide all tabs/panels
                 */
                hide_menu_panel: function() {
                    var node = Y.one(CSS.MAINWRAPPER);
                    Y.one('body').removeClass(node.get('className').replace('dlg_', '').toLowerCase());
                    node.set('className', 'nodialog');
                }
            },
            {
                NAME: MENUNAME,
                ATTRS: {
                }
            });
        M.format_folderview = M.format_folderview || {};
        M.format_folderview.init_menu = function(config) {
            return new MENU(config);
        }
    },
    '@VERSION@', {
        requires: ['base', 'event', 'moodle-local_mr-ariacontrol', 'moodle-local_mr-ariacontrolled']
    }
);