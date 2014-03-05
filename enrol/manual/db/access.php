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
 * Capabilities for manual enrolment plugin.
 *
 * @package    enrol_manual
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

<<<<<<< HEAD
=======
    /* Add, edit or remove manual enrol instance. */
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'enrol/manual:config' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
        )
    ),

<<<<<<< HEAD
=======
    /* Enrol anybody. */
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'enrol/manual:enrol' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        )
    ),

<<<<<<< HEAD
=======
    /* Manage enrolments of users. */
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'enrol/manual:manage' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        )
    ),

<<<<<<< HEAD
=======
    /* Unenrol anybody (including self) - watch out for data loss. */
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'enrol/manual:unenrol' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        )
    ),

<<<<<<< HEAD
=======
    /* Unenrol self - watch out for data loss. */
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'enrol/manual:unenrolself' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
        )
    ),

);
<<<<<<< HEAD

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
