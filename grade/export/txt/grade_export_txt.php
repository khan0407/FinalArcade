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

require_once($CFG->dirroot.'/grade/export/lib.php');
<<<<<<< HEAD
=======
require_once($CFG->libdir . '/csvlib.class.php');
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

class grade_export_txt extends grade_export {

    public $plugin = 'txt';

    public $separator; // default separator

<<<<<<< HEAD
    public function __construct($course, $groupid=0, $itemlist='', $export_feedback=false, $updatedgradesonly = false, $displaytype = GRADE_DISPLAY_TYPE_REAL, $decimalpoints = 2, $separator = 'comma', $onlyactive = false) {
        parent::__construct($course, $groupid, $itemlist, $export_feedback, $updatedgradesonly, $displaytype, $decimalpoints, $onlyactive);
=======
    /**
     * Constructor should set up all the private variables ready to be pulled
     * @param object $course
     * @param int $groupid id of selected group, 0 means all
     * @param string $itemlist comma separated list of item ids, empty means all
     * @param boolean $export_feedback
     * @param boolean $updatedgradesonly
     * @param string $displaytype
     * @param int $decimalpoints
     * @param boolean $onlyactive
     * @param boolean $usercustomfields include user custom field in export
     */
    public function __construct($course, $groupid=0, $itemlist='', $export_feedback=false, $updatedgradesonly = false, $displaytype = GRADE_DISPLAY_TYPE_REAL, $decimalpoints = 2, $separator = 'comma', $onlyactive = false, $usercustomfields = false) {
        parent::__construct($course, $groupid, $itemlist, $export_feedback, $updatedgradesonly, $displaytype, $decimalpoints, $onlyactive, $usercustomfields);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $this->separator = $separator;
    }

    public function get_export_params() {
        $params = parent::get_export_params();
        $params['separator'] = $this->separator;
        return $params;
    }

    public function print_grades() {
        global $CFG;

        $export_tracking = $this->track_exports();

        $strgrades = get_string('grades');
<<<<<<< HEAD

        switch ($this->separator) {
            case 'comma':
                $separator = ",";
                break;
            case 'tab':
            default:
                $separator = "\t";
        }

        /// Print header to force download
        if (strpos($CFG->wwwroot, 'https://') === 0) { //https sites - watch out for IE! KB812935 and KB316431
            @header('Cache-Control: max-age=10');
            @header('Expires: '. gmdate('D, d M Y H:i:s', 0) .' GMT');
            @header('Pragma: ');
        } else { //normal http - prevent caching at all cost
            @header('Cache-Control: private, must-revalidate, pre-check=0, post-check=0, max-age=0');
            @header('Expires: '. gmdate('D, d M Y H:i:s', 0) .' GMT');
            @header('Pragma: no-cache');
        }
        header("Content-Type: application/download\n");
        $shortname = format_string($this->course->shortname, true, array('context' => get_context_instance(CONTEXT_COURSE, $this->course->id)));
        $downloadfilename = clean_filename("$shortname $strgrades");
        header("Content-Disposition: attachment; filename=\"$downloadfilename.txt\"");

/// Print names of all the fields
        echo get_string("firstname").$separator.
             get_string("lastname").$separator.
             get_string("idnumber").$separator.
             get_string("institution").$separator.
             get_string("department").$separator.
             get_string("email");

        foreach ($this->columns as $grade_item) {
            echo $separator.$this->format_column_name($grade_item);

            /// add a feedback column
            if ($this->export_feedback) {
                echo $separator.$this->format_column_name($grade_item, true);
            }
        }
        echo "\n";

/// Print all the lines of data.
        $geub = new grade_export_update_buffer();
        $gui = new graded_users_iterator($this->course, $this->columns, $this->groupid);
        $gui->require_active_enrolment($this->onlyactive);
        $gui->init();
        while ($userdata = $gui->next_user()) {

            $user = $userdata->user;

            echo $user->firstname.$separator.$user->lastname.$separator.$user->idnumber.$separator.$user->institution.$separator.$user->department.$separator.$user->email;

=======
        $profilefields = grade_helper::get_user_profile_fields($this->course->id, $this->usercustomfields);

        $shortname = format_string($this->course->shortname, true, array('context' => context_course::instance($this->course->id)));
        $downloadfilename = clean_filename("$shortname $strgrades");
        $csvexport = new csv_export_writer($this->separator);
        $csvexport->set_filename($downloadfilename);

        // Print names of all the fields
        $exporttitle = array();
        foreach ($profilefields as $field) {
            $exporttitle[] = $field->fullname;
        }

        // Add a feedback column.
        foreach ($this->columns as $grade_item) {
            $exporttitle[] = $this->format_column_name($grade_item);
            if ($this->export_feedback) {
                $exporttitle[] = $this->format_column_name($grade_item, true);
            }
        }
        $csvexport->add_data($exporttitle);

        // Print all the lines of data.
        $geub = new grade_export_update_buffer();
        $gui = new graded_users_iterator($this->course, $this->columns, $this->groupid);
        $gui->require_active_enrolment($this->onlyactive);
        $gui->allow_user_custom_fields($this->usercustomfields);
        $gui->init();
        while ($userdata = $gui->next_user()) {

            $exportdata = array();
            $user = $userdata->user;

            foreach ($profilefields as $field) {
                $fieldvalue = grade_helper::get_user_field_value($user, $field);
                $exportdata[] = $fieldvalue;
            }
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            foreach ($userdata->grades as $itemid => $grade) {
                if ($export_tracking) {
                    $status = $geub->track($grade);
                }

<<<<<<< HEAD
                echo $separator.$this->format_grade($grade);

                if ($this->export_feedback) {
                    echo $separator.$this->format_feedback($userdata->feedbacks[$itemid]);
                }
            }
            echo "\n";
        }
        $gui->close();
        $geub->close();

=======
                $exportdata[] = $this->format_grade($grade);

                if ($this->export_feedback) {
                    $exportdata[] = $this->format_feedback($userdata->feedbacks[$itemid]);
                }
            }
            $csvexport->add_data($exportdata);
        }
        $gui->close();
        $geub->close();
        $csvexport->download_file();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        exit;
    }
}


