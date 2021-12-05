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
 * A two column layout for the boost theme.
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireile Pedder
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot.'/course/lib.php');
$bodyclasscoursecustom = '';
$headerlinkscontent = '';
$footercontent = '';
$footerlinkscontent = '';
$mainnavigationcontent = '';
$editing = ($PAGE->user_is_editing() ? true : false);
$adminsearch = get_string('adminsearch', 'theme_intuitable');
$adminsearchurl = $CFG->wwwroot.get_string('adminsearchurl', 'theme_intuitable');
$coursemetadata = theme_intuitable_get_course_metadata($COURSE->id);
$cohortfilter = '';
// $cohortfilter = html_writer::tag('div', theme_intuitable_get_cohort_filter(), array("class"=>'cohortfiler'));
$showpageheaderlogo = false;
$showrowcohort = false;
$sitelogo = '';
$headerlogo = '';
$logoalt = get_config('theme_intuitable', 'logoalt');
$sitehomelinktext = get_config('theme_intuitable', 'logositehomelinktext');
$minilogo = '';
$welcomemessagename = false;
$showsearchbox = ((empty($CFG->enableglobalsearch) || !has_capability('moodle/search:query', \context_system::instance())) ? false : true);
$mobilenavbar = empty($PAGE->layout_options['nomobilenavbar']);
$prefixmailto = get_string('prefixmailto', 'theme_intuitable');
$prefixtel = get_string('prefixtel', 'theme_intuitable');

$pageheights = array('1'=>'sm','2'=>'md','3'=>'lg');
foreach ($coursemetadata as $key => $val) {
    switch ($key) {
        case "coursepageheaderheight": array_key_exists($val,$pageheights) && $extraclasses[] = $key.$pageheights[$val]; break;
        case "customcategory" : 
        case "customsubcategory" : $extraclasses[] = $val; break;
        case "showpageheaderlogo" : $showpageheaderlogo = $val; break;
        case "hidetopiczero" : $extraclasses[] = 'hidetopiczero'; break;
        case "showbreadcrumb": break;
        case "showpagetitle": break;
        default: break;
    }
}

if (isloggedin() && $PAGE->pagelayout === 'mydashboard') {
    $dashboardheight = get_config('theme_intuitablechild', 'dashboardheaderheightclass');
    array_key_exists($dashboardheight,$pageheights) && $extraclasses[] = 'headerheight'.$pageheights[$dashboardheight];
    // $showpageheaderlogo = true;
    // $welcomemessagename = $USER->firstname;
}

if (is_siteadmin($USER)) {
    $showbreadcrumb = true;
}

if ($showpageheaderlogo) {
    $headerlogo = $this->page->theme->setting_file_url('logoheader', 'logoheader');
}

$minilogo = $this->page->theme->setting_file_url('logomini', 'logomini');
$sitelogo = $this->page->theme->setting_file_url('logosite', 'logosite');
// header links
for ( $headerlinks_i = 1 ; $headerlinks_i < 4 ; $headerlinks_i++) {
    $settingcontenttype = 0;
    $settingcontenturl = '';
    $settingoutput = '';
    $linkoutput = '';
    $settingcontenttext = get_config('theme_intuitable', 'headerlinktext'.$headerlinks_i);
    $contentclass = 'headerlink';
    if (! is_null($settingcontenttext)) {
        $settingcontenttype = get_config('theme_intuitable', 'headerlinkselect'.$headerlinks_i);
        $settingcontenturl = get_config('theme_intuitable', 'headerlink'.$headerlinks_i);
        if (strlen($settingcontenturl) !== 0) {
            switch ($settingcontenttype)  {
                // email
                case 0 :    $linkoutput = html_writer::tag('a', $settingcontenttext,['href' => 'mailto:'.$settingcontenturl]);
                            break;
                // tel
                case 1 :    $linkoutput = html_writer::tag('a', $settingcontenttext,['href' => 'tel:'.$settingcontenturl]);
                            break;
                // url
                case 2 :    $linkoutput = html_writer::tag('a', $settingcontenttext,['href' => $CFG->wwwroot.$settingcontenturl]);
                            break;
                default : 
                            break;
            }
            $settingoutput = html_writer::tag('li'
                                            , $linkoutput
                                            , ['class' => $contentclass]);
        }
        $headerlinkscontent .= $settingoutput;
    }
}

// all main nav items
// use course category to determine if active link
$linkactiveclass = '';
$categoryclass =  '';
$topcategoryclass =  '';
// get current page path : used to determine active link in main navigation
$currentpath = $PAGE->url->out_as_local_url();
// home page is my dashboard - set the actve class on home nav link 
if ($PAGE->pagelayout === 'mydashboard') {
    $categoryclass = 'home';
}
else if ($PAGE->category) {
    $arrcategory = explode("/",$PAGE->category->path);
    $topcategory = core_course_category::get($arrcategory[1]);
    $topcategoryclass = strtolower(preg_replace('/[^a-zA-Z0-9]/','',$topcategory->name));
    $categoryclass = strtolower(preg_replace('/[^a-zA-Z0-9]/','', $PAGE->category->name));
    $extraclasses[] = $categoryclass;
}

for ( $navlink_i = 1 ; $navlink_i < 7 ; $navlink_i++) {
    $settingcontent = '';
    $settingcontenturl = '';
    $settingicon = '';
    $settingiconoutput = '';
    $settingoutput = '';
    $settingcontent = get_config('theme_intuitable', 'navigationlink'.$navlink_i);
    // derive class from the link text, provide target for active link selector
    $settingcontentclass = strtolower(preg_replace('/[^a-zA-Z0-9]/','',$settingcontent));
    $linkactiveclass = '';
    $contentclass = 'nav-item '.$settingcontentclass.$linkactiveclass;
    $iconclass = 'nav-link-icon icon fa fa-fw fa-';
    if (! is_null($settingcontent)) {
        $settingcontenturl = get_config('theme_intuitable', 'navigationlinkurl'.$navlink_i);
        $settingicon = get_config('theme_intuitable', 'navigationlinkiconname'.$navlink_i);
        $iconclass .= $settingicon;
        if (strlen($settingcontenturl) !== 0) {
            if ($currentpath === $settingcontenturl || $topcategoryclass === $settingcontentclass) {
                $linkactiveclass = ' active';
            }
            $contentclass .= $linkactiveclass;
            $settingiconoutput = html_writer::tag('span', html_writer::tag('i', '', array('class' =>  $iconclass, 'aria-hidden' => 'true')), array('class' => 'nav-link-icon'));
            $settingtextoutput = html_writer::tag('span', $settingcontent, array('class' => 'nav-link-text'));
            $linkoutput = html_writer::tag('a', $settingiconoutput.$settingtextoutput
                                            ,['class' => 'nav-link', 'href' => $CFG->wwwroot.$settingcontenturl, 'title' => $settingcontent]);
            $settingoutput = html_writer::tag('li'
                                            , $linkoutput
                                            , ['class' => $contentclass]);
        }
        $mainnavigationcontent .= $settingoutput;
    }
}

// footer content 
for ( $footercontent_i = 1 ; $footercontent_i < 4 ; $footercontent_i++) {
    $settingcontenturl = '';
    $settingcontentbold = '';
    $settingoutput = '';
    $settingcontent = get_config('theme_intuitable', 'footercontent'.$footercontent_i);
    $contentclass = 'footercontentitem';
    if (! is_null($settingcontent)) {
        $settingcontenturl = get_config('theme_intuitable', 'footercontenturl'.$footercontent_i);
        $settingcontentbold = get_config('theme_intuitable', 'footercontentbold'.$footercontent_i);
        $contentclass .= ($settingcontentbold === 'yes' ? ' strong' : '');
        if (strlen($settingcontenturl) === 0) {
            $settingoutput = html_writer::tag('li'
                                            , $settingcontent
                                            , ['class' => $contentclass]);
        }
        else {
            $linkoutput = html_writer::tag('a', $settingcontent,['href' => $settingcontenturl]);
            $settingoutput = html_writer::tag('li'
                                              , $linkoutput
                                              ,['class' => $contentclass]);
        }
        $footercontent .= $settingoutput;
    }
}

// footer social links content
for ( $footerlink_i = 1 ; $footerlink_i < 5 ; $footerlink_i++) {
    $settingcontenturl = '';
    $settingicon = '';
    $settingiconoutput = '';
    $settingoutput = '';
    $settingcontent = get_config('theme_intuitable', 'footersociallink'.$footerlink_i);
    $contentclass = 'footersociallink';
    $iconclass = 'icon fa fa-fw fa-';
    if (! is_null($settingcontent)) {
        $settingcontenturl = get_config('theme_intuitable', 'footersociallinkurl'.$footerlink_i);
        $settingicon = get_config('theme_intuitable', 'footersociallinkiconname'.$footerlink_i);
        $iconclass .= $settingicon;
        if (strlen($settingcontenturl) !== 0) {
            $settingiconoutput = html_writer::tag('span', html_writer::tag('i', '', array('class' =>  $iconclass, 'aria-hidden' => 'true')), array('class' => 'media-left'));
            $linkoutput = html_writer::tag('a', $settingiconoutput
                                            ,['href' => $settingcontenturl, 'title' => $settingcontent]);
            $settingoutput = html_writer::tag('li'
                                            , $linkoutput
                                            , ['class' => $contentclass]);
        }
        $footerlinkscontent .= $settingoutput;
    }
}