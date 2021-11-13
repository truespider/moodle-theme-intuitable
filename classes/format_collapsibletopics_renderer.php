<?php
/**
 * Extending the format_collapsibletopics_renderer
 *
 * @copyright 2021 Mireille Pedder / Intuitable
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package theme_intuitable
 * @category topics renderer
 */

class theme_intuitable_format_collapsibletopics_renderer extends format_collapsibletopics_renderer {

    /**
     * Intuitable customisation : show the expand all when no topic 0 content  
     *
     * @param stdClass $course The course entry from DB
     * @param array $sections (argument not used)
     * @param array $mods (argument not used)
     * @param array $modnames (argument not used)
     * @param array $modnamesused (argument not used)
     */
    public function print_multiple_section_page($course, $sections, $mods, $modnames, $modnamesused) {
        global $PAGE;

        if (!isset($course->coursedisplay)) {
            $course->coursedisplay = COURSE_DISPLAY_SINGLEPAGE;
        }

        $modinfo = get_fast_modinfo($course);
        $course = course_get_format($course)->get_course();

        $context = context_course::instance($course->id);
        // Title with completion help icon.
        $completioninfo = new completion_info($course);
        echo $completioninfo->display_help_icon();
        echo $this->output->heading($this->page_title(), 2, 'accesshide');

        // Copy activity clipboard..
        echo $this->course_activity_clipboard($course, 0);

        // Now the list of sections..
        echo $this->start_section_list();
        $numsections = course_get_format($course)->get_last_section_number();

        // Intuitable customisation start 
        $expandall = '<div class="collapsible-actions">'.
                        '<a href="#" class="expandall" role="button">'. 
                        get_string('expandall'). 
                        '</a>'.
                      '</div>';
        // Intuitable customisation end 
        foreach ($modinfo->get_section_info_all() as $section => $thissection) {
            if ($section == 0) {
                // 0-section is displayed a little different then the others.
                // Intuitable customisation start - always show section 0 to provide the expand/collapse all UI 
                //if ($thissection->summary or !empty($modinfo->sections[0]) or $PAGE->user_is_editing()) {
                // Intuitable customisation end
                    $this->page->requires->strings_for_js(array('collapseall', 'expandall'), 'moodle');

                    $modules = $this->courserenderer->course_section_cm_list($course, $thissection, 0);
                    echo $this->section_header($thissection, $course, false, 0);
                    echo $modules;
                    echo $this->courserenderer->course_section_add_cm_control($course, 0, 0);
                    // Intuitable customisation start
                    echo $expandall;
                    // Intuitable customisation end
                    echo $this->section_footer();
                // Intuitable customisation start
                //}
                // Intuitable customisation end
                continue;
            }
            if ($section > $numsections) {
                // Activities inside this section are 'orphaned', this section will be printed as 'stealth' below.
                continue;
            }
            // Show the section if the user is permitted to access it, OR if it's not available
            // but there is some available info text which explains the reason & should display.
            $showsection = $thissection->uservisible ||
                ($thissection->visible && !$thissection->available &&
                    !empty($thissection->availableinfo))
                || (!$thissection->visible && !$course->hiddensections);
            if (!$showsection) {
                continue;
            }

            $modules = $this->courserenderer->course_section_cm_list($course, $thissection, 0);
            $control = $this->courserenderer->course_section_add_cm_control($course, $section, 0);
            echo $this->section_header($thissection, $course, false, 0);

            if ($thissection->uservisible) {
                echo $modules;
                echo $control;
            }

            echo $this->section_footer();
        }

        if ($PAGE->user_is_editing() and has_capability('moodle/course:update', $context)) {
            // Print stealth sections if present.
            foreach ($modinfo->get_section_info_all() as $section => $thissection) {
                if ($section <= $numsections or empty($modinfo->sections[$section])) {
                    // This is not stealth section or it is empty.
                    continue;
                }
                echo $this->stealth_section_header($section);
                echo $this->courserenderer->course_section_cm_list($course, $thissection, 0);
                echo $this->stealth_section_footer();
            }

            echo $this->end_section_list();

            echo $this->change_number_sections($course, 0);
        } else {
            echo $this->end_section_list();
        }
    }
}