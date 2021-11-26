<?php
/**
 * Theme Intuitable - Typography Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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
