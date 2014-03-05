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
 * Strings for component 'assignfeedback_pdf', language 'en'
 *
 * @package   assignfeedback_pdf
 * @copyright 2012 Davo Smith
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

//$string['allowpdffeedback'] = 'Enabled';
$string['addquicklist'] = 'Add to comment Quicklist';
$string['annotatesubmission'] = 'Annotate submission';
$string['annotationhelp'] = 'Annotation help';
$string['annotationhelp_text'] = '<table>
<thead><tr><th>Control</th><th>Keyboard shortcut</th><th>Description</th></tr></thead>
<tr><td>{$a->save}</td><td>&nbsp;</td><td>Close annotation without generating a response PDF (note all annotations are saved immediately as they are saved</td></tr>
 <tr><td>{$a->generate}</td><td>&nbsp;</td><td>Generate an annotated PDF for the student to download</td></tr>
 <tr><td>Find comments</td><td>&nbsp;</td><td>Jump straight to a previously entered comment (on this submission) and highlight it.</td></tr>
 <tr><td>Show previous</td><td>&nbsp;</td><td>Show comments for this student from another assignment on this course (in a side frame)</td></tr>
 <tr><td>&lt;-- Prev</td><td>p</td><td>View the previous page</td></tr>
 <tr><td>Next --&gt;</td><td>n</td><td>View the next page</td></tr>
 <tr><td>Background colour</td><td>[ and ]</td><td>Change the fill colour for the comment box (also available by right-clicking on a comment)</td></tr>
 <tr><td>Line colour</td><td>{ and }</td><td>Change the colour for annotations</td></tr>
 <tr><td>Choose stamp</td><td>&nbsp;</td><td>Choose the stamp to use for the stamp tool (new stamps can be added to the \'pix/stamps\' folder on the server)</td></tr>
 <tr><td>{$a->comment}</td><td>c</td><td>Click on the page to add a comment box, type in the comment, then click on the page again to save. Click on comment to edit, drag to move. Right-click to change colour, save to quicklist or delete (or delete text to delete).</td></tr>
 <tr><td>{$a->line}</td><td>l</td><td>Click + drag (or click, move, click) to draw a line on the page</td></tr>
 <tr><td>{$a->rectangle}</td><td>r</td><td>Click + drag (or click, move, click) to draw a rectangle on the page</td></tr>
 <tr><td>{$a->oval}</td><td>o</td><td>Click + drag (or click, move, click) to draw an oval on the page</td></tr>
 <tr><td>{$a->freehand}</td><td>f</td><td>Click + drag to draw freehand lines on the page</td></tr>
 <tr><td>{$a->highlight}</td><td>h</td><td>Click + drag (or click, move, click) to draw a semi-transparent highlight across the existing page content</td></tr>
 <tr><td>{$a->stamp}</td><td>s</td><td>Click to insert the selected stamp at the default size. Click + drag to insert at a different size</td></tr>
 <tr><td>{$a->erase}</td><td>e</td><td>Click in or on an annotation (not a comment) to erase it</td></tr>
 <tr><td>Quicklist</td><td>&nbsp;</td><td>Right-click on the page to insert a comment previously saved to the \'quicklist\'. Use the \'x\' to delete unwanted quicklist items.</td></tr>
 </table>';
$string['backtocommentlist'] = 'Back to comment list';
$string['cancel'] = 'Cancel';
$string['colourred'] = 'Red';
$string['colouryellow'] = 'Yellow';
$string['colourgreen'] = 'Green';
$string['colourblue'] = 'Blue';
$string['colourwhite'] = 'White';
$string['colourclear'] = 'Clear';
$string['colourblack'] = 'Black';
$string['comment'] = 'Comment';
$string['commentcolour'] = '[,] - comment background colour';
$string['commenticon'] = "c - add comments\nHold Ctrl to draw a line";
$string['deletecomment'] = 'Delete comment';
$string['downloadoriginal'] = 'Download original submission PDF';
$string['downloadresponse'] = 'Download response';
$string['draftsaved'] = 'Draft saved';
$string['emptyquicklist'] = 'No items in Quicklist';
$string['emptyquicklist_instructions'] = 'Right-click on a comment to copy it to the Quicklist';
$string['emptysubmission'] = 'Empty submission';
$string['enabled'] = 'PDF feedback';
$string['enabled_help'] = 'This allows the online annotation of PDFs (submitted via the PDF submission type) and the returning of the annotated work to students.';
$string['eraseicon'] = 'e - erase lines and shapes';
$string['errorgenerateimage'] = 'Unable to generate image - details: {$a}';
$string['errormessage'] = 'Error message: ';
$string['errornosubmission'] = 'Atempting to create image for non-existent submission';
$string['errornosubmission2'] = 'Unable to find submission PDF';
$string['errortempfolder'] = 'Unable to create temporary folder';
$string['findcomments'] = 'Find comments';
$string['findcommentsempty'] = 'No comments';
$string['freehandicon'] = 'f - freehand lines';
$string['generateresponse'] = 'Generate response file';
$string['gspath'] = 'Ghostscript path';
$string['gspath2'] = 'On most Linux installs, this can be left as \'/usr/bin/gs\'. On Windows it will be something like \'c:\\gs\\bin\\gswin32c.exe\' (make sure there are no spaces in the path - if necessary copy the files \'gswin32c.exe\' and \'gsdll32.dll\' to a new folder without a space in the path)';
$string['highlighticon'] = 'h - highlight text';
$string['imagefor'] = 'Image files for {$a}';
$string['keyboardnext'] = 'n - next page';
$string['keyboardprev'] = 'p - previous page';
$string['linecolour'] = '{,} - line colour';
$string['lineicon'] = 'l - lines';
$string['next'] = 'Next';
$string['nocomments'] = 'No comments';
$string['okagain'] = 'Click OK to try again';
$string['openlinknewwindow'] = 'Open links in new window';
$string['opennewwindow'] = 'Open this page in a new window';
$string['ovalicon'] = 'o - ovals';
$string['pagenumber'] = 'Page number';
$string['pdf'] = 'PDF feedback';
$string['pluginname'] = 'PDF feedback';
$string['previousnone'] = 'None';
$string['quicklist'] = 'Comment Quicklist';
$string['previous'] = 'Prev';
$string['rectangleicon'] = 'r - rectangles';
$string['resend'] = 'Resend';
$string['responsefor'] = 'Response file for {$a}';
$string['responseok'] = 'Response file generated';
$string['responseproblem'] = 'There was a problem whilst generating the response file';
$string['savedraft'] = 'Save draft annotations';
$string['servercommfailed'] = 'Server communication failed - do you want to resend the message?';
$string['showpreviousassignment'] = 'Show previous assignment';
$string['stamp'] = 'Choose stamp';
$string['stampicon'] = 's - stamp';
$string['testgs'] = 'Test ghostscript path';
$string['test_ok'] = 'The ghostscript path appears to be OK - please check you can see the message in the image below';
$string['test_empty'] = 'The ghostscript path is empty - please enter the correct path';
$string['test_doesnotexist'] = 'The ghostscript path points to a non-existent file';
$string['test_isdir'] = 'The ghostscript path points to a folder, please include the ghostscript program in the path you specify';
$string['test_notexecutable'] = 'The ghostscript points to a file that is not executable';
$string['test_notestfile'] = 'The test PDF is missing';
$string['viewresponse'] = 'View response online';