<?php
/**
 * Theme Intuitable - Header Links Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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
