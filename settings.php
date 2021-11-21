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

    // Create general tab.
    $page = new admin_settingpage('theme_intuitable_general', get_string('generalsettings', 'theme_intuitable', null, true));

    // Settings title to group general settings together with a common heading and description.
    $name = 'theme_intuitable/imagesheading';
    $title = get_string('imagesheading', 'theme_intuitable', null, true);
    $description = get_string('imagesheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);

    // Site logo setting.
    $name = 'theme_intuitable/logosite';
    $title = get_string('logosite', 'theme_intuitable');
    $description = get_string('logosite_desc', 'theme_intuitable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logosite');
    $setting->set_updatedcallback('theme_intuitable_update_settings_images');
    $page->add($setting);
    
    $name = 'theme_intuitable/logoalt';
    $title = get_string('logoalt', 'theme_intuitable');
    $description = get_string('logoalt_desc', 'theme_intuitable');
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 40, 40);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_intuitable/logositehomelinktext';
    $title = get_string('logositehomelinktext', 'theme_intuitable');
    $description = get_string('logositehomelinktext_desc', 'theme_intuitable');
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 40, 40);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Header logo setting.
    $name = 'theme_intuitable/logoheader';
    $title = get_string('logoheader', 'theme_intuitable');
    $description = get_string('logoheader_desc', 'theme_intuitable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logoheader');
    $setting->set_updatedcallback('theme_intuitable_update_settings_images');
    $page->add($setting);
    
    // Mini logo setting.
    $name = 'theme_intuitable/logomini';
    $title = get_string('logomini', 'theme_intuitable');
    $description = get_string('logomini_desc', 'theme_intuitable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logomini');
    $setting->set_updatedcallback('theme_intuitable_update_settings_images');
    $page->add($setting);
    
    // Login background image setting.
    $name = 'theme_intuitable/backgroundimagelogin';
    $title = get_string('backgroundimagelogin', 'theme_intuitable');
    $description = get_string('backgroundimagelogin_desc', 'theme_intuitable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimagelogin');
    $setting->set_updatedcallback('theme_intuitable_update_settings_images');
    $page->add($setting);
    
    // Login logo setting.
    $name = 'theme_intuitable/logologin';
    $title = get_string('logologin', 'theme_intuitable');
    $description = get_string('logologin_desc', 'theme_intuitable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logologin');
    $setting->set_updatedcallback('theme_intuitable_update_settings_images');
    $page->add($setting);
        
    // Add tab to settings page.
    $settings->add($page);

    $headerlinkselectoptions = array(
        0 => get_string('mailto', 'theme_intuitable'), 
        1 => get_string('tel', 'theme_intuitable'), 
        2 => get_string('url', 'theme_intuitable'));

    // Create header links tab.
    $page = new admin_settingpage('theme_intuitable_headerlinks', get_string('headerlinksettings', 'theme_intuitable', null, true));

    // Settings title to group social link settings together with a common heading and description.
    $name = 'theme_intuitable/headerlinksheading';
    $title = get_string('headerlinksheading', 'theme_intuitable', null, true);
    $description = get_string('headerlinksheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);

    // Settings for the three header links
    $name = 'theme_intuitable/headerlinktext1';
    $title = get_string('headerlinktext1', 'theme_intuitable', null, true);
    $description = get_string('headerlinktext1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 40, 40);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlinkselect1';
    $title = get_string('headerlinkselect1', 'theme_intuitable', null, true);
    $description = get_string('headerlinkselect1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configselect($name, $title, $description,  1, $headerlinkselectoptions);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlink1';
    $title = get_string('headerlink1', 'theme_intuitable', null, true);
    $description = get_string('headerlink1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlinktext2';
    $title = get_string('headerlinktext2', 'theme_intuitable', null, true);
    $description = get_string('headerlinktext2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 40, 40);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlinkselect2';
    $title = get_string('headerlinkselect2', 'theme_intuitable', null, true);
    $description = get_string('headerlinkselect2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configselect($name, $title, $description,  0, $headerlinkselectoptions);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlink2';
    $title = get_string('headerlink2', 'theme_intuitable', null, true);
    $description = get_string('headerlink2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlinktext3';
    $title = get_string('headerlinktext3', 'theme_intuitable', null, true);
    $description = get_string('headerlinktext2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 40, 40);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlinkselect3';
    $title = get_string('headerlinkselect3', 'theme_intuitable', null, true);
    $description = get_string('headerlinkselect3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configselect($name, $title, $description,  2, $headerlinkselectoptions);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerlink3';
    $title = get_string('headerlink3', 'theme_intuitable', null, true);
    $description = get_string('headerlink3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Add tab to settings page.
    $settings->add($page);

    // Create main navigation content tab.
    $page = new admin_settingpage('theme_intuitable_mainnavigation', get_string('navigationsettings', 'theme_intuitable', null, true));

    // Settings title to group social link settings together with a common heading and description.
    $name = 'theme_intuitable/navigationheading';
    $title = get_string('navigationheading', 'theme_intuitable', null, true);
    $description = get_string('navigationheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);

    // Settings for the six main navigation items
    $name = 'theme_intuitable/navigationlink1';
    $title = get_string('navigationlink1', 'theme_intuitable', null, true);
    $description = get_string('navigationlink1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkiconname1';
    $title = get_string('navigationlinkiconname1', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkiconname1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkurl1';
    $title = get_string('navigationlinkurl1', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkurl1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlink2';
    $title = get_string('navigationlink2', 'theme_intuitable', null, true);
    $description = get_string('navigationlink2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkiconname2';
    $title = get_string('navigationlinkiconname2', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkiconname2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkurl2';
    $title = get_string('navigationlinkurl2', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkurl2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlink3';
    $title = get_string('navigationlink3', 'theme_intuitable', null, true);
    $description = get_string('navigationlink3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkiconname3';
    $title = get_string('navigationlinkiconname3', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkiconname3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkurl3';
    $title = get_string('navigationlinkurl3', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkurl3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlink4';
    $title = get_string('navigationlink4', 'theme_intuitable', null, true);
    $description = get_string('navigationlink4_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkiconname4';
    $title = get_string('navigationlinkiconname4', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkiconname4_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkurl4';
    $title = get_string('navigationlinkurl4', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkurl4_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlink5';
    $title = get_string('navigationlink5', 'theme_intuitable', null, true);
    $description = get_string('navigationlink5_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkiconname5';
    $title = get_string('navigationlinkiconname5', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkiconname5_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkurl5';
    $title = get_string('navigationlinkurl5', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkurl5_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlink6';
    $title = get_string('navigationlink6', 'theme_intuitable', null, true);
    $description = get_string('navigationlink6_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkiconname6';
    $title = get_string('navigationlinkiconname6', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkiconname6_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/navigationlinkurl6';
    $title = get_string('navigationlinkurl6', 'theme_intuitable', null, true);
    $description = get_string('navigationlinkurl6_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Add tab to settings page.
    $settings->add($page);

    // Create breadcrumb content tab.
    $page = new admin_settingpage('theme_intuitable_breadcrumb', get_string('breadcrumbsettings', 'theme_intuitable', null, true));

    // Settings title and description.
    $name = 'theme_intuitable/breadcrumbheading';
    $title = get_string('breadcrumbheading', 'theme_intuitable', null, true);
    $description = get_string('breadcrumbheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);

    $name = 'theme_intuitable/breadcrumbtext';
    $title = get_string('breadcrumbtext', 'theme_intuitable', null, true);
    $description = get_string('breadcrumbtext_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/breadcrumburlpath';
    $title = get_string('breadcrumburlpath', 'theme_intuitable', null, true);
    $description = get_string('breadcrumburlpath_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/breadcrumburlparam';
    $title = get_string('breadcrumburlparam', 'theme_intuitable', null, true);
    $description = get_string('breadcrumburlparam_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_INT, 4, 6);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Add tab to settings page.
    $settings->add($page);

    // Create footer content tab.
    $page = new admin_settingpage('theme_intuitable_footercontent', get_string('footercontentsettings', 'theme_intuitable', null, true));

    // Settings title to group social link settings together with a common heading and description.
    $name = 'theme_intuitable/footercontentheading';
    $title = get_string('footercontentheading', 'theme_intuitable', null, true);
    $description = get_string('footercontentheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);

    // Settings for the three footer content items
    $name = 'theme_intuitable/footercontent1';
    $title = get_string('footercontent1', 'theme_intuitable', null, true);
    $description = get_string('footercontent1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 155, 150);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footercontenturl1';
    $title = get_string('footercontenturl1', 'theme_intuitable', null, true);
    $description = get_string('footercontenturl1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footercontentbold1';
    $title = get_string('footercontentbold1', 'theme_intuitable', null, true);
    $description = get_string('footercontentbold1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description,  'yes', 'yes', 'no');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footercontent2';
    $title = get_string('footercontent2', 'theme_intuitable', null, true);
    $description = get_string('footercontent2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 155, 150);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footercontentbold2';
    $title = get_string('footercontentbold2', 'theme_intuitable', null, true);
    $description = get_string('footercontentbold2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description,  'yes', 'yes', 'no');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footercontent3';
    $title = get_string('footercontent3', 'theme_intuitable', null, true);
    $description = get_string('footercontent3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 155, 150);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_intuitable/footercontentbold3';
    $title = get_string('footercontentbold3', 'theme_intuitable', null, true);
    $description = get_string('footercontentbold3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description,  'no', 'yes', 'no');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Add tab to settings page.
    $settings->add($page);

    // Create footer social links tab.
    $page = new admin_settingpage('theme_intuitable_footersociallinks', get_string('footersociallinksettings', 'theme_intuitable', null, true));

    // Settings title to group social link settings together with a common heading and description.
    $name = 'theme_intuitable/footersociallinksheading';
    $title = get_string('footersociallinksheading', 'theme_intuitable', null, true);
    $description = get_string('footersociallinksheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);

    // Settings for the four social links
    $name = 'theme_intuitable/footersociallink1';
    $title = get_string('footersociallink1', 'theme_intuitable', null, true);
    $description = get_string('footersociallink1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkiconname1';
    $title = get_string('footersociallinkiconname1', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkiconname1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkurl1';
    $title = get_string('footersociallinkurl1', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkurl1_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallink2';
    $title = get_string('footersociallink2', 'theme_intuitable', null, true);
    $description = get_string('footersociallink2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkiconname2';
    $title = get_string('footersociallinkiconname2', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkiconname2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkurl2';
    $title = get_string('footersociallinkurl2', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkurl2_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallink3';
    $title = get_string('footersociallink3', 'theme_intuitable', null, true);
    $description = get_string('footersociallink3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkiconname3';
    $title = get_string('footersociallinkiconname3', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkiconname3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkurl3';
    $title = get_string('footersociallinkurl3', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkurl3_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallink4';
    $title = get_string('footersociallink4', 'theme_intuitable', null, true);
    $description = get_string('footersociallink4_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkiconname4';
    $title = get_string('footersociallinkiconname4', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkiconname4_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/footersociallinkurl4';
    $title = get_string('footersociallinkurl4', 'theme_intuitable', null, true);
    $description = get_string('footersociallinkurl4_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Add tab to settings page.
    $settings->add($page);

   // Create typography tab.
    $page = new admin_settingpage('theme_intuitable_typography', get_string('typographysettings', 'theme_intuitable', null, true));

    // Settings title to group typography settings together with a common heading and description.
    $name = 'theme_intuitable/fontsheading';
    $title = get_string('fontsheading', 'theme_intuitable', null, true);
    $description = get_string('fontsheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);


    $name = 'theme_intuitable/bodyfont';
    $title = get_string('bodyfont', 'theme_intuitable', null, true);
    $description = get_string('bodyfont_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 155, 150);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/h1font';
    $title = get_string('h1font', 'theme_intuitable', null, true);
    $description = get_string('h1font_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 155, 150);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Add tab to settings page.
    $settings->add($page);
}
