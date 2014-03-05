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
 * This file contains the capabilities used by the lti module
 *
 * @package    mod_lti
 * @copyright  2009 Marc Alier, Jordi Piguillem, Nikolas Galanis, marc.alier@upc.edu
 * @copyright  2009 Universitat Politecnica de Catalunya http://www.upc.edu
 * @author     Marc Alier
 * @author     Jordi Piguillem
 * @author     Nikolas Galanis
 * @author     Chris Scribner
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$capabilities = array(

<<<<<<< HEAD
=======
    // Whether the user can see the link to the external tool and follow it.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'mod/lti:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
<<<<<<< HEAD
            'guest' => CAP_ALLOW,
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            'student' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

<<<<<<< HEAD
=======
    // Add an External tool activity to a course.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'mod/lti:addinstance' => array(
        'riskbitmask' => RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/course:manageactivities'
    ),

<<<<<<< HEAD
    'mod/lti:grade' => array(
        'riskbitmask' => RISK_XSS,
=======
    // Controls access to the grade.php script, which shows all the submissions
    // made to the external tool that have been reported back to Moodle.
    'mod/lti:grade' => array(
        'riskbitmask' => RISK_PERSONAL,
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

<<<<<<< HEAD
    'mod/lti:manage' => array(
        'riskbitmask' => RISK_XSS,
=======
    // When the user arrives at the external tool, if they have this capability
    // in Moodle, then they given the Instructor role in the remote system,
    // otherwise they are given Learner. See the lti_get_ims_role function.
    'mod/lti:manage' => array(
        'riskbitmask' => RISK_PERSONAL, // A bit of a guess, but seems likely.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

<<<<<<< HEAD
=======
    // The ability to create or edit tool configurations for particular courses.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'mod/lti:addcoursetool' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
<<<<<<< HEAD
            'teacher' => CAP_ALLOW,
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

<<<<<<< HEAD
=======
    // The ability to request the adminstirator to configure a particular
    // External tool globally.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'mod/lti:requesttooladd' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
<<<<<<< HEAD
            'teacher' => CAP_ALLOW,
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    )
);
