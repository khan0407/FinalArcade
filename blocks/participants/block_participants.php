<?php

class block_participants extends block_list {
    function init() {
        $this->title = get_string('pluginname', 'block_participants');
    }

    function get_content() {

        global $CFG, $OUTPUT;

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        // user/index.php expect course context, so get one if page has module context.
        $currentcontext = $this->page->context->get_course_context(false);

        if (empty($currentcontext)) {
            $this->content = '';
            return $this->content;
        } else if ($this->page->course->id == SITEID) {
<<<<<<< HEAD
            if (!has_capability('moodle/site:viewparticipants', get_context_instance(CONTEXT_SYSTEM))) {
=======
            if (!has_capability('moodle/site:viewparticipants', context_system::instance())) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                $this->content = '';
                return $this->content;
            }
        } else {
            if (!has_capability('moodle/course:viewparticipants', $currentcontext)) {
                $this->content = '';
                return $this->content;
            }
        }

<<<<<<< HEAD
        $icon = '<img src="'.$OUTPUT->pix_url('i/users') . '" class="icon" alt="" />&nbsp;';
=======
        $icon = '<img src="'.$OUTPUT->pix_url('i/users') . '" class="icon" alt="" />';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $this->content->items[] = '<a title="'.get_string('listofallpeople').'" href="'.
                                  $CFG->wwwroot.'/user/index.php?contextid='.$currentcontext->id.'">'.$icon.get_string('participants').'</a>';

        return $this->content;
    }

    // my moodle can only have SITEID and it's redundant here, so take it away
    function applicable_formats() {
        return array('all' => true, 'my' => false, 'tag' => false);
    }

}
