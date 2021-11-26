<?php
/**
 * Theme Intuitable - General Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


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
