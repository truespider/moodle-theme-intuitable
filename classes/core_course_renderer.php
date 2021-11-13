<?php
/**
 * Extending the core_course_renderer interface.
 *
 * @copyright 2021 Mireille Pedder / Intuitable
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package theme_intuitable
 * @category output
 */
class theme_intuitable_core_course_renderer extends core_course_renderer {

    /**
     * Returns HTML to display course custom fields.
     *
     * @param core_course_list_element $course
     * @return string
     */
    protected function course_custom_fields(core_course_list_element $course): string {
        global $USER;
        $content = '';
        if (is_siteadmin($USER) && $course->has_custom_fields()) {
            $handler = core_course\customfield\course_handler::create();
            $customfields = $handler->display_custom_fields_data($course->get_custom_fields());
            $content .= \html_writer::tag('div', $customfields, ['class' => 'customfields-container']);
        }
        return $content;
    }



    /**
     * Renders the activity navigation.
     *
     * Defer to template.
     *
     * @param \core_course\output\activity_navigation $page
     * @return string html for the page
     */
    public function render_activity_navigation(\core_course\output\activity_navigation $page) {
        $data = $page->export_for_template($this->output);
        return $this->output->render_from_template('theme_intuitable/core//activity_navigation', $data);
    }

}