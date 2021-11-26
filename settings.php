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
 * Theme Intuitable - Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Create settings page with tabs.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingintuitable', get_string('configtitle', 'theme_intuitable', null, true));

    require("$CFG->dirroot/theme/intuitable/settings/settings_general.php");

    require("$CFG->dirroot/theme/intuitable/settings/settings_header.php");
    
    require("$CFG->dirroot/theme/intuitable/settings/settings_headerlinks.php");

    require("$CFG->dirroot/theme/intuitable/settings/settings_verticalnavigation.php");

    require("$CFG->dirroot/theme/intuitable/settings/settings_breadcrumb.php");

    require("$CFG->dirroot/theme/intuitable/settings/settings_footer.php");

    require("$CFG->dirroot/theme/intuitable/settings/settings_footersocial.php");

    require("$CFG->dirroot/theme/intuitable/settings/settings_typography.php");
}
