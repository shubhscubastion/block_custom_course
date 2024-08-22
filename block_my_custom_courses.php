<?php
class block_my_custom_courses extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_my_custom_courses');
    }

    public function get_content() {
        global $DB;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '';
        $this->content->footer = '';

        // Fetch all courses
        $courses = $DB->get_records('course');

        // Generate HTML
        foreach ($courses as $course) {
            $this->content->text .= html_writer::tag('div', html_writer::link(new moodle_url('/course/view.php', array('id' => $course->id)), $course->fullname), array('class' => 'course-item'));
        }

        return $this->content;
    }
}
