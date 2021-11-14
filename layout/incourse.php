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
 * incourse layout for the intuitable  theme
 * based on the columns2 layout 
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireile Pedder
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
require_once($CFG->libdir . '/behat/lib.php');

if (isloggedin()) {
    $navdraweropen = (get_user_preferences('drawer-open-nav', 'true') == 'true');
} else {
    $navdraweropen = false;
}


$modname = '';
$exitactivity = '';
$exitactivityurl = '';
// $this->attemptobj->summary_url()
if (!is_null($PAGE->cm)) {
    $modname = $PAGE->cm->modname;
    $exitactivity = get_string('exitactivity', 'theme_intuitable', ucfirst($modname));
    // exit url same for all quiz pages?
    if ($modname === 'quiz') {
        $tempurl = $PAGE->url->__toString();
        $exitactivityurl = preg_replace('/(.+?)\/attempt\.php(.+?)/', '$1/summary.php$2', $tempurl);
    }
    // exit url for other activity pages?
    else {
        ;
    }
}

$extraclasses = [];
if ($navdraweropen) {
    $extraclasses[] = 'drawer-open-left';
}
$isadmin = is_siteadmin($USER);
// get Intuitable custom course fields , theme settings and set template context
require("{$CFG->dirroot}/theme/intuitable/layout/partials/themesettings.php"); 


$showactivitynav = true;
$showincoursenav = true;
$showquizheader = false;
$showquizexit = false;
$blockshtml = $OUTPUT->blocks('side-pre');
$blocksbackground = '';
$blocksbanner = '';
$blocksheader = '';
$blocksintro = '';


// quiz attempt, review pages only:
// do not render:
// header nav
// header blocks
// banner blocks
// main nav ( left)

//  adjust to show all nav for admins?
switch ($PAGE->pagetype) {
    case "mod-quiz-attempt" :
    case "mod-quiz-review" : 
    case "mod-quiz-summary" : 
        $showactivitynav = false;
        $showincoursenav = false;
        $showquizheader  = true;
        $extraclasses[] = 'quiz-nav-only';
        $blocksbanner = $OUTPUT->quizblocks('intuitable-banner'); // used for the quiz nav fake block
        break;
    default: 
        $blocksbackground = $OUTPUT->blocks('intuitable-background');
        $blocksbanner = $OUTPUT->blocks('intuitable-banner');
        $blocksheader = $OUTPUT->blocks('intuitable-header');    
        $blocksintro = $OUTPUT->blocks('intuitable-intro');
        break;
}

$blocksmain = $OUTPUT->blocks('intuitable-main');
$blocksfooter = $OUTPUT->blocks('intuitable-footer');
$hasblocks = strpos($blockshtml, 'data-block=') !== false;
$hasblocksbackground = strpos($blocksbackground, 'data-block=') !== false;
$hasblocksbanner = strpos($blocksbanner, 'data-block=') !== false;
$hasblocksheader = strpos($blocksheader, 'data-block=') !== false;
$hasblocksintro = strpos($blocksintro, 'data-block=') !== false;
$hasblocksmain = strpos($blocksmain, 'data-block=') !== false;
$hasblocksfooter = strpos($blocksfooter, 'data-block=') !== false;
$buildregionmainsettings = !$PAGE->include_region_main_settings_in_header_actions();
// If the settings menu will be included in the header then don't add it here.
$regionmainsettingsmenu = $buildregionmainsettings ? $OUTPUT->region_main_settings_menu() : false;

if ($hasblocksbackground) {
    $extraclasses[] = 'hasblockbackground';
}
$bodyattributes = $OUTPUT->body_attributes($extraclasses);

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'intuitablebannerblocks' => $blocksbanner,
    'hasintuitablebannerblocks' => $hasblocksbanner,
    'intuitableheaderblocks' => $blocksheader,
    'hasintuitableheaderblocks' => $hasblocksheader,
    'intuitableintroblocks' => $blocksintro,
    'hasintuitableintroblocks' => $hasblocksintro,
    'intuitablemainblocks' => $blocksmain,
    'hasintuitablemainblocks' => $hasblocksmain,
    'intuitablefooterblocks' => $blocksfooter,
    'hasintuitablefooterblocks' => $hasblocksfooter,
    'bodyattributes' => $bodyattributes,
    'navdraweropen' => $navdraweropen,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'isadmin' => $isadmin,
    'headerlinkscontent' => $headerlinkscontent,
    'showpageheaderlogo' => $showpageheaderlogo,
    'headerlogo' => $headerlogo,
    'logoalt' => $logoalt,
    'sitelogo' => $sitelogo,
    'sitehome' => $CFG->wwwroot.'/my/',
    'sitehometext' => $sitehomelinktext,
    'mainnavigationcontent' => $mainnavigationcontent,
    'footercontent' => $footercontent,
    'footerlinkscontent' => $footerlinkscontent,
    'editing' => $editing,
    'adminsearch' => $adminsearch,
    'adminsearchurl' => $adminsearchurl,
    'mobilenavbar' => $mobilenavbar,
    'welcomemessagename' => $welcomemessagename,
    'modname' => $modname,
    'showincoursenav' => $showincoursenav,
    'showactivitynav' => $showactivitynav,
    'showquizheader' => $showquizheader,
    'minilogo' => $minilogo,
    'exitactivity' => $exitactivity,
    'exitactivityurl' => $exitactivityurl,
    'showquizexit' => $showquizexit
];

if ($showquizheader) {
   echo $OUTPUT->render_from_template('theme_intuitable/inquiz', $templatecontext); 
}
else {
   echo $OUTPUT->render_from_template('theme_intuitable/incourse', $templatecontext); 
}


