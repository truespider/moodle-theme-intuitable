<?php
/**
 * Theme Intuitable - Header Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

    // Create header links tab.
    $page = new admin_settingpage('theme_intuitable_header', get_string('headersettings', 'theme_intuitable', null, true));

    // Settings title to group social link settings together with a common heading and description.
    $name = 'theme_intuitable/headerheading';
    $title = get_string('headerheading', 'theme_intuitable', null, true);
    $description = get_string('headerheading_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_heading($name, $title, $description);
    $page->add($setting);

    // Settings for the three header sizes - sm, md, lg
    // px values
    $name = 'theme_intuitable/headerheightsmall';
    $title = get_string('headerheightsmall', 'theme_intuitable', null, true);
    $description = get_string('headerheightsmall_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 10, 10);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerheightmedium';
    $title = get_string('headerheightmedium', 'theme_intuitable', null, true);
    $description = get_string('headerheightmedium_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 10, 10);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_intuitable/headerheightlarge';
    $title = get_string('headerheightlarge', 'theme_intuitable', null, true);
    $description = get_string('headerheightlarge_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 10, 10);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $choices = array('1' => 'sm', '2' => 'md', '3' => 'lg', '4' => 'auto');
    $name = 'theme_intuitable/dashboardheaderheightclass';
    $title = get_string('dashboardheaderheightclass', 'theme_intuitable', null, true);
    $description = get_string('dashboardheaderheightclass_desc', 'theme_intuitable', null, true);
    $setting = new admin_setting_configselect($name, $title, $description, '4', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Add tab to settings page.
    $settings->add($page);
