<?php

include_once($CFG->dirroot . '/course/lib.php');

class block_course_list extends block_list {
    function init() {
        $this->title = get_string('pluginname', 'block_course_list');
    }

    function has_config() {
        return true;
    }

    function get_content() {
        global $CFG, $USER, $DB, $OUTPUT;

        if($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

<<<<<<< HEAD
        $icon  = '<img src="' . $OUTPUT->pix_url('i/course') . '" class="icon" alt="" />&nbsp;';
=======
        $icon  = '<img src="' . $OUTPUT->pix_url('i/course') . '" class="icon" alt="" />';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

        $adminseesall = true;
        if (isset($CFG->block_course_list_adminview)) {
           if ( $CFG->block_course_list_adminview == 'own'){
               $adminseesall = false;
           }
        }

        if (empty($CFG->disablemycourses) and isloggedin() and !isguestuser() and
<<<<<<< HEAD
          !(has_capability('moodle/course:update', get_context_instance(CONTEXT_SYSTEM)) and $adminseesall)) {    // Just print My Courses
            if ($courses = enrol_get_my_courses(NULL, 'visible DESC, fullname ASC')) {
                foreach ($courses as $course) {
                    $coursecontext = get_context_instance(CONTEXT_COURSE, $course->id);
=======
          !(has_capability('moodle/course:update', context_system::instance()) and $adminseesall)) {    // Just print My Courses
            // As this is producing navigation sort order should default to $CFG->navsortmycoursessort instead
            // of using the default.
            if (!empty($CFG->navsortmycoursessort)) {
                $sortorder = 'visible DESC, ' . $CFG->navsortmycoursessort . ' ASC';
            } else {
                $sortorder = 'visible DESC, sortorder ASC';
            }
            if ($courses = enrol_get_my_courses(NULL, $sortorder)) {
                foreach ($courses as $course) {
                    $coursecontext = context_course::instance($course->id);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                    $linkcss = $course->visible ? "" : " class=\"dimmed\" ";
                    $this->content->items[]="<a $linkcss title=\"" . format_string($course->shortname, true, array('context' => $coursecontext)) . "\" ".
                               "href=\"$CFG->wwwroot/course/view.php?id=$course->id\">".$icon.format_string($course->fullname). "</a>";
                }
                $this->title = get_string('mycourses');
            /// If we can update any course of the view all isn't hidden, show the view all courses link
<<<<<<< HEAD
                if (has_capability('moodle/course:update', get_context_instance(CONTEXT_SYSTEM)) || empty($CFG->block_course_list_hideallcourseslink)) {
=======
                if (has_capability('moodle/course:update', context_system::instance()) || empty($CFG->block_course_list_hideallcourseslink)) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                    $this->content->footer = "<a href=\"$CFG->wwwroot/course/index.php\">".get_string("fulllistofcourses")."</a> ...";
                }
            }
            $this->get_remote_courses();
            if ($this->content->items) { // make sure we don't return an empty list
                return $this->content;
            }
        }

        $categories = get_categories("0");  // Parent = 0   ie top-level categories only
        if ($categories) {   //Check we have categories
            if (count($categories) > 1 || (count($categories) == 1 && $DB->count_records('course') > 200)) {     // Just print top level category links
                foreach ($categories as $category) {
<<<<<<< HEAD
                    $categoryname = format_string($category->name, true, array('context' => get_context_instance(CONTEXT_COURSECAT, $category->id)));
=======
                    $categoryname = format_string($category->name, true, array('context' => context_coursecat::instance($category->id)));
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                    $linkcss = $category->visible ? "" : " class=\"dimmed\" ";
                    $this->content->items[]="<a $linkcss href=\"$CFG->wwwroot/course/category.php?id=$category->id\">".$icon . $categoryname . "</a>";
                }
            /// If we can update any course of the view all isn't hidden, show the view all courses link
<<<<<<< HEAD
                if (has_capability('moodle/course:update', get_context_instance(CONTEXT_SYSTEM)) || empty($CFG->block_course_list_hideallcourseslink)) {
=======
                if (has_capability('moodle/course:update', context_system::instance()) || empty($CFG->block_course_list_hideallcourseslink)) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                    $this->content->footer .= "<a href=\"$CFG->wwwroot/course/index.php\">".get_string('fulllistofcourses').'</a> ...';
                }
                $this->title = get_string('categories');
            } else {                          // Just print course names of single category
                $category = array_shift($categories);
                $courses = get_courses($category->id);

                if ($courses) {
                    foreach ($courses as $course) {
<<<<<<< HEAD
                        $coursecontext = get_context_instance(CONTEXT_COURSE, $course->id);
=======
                        $coursecontext = context_course::instance($course->id);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                        $linkcss = $course->visible ? "" : " class=\"dimmed\" ";

                        $this->content->items[]="<a $linkcss title=\""
                                   . format_string($course->shortname, true, array('context' => $coursecontext))."\" ".
                                   "href=\"$CFG->wwwroot/course/view.php?id=$course->id\">"
<<<<<<< HEAD
                                   .$icon. format_string($course->fullname, true, array('context' => get_context_instance(CONTEXT_COURSE, $course->id))) . "</a>";
                    }
                /// If we can update any course of the view all isn't hidden, show the view all courses link
                    if (has_capability('moodle/course:update', get_context_instance(CONTEXT_SYSTEM)) || empty($CFG->block_course_list_hideallcourseslink)) {
=======
                                   .$icon. format_string($course->fullname, true, array('context' => context_course::instance($course->id))) . "</a>";
                    }
                /// If we can update any course of the view all isn't hidden, show the view all courses link
                    if (has_capability('moodle/course:update', context_system::instance()) || empty($CFG->block_course_list_hideallcourseslink)) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                        $this->content->footer .= "<a href=\"$CFG->wwwroot/course/index.php\">".get_string('fulllistofcourses').'</a> ...';
                    }
                    $this->get_remote_courses();
                } else {

                    $this->content->icons[] = '';
                    $this->content->items[] = get_string('nocoursesyet');
<<<<<<< HEAD
                    if (has_capability('moodle/course:create', get_context_instance(CONTEXT_COURSECAT, $category->id))) {
=======
                    if (has_capability('moodle/course:create', context_coursecat::instance($category->id))) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                        $this->content->footer = '<a href="'.$CFG->wwwroot.'/course/edit.php?category='.$category->id.'">'.get_string("addnewcourse").'</a> ...';
                    }
                    $this->get_remote_courses();
                }
                $this->title = get_string('courses');
            }
        }

        return $this->content;
    }

    function get_remote_courses() {
        global $CFG, $USER, $OUTPUT;

        if (!is_enabled_auth('mnet')) {
            // no need to query anything remote related
            return;
        }

<<<<<<< HEAD
        $icon = '<img src="'.$OUTPUT->pix_url('i/mnethost') . '" class="icon" alt="" />&nbsp;';
=======
        $icon = '<img src="'.$OUTPUT->pix_url('i/mnethost') . '" class="icon" alt="" />';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

        // shortcut - the rest is only for logged in users!
        if (!isloggedin() || isguestuser()) {
            return false;
        }

        if ($courses = get_my_remotecourses()) {
            $this->content->items[] = get_string('remotecourses','mnet');
            $this->content->icons[] = '';
            foreach ($courses as $course) {
<<<<<<< HEAD
                $coursecontext = get_context_instance(CONTEXT_COURSE, $course->id);
                $this->content->items[]="<a title=\"" . format_string($course->shortname, true, array('context' => $coursecontext)) . "\" ".
=======
                $this->content->items[]="<a title=\"" . format_string($course->shortname, true) . "\" ".
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                    "href=\"{$CFG->wwwroot}/auth/mnet/jump.php?hostid={$course->hostid}&amp;wantsurl=/course/view.php?id={$course->remoteid}\">"
                    .$icon. format_string($course->fullname) . "</a>";
            }
            // if we listed courses, we are done
            return true;
        }

        if ($hosts = get_my_remotehosts()) {
            $this->content->items[] = get_string('remotehosts', 'mnet');
            $this->content->icons[] = '';
            foreach($USER->mnet_foreign_host_array as $somehost) {
                $this->content->items[] = $somehost['count'].get_string('courseson','mnet').'<a title="'.$somehost['name'].'" href="'.$somehost['url'].'">'.$icon.$somehost['name'].'</a>';
            }
            // if we listed hosts, done
            return true;
        }

        return false;
    }

<<<<<<< HEAD
=======
    /**
     * Returns the role that best describes the course list block.
     *
     * @return string
     */
    public function get_aria_role() {
        return 'navigation';
    }
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
}


