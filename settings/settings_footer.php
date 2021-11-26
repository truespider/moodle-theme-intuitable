<?php
/**
 * Theme Intuitable - Footer Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
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

