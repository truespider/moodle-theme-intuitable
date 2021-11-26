<?php
/**
 * Theme Intuitable - Breadcrumb Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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
