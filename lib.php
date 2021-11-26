<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * lib file.
 *
 * @package    theme_intuitable
 * @copyright  2021 Mireile Pedder
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

/**
 * Copy the updated theme image to the correct location in dataroot for the image to be served
 * by /theme/image.php. Also clear theme caches.
 *
 * @param $settingname
 */
function theme_intuitable_update_settings_images($settingname) {
    global $CFG;

    // The setting name that was updated comes as a string like 's_theme_intuitable_loginbackgroundimage'.
    // We split it on '_' characters.
    $parts = explode('_', $settingname);
    // And get the last one to get the setting name..
    $settingname = end($parts);

    // Admin settings are stored in system context.
    $syscontext = context_system::instance();
    // This is the component name the setting is stored in.
    $component = 'theme_intuitable';

    // This is the value of the admin setting which is the filename of the uploaded file.
    $filename = get_config($component, $settingname);
    // We extract the file extension because we want to preserve it.
    $extension = substr($filename, strrpos($filename, '.') + 1);

    // This is the path in the moodle internal file system.
    $fullpath = "/{$syscontext->id}/{$component}/{$settingname}/0{$filename}";

    // This location matches the searched for location in theme_config::resolve_image_location.
    $pathname = $CFG->dataroot . '/pix_plugins/theme/intuitable/' . $settingname . '.' . $extension;

    // This pattern matches any previous files with maybe different file extensions.
    $pathpattern = $CFG->dataroot . '/pix_plugins/theme/intuitable/' . $settingname . '.*';

    // Make sure this dir exists.
    @mkdir($CFG->dataroot . '/pix_plugins/theme/intuitable/', $CFG->directorypermissions, true);

    // Delete any existing files for this setting.
    foreach (glob($pathpattern) as $filename) {
        @unlink($filename);
    }

    // Get an instance of the moodle file storage.
    $fs = get_file_storage();
    // This is an efficient way to get a file if we know the exact path.
    if ($file = $fs->get_file_by_hash(sha1($fullpath))) {
        // We got the stored file - copy it to dataroot.
        $file->copy_content_to($pathname);
    }

    // Reset theme caches.
    theme_reset_all_caches();
}

/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_intuitable_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
    $fs = get_file_storage();

    $context = context_system::instance();
    if ($filename == 'default.scss') {
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    } else if ($filename == 'plain.scss') {
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/plain.scss');

    } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_intuitable', 'preset', 0, '/', $filename))) {
        // This preset file was fetched from the file area for theme_intuitable and not theme_boost (see the line above).
        $scss .= $presetfile->get_content();
    } else {
        // Safety fallback - maybe new installs etc.
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    }

    // Pre CSS - this is loaded AFTER any prescss from the setting but before the main scss.
    $pre = file_get_contents($CFG->dirroot . '/theme/intuitable/scss/pre.scss');
    // Post CSS - this is loaded AFTER the main scss but before the extra scss from the setting.
    $post = file_get_contents($CFG->dirroot . '/theme/intuitable/scss/post.scss');

    // Combine them together.
    return $pre . "\n" . $scss . "\n" . $post;
}

/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return array
 */
function theme_intuitable_get_pre_scss($theme) {
    global $CFG;

    $scss = '';
    $configurable = [
        // Config key => [variableName, ...].
        'headerheightsmall' => ['headerheightsm'],
        'headerheightmedium' => ['headerheightmd'],
        'headerheightlarge' => ['headerheightlg']
    ];

    // Prepend variables first.
    foreach ($configurable as $configkey => $targets) {
        $value = isset($theme->settings->{$configkey}) ? $theme->settings->{$configkey} : null;
        if (empty($value)) {
            continue;
        }
        array_map(function($target) use (&$scss, $value) {
            $scss .= '$' . $target . ': ' . $value . ";\n";
        }, (array) $targets);
    }

    // Prepend pre-scss.
    if (!empty($theme->settings->scsspre)) {
        $scss .= $theme->settings->scsspre;
    }

    return $scss;
}


/**
 * Returns the course custom fields
 * 
 * code as per https://docs.moodle.org/dev/Custom_fields_API
 *
 * @param theme_config $courseid The course id
 * @return course metadata object, listing all custom fields and values
 *
 * this is required to implement Intuitable UX: Intuitable uses course pages to  present information with various layouts, but using
 * the topics course format.
 * In order to avoid using course ids to target course pages, custom course fields have been defined to provide theme with selectors
 * which can be managed via the course settings / core custom fields
 */

function theme_intuitable_get_course_metadata($courseid) {
    $handler = \core_customfield\handler::get_handler('core_course', 'course');
    // This is equivalent to the line above.
    //$handler = \core_course\customfield\course_handler::create();
    $datas = $handler->get_instance_data($courseid);
    $metadata = [];
    foreach ($datas as $data) {
        if (empty($data->get_value())) {
            continue;
        }
        $cat = $data->get_field()->get_category()->get('name');
        $metadata[$data->get_field()->get('shortname')] = $data->get_value();
    }
    return $metadata;
}


//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");
require_once("$CFG->dirroot/cohort/lib.php");
 
class theme_intuitable_cohortfilter_form extends moodleform {

    //Add elements to form
    public function definition() {
        global $CFG;
        global $COURSE;
 
        $mform = $this->_form; 
 
        // Cohort selection.
        // Get all cohorts.
        // $allcohorts = block_cohortspecifichtml_get_all_cohorts();
        $coursecontext = context_course::instance($COURSE->id);
        $allcohorts = cohort_get_available_cohorts($coursecontext, 0, 0, 0);
        if (!empty($allcohorts)) {
            // Transform object to array.
            foreach ($allcohorts as $c) {
                $options[$c->id] = format_string($c->name);
            }
            $mform->addElement('select', 
                'config_cohorts', 
                get_string('cohortselection', 'block_cohortspecifichtml'), 
                $options);
            // Enable multi selection.
            $mform->getElement('config_cohorts')->setMultiple(true);
        } else {
            // Add a static element with a hint that there are no cohorts existing.
            $mform->addElement('static', 'nocohorts', get_string('cohorts', 'core_cohort'),
                    get_string('nocohorts', 'block_cohortspecifichtml', array('url' => $CFG->wwwroot.'/cohort/index.php')));
        }
    }
}

/**
 * Returns the cohort filer
 * 
 * code as per https://docs.moodle.org/dev/Custom_fields_API
 *
 * @param 
 * @return cohort filter form object
 *
 * this provides admin users with functionality to filter block content by cohort, to facilitate 
 * content maintenance on pages where there are many cohort-specific blocks or other content 
 */
function theme_intuitable_get_cohort_filter() {
    global $PAGE;
    $PAGE->requires->js_call_amd('theme_intuitable/cohort', 'init');
    $mform = new theme_intuitable_cohortfilter_form();
    // JS to apply selected filter

    return $mform->display() ;
}

/**
 * Implement pluginfile function to deliver files which are uploaded in theme settings
 *
 * @param stdClass $course course object
 * @param stdClass $cm course module
 * @param stdClass $context context object
 * @param string $filearea file area
 * @param array $args extra arguments
 * @param bool $forcedownload whether or not force download
 * @param array $options additional options affecting the file serving
 * @return bool
 */
function theme_intuitable_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('intuitable');
        // By default, theme files must be cache-able by both browsers and proxies.
        // TODO: For new file areas: Check if the cacheability needs to be restricted.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }
        if ($filearea === 'favicon') {
            return $theme->setting_file_serve('favicon', $args, $forcedownload, $options);
        } else if ($filearea === 'logoheader') {
            return $theme->setting_file_serve('logoheader', $args, $forcedownload, $options);
        } else if ($filearea === 'logologin') {
            return $theme->setting_file_serve('logologin', $args, $forcedownload, $options);
        } else if ($filearea === 'logomini') {
            return $theme->setting_file_serve('logomini', $args, $forcedownload, $options);
        } else if ($filearea === 'logosite') {
            return $theme->setting_file_serve('logosite', $args, $forcedownload, $options);
        } else if ($filearea === 'backgroundimagelogin') {
            return $theme->setting_file_serve('backgroundimagelogin', $args, $forcedownload, $options);
        } else if ($filearea === 'fontfiles') {
            return $theme->setting_file_serve('fontfiles', $args, $forcedownload, $options);
        } else if ($filearea === 'imageareaitems') {
            return $theme->setting_file_serve('imageareaitems', $args, $forcedownload, $options);
        } else if ($filearea === 'additionalresources') {
            return $theme->setting_file_serve('additionalresources', $args, $forcedownload, $options);
        } else {
            send_file_not_found();
        }
    } else {
        send_file_not_found();
    }
}
