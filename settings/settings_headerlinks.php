<?php
/**
 * Theme Intuitable - Header Links Settings file
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireille Pedder>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

   // Create header links tab.
   $page = new admin_settingpage('theme_intuitable_headerlinks', get_string('headerlinksettings', 'theme_intuitable', null, true));

   // Settings title to group social link settings together with a common heading and description.
   $name = 'theme_intuitable/headerlinksheading';
   $title = get_string('headerlinksheading', 'theme_intuitable', null, true);
   $description = get_string('headerlinksheading_desc', 'theme_intuitable', null, true);
   $setting = new admin_setting_heading($name, $title, $description);
   $page->add($setting);

   $headerlink_max = 3;
   // Settings for the social links
   for ($headerlink_i = 1; $headerlink_i <= $headerlink_max; $headerlink_i++) :
      $name = 'theme_intuitable/headerlink'.$headerlink_i;
      $title = get_string('headerlink'.$headerlink_i, 'theme_intuitable', null, true);
      $description = get_string('headerlink'.$headerlink_i.'_desc', 'theme_intuitable', null, true);
      $setting = new admin_setting_confightmleditor($name, $title, $description, null);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $page->add($setting);
   endfor;

   // Add tab to settings page.
   $settings->add($page);
