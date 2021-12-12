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

   $link_max = 5;

   // Settings for the social links
   for ($link_i = 1; $link_i <= $link_max; $link_i++) :
      $name = 'theme_intuitable/footersociallink'.$link_i;
      $title = get_string('footersociallink'.$link_i, 'theme_intuitable', null, true);
      $description = get_string('footersociallink'.$link_i.'_desc', 'theme_intuitable', null, true);
      $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $page->add($setting);

      $name = 'theme_intuitable/footersociallinkiconname'.$link_i;
      $title = get_string('footersociallinkiconname'.$link_i, 'theme_intuitable', null, true);
      $description = get_string('footersociallinkiconname'.$link_i.'_desc', 'theme_intuitable', null, true);
      $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_TEXT, 25, 20);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $page->add($setting);

      $name = 'theme_intuitable/footersociallinkurl'.$link_i;
      $title = get_string('footersociallinkurl'.$link_i, 'theme_intuitable', null, true);
      $description = get_string('footersociallinkurl'.$link_i.'_desc', 'theme_intuitable', null, true);
      $setting = new admin_setting_configtext_with_maxlength($name, $title, $description, null, PARAM_URL, 60, 200);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $page->add($setting);
   endfor;

   // Add tab to settings page.
   $settings->add($page);

