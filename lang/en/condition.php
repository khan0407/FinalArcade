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
 * Strings for component 'condition', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   condition
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addcompletions'] = 'Add {no} activity conditions to form';
$string['addgrades'] = 'Add {no} grade conditions to form';
<<<<<<< HEAD
=======
$string['adduserfields'] = 'Add {no} user field conditions to form';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['availabilityconditions'] = 'Restrict access';
$string['availablefrom'] = 'Allow access from';
$string['availablefrom_help'] = 'Access from/to dates determine when students can access the activity via a link on the course page.

The difference between access from/to dates and availability settings for the activity is that outside the set dates, access from/to prevents access completely, while availability allows students to view the activity description.';
$string['availableuntil'] = 'Allow access until';
$string['badavailabledates'] = 'Invalid dates. If you set both dates, the \'Allow access from\' date should be before the \'until\' date.';
$string['badgradelimits'] = 'If you set both an upper and lower grade limit, the upper limit must be higher than the lower limit.';
$string['completion_complete'] = 'must be marked complete';
$string['completioncondition'] = 'Activity completion condition';
$string['completioncondition_help'] = 'This setting determines any activity completion conditions which must be met in order to access the activity. Note that completion tracking must first be set before an activity completion condition can be set.

Multiple activity completion conditions may be set if desired.  If so, access to the activity will only be permitted when ALL activity completion conditions are met.';
$string['completionconditionsection'] = 'Activity completion condition';
$string['completionconditionsection_help'] = 'This setting determines any activity completion conditions which must be met in order to access the section. Note that completion tracking must first be set before an activity completion condition can be set.

Multiple activity completion conditions may be set if desired.  If so, access to the section will only be permitted when ALL activity completion conditions are met.';
$string['completion_fail'] = 'must be complete with fail grade';
$string['completion_incomplete'] = 'must not be marked complete';
$string['completion_pass'] = 'must be complete with pass grade';
$string['configenableavailability'] = 'When enabled, this lets you set conditions (based on date, grade, or completion) that control whether an activity or resource can be accessed.';
<<<<<<< HEAD
$string['enableavailability'] = 'Enable conditional access';
=======
$string['contains'] = 'contains';
$string['doesnotcontain'] = 'doesn\'t contain';
$string['enableavailability'] = 'Enable conditional access';
$string['endswith'] = 'ends with';
$string['fielddeclaredmultipletimes'] = 'You can not declare the same field more than once per activity.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['grade_atleast'] = 'must be at least';
$string['gradecondition'] = 'Grade condition';
$string['gradecondition_help'] = 'This setting determines any grade conditions which must be met in order to access the activity.

Multiple grade conditions may be set if desired. If so, the activity will only allow access when ALL grade conditions are met.';
$string['gradeconditionsection'] = 'Grade condition';
$string['gradeconditionsection_help'] = 'This setting determines any grade conditions which must be met in order to access the section.

Multiple grade conditions may be set if desired. If so, the section will only allow access when ALL grade conditions are met.';
$string['grade_upto'] = 'and less than';
$string['gradeitembutnolimits'] = 'You must enter an upper or lower limit, or both.';
$string['gradelimitsbutnoitem'] = 'You must choose a grade item.';
$string['gradesmustbenumeric'] = 'The minimum and maximum grades must be numeric (or blank).';
<<<<<<< HEAD
=======
$string['isempty'] = 'is empty';
$string['isequalto'] = 'is equal to';
$string['isnotempty'] = 'is not empty';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['none'] = '(none)';
$string['notavailableyet'] = 'Not available yet';
$string['requires_completion_0'] = 'Not available unless the activity <strong>{$a}</strong> is incomplete.';
$string['requires_completion_1'] = 'Not available until the activity <strong>{$a}</strong> is marked complete.';
$string['requires_completion_2'] = 'Not available until the activity <strong>{$a}</strong> is complete and passed.';
$string['requires_completion_3'] = 'Not available unless the activity <strong>{$a}</strong> is complete and failed.';
$string['requires_date'] = 'Available from {$a}.';
$string['requires_date_before'] = 'Available until {$a}.';
$string['requires_date_both'] = 'Available from {$a->from} to {$a->until}.';
$string['requires_date_both_single_day'] = 'Available on {$a}.';
$string['requires_grade_any'] = 'Not available until you have a grade in <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Not available unless you get an appropriate score in <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Not available until you achieve a required score in <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Not available unless you get a particular score in <strong>{$a}</strong>.';
<<<<<<< HEAD
=======
$string['requires_user_field_contains'] = 'Not available unless your <strong>{$a->field}</strong> contains <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'Not available if your <strong>{$a->field}</strong> contains <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'Not available unless your <strong>{$a->field}</strong> ends with <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'Not available unless your <strong>{$a->field}</strong> is empty.';
$string['requires_user_field_isequalto'] = 'Not available unless your <strong>{$a->field}</strong> is equal to <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'Not available if your <strong>{$a->field}</strong> is empty.';
$string['requires_user_field_startswith'] = 'Not available unless your <strong>{$a->field}</strong> starts withs <strong>{$a->value}</strong>.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['showavailability'] = 'Before activity can be accessed';
$string['showavailabilitysection'] = 'Before section can be accessed';
$string['showavailability_hide'] = 'Hide activity entirely';
$string['showavailability_show'] = 'Show activity greyed-out, with restriction information';
$string['showavailabilitysection_hide'] = 'Hide section entirely';
$string['showavailabilitysection_show'] = 'Show section greyed-out, with restriction information';
<<<<<<< HEAD
=======
$string['startswith'] = 'starts with';
$string['userfield'] = 'User field';
$string['userfield_help'] = 'You can restrict access based on any field from the users profile.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['userrestriction_hidden'] = 'Restricted (completely hidden, no message): &lsquo;{$a}&rsquo;';
$string['userrestriction_visible'] = 'Restricted: &lsquo;{$a}&rsquo;';
$string['groupingnoaccess'] = 'You do not currently belong to a group which has access to this section. ';
