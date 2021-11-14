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

defined('MOODLE_INTERNAL') || die();

/**
 * A login page layout for the boost theme.
 *
 * @package   theme_intuitable
 * copied from theme_boost to provide custom login layout 
 * @copyright 2021 Mireille Pedder / Intuitable
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$bodyattributes = $OUTPUT->body_attributes();

// get Intuitable theme settings and set template context
require("{$CFG->dirroot}/theme/intuitable/layout/partials/themesettings.php"); 

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'bodyattributes' => $bodyattributes,
    'headerlinkscontent' => $headerlinkscontent,
    'footercontent' => $footercontent,
    'footerlinkscontent' => $footerlinkscontent,
    'mobilenavbar' => $mobilenavbar
];

echo $OUTPUT->render_from_template('theme_intuitable/login', $templatecontext);
