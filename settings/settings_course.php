<?php
/**
 * Theme Intuitable - Course Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


   // Create course tab.
   $page = new admin_settingpage('theme_intuitable_course', get_string('coursesettings', 'theme_intuitable', null, true));

   // Settings title to group general settings together with a common heading and description.
   $name = 'theme_intuitable/courseheading';
   $title = get_string('courseheading', 'theme_intuitable', null, true);
   $description = get_string('courseheading_desc', 'theme_intuitable', null, true);
   $setting = new admin_setting_heading($name, $title, $description);
   $page->add($setting);

   // Site logo setting.
   $name = 'theme_intuitable/courseenrolbanner';
   $title = get_string('courseenrolbanner', 'theme_intuitable');
   $description = get_string('courseenrolbanner_desc', 'theme_intuitable');
   $setting = new admin_setting_configstoredfile($name, $title, $description, 'courseenrolbanner');
   $setting->set_updatedcallback('theme_intuitable_update_settings_images');
   $page->add($setting);

   $name = 'theme_intuitable/courseenrolbanneralt';
   $title = get_string('courseenrolbanneralt', 'theme_intuitable');
   $description = get_string('courseenrolbanneralt_desc', 'theme_intuitable');
   $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 200, 200);
   $setting->set_updatedcallback('theme_reset_all_caches');
   $page->add($setting);

   $settings->add($page);
