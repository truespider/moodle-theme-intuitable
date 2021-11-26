<?php
/**
 * Theme Intuitable - Vertical Navigation Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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

