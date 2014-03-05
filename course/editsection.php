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
<<<<<<< HEAD
 * Edit the introduction of a section
=======
 * Edit the section basic information and availability
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 *
 * @copyright 1999 Martin Dougiamas  http://dougiamas.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package course
 */

require_once("../config.php");
require_once("lib.php");
<<<<<<< HEAD
require_once($CFG->libdir.'/filelib.php');
require_once($CFG->libdir . '/gradelib.php');
require_once($CFG->libdir . '/completionlib.php');
require_once($CFG->libdir . '/conditionlib.php');

require_once('editsection_form.php');

$id = required_param('id',PARAM_INT);    // Week/topic ID
=======
require_once($CFG->libdir . '/conditionlib.php');

$id = required_param('id', PARAM_INT);    // course_sections.id
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$sectionreturn = optional_param('sr', 0, PARAM_INT);

$PAGE->set_url('/course/editsection.php', array('id'=>$id, 'sr'=> $sectionreturn));

$section = $DB->get_record('course_sections', array('id' => $id), '*', MUST_EXIST);
$course = $DB->get_record('course', array('id' => $section->course), '*', MUST_EXIST);
<<<<<<< HEAD

require_login($course);
$context = get_context_instance(CONTEXT_COURSE, $course->id);
require_capability('moodle/course:update', $context);

$editoroptions = array('context'=>$context ,'maxfiles' => EDITOR_UNLIMITED_FILES, 'maxbytes'=>$CFG->maxbytes, 'trusttext'=>false, 'noclean'=>true);
$section = file_prepare_standard_editor($section, 'summary', $editoroptions, $context, 'course', 'section', $section->id);
$section->usedefaultname = (is_null($section->name));

if (!empty($CFG->enableavailability)) {
    // Get section availability conditions from sectioncache.
    $modinfo = get_fast_modinfo($course);
    $sectioninfo = $modinfo->get_section_info($section->section);
    $section->conditionsgrade = $sectioninfo->conditionsgrade;
    $section->conditionscompletion = $sectioninfo->conditionscompletion;
}

$mform = new editsection_form($PAGE->url, array('course' => $course, 'editoroptions' => $editoroptions,
        'cs' => $section));
$mform->set_data($section); // set current value

$returnurl = course_get_url($course, $sectionreturn);

/// If data submitted, then process and store.
if ($mform->is_cancelled()){
    redirect($returnurl);

} else if ($data = $mform->get_data()) {
    if (empty($data->usedefaultname)) {
        $section->name = $data->name;
    } else {
        $section->name = null;
    }
    $data = file_postupdate_standard_editor($data, 'summary', $editoroptions, $context, 'course', 'section', $section->id);
    $section->summary = $data->summary;
    $section->summaryformat = $data->summaryformat;
    if (!empty($CFG->enableavailability)) {
        $section->availablefrom = $data->availablefrom;
        $section->availableuntil = $data->availableuntil;
        if (isset($data->groupingid)) {
            $section->groupingid = $data->groupingid;
        }
        $section->showavailability = $data->showavailability;
    }
    $DB->update_record('course_sections', $section);
    if (!empty($CFG->enableavailability)) {
        // Update grade and completion conditions
        condition_info_section::update_section_from_form($section, $data);
    }
    rebuild_course_cache($course->id);

    add_to_log($course->id, "course", "editsection", "editsection.php?id=$section->id", "$section->section");
    $PAGE->navigation->clear_cache();
    redirect($returnurl);
}

$sectionname  = get_section_name($course, $section);
=======
$sectionnum = $section->section;

require_login($course);
$context = context_course::instance($course->id);
require_capability('moodle/course:update', $context);

// get section_info object with all availability options
$sectioninfo = get_fast_modinfo($course)->get_section_info($sectionnum);

$editoroptions = array('context'=>$context ,'maxfiles' => EDITOR_UNLIMITED_FILES, 'maxbytes'=>$CFG->maxbytes, 'trusttext'=>false, 'noclean'=>true);
$mform = course_get_format($course->id)->editsection_form($PAGE->url,
        array('cs' => $sectioninfo, 'editoroptions' => $editoroptions));
// set current value, make an editable copy of section_info object
// this will retrieve all format-specific options as well
$mform->set_data(convert_to_array($sectioninfo));

if ($mform->is_cancelled()){
    // form cancelled, return to course
    redirect(course_get_url($course, $section, array('sr' => $sectionreturn)));
} else if ($data = $mform->get_data()) {
    // data submitted and validated, update and return to course
    $DB->update_record('course_sections', $data);
    rebuild_course_cache($course->id, true);
    if (isset($data->section)) {
        // usually edit form does not change relative section number but just in case
        $sectionnum = $data->section;
    }
    if (!empty($CFG->enableavailability)) {
        // Update grade and completion conditions
        $sectioninfo = get_fast_modinfo($course)->get_section_info($sectionnum);
        condition_info_section::update_section_from_form($sectioninfo, $data);
        rebuild_course_cache($course->id, true);
    }
    course_get_format($course->id)->update_section_format_options($data);

    add_to_log($course->id, "course", "editsection", "editsection.php?id=$id", "$sectionnum");
    $PAGE->navigation->clear_cache();
    redirect(course_get_url($course, $section, array('sr' => $sectionreturn)));
}

// the edit form is displayed for the first time or there was a validation
// error on the previous step. Display the edit form:
$sectionname  = get_section_name($course, $sectionnum);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$stredit      = get_string('edita', '', " $sectionname");
$strsummaryof = get_string('summaryof', '', " $sectionname");

$PAGE->set_title($stredit);
$PAGE->set_heading($course->fullname);
$PAGE->navbar->add($stredit);
echo $OUTPUT->header();

echo $OUTPUT->heading($strsummaryof);

$mform->display();
echo $OUTPUT->footer();
