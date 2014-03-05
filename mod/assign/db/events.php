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
 * List of events generated by the assignment module
 *
 * @package   mod_assign
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$handlers = array();

<<<<<<< HEAD
/* List of events thrown from assignment module

assignment_finalize_sent - object course, object user, object cm, object assignment, fileareaname
assignment_file_sent     - object course, object user, object cm, object assignment, object file

=======
/* List of events generated by the assign module, with the fields on the event object.

assessable_content_uploaded
    ->modulename     = 'assign';
    ->cmid           = // The cmid of the assign.
    ->itemid         = // The submission id of the user submission.
    ->courseid       = // The course id of the course the assign belongs to.
    ->userid         = // The user id that the attempt belongs to.
    ->content        = // The text content entered by the user (empty if no content submitted).
    ->pathnamehashes = // An array of pathnamehashes of the files submitted by the user (var not passed if not set).

assessable_file_uploaded
    ->modulename     = 'assign';
    ->cmid           = // The cmid of the assign.
    ->itemid         = // The submission id of the user submission.
    ->courseid       = // The course id of the course the assign belongs to.
    ->userid         = // The user id that the attempt belongs to.
    ->pathnamehashes = // An array of pathnamehashes of the files submitted by the user (var not passed if not set).

assessable_submitted
    ->modulename     = 'assign';
    ->cmid           = // The cmid of the assign.
    ->itemid         = // The submission id of the user submission.
    ->courseid       = // The course id of the course the assign belongs to.
    ->userid         = // The user id that the attempt belongs to.
    ->params         = // Array of module specific parameters.
        -> submission_editable = // Whether user can edit submission before assessment has been done.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
*/
