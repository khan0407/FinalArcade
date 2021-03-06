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
 * Cohort enrolment plugin settings and presets.
 *
<<<<<<< HEAD
 * @package    enrol
 * @subpackage cohort
=======
 * @package    enrol_cohort
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    //--- general settings -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_cohort_settings', '', get_string('pluginname_desc', 'enrol_cohort')));


    //--- enrol instance defaults ----------------------------------------------------------------------------
    if (!during_initial_install()) {
<<<<<<< HEAD
        $options = get_default_enrol_roles(get_context_instance(CONTEXT_SYSTEM));
=======
        $options = get_default_enrol_roles(context_system::instance());
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $student = get_archetype_roles('student');
        $student = reset($student);
        $settings->add(new admin_setting_configselect('enrol_cohort/roleid',
            get_string('defaultrole', 'role'), '', $student->id, $options));

        $options = array(
            ENROL_EXT_REMOVED_UNENROL        => get_string('extremovedunenrol', 'enrol'),
            ENROL_EXT_REMOVED_SUSPENDNOROLES => get_string('extremovedsuspendnoroles', 'enrol'));
        $settings->add(new admin_setting_configselect('enrol_cohort/unenrolaction', get_string('extremovedaction', 'enrol'), get_string('extremovedaction_help', 'enrol'), ENROL_EXT_REMOVED_UNENROL, $options));
    }
}
<<<<<<< HEAD

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
