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

   $footercontent_max = 3;

   // Settings for the social links
   for ($footercontent_i = 1; $footercontent_i <= $footercontent_max; $footercontent_i++) :
      $name = 'theme_intuitable/footercontent'.$footercontent_i;
      $title = get_string('footercontent'.$footercontent_i, 'theme_intuitable', null, true);
      $description = get_string('footercontent'.$footercontent_i.'_desc', 'theme_intuitable', null, true);
      $setting = new admin_setting_confightmleditor($name, $title, $description, null);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $page->add($setting);

      // $name = 'theme_intuitable/footercontenturl'.$footercontent_i;
      // $title = get_string('footercontenturl'.$footercontent_i, 'theme_intuitable', null, true);
      // $description = get_string('footercontenturl'.$footercontent_i.'_desc', 'theme_intuitable', null, true);
      // $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
      // $setting->set_updatedcallback('theme_reset_all_caches');
      // $page->add($setting);

      // $name = 'theme_intuitable/footercontentweight'.$footercontent_i;
      // $title = get_string('footercontentweight'.$footercontent_i, 'theme_intuitable', null, true);
      // $description = get_string('footercontentweight'.$footercontent_i.'_desc', 'theme_intuitable', null, true);
      // $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 10, 10);
      // $setting->set_updatedcallback('theme_reset_all_caches');
      // $page->add($setting);
   endfor;

   // Add tab to settings page.
   $settings->add($page);

