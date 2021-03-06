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
 * This script allows the number of sections in a course to be increased
 * or decreased, redirecting to the course page.
 *
 * @package core_course
 * @copyright 2012 Dan Poltawski
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since Moodle 2.3
 */

require_once(dirname(__FILE__).'/../config.php');
require_once($CFG->dirroot.'/course/lib.php');

$courseid = required_param('courseid', PARAM_INT);
$increase = optional_param('increase', true, PARAM_BOOL);
$course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
<<<<<<< HEAD
=======
$courseformatoptions = course_get_format($course)->get_format_options();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

$PAGE->set_url('/course/changenumsections.php', array('courseid' => $courseid));

// Authorisation checks.
require_login($course);
require_capability('moodle/course:update', context_course::instance($course->id));
require_sesskey();

<<<<<<< HEAD
if ($increase) {
    // Add an additional section.
    $course->numsections++;
} else {
    // Remove a section.
    $course->numsections--;
}

// Don't go less than 0, intentionally redirect silently (for the case of
// double clicks).
if ($course->numsections >= 0) {
    $DB->update_record('course', $course);
=======
if (isset($courseformatoptions['numsections'])) {
    if ($increase) {
        // Add an additional section.
        $courseformatoptions['numsections']++;
    } else {
        // Remove a section.
        $courseformatoptions['numsections']--;
    }

    // Don't go less than 0, intentionally redirect silently (for the case of
    // double clicks).
    if ($courseformatoptions['numsections'] >= 0) {
        course_get_format($course)->update_course_format_options(
                array('numsections' => $courseformatoptions['numsections']));
    }
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
}

$url = course_get_url($course);
$url->set_anchor('changenumsections');
// Redirect to where we were..
redirect($url);
