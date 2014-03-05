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
 * Adds new instance of enrol_manual to specified course
 * or edits current instance.
 *
<<<<<<< HEAD
 * @package    enrol
 * @subpackage manual
=======
 * @package    enrol_manual
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once('edit_form.php');

$courseid = required_param('courseid', PARAM_INT);

$course = $DB->get_record('course', array('id'=>$courseid), '*', MUST_EXIST);
<<<<<<< HEAD
$context = get_context_instance(CONTEXT_COURSE, $course->id, MUST_EXIST);
=======
$context = context_course::instance($course->id, MUST_EXIST);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

require_login($course);
require_capability('enrol/manual:config', $context);

$PAGE->set_url('/enrol/manual/edit.php', array('courseid'=>$course->id));
$PAGE->set_pagelayout('admin');

$return = new moodle_url('/enrol/instances.php', array('id'=>$course->id));
if (!enrol_is_enabled('manual')) {
    redirect($return);
}

$plugin = enrol_get_plugin('manual');

if ($instances = $DB->get_records('enrol', array('courseid'=>$course->id, 'enrol'=>'manual'), 'id ASC')) {
    $instance = array_shift($instances);
    if ($instances) {
<<<<<<< HEAD
        // oh - we allow only one instance per course!!
=======
        // Oh - we allow only one instance per course!!
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        foreach ($instances as $del) {
            $plugin->delete_instance($del);
        }
    }
<<<<<<< HEAD
} else {
    require_capability('moodle/course:enrolconfig', $context);
    // no instance yet, we have to add new instance
    navigation_node::override_active_url(new moodle_url('/enrol/instances.php', array('id'=>$course->id)));
    $instance = new stdClass();
    $instance->id       = null;
    $instance->courseid = $course->id;
}

$mform = new enrol_manual_edit_form(NULL, array($instance, $plugin, $context));
=======
    // Merge these two settings to one value for the single selection element.
    if ($instance->notifyall and $instance->expirynotify) {
        $instance->expirynotify = 2;
    }
    unset($instance->notifyall);

} else {
    require_capability('moodle/course:enrolconfig', $context);
    // No instance yet, we have to add new instance.
    navigation_node::override_active_url(new moodle_url('/enrol/instances.php', array('id'=>$course->id)));
    $instance = new stdClass();
    $instance->id              = null;
    $instance->courseid        = $course->id;
    $instance->expirynotify    = $plugin->get_config('expirynotify');
    $instance->expirythreshold = $plugin->get_config('expirythreshold');
}

$mform = new enrol_manual_edit_form(null, array($instance, $plugin, $context));
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

if ($mform->is_cancelled()) {
    redirect($return);

} else if ($data = $mform->get_data()) {
<<<<<<< HEAD
    if ($instance->id) {
        $reset = ($instance->status != $data->status);

        $instance->status       = $data->status;
        $instance->enrolperiod  = $data->enrolperiod;
        $instance->roleid       = $data->roleid;
        $instance->timemodified = time();
        $DB->update_record('enrol', $instance);

        if ($reset) {
=======
    if ($data->expirynotify == 2) {
        $data->expirynotify = 1;
        $data->notifyall = 1;
    } else {
        $data->notifyall = 0;
    }
    if (!$data->expirynotify) {
        // Keep previous/default value of disabled expirythreshold option.
        $data->expirythreshold = $instance->expirythreshold;
    }
    if ($instance->id) {
        $instance->roleid          = $data->roleid;
        $instance->enrolperiod     = $data->enrolperiod;
        $instance->expirynotify    = $data->expirynotify;
        $instance->notifyall       = $data->notifyall;
        $instance->expirythreshold = $data->expirythreshold;
        $instance->timemodified    = time();

        $DB->update_record('enrol', $instance);

        // Use standard API to update instance status.
        if ($instance->status != $data->status) {
            $instance = $DB->get_record('enrol', array('id'=>$instance->id));
            $plugin->update_status($instance, $data->status);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            $context->mark_dirty();
        }

    } else {
<<<<<<< HEAD
        $fields = array('status'=>$data->status, 'enrolperiod'=>$data->enrolperiod, 'roleid'=>$data->roleid);
=======
        $fields = array(
            'status'          => $data->status,
            'roleid'          => $data->roleid,
            'enrolperiod'     => $data->enrolperiod,
            'expirynotify'    => $data->expirynotify,
            'notifyall'       => $data->notifyall,
            'expirythreshold' => $data->expirythreshold);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $plugin->add_instance($course, $fields);
    }

    redirect($return);
}

$PAGE->set_title(get_string('pluginname', 'enrol_manual'));
$PAGE->set_heading($course->fullname);

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'enrol_manual'));
$mform->display();
echo $OUTPUT->footer();
