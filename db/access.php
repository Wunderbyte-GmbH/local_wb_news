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
 *
 * @package   local_wb_news
 * @copyright 2024 Thomas Winkler
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    'local/news_manager:manage' => array(
        'riskbitmask'  => RISK_SPAM | RISK_PERSONAL | RISK_XSS | RISK_CONFIG,
        'captype'      => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes'   => array(
            'student'        => CAP_PROHIBIT,
            'teacher'        => CAP_PROHIBIT,
            'editingteacher' => CAP_PROHIBIT,
            'manager'          => CAP_ALLOW
        )
    ),
    'local/news_manager:view' => array(
        'riskbitmask'  => RISK_SPAM | RISK_PERSONAL | RISK_XSS | RISK_CONFIG,
        'captype'      => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'guest' => CAP_ALLOW,
            'student' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),
);
