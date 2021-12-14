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
$string['choosereadme'] = 'Theme Intuitable is a child theme of Boost. It implements custom Intuitable layout and style.';                
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'Intuitable';                                                                                                    
// Intuitable block regions 
$string['region-background'] = 'Page background';                                                         
$string['region-header'] = 'Header';
$string['region-banner'] = 'Banner';
$string['region-intro'] = 'Intro';
$string['region-main'] = 'Main';
$string['region-side-pre'] = 'Side';
$string['region-footer'] = 'Footer';

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

$string['logoalt'] = 'Logo alt text';
$string['logoalt_desc'] = 'The text usde for the logo image alt text';

$string['logositehomelinktext'] = 'Site home link text';
$string['logositehomelinktext_desc'] = 'The tooltip / title for the main navigation site home link.';  

$string['logomini'] = 'Mini header logo';
$string['logomini_desc'] = 'The logo displayed on pages with minimal navigation, such as quiz pages.';

$string['backgroundimagelogin'] = 'Login page background';
$string['backgroundimagelogin_desc'] = 'The background image displayed on the login page. This background fills the browser window.';

$string['logologin'] = 'Login page logo';
$string['logologin_desc'] = 'The logo displayed on the login page above the login box.';

$string['logintitle'] = 'Log in to your account';
$string['forgotten'] = 'Forgotten your password?';

/* header */
$string['logosite'] = 'Sitewide logo';
$string['logosite_desc'] = 'The logo displayed in the main navigation sitewide after login.';

$string['headersettings'] = 'Header settings';
$string['headerheading'] = 'Header';
$string['headerheading_desc'] = 'The following settings are used to adjust the page header im conjunction with course custom settings.';

$string['headerheightsmall'] = 'Small header height';
$string['headerheightsmall_desc'] = 'The height in px for small headers on course pages.';
$string['headerheightmedium'] = 'Medium header height';
$string['headerheightmedium_desc'] = 'The height in px for medium headers on course pages.';
$string['headerheightlarge'] = 'Large header height';
$string['headerheightlarge_desc'] = 'The height in px for large headers on course pages.';
$string['dashboardheaderheightclass'] = 'Dashboard header height class';
$string['dashboardheaderheightclass_desc'] = 'The class set on dashboard to apply the required height.';

/* header links */
$string['headerlinksettings'] = 'Header links settings';
$string['headerlinksheading'] = 'Header links';
$string['headerlinksheading_desc'] = 'The following settings define the links which are rendered at the top of each page sitewide.';

$string['headerlink1'] = 'Header link 1';
$string['headerlink1_desc'] = 'The first link in the header: email address, phone number or url';

$string['headerlink2'] = 'Header link 2';
$string['headerlink2_desc'] = 'The second link in the header: email address, phone number or url';

$string['headerlink3'] = 'Header link 3';
$string['headerlink3_desc'] = 'The third link in the header: email address, phone number or url';

/* custom navigation */
$string['navigationsettings'] = 'Vertical navigation settings';
$string['navigationheading'] = 'Navigation setings';
$string['navigationheading_desc'] = 'The following settings define the vertical navigation which is displayed site wide, at the top for mobile or on the left for tablet and desktop. Up to 6 settings can be defined.';

$string['navigationlink1'] = 'Vertical navigation 1';
$string['navigationlink1_desc'] = 'Name of the first link in the main navigation.';
$string['navigationlinkiconname1'] = 'Vertical link 1 icon';
$string['navigationlinkiconname1_desc'] = 'Font Awesome icon name displayed for the first navigation link.';
$string['navigationlinkurl1'] = 'Vertical link 1 url';
$string['navigationlinkurl1_desc'] = 'The url for the first navigation link.';

$string['navigationlink2'] = 'Vertical navigation 2';
$string['navigationlink2_desc'] = 'Name of the second link in the main navigation.';
$string['navigationlinkiconname2'] = 'Vertical link 2 icon';
$string['navigationlinkiconname2_desc'] = 'Font Awesome icon name displayed for the second navigation link.';
$string['navigationlinkurl2'] = 'Vertical link 2 url';
$string['navigationlinkurl2_desc'] = 'The url for the second navigation link.';

$string['navigationlink3'] = 'Vertical navigation 3';
$string['navigationlink3_desc'] = 'Name of the third link in the main navigation.';
$string['navigationlinkiconname3'] = 'Vertical link 3 icon';
$string['navigationlinkiconname3_desc'] = 'Font Awesome icon name displayed for the third navigation link.';
$string['navigationlinkurl3'] = 'Vertical link 3 url';
$string['navigationlinkurl3_desc'] = 'The url for the third navigation link.';

$string['navigationlink4'] = 'Vertical navigation 4';
$string['navigationlink4_desc'] = 'Name of the fourth link in the main navigation.';
$string['navigationlinkiconname4'] = 'Vertical link 4 icon';
$string['navigationlinkiconname4_desc'] = 'Font Awesome icon name displayed for the fourth navigation link.';
$string['navigationlinkurl4'] = 'Vertical link 4 url';
$string['navigationlinkurl4_desc'] = 'The url for the fourth navigation link.';

$string['navigationlink5'] = 'Vertical navigation 5';
$string['navigationlink5_desc'] = 'Name of the fifth link in the main navigation.';
$string['navigationlinkiconname5'] = 'Vertical link 5 icon';
$string['navigationlinkiconname5_desc'] = 'Font Awesome icon name displayed for the fifth navigation link.';
$string['navigationlinkurl5'] = 'Vertical link 5 url';
$string['navigationlinkurl5_desc'] = 'The url for the fifth navigation link.';

$string['navigationlink6'] = 'Vertical navigation 6';
$string['navigationlink6_desc'] = 'Name of the sixth link in the main navigation.';
$string['navigationlinkiconname6'] = 'Vertical link 6 icon';
$string['navigationlinkiconname6_desc'] = 'Font Awesome icon name displayed for the sixth navigation link.';
$string['navigationlinkurl6'] = 'Vertical link 6 url';
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
$string['footercontent1_desc'] = 'First text item displayed at foot of each page.';
$string['footercontenturl1'] = 'Footer content 1 url';
$string['footercontenturl1_desc'] = 'URL if this item is a link.';
$string['footercontentweight1'] = 'Font weight';
$string['footercontentweight1_desc'] = 'The font weight for the first footer item.';

$string['footercontent2'] = 'Footer content 2';
$string['footercontent2_desc'] = 'Second text item displayed at foot of each page.';
$string['footercontenturl2'] = 'Footer content 2 url';
$string['footercontenturl2_desc'] = 'URL if this item is a link.';
$string['footercontentweight2'] = 'Font weight';
$string['footercontentweight2_desc'] = 'The font weight for the second footer item';

$string['footercontent3'] = 'Footer content 3';
$string['footercontent3_desc'] = 'Third text item displayed at foot of each page.';
$string['footercontenturl3'] = 'Footer content 3 url';
$string['footercontenturl3_desc'] = 'URL if this item is a link.';
$string['footercontentweight3'] = 'Font weight';
$string['footercontentweight3_desc'] = 'The font weight for the third footer item.';

/* footer social links */
$string['footersociallinksettings'] = 'Footer social links settings';
$string['footersociallinksheading'] = 'Social links';
$string['footercontenturl1'] = 'Footer content 1 url';
$string['footercontenturl1_desc'] = 'URL if this item is a link: if this setting is used the text is displayed underlined.';
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

$string['footersociallink5'] = 'Social link 5';
$string['footersociallink5_desc'] = 'Name of the fifth social link in the footer.';
$string['footersociallinkiconname5'] = 'Social link 5 icon';
$string['footersociallinkiconname5_desc'] = 'Font Awesome icon name displayed for the fifth social link.';
$string['footersociallinkurl5'] = 'Social link 5 url';
$string['footersociallinkurl5_desc'] = 'The url for the fifth social link.';

// Branding settings
$string['configtitlebranding'] = 'Branding settings';

/* general settings */
$string['typographysettings'] = 'Typography settings';
$string['fontsheading'] = 'Fonts';
$string['fontsheading_desc'] = 'The following settings are used to define the fonts.';

$string['bodyfont'] = 'Body text font family';
$string['bodyfont_desc'] = 'The default font family for text content throughout the site.';

$string['h1font'] = 'Heading 1 font family';
$string['h1font_desc'] = 'The default font family for Heading 1 elements';

$string['h2font'] = 'Heading 2 font family';
$string['h2font_desc'] = 'The default font family for Heading 2 elements';

$string['h3font'] = 'Heading 3 font family';
$string['h3font_desc'] = 'The default font family for Heading 3 elements';

$string['h4font'] = 'Heading 4 font family';
$string['h4font_desc'] = 'The default font family for Heading 4 elements';

$string['h5font'] = 'Heading 5 font family';
$string['h5font_desc'] = 'The default font family for Heading 5 elements';

$string['h6font'] = 'Heading 6 font family';
$string['h6font_desc'] = 'The default font family for Heading 6 elements';

$string['openmenu'] = 'Open menu';
$string['closemenu'] = 'Close menu';

$string['welcomeuser'] = 'Welcome back, {$a}';

$string['prefixmailto'] = 'Email:';
$string['prefixtel'] = 'Call:';

/* activity , quiz */
$string['endtest'] = 'Finish attempt';
$string['exitactivity'] = 'Exit {$a}';

// type of link
$string['mailto'] = 'Link with email address';
$string['tel'] = 'Link with telephone number';
$string['url'] = 'Link with url';

