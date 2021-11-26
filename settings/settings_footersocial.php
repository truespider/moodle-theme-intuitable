<?php
/**
 * Theme Intuitable - Footer Social Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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

