<?php
/**
 * Copyright (C) 2020 onwards Think Associates Ltd
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright 2020 Intuitable / Intuitable
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Mireille P <mireille.pedder@gmail.com>
 * @package   theme_intuitable
 **/

class theme_intuitable_mod_quiz_renderer extends mod_quiz_renderer {



    /**
     * Outputs the navigation block panel
     *
     * @param quiz_nav_panel_base $panel instance of quiz_nav_panel_base
     */
    public function navigation_panel(quiz_nav_panel_base $panel) {

        $output = '';
        $outputinfo = '';
        $userpicture = $panel->user_picture();
        $output .= $panel->render_before_button_bits($this);

        $bcc = $panel->get_button_container_class();
        $output .= html_writer::start_tag('div', array('class' => "qn_buttons clearfix $bcc"));
        foreach ($panel->get_question_buttons() as $button) {
            $output .= $this->render($button);
        }
        $output .= html_writer::end_tag('div');

        $outputinfo = html_writer::tag('div', $panel->render_end_bits($this),
                array('class' => 'othernav'));

        if ($userpicture) {
            $fullname = fullname($userpicture->user);
            if ($userpicture->size === true) {
                $fullname = html_writer::div($fullname);
            }
            $outputinfo .= html_writer::tag('div', $fullname.$this->render($userpicture),
                    array('id' => 'user-picture', 'class' => 'clearfix'));
        }

        $output .= html_writer::tag('div', $outputinfo, array('class' => 'quiznavinfo'));
        $this->page->requires->js_init_call('M.mod_quiz.nav.init', null, false,
                quiz_get_js_module());

        return $output;
    }

    public function render_end_bits(mod_quiz_renderer $output) {
        if ($this->page == -1) {
            // Don't link from the summary page to itself.
            return '';
        }
        return html_writer::link($this->attemptobj->summary_url(),
                get_string('endtest', 'quiz'), array('class' => 'endtestlink aalink')) .
                $output->countdown_timer($this->attemptobj, time()) .
                $this->render_restart_preview_link($output);
    }

    /**
     * Returns either a link or button
     *
     * use local lang strings
     * 
     * @param quiz_attempt $attemptobj instance of quiz_attempt
     */
    public function finish_review_link(quiz_attempt $attemptobj) {
        $url = $attemptobj->view_url();

        if ($attemptobj->get_access_manager(time())->attempt_must_be_in_popup()) {
            $this->page->requires->js_init_call('M.mod_quiz.secure_window.init_close_button',
                    array($url), false, quiz_get_js_module());
            return html_writer::empty_tag('input', array('type' => 'button',
                    'value' => "OVERRIDE finisreview",
                    'oldvalue' => get_string('finishreview', 'quiz'),
                    'id' => 'secureclosebutton',
                    'class' => 'mod_quiz-next-nav btn btn-primary'));

        } else {
            return html_writer::link($url, get_string('finishreview', 'quiz'),
                    array('class' => 'mod_quiz-next-nav'));
        }
    }


    /*
     * Summary Page
     */
    /**
     * Create the summary page
     *
     * @param quiz_attempt $attemptobj
     * @param mod_quiz_display_options $displayoptions
     */
    public function summary_page($attemptobj, $displayoptions) {
        $output = '';
        $output .= $this->header();
        $output .= $this->heading(format_string($attemptobj->get_quiz_name()));
        $output .= $this->heading(get_string('summaryofattempt', 'quiz'), 3);
        $output .= $this->summary_table($attemptobj, $displayoptions);
        $output .= $this->summary_page_controls($attemptobj);
        $output .= $this->footer();
        return $output;
    }

    /**
     * Creates any controls a the page should have.
     *
     * @param quiz_attempt $attemptobj
     */
    public function summary_page_controls($attemptobj) {
        $output = '';
        $outputcontainer = '';

        // timer first 
        $output .= $this->countdown_timer($attemptobj, time());


        // Finish attempt button.
        $options = array(
            'attempt' => $attemptobj->get_attemptid(),
            'finishattempt' => 1,
            'timeup' => 0,
            'slots' => '',
            'cmid' => $attemptobj->get_cmid(),
            'sesskey' => sesskey(),
        );

        $button = new single_button(
                new moodle_url($attemptobj->processattempt_url(), $options),
                get_string('submitallandfinish', 'quiz'));
        $button->id = 'responseform';
        if ($attemptobj->get_state() == quiz_attempt::IN_PROGRESS) {
            $button->add_action(new confirm_action(get_string('confirmclose', 'quiz'), null,
                    get_string('submitallandfinish', 'quiz')));
        }

        $duedate = $attemptobj->get_due_date();
        $message = '';
        if ($attemptobj->get_state() == quiz_attempt::OVERDUE) {
            $message = get_string('overduemustbesubmittedby', 'quiz', userdate($duedate));

        } else if ($duedate) {
            $message = get_string('mustbesubmittedby', 'quiz', userdate($duedate));
        }

        $output .= $this->container($message . $this->container(
                $this->render($button), 'controls'), 'submitbtns finishattempt');

        // Return to place button.
        if ($attemptobj->get_state() == quiz_attempt::IN_PROGRESS) {
            $button = new single_button(
                    new moodle_url($attemptobj->attempt_url(null, $attemptobj->get_currentpage())),
                    get_string('returnattempt', 'quiz'));
            $output .= $this->container($this->container($this->render($button),
                    'controls'), 'submitbtns returnattempt');
        }

        $outputcontainer = html_writer::tag('div', $output, array('class' => 'quiznav') );
        return $outputcontainer;
    }
}


/**
 * Specialisation of {@link quiz_nav_panel_base} for the attempt quiz page.
 *
 * @copyright  2008 Tim Hunt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 2.0
 */
class theme_intuitable_quiz_attempt_nav_panel extends quiz_attempt_nav_panel {
    public function get_question_url($slot) {
        if ($this->attemptobj->can_navigate_to($slot)) {
            return $this->attemptobj->attempt_url($slot, -1, $this->page);
        } else {
            return null;
        }
    }

    public function render_before_button_bits(mod_quiz_renderer $output) {
        return html_writer::tag('div', get_string('navnojswarning', 'quiz'),
                array('id' => 'quiznojswarning'));
    }

    public function render_end_bits(mod_quiz_renderer $output) {
        if ($this->page == -1) {
            // Don't link from the summary page to itself.
            return '';
        }
        return html_writer::link($this->attemptobj->summary_url(),
                get_string('endtest', 'quiz'), array('class' => 'endtestlink aalink')) .
                $output->countdown_timer($this->attemptobj, time()) .
                $this->render_restart_preview_link($output);
    }
}
