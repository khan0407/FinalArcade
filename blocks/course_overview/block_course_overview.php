<?php
<<<<<<< HEAD

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
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
 * Course overview block
 *
<<<<<<< HEAD
 * Currently, just a copy-and-paste from the old My Moodle.
 *
 * @package   blocks
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot.'/lib/weblib.php');
require_once($CFG->dirroot . '/lib/formslib.php');

class block_course_overview extends block_base {
    /**
     * block initializations
=======
 * @package    block_course_overview
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once($CFG->dirroot.'/blocks/course_overview/locallib.php');

/**
 * Course overview block
 *
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_course_overview extends block_base {
    /**
     * Block initialization
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
     */
    public function init() {
        $this->title   = get_string('pluginname', 'block_course_overview');
    }

    /**
<<<<<<< HEAD
     * block contents
     *
     * @return object
     */
    public function get_content() {
        global $USER, $CFG;
=======
     * Return contents of course_overview block
     *
     * @return stdClass contents of block
     */
    public function get_content() {
        global $USER, $CFG, $DB;
        require_once($CFG->dirroot.'/user/profile/lib.php');

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        if($this->content !== NULL) {
            return $this->content;
        }

<<<<<<< HEAD
=======
        $config = get_config('block_course_overview');

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $this->content = new stdClass();
        $this->content->text = '';
        $this->content->footer = '';

        $content = array();

<<<<<<< HEAD
        // limits the number of courses showing up
        $courses_limit = 21;
        // FIXME: this should be a block setting, rather than a global setting
        if (isset($CFG->mycoursesperpage)) {
            $courses_limit = $CFG->mycoursesperpage;
        }

        $morecourses = false;
        if ($courses_limit > 0) {
            $courses_limit = $courses_limit + 1;
        }

        $courses = enrol_get_my_courses('id, shortname, modinfo, sectioncache', 'visible DESC,sortorder ASC', $courses_limit);
        $site = get_site();
        $course = $site; //just in case we need the old global $course hack

        if (is_enabled_auth('mnet')) {
            $remote_courses = get_my_remotecourses();
        }
        if (empty($remote_courses)) {
            $remote_courses = array();
        }

        if (($courses_limit > 0) && (count($courses)+count($remote_courses) >= $courses_limit)) {
            // get rid of any remote courses that are above the limit
            $remote_courses = array_slice($remote_courses, 0, $courses_limit - count($courses), true);
            if (count($courses) >= $courses_limit) {
                //remove the 'marker' course that we retrieve just to see if we have more than $courses_limit
                array_pop($courses);
            }
            $morecourses = true;
        }


        if (array_key_exists($site->id,$courses)) {
            unset($courses[$site->id]);
        }

        foreach ($courses as $c) {
            if (isset($USER->lastcourseaccess[$c->id])) {
                $courses[$c->id]->lastaccess = $USER->lastcourseaccess[$c->id];
            } else {
                $courses[$c->id]->lastaccess = 0;
            }
        }

        if (empty($courses) && empty($remote_courses)) {
            $content[] = get_string('nocourses','my');
        } else {
            ob_start();

            require_once $CFG->dirroot."/course/lib.php";
            print_overview($courses, $remote_courses);

            $content[] = ob_get_contents();
            ob_end_clean();
        }

        // if more than 20 courses
        if ($morecourses) {
            $content[] = '<br />...';
        }

        $this->content->text = implode($content);

=======
        $updatemynumber = optional_param('mynumber', -1, PARAM_INT);
        if ($updatemynumber >= 0) {
            block_course_overview_update_mynumber($updatemynumber);
        }

        profile_load_custom_fields($USER);
        list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses();
        $overviews = block_course_overview_get_overviews($sitecourses);

        $renderer = $this->page->get_renderer('block_course_overview');
        if (!empty($config->showwelcomearea)) {
            require_once($CFG->dirroot.'/message/lib.php');
            $msgcount = message_count_unread_messages();
            $this->content->text = $renderer->welcome_area($msgcount);
        }

        // Number of sites to display.
        if ($this->page->user_is_editing() && empty($config->forcedefaultmaxcourses)) {
            $this->content->text .= $renderer->editing_bar_head($totalcourses);
        }

        if (empty($sortedcourses)) {
            $this->content->text .= get_string('nocourses','my');
        } else {
            // For each course, build category cache.
            $this->content->text .= $renderer->course_overview($sortedcourses, $overviews);
            $this->content->text .= $renderer->hidden_courses($totalcourses - count($sortedcourses));
            if ($this->page->user_is_editing() && ajaxenabled()) {
                $this->page->requires->js_init_call('M.block_course_overview.add_handles');
            }
        }

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        return $this->content;
    }

    /**
<<<<<<< HEAD
     * allow the block to have a configuration page
=======
     * Allow the block to have a configuration page
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
     *
     * @return boolean
     */
    public function has_config() {
<<<<<<< HEAD
        return false;
    }

    /**
     * locations where block can be displayed
=======
        return true;
    }

    /**
     * Locations where block can be displayed
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
     *
     * @return array
     */
    public function applicable_formats() {
<<<<<<< HEAD
        return array('my-index'=>true);
    }
}
?>
=======
        return array('my-index' => true);
    }

    /**
     * Sets block header to be hidden or visible
     *
     * @return bool if true then header will be visible.
     */
    public function hide_header() {
        // Hide header if welcome area is show.
        $config = get_config('block_course_overview');
        return !empty($config->showwelcomearea);
    }
}
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
