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
 * Upgrade script for the quiz module.
 *
 * @package    local_wb_news
 * @copyright  2024 Wunderbyte GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * WB News Upgrade
 * @param string $oldversion the version we are upgrading from.
 */
function xmldb_local_wb_news_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();

    if ($oldversion < 2024061501) {
        // Define field lightmode to be added to local_wb_news.
        $table = new xmldb_table('local_wb_news');
        $field = new xmldb_field('lightmode', XMLDB_TYPE_INTEGER, '2', null, null, null, null, 'btntext');

        // Conditionally launch add field lightmode.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Define field cssclasses to be added to local_wb_news.
        $table = new xmldb_table('local_wb_news');
        $field = new xmldb_field('cssclasses', XMLDB_TYPE_CHAR, '255', null, null, null, null, 'lightmode');

        // Conditionally launch add field cssclasses.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Wb_news savepoint reached.
        upgrade_plugin_savepoint(true, 2024061501, 'local', 'wb_news');
    }

    // Automatically generated Moodle v4.0.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v4.1.0 release upgrade line.
    // Put any upgrade step following this.

    return true;
}
