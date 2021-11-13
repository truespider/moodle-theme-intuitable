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
 * Language file.
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireile Pedder
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
 
// A description shown in the admin theme selector.                                                                                 
$string['choosereadme'] = 'Theme intuitable is a child theme of Boost. It implements custom Intuitable layout and style.';                
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'Intuitable';                                                                                                    
// Intuitable block regions 
$string['region-intuitable-background'] = 'Page background';                                                         
$string['region-intuitable-header'] = 'Header';
$string['region-intuitable-banner'] = 'Banner';
$string['region-intuitable-intro'] = 'Intro';
$string['region-intuitable-main'] = 'Main';
$string['region-side-pre'] = 'Side';
$string['region-intuitable-footer'] = 'Footer';

$string['adminsearch'] = 'Admin';
$string['adminsearchurl'] = '/admin/search.php/';

// SETTINGS.
$string['configtitle'] = 'Intuitable settings';

/* general settings */
$string['generalsettings'] = 'General settings';
$string['imagesheading'] = 'Images';
$string['imagesheading_desc'] = 'The following settings are used to upload graphics which are used as background images or banners on various site pages.';

$string['logoheader'] = 'Header logo';
$string['logoheader_desc'] = 'The logo displayed in the header on home page, dashboard and pages with course page header logo enabled.';

$string['logosite'] = 'Sitewide logo';
$string['logosite_desc'] = 'The logo displayed in the main navigation sitewide after login.';

$string['logomini'] = 'Mini header logo';
$string['logomini_desc'] = 'The logo displayed on pages with minimal navigation, such as quiz pages.';

$string['backgroundimagelogin'] = 'Login page background';
$string['backgroundimagelogin_desc'] = 'The background image displayed on the login page. This background fills the browser window.';

$string['logologin'] = 'Login page logo';
$string['logologin_desc'] = 'The logo displayed on the login page above the login box.';

$string['logintitle'] = 'Log in to your account';
$string['forgotten'] = 'Forgotten your password?';

/* header links */
$string['logosite'] = 'Sitewide logo';
$string['logosite_desc'] = 'The logo displayed in the main navigation sitewide after login.';


$string['headerlinksettings'] = 'Header links settings';
$string['headerlinksheading'] = 'Header links';
$string['headerlinksheading_desc'] = 'The following settings define the links which are rendered at the top of each page sitewide.';

$string['headerlink1'] = 'Header link 1';
$string['headerlink1_desc'] = 'Name of the first link in the page header.';
$string['headerlinkurl1'] = 'Header link 1 url';
$string['headerlinkurl1_desc'] = 'The url for the first link in the header.';
$string['headerlinktel1'] = 'Telephone link?';
$string['headerlinktel1_desc'] = 'Check this to display a phone number link';
$string['headerlinkmailto1'] = 'Email?';
$string['headerlinkmailto1_desc'] = 'Check this to display an email link';

$string['headerlink2'] = 'Header link 2';
$string['headerlink2_desc'] = 'Name of the second link in the page header.';
$string['headerlinkurl2'] = 'Header link 2 url';
$string['headerlinkurl2_desc'] = 'The url for the second link in the header.';
$string['headerlinktel2'] = 'Telephone link?';
$string['headerlinktel2_desc'] = 'Check this to display a phone number link';
$string['headerlinkmailto2'] = 'Email?';
$string['headerlinkmailto2_desc'] = 'Check this to display an email link';

$string['headerlink3'] = 'Header link 3';
$string['headerlink3_desc'] = 'Name of the third link in the page header.';
$string['headerlinkurl3'] = 'Header link 3 url';
$string['headerlinkurl3_desc'] = 'The url for the third link in the header.';
$string['headerlinktel3'] = 'Telephone link?';
$string['headerlinktel3_desc'] = 'Check this to display a phone number link';
$string['headerlinkmailto3'] = 'Email?';
$string['headerlinkmailto3_desc'] = 'Check this to display an email link';

/* custom navigation */
$string['navigationsettings'] = 'Main navigation settings';
$string['navigationheading'] = 'Navigation setings';
$string['navigationheading_desc'] = 'The following settings define the main menu navigation which is displayed site wide, at the top for mobile or on the left for tablet and desktop. Up to 6 settings can be defined.';

$string['navigationlink1'] = 'Main navigation 1';
$string['navigationlink1_desc'] = 'Name of the first link in the main navigation.';
$string['navigationlinkiconname1'] = 'Navigation link 1 icon';
$string['navigationlinkiconname1_desc'] = 'Font Awesome icon name displayed for the first navigation link.';
$string['navigationlinkurl1'] = 'Navigation link 1 url';
$string['navigationlinkurl1_desc'] = 'The url for the first navigation link.';

$string['navigationlink2'] = 'Main navigation 2';
$string['navigationlink2_desc'] = 'Name of the second link in the main navigation.';
$string['navigationlinkiconname2'] = 'Navigation link 2 icon';
$string['navigationlinkiconname2_desc'] = 'Font Awesome icon name displayed for the second navigation link.';
$string['navigationlinkurl2'] = 'Navigation link 2 url';
$string['navigationlinkurl2_desc'] = 'The url for the second navigation link.';

$string['navigationlink3'] = 'Main navigation 3';
$string['navigationlink3_desc'] = 'Name of the third link in the main navigation.';
$string['navigationlinkiconname3'] = 'Navigation link 3 icon';
$string['navigationlinkiconname3_desc'] = 'Font Awesome icon name displayed for the third navigation link.';
$string['navigationlinkurl3'] = 'Navigation link 3 url';
$string['navigationlinkurl3_desc'] = 'The url for the third navigation link.';

$string['navigationlink4'] = 'Main navigation 4';
$string['navigationlink4_desc'] = 'Name of the fourth link in the main navigation.';
$string['navigationlinkiconname4'] = 'Navigation link 4 icon';
$string['navigationlinkiconname4_desc'] = 'Font Awesome icon name displayed for the fourth navigation link.';
$string['navigationlinkurl4'] = 'Navigation link 4 url';
$string['navigationlinkurl4_desc'] = 'The url for the fourth navigation link.';

$string['navigationlink5'] = 'Main navigation 5';
$string['navigationlink5_desc'] = 'Name of the fifth link in the main navigation.';
$string['navigationlinkiconname5'] = 'Navigation link 5 icon';
$string['navigationlinkiconname5_desc'] = 'Font Awesome icon name displayed for the fifth navigation link.';
$string['navigationlinkurl5'] = 'Navigation link 5 url';
$string['navigationlinkurl5_desc'] = 'The url for the fifth navigation link.';

$string['navigationlink6'] = 'Main navigation 6';
$string['navigationlink6_desc'] = 'Name of the sixth link in the main navigation.';
$string['navigationlinkiconname6'] = 'Navigation link 6 icon';
$string['navigationlinkiconname6_desc'] = 'Font Awesome icon name displayed for the sixth navigation link.';
$string['navigationlinkurl6'] = 'Navigation link 6 url';
$string['navigationlinkurl6_desc'] = 'The url for the sixth navigation link.';

/* breadcrumb settings */
$string['breadcrumbsettings'] = 'Breadcrumb settings';

$string['breadcrumbheading'] = 'Breadcrumb custom links';
$string['breadcrumbheading_desc'] = 'These settings provide custom text and links in the breadcrumb';

$string['breadcrumbtext'] = 'Breadcrumb text';
$string['breadcrumbtext_desc'] = 'This text replaces the standard Moodle Courses item in the breadcrumb.';
$string['breadcrumburlpath'] = 'Breadcrumb url path';
$string['breadcrumburlpath_desc'] = 'This url path replaces the standard Moodle Courses url path in the breadcrumb.';
$string['breadcrumburlparam'] = 'Breadcrumb url param';
$string['breadcrumburlparam_desc'] = 'This is the course id used to build the moodle url.';

/* footer content */
$string['footercontentsettings'] = 'Footer content settings';
$string['footercontentheading'] = 'Footer content';
$string['footercontentheading_desc'] = 'The following settings define the text content which to be displayed at the foot of each page sitewide.';

$string['footercontent1'] = 'Footer content 1';
$string['footercontent1_desc'] = 'First line of text displayed at foot of each page.';
$string['footercontenturl1'] = 'Footer content 1 url';
$string['footercontenturl1_desc'] = 'URL if this item is a link: if this setting is used the text is displayed underlined.';
$string['footercontentbold1'] = 'Bold?';
$string['footercontentbold1_desc'] = 'Check if this text to be displayed with bold font.';

$string['footercontent2'] = 'Footer content 2';
$string['footercontent2_desc'] = 'Second line of text displayed at foot of each page.';
$string['footercontentbold2'] = 'Bold?';
$string['footercontentbold2_desc'] = 'Check if this text to be displayed with bold font.';

$string['footercontent3'] = 'Footer content 3';
$string['footercontent3_desc'] = 'Third line of text displayed at foot of each page.';
$string['footercontentbold3'] = 'Bold?';
$string['footercontentbold3_desc'] = 'Check if this text to be displayed with bold font.';

/* footer social links */
$string['footersociallinksettings'] = 'Footer social links settings';
$string['footersociallinksheading'] = 'Social links';
$string['footersociallinksheading_desc'] = 'The following settings define the social links which are rendered at the foot of each page sitewide.';

$string['footersociallink1'] = 'Social link 1';
$string['footersociallink1_desc'] = 'Name of the first social link in the footer.';
$string['footersociallinkiconname1'] = 'Social link 1 icon';
$string['footersociallinkiconname1_desc'] = 'Font Awesome icon name displayed for the first social link.';
$string['footersociallinkurl1'] = 'Social link 1 url';
$string['footersociallinkurl1_desc'] = 'The url for the first social link.';

$string['footersociallink2'] = 'Social link 2';
$string['footersociallink2_desc'] = 'Name of the second social link in the footer.';
$string['footersociallinkiconname2'] = 'Social link 2 icon';
$string['footersociallinkiconname2_desc'] = 'Font Awesome icon name displayed for the second social link.';
$string['footersociallinkurl2'] = 'Social link 2 url';
$string['footersociallinkurl2_desc'] = 'The url for the second social link.';

$string['footersociallink3'] = 'Social link 3';
$string['footersociallink3_desc'] = 'Name of the third social link in the footer.';
$string['footersociallinkiconname3'] = 'Social link 3 icon';
$string['footersociallinkiconname3_desc'] = 'Font Awesome icon name displayed for the third social link.';
$string['footersociallinkurl3'] = 'Social link 3 url';
$string['footersociallinkurl3_desc'] = 'The url for the third social link.';

$string['footersociallink4'] = 'Social link 4';
$string['footersociallink4_desc'] = 'Name of the fourth social link in the footer.';
$string['footersociallinkiconname4'] = 'Social link 4 icon';
$string['footersociallinkiconname4_desc'] = 'Font Awesome icon name displayed for the fourth social link.';
$string['footersociallinkurl4'] = 'Social link 4 url';
$string['footersociallinkurl4_desc'] = 'The url for the fourth social link.';

$string['openmenu'] = 'Open menu';
$string['closemenu'] = 'Close menu';

$string['welcomeuser'] = 'Welcome back, {$a}';

$string['prefixmailto'] = 'Email:';
$string['prefixtel'] = 'Call:';

/* activity , quiz */
$string['endtest'] = 'Finish attempt';
$string['exitactivity'] = 'Exit {$a}';