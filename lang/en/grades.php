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
 * Strings for component 'grades', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activities'] = 'Activities';
$string['addcategory'] = 'Add category';
$string['addcategoryerror'] = 'Could not add category.';
$string['addexceptionerror'] = 'Error occurred while adding exception for userid:gradeitem';
$string['addfeedback'] = 'Add feedback';
$string['addgradeletter'] = 'Add a grade letter';
$string['addidnumbers'] = 'Add ID numbers';
$string['additem'] = 'Add grade item';
$string['addoutcome'] = 'Add an outcome';
$string['addoutcomeitem'] = 'Add outcome item';
$string['addscale'] = 'Add a scale';
$string['aggregateextracreditmean'] = 'Mean of grades (with extra credits)';
$string['aggregatemax'] = 'Highest grade';
$string['aggregatemean'] = 'Mean of grades';
$string['aggregatemedian'] = 'Median of grades';
$string['aggregatemin'] = 'Lowest grade';
$string['aggregatemode'] = 'Mode of grades';
$string['aggregateonlygraded'] = 'Aggregate only non-empty grades';
$string['aggregateonlygraded_help'] = 'An empty grade is a grade which is missing from the gradebook. It may be from an assignment submission which has not yet been graded or from a quiz which has not yet been attempted etc.

This setting determines whether empty grades are not included in the aggregation or are counted as minimal grades, for example 0 for an assignment graded between 0 and 100.';
$string['aggregateoutcomes'] = 'Include outcomes in aggregation';
$string['aggregateoutcomes_help'] = 'If enabled, outcomes are included in the aggregation. This may result in an unexpected category total.';
$string['aggregatesonly'] = 'Aggregates only';
$string['aggregatesubcats'] = 'Aggregate including subcategories';
$string['aggregatesubcats_help'] = 'This setting determines whether grades in subcategories are included in the aggregation.';
$string['aggregatesum'] = 'Sum of grades';
$string['aggregateweightedmean'] = 'Weighted mean of grades';
$string['aggregateweightedmean2'] = 'Simple weighted mean of grades';
$string['aggregation'] = 'Aggregation';
$string['aggregation_help'] = 'The aggregation determines how grades in a category are combined, such as

* Mean of grades - The sum of all grades divided by the total number of grades
* Median of grades - The middle grade when grades are arranged in order of size
* Lowest grade
* Highest grade
* Mode of grades - The grade that occurs the most frequently
* Sum of grades - The sum of all grade values, with scale grades being ignored';
$string['aggregation_link'] = 'grade/aggregation';
$string['aggregationcoef'] = 'Aggregation coefficient';
$string['aggregationcoefextra'] = 'Extra credit'; // for the header of the table at Edit categories and items page
$string['aggregationcoefextra_help'] = 'If the aggregation is Sum of grades or Simple weighted mean and the extra credit checkbox is ticked, the grade item\'s maximum grade is not added to the category\'s maximum grade, resulting in the possibility of achieving the maximum grade (or grades over the maximum if enabled by the site administrator) in the category without having the maximum grade in all the grade items.

If the aggregation is Mean of grades (with extra credits) and the extra credit is set to a value greater than zero, the extra credit is the factor by which the grade is multiplied before adding it to the total after the computation of the mean.';
$string['aggregationcoefextra_link'] = 'grade/aggregation';
$string['aggregationcoefextrasum'] = 'Extra credit'; // for the form with checkboxes: Sum of grades or Simple weighted mean
$string['aggregationcoefextrasum_help'] = 'If the extra credit checkbox is ticked, the grade item\'s maximum grade is not added to the category\'s maximum grade, resulting in the possibility of achieving the maximum grade (or grades over the maximum if enabled by the site administrator) in the category without having the maximum grade in all the grade items.';
$string['aggregationcoefextrasum_link'] = 'grade/aggregation';
$string['aggregationcoefextraweight'] = 'Extra credit weight'; // for the form with input: Mean of grades (with extra credits) only
$string['aggregationcoefextraweight_help'] = 'If the extra credit weight is set to a value greater than zero, the grade acts as extra credit during aggregation. The number is the factor by which the grade is multiplied before adding it to the total for the computation of the mean.';
$string['aggregationcoefextraweight_link'] = 'grade/aggregation';
$string['aggregationcoefweight'] = 'Item weight';
$string['aggregationcoefweight_help'] = 'The item weight is used in the category aggregation to influence the importance of the item compared with other grade items in the same category.';
$string['aggregationcoefweight_link'] = 'grade/aggregation';
$string['aggregationposition'] = 'Aggregation position';
$string['aggregationposition_help'] = 'This setting determines whether the category and course total columns are displayed first or last in the gradebook reports.';
$string['aggregationsvisible'] = 'Available aggregation types';
$string['aggregationsvisiblehelp'] = 'Select all aggregation types that should be available. Hold down the Ctrl key to select multiple items.';
$string['allgrades'] = 'All grades by category';
$string['allstudents'] = 'All students';
$string['allusers'] = 'All users';
$string['autosort'] = 'Auto-sort';
$string['availableidnumbers'] = 'Available ID numbers';
$string['average'] = 'Average';
$string['averagesdecimalpoints'] = 'Decimals in column averages';
$string['averagesdecimalpoints_help'] = 'This setting determines the number of decimal points to display for each average or whether the overall decimal points setting for the category or grade item is used (inherit).';
$string['averagesdisplaytype'] = 'Column averages display type';
$string['averagesdisplaytype_help'] = 'This setting determines whether the average (mean) is displayed as real grades, percentages or letters, or whether the display type for the category or grade item is used (inherit).';
$string['backupwithoutgradebook'] = 'Backup does not contain gradebook configuration';
$string['badgrade'] = 'Supplied grade is invalid';
$string['badlyformattedscale'] = 'Please enter a comma-separated list of values (at least two values required).';
$string['baduser'] = 'Supplied user is invalid';
$string['bonuspoints'] = 'Bonus points';
$string['bulkcheckboxes'] = 'Bulk checkboxes';
$string['calculatedgrade'] = 'Calculated grade';
$string['calculation'] = 'Calculation';
$string['calculation_help'] = 'A grade calculation is a formula used to determine grades. The formula should start with an equal (=) sign and may use common mathematical operators, such as max, min and sum. If desired, other grade items may be included in the calculation by typing the ID numbers in double square brackets.';
$string['calculation_link'] = 'grade/calculation';
$string['calculationadd'] = 'Add calculation';
$string['calculationedit'] = 'Edit calculation';
$string['calculationsaved'] = 'Calculation saved';
$string['calculationview'] = 'View calculation';
$string['cannotaccessgroup'] = 'Can not access grades of selected group, sorry.';
$string['categories'] = 'Categories';
$string['categoriesanditems'] = 'Categories and items';
$string['categoriesedit'] = 'Edit categories and items';
$string['category'] = 'Category';
$string['categoryedit'] = 'Edit category';
$string['categoryname'] = 'Category name';
$string['categorytotal'] = 'Category total';
$string['categorytotalname'] = 'Category total name';
$string['categorytotalfull'] = '{$a->category} total';
$string['combo'] = 'Tabs and Dropdown menu';
$string['compact'] = 'Compact';
$string['componentcontrolsvisibility'] = 'Whether this grade item is hidden is controlled by the activity settings.';
$string['contract'] = 'Contract category';
$string['controls'] = 'Controls';
$string['courseavg'] = 'Course average';
$string['coursegradecategory'] = 'Course grade category';
$string['coursegradedisplaytype'] = 'Course grade display type';
$string['coursegradedisplayupdated'] = 'The course grade display type has been updated.';
$string['coursegradesettings'] = 'Course grade settings';
$string['coursename'] = 'Course name';
$string['coursescales'] = 'Course scales';
$string['coursesettings'] = 'Course settings';
$string['coursesettingsexplanation'] = 'Course settings determine how the gradebook appears for all participants in the course.';
$string['coursetotal'] = 'Course total';
$string['createcategory'] = 'Create category';
$string['createcategoryerror'] = 'Could not create a new category';
$string['creatinggradebooksettings'] = 'Creating gradebook settings';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Current parent aggregation';
$string['curveto'] = 'Curve to';
$string['decimalpoints'] = 'Overall decimal points';
$string['decimalpoints_help'] = 'This setting determines the number of decimal points to display for each grade. It has no effect on grade calculations, which are made with an accuracy of 5 decimal places.';
$string['default'] = 'Default';
$string['defaultprev'] = 'Default ({$a})';
$string['deletecategory'] = 'Delete category';
$string['disablegradehistory'] = 'Disable grade history';
$string['disablegradehistory_help'] = 'Disable history tracking of changes in grades related tables. This may speed up the server a little and conserve space in database.';
$string['displaylettergrade'] = 'Display letter grades';
$string['displaypercent'] = 'Display percents';
$string['displaypoints'] = 'Display points';
$string['displayweighted'] = 'Display weighted grades';
$string['dropdown'] = 'Dropdown menu';
$string['droplow'] = 'Drop the lowest';
$string['droplow_help'] = 'This setting enables a specified number of the lowest grades to be excluded from the aggregation.';
<<<<<<< HEAD
=======
$string['droplowestvalue'] = 'Set drop lowest grade value';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['dropped'] = 'Dropped';
$string['dropxlowest'] = 'Drop X lowest';
$string['dropxlowestwarning'] = 'Note: If you use drop x lowest the grading assumes that all items in the category have the same point value. If point values differ results will be unpredictable';
$string['duplicatescale'] = 'Duplicate scale';
$string['edit'] = 'Edit';
$string['editcalculation'] = 'Edit calculation';
$string['editcalculationverbose'] = 'Edit calculation for {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Edit feedback';
$string['editgrade'] = 'Edit grade';
$string['editgradeletters'] = 'Edit grade letters';
$string['editoutcome'] = 'Edit outcome';
$string['editoutcomes'] = 'Edit outcomes';
$string['editscale'] = 'Edit scale';
$string['edittree'] = 'Categories and items';
$string['editverbose'] = 'Edit {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Enable AJAX';
$string['enableajax_help'] = 'Adds a layer of AJAX functionality to the grader report, simplifying and speeding up common operations. Depends on Javascript being switched on at the user\'s browser level.';
$string['enableoutcomes'] = 'Enable outcomes';
$string['enableoutcomes_help'] = 'Support for Outcomes (also known as Competencies, Goals, Standards or Criteria) means that we can grade things using one or more scales that are tied to outcome statements. Enabling outcomes makes such special grading possible throughout the site.';
$string['encoding'] = 'Encoding';
$string['errorcalculationnoequal'] = 'Formula must start with equal sign (=1+2)';
$string['errorcalculationunknown'] = 'Invalid formula';
$string['errorcalculationbroken'] = 'Probably circular reference or broken calculation formula';
$string['errorgradevaluenonnumeric'] = 'Received non-numeric for low or high grade for';
$string['errornocalculationallowed'] = 'Calculations are not allowed for this item';
$string['errornocategorisedid'] = 'Could not get an uncategorised id!';
$string['errornocourse'] = 'Could not get course information';
$string['errorreprintheadersnonnumeric'] = 'Received non-numeric value for reprint-headers';
$string['errorsavegrade'] = 'Could not save grade, sorry.';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Error updating the "Aggregate only non-empty grades" setting of grade category ID {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Error updating the "Include outcomes in aggregation" setting of grade category ID {$a->id}';
$string['errorupdatinggradecategoryaggregatesubcats'] = 'Error updating the "Aggregate including subcategories" setting of grade category ID {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Error updating the aggregation type of grade category ID {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Error updating the aggregation coefficient (weight or extra credit) of grade item ID {$a->id}';
$string['excluded'] = 'Excluded';
$string['excluded_help'] = 'If ticked, the grade will not be included in any aggregation.';
$string['expand'] = 'Expand category';
$string['export'] = 'Export';
$string['exportalloutcomes'] = 'Export all outcomes';
$string['exportfeedback'] = 'Include feedback in export';
$string['exportplugins'] = 'Export plugins';
$string['exportsettings'] = 'Export settings';
$string['exportonlyactive'] = 'Require active enrolment';
$string['exportonlyactive_help'] = 'Only include students in the export whose enrolment has not been suspended';
$string['exportto'] = 'Export to';
<<<<<<< HEAD
=======
$string['extracreditvalue'] = 'Extra credit value for {$a}';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['extracreditwarning'] = 'Note: Setting all items for a category to extra credit will effectively remove them from the grade calculation. Since there will be no point total';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = 'This box enables any comments about the grade to be added.';
$string['feedbackadd'] = 'Add feedback';
$string['feedbackedit'] = 'Edit feedback';
<<<<<<< HEAD
=======
$string['feedbackforgradeitems'] = 'Feedback for {$a}';
$string['feedbacks'] = 'Feedbacks';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['feedbacksaved'] = 'Feedback saved';
$string['feedbackview'] = 'View feedback';
$string['finalgrade'] = 'Final grade';
$string['finalgrade_help'] = 'If the overridden checkbox is ticked, a grade may be added or amended.';
$string['fixedstudents'] = 'Static students column';
$string['fixedstudents_help'] = 'Allows grades to scroll horizontally without losing sight of the students column, by making it static.';
$string['forceoff'] = 'Force: Off';
$string['forceon'] = 'Force: On';
$string['forelementtypes'] = 'for the selected {$a}';
$string['forstudents'] = 'For students';
$string['full'] = 'Full';
$string['fullmode'] = 'Full view';
$string['fullview'] = 'Full view';
$string['generalsettings'] = 'General settings';
$string['grade'] = 'Grade';
$string['gradeadministration'] = 'Grade administration';
$string['gradeanalysis'] = 'Grade analysis';
$string['gradebook'] = 'Gradebook';
$string['gradebookhiddenerror'] = 'The gradebook is currently set to hide everything from students.';
$string['gradebookhistories'] = 'Grade histories';
$string['gradeboundary'] = 'Letter grade boundary';
$string['gradeboundary_help'] = 'This setting determines the minimum percentage over which grades will be assigned the grade letter.';
$string['gradecategories'] = 'Grade categories';
$string['gradecategory'] = 'Grade category';
$string['gradecategoryonmodform'] = 'Grade category';
$string['gradecategoryonmodform_help'] =  'This setting controls the category in which this activity\'s grades are placed in the gradebook.';
$string['gradecategorysettings'] = 'Grade category settings';
$string['gradedisplay'] = 'Grade display';
$string['gradedisplaytype'] = 'Grade display type';
$string['gradedisplaytype_help'] = 'This setting determines how grades are displayed in the grader and user reports.

* Real - Actual grades
* Percentage
* Letter - Letters or words are used to represent a range of grades';
$string['gradedon'] = 'Graded: {$a}';
$string['gradeexport'] = 'Grade export';
<<<<<<< HEAD
=======
$string['gradeexportcustomprofilefields'] = 'Grade export custom profile fields';
$string['gradeexportcustomprofilefields_desc'] = 'Include these custom profile fields in the grade export, separated by commas.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['gradeexportdecimalpoints'] = 'Grade export decimal points';
$string['gradeexportdecimalpoints_desc'] = 'The number of decimal points to display for export. This can be overridden during export.';
$string['gradeexportdisplaytype'] = 'Grade export display type';
$string['gradeexportdisplaytype_desc'] = 'Grades can be shown as real grades, as percentages (in reference to the minimum and maximum grades) or as letters (A, B, C etc..) during export. This can be overridden during export.';
<<<<<<< HEAD
=======
$string['gradeexportuserprofilefields'] = 'Grade export user profile fields';
$string['gradeexportuserprofilefields_desc'] = 'Include these user profile fields in the grade export, separated by commas.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradehelp'] = 'Grade help';
$string['gradehistorylifetime'] = 'Grade history lifetime';
$string['gradehistorylifetime_help'] = 'This specifies the length of time you want to keep history of changes in grade related tables. It is recommended to keep it as long as possible. If you experience performance problems or have limited database space, try to set lower value.';
$string['gradeimport'] = 'Grade import';
$string['gradeitem'] = 'Grade item';
$string['gradeitemaddusers'] = 'Exclude from grading';
$string['gradeitemadvanced'] = 'Advanced grade item options';
$string['gradeitemadvanced_help'] = 'Select all elements that should be displayed as advanced when editing grade items.';
$string['gradeitemislocked'] = 'This activity is locked in the gradebook. Changes that are made to grades in this activity will not be copied to the gradebook until it is unlocked.';
$string['gradeitemlocked'] = 'Grading locked';
$string['gradeitemmembersselected'] = 'Excluded from grading';
$string['gradeitemnonmembers'] = 'Included in grading';
$string['gradeitemremovemembers'] = 'Include in grading';
$string['gradeitems'] = 'Grade items';
$string['gradeitemsettings'] = 'Grade item settings';
$string['gradeitemsinc'] = 'Grade items to be included';
$string['gradeletter'] = 'Grade letter';
$string['gradeletter_help'] = 'Grade letters are letters, A, B, C, ..., or words, for example Distinction, Merit, Pass, ..., used to represent a range of grades.';
$string['gradeletternote'] = 'To delete a grade letter just empty any of the<br /> three text areas for that letter and click submit.';
$string['gradeletters'] = 'Grade letters';
$string['gradelocked'] = 'Grade is locked';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Maximum grade';
$string['grademax_help'] = 'This setting determines the maximum grade when using the value grade type. The maximum grade for an activity-based grade item is set on the activity settings page.';
$string['grademin'] = 'Minimum grade';
$string['grademin_help'] = 'This setting determines the minimum grade when using the value grade type.';
$string['gradeoutcomeitem'] = 'Grade outcome item';
$string['gradeoutcomes'] = 'Outcomes';
$string['gradeoutcomescourses'] = 'Course outcomes';
$string['gradepass'] = 'Grade to pass';
$string['gradepass_help'] = 'This setting determines the minimum grade required to pass. The value is used in activity and course completion, and in the gradebook, where pass grades are highlighted in green and fail grades in red.';
$string['gradepreferences'] = 'Grade preferences';
$string['gradepreferenceshelp'] = 'Grade preferences Help';
$string['gradepublishing'] = 'Enable publishing';
$string['gradepublishing_help'] = 'Enable publishing in exports and imports: Exported grades can be accessed by accessing a URL, without having to log on to a Moodle site. Grades can be imported by accessing such a URL (which means that a Moodle site can import grades published by another site). By default only administrators may use this feature, please educate users before adding required capabilities to other roles (dangers of bookmark sharing and download accelerators, IP restrictions, etc.).';
$string['gradereport'] = 'Grade report';
$string['graderreport'] = 'Grader report';
$string['grades'] = 'Grades';
$string['gradesforuser'] = 'Grades for {$a->user}';
$string['gradesonly'] = 'Grades only';
$string['gradessettings'] = 'Grade settings';
$string['gradetype'] = 'Grade type';
$string['gradetype_help'] = 'There are 4 grade types:

* None - No grading possible
* Value - A numerical value with a maximum and minimum
* Scale - An item in a list
* Text - Feedback only

Only value and scale grade types may be aggregated. The grade type for an activity-based grade item is set on the activity settings page.';
$string['gradeview'] = 'View grade';
$string['gradeweighthelp'] = 'Grade weight help';
$string['groupavg'] = 'Group average';
$string['hidden'] = 'Hidden';
$string['hidden_help'] = 'If ticked, grades are hidden from students. A hidden until date may be set if desired, to release grades after grading is completed.';
$string['hiddenasdate'] = 'Show submitted date for hidden grades';
$string['hiddenasdate_help'] = 'If user can not see hidden grades show date of submission instead of \'-\'.';
$string['hiddenuntil'] = 'Hidden until';
$string['hiddenuntildate'] = 'Hidden until: {$a}';
$string['hideadvanced'] = 'Hide advanced features';
$string['hideaverages'] = 'Hide averages';
$string['hidecalculations'] = 'Hide calculations';
$string['hidecategory'] = 'Hidden';
$string['hideeyecons'] = 'Hide show/hide icons';
$string['hidefeedback'] = 'Hide feedback';
$string['hideforcedsettings'] = 'Hide forced settings';
$string['hideforcedsettings_help'] = 'Do not show forced settings in grading UI.';
$string['hidegroups'] = 'Hide groups';
$string['hidelocks'] = 'Hide locks';
$string['hidenooutcomes'] = 'Show outcomes';
$string['hidequickfeedback'] = 'Hide quick feedback';
$string['hideranges'] = 'Hide ranges';
$string['hidetotalifhiddenitems'] = 'Hide totals if they contain hidden items';
$string['hidetotalifhiddenitems_help'] = 'This setting specifies whether totals which contain hidden grade items are shown to students or replaced with a hyphen (-). If shown, the total may be calculated either excluding or including hidden items.

If hidden items are excluded, the total will be different to the total seen by the teacher in the grader report, since the teacher always sees totals calculated from all items, hidden or unhidden. If hidden items are included, students may be able to calculate the hidden items.';
$string['hidetotalshowexhiddenitems'] = 'Show totals excluding hidden items';
$string['hidetotalshowinchiddenitems'] = 'Show totals including hidden items';
$string['hideverbose'] = 'Hide {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'Sort by high grade ascending';
$string['highgradedescending'] = 'Sort by high grade descending';
$string['highgradeletter'] = 'High';
$string['changedefaults'] = 'Change defaults';
$string['changereportdefaults'] = 'Change report defaults';
$string['chooseaction'] = 'Choose an action ...';
$string['choosecategory'] = 'Select category';
$string['identifier'] = 'Identify user by';
$string['idnumbers'] = 'ID numbers';
<<<<<<< HEAD
=======
$string['ignore'] = 'Ignore';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['import'] = 'Import';
$string['importcsv'] = 'Import CSV';
$string['importcustom'] = 'Import as custom outcomes (only this course)';
$string['importerror'] = 'An error occurred, this script wasn\'t called with the right parameters.';
$string['importfailed'] = 'Import failed';
$string['importfeedback'] = 'Import feedback';
$string['importfile'] = 'Import file';
$string['importfilemissing'] = 'No file was received, go back to the form and make sure to upload a valid file.';
$string['importfrom'] = 'Import from';
$string['importoutcomenofile'] = 'The uploaded file is empty or corrupted.  Please verify this is a valid file. The problem was detected at line {$a}; this is triggered by the data lines not having as many columns as the first line (the header line) or if the imported file is missing expected headers.  Look at the exported file for an example of a file with valid header.';
$string['importoutcomes'] = 'Import outcomes';
$string['importoutcomes_help'] = 'Outcomes can be imported via csv file with format as for the export outcomes csv file.';
$string['importoutcomes_link'] = 'grade/outcome';
$string['importoutcomesuccess'] = 'Imported outcome "{$a->name}" with ID #{$a->id}';
$string['importplugins'] = 'Import plugins';
$string['importpreview'] = 'Import preview';
$string['importsettings'] = 'Import settings';
$string['importskippednomanagescale'] = 'You don\'t have permission to add a new scale, so outcome "{$a}" was skipped as it required creating a new scale';
$string['importskippedoutcome'] = 'An outcome with shortname "{$a}" already exists in this context, the one in the imported file was skipped.';
$string['importstandard'] = 'Import as standard outcomes';
$string['importsuccess'] = 'Grade import success';
$string['importxml'] = 'Import XML';
$string['includescalesinaggregation'] = 'Include scales in aggregation';
$string['includescalesinaggregation_help'] = 'You can change whether scales are to be included as numbers in all aggregated grades across all gradebooks in all courses. CAUTION: changing this setting will force all aggregated grades to be recalculated.';
$string['incorrectcourseid'] = 'Course ID was incorrect';
$string['incorrectcustomscale'] = '(Incorrect custom scale, please change.)';
$string['incorrectminmax'] = 'The minimum must be lower than the maximum';
$string['inherit'] = 'Inherit';
$string['intersectioninfo'] = 'Student/Grade info';
$string['item'] = 'Item';
$string['iteminfo'] = 'Item info';
$string['iteminfo_help'] = 'This setting provides space for entering information about the item. The information is not displayed anywhere else.';
$string['itemname'] = 'Item name';
$string['itemnamehelp'] = 'The name of this item, pushed in by the module.';
$string['items'] = 'Items';
$string['itemsedit'] = 'Edit grade item';
$string['keephigh'] = 'Keep the highest';
$string['keephigh_help'] = 'If set, this option will only keep the X highest grades, X being the selected value for this option.';
$string['keymanager'] = 'Key manager';
$string['lessthanmin'] = 'The grade entered for {$a->itemname} for {$a->username} is less than the minimum allowed';
$string['letter'] = 'Letter';
$string['lettergrade'] = 'Letter grade';
$string['lettergradenonnumber'] = 'Low and/or High grade were non-numeric for';
$string['letterpercentage'] = 'Letter (percentage)';
$string['letterreal'] = 'Letter (real)';
$string['letters'] = 'Letters';
$string['linkedactivity'] = 'Linked activity';
$string['linkedactivity_help'] = 'This setting specifies an activity to which this outcome item is linked. This may be used to measure student performance on criteria not assessed by the activity grade.';
$string['linktoactivity'] = 'Link to {$a->name} activity';
$string['lock'] = 'Lock';
$string['locked'] = 'Locked';
$string['locked_help'] = 'If ticked, grades can no longer be automatically updated by the related activity.';
$string['locktime'] = 'Lock after';
$string['locktimedate'] = 'Locked after: {$a}';
$string['lockverbose'] = 'Lock {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Lowest';
$string['lowgradeletter'] = 'Low';
$string['manualitem'] = 'Manual item';
$string['mapfrom'] = 'Map from';
$string['mappings'] = 'Grade item mappings';
$string['mapto'] = 'Map to';
$string['max'] = 'Highest';
$string['maxgrade'] = 'Max grade';
$string['meanall'] = 'All grades';
$string['meangraded'] = 'Non-empty grades';
$string['meanselection'] = 'Grades selected for column averages';
$string['meanselection_help'] = 'This setting determines whether cells with no grade should be included when calculating the average (mean) for each category or grade item.';
$string['median'] = 'Median';
$string['min'] = 'Lowest';
$string['missingscale'] = 'Scale must be selected';
$string['mode'] = 'Mode';
$string['morethanmax'] = 'The grade entered for {$a->itemname} for {$a->username} is more than the maximum allowed';
$string['moveselectedto'] = 'Move selected items to';
$string['movingelement'] = 'Moving {$a}';
$string['multfactor'] = 'Multiplicator';
<<<<<<< HEAD
=======
$string['multfactorvalue'] = 'Multiplicator value for {$a}';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['multfactor_help'] = 'The multiplicator is the factor by which all grades for this grade item will be multiplied, with a maximum value of the maximum grade. For example, if the multiplicator is 2 and the maximum grade is 100, then all grades less than 50 are multiplied by 2, and all grades 50 and above are changed to 100.';
$string['mypreferences'] = 'My preferences';
$string['myreportpreferences'] = 'My report preferences';
$string['navmethod'] = 'Navigation method';
$string['neverdeletehistory'] = 'Never delete history';
$string['newcategory'] = 'New category';
$string['newitem'] = 'New grade item';
$string['newoutcomeitem'] = 'New outcome item';
$string['no'] = 'No';
$string['nocategories'] = 'Grade categories could not be added or found for this course';
$string['nocategoryname'] = 'No category name was given.';
$string['nocategoryview'] = 'No category to view by';
$string['nocourses'] = 'There are no courses yet';
$string['noforce'] = 'Do not force';
$string['nogradeletters'] = 'No grade letters set';
$string['nogradesreturned'] = 'No grades returned';
$string['noidnumber'] = 'No ID number';
$string['nolettergrade'] = 'No letter grade for';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Received non-numeric value for';
$string['nonunlockableverbose'] = 'This grade cannot be unlocked until {$a->itemname} is unlocked.';
$string['nonweightedpct'] = 'non-weighted %';
$string['nooutcome'] = 'No outcome';
$string['nooutcomes'] = 'Outcome items must be linked to a course outcome, but there are no outcomes for this course. Would you like to add one?';
$string['nopublish'] = 'Do not publish';
$string['norolesdefined'] = 'No roles defined in Administration > Grades > General settings > Graded roles';
$string['noscales'] = 'Outcomes must be linked to a course scale or global scale, but there are none. Would you like to add one?';
$string['noselectedcategories'] = 'no categories were selected.';
$string['noselecteditems'] = 'no items were selected.';
$string['notteachererror'] = 'You must be a teacher to use this feature.';
$string['nousersloaded'] = 'No users loaded';
$string['numberofgrades'] = 'Number of grades';
$string['onascaleof'] = 'on a scale of {$a->grademin} to {$a->grademax}';
$string['operations'] = 'Operations';
$string['options'] = 'Options';
<<<<<<< HEAD
=======
$string['others'] = 'Others';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['outcome'] = 'Outcome';
$string['outcome_help'] = 'This setting determines the outcome which this grade item will represent in the gradebook.';
$string['outcomeassigntocourse'] = 'Assign another outcome to this course';
$string['outcomecategory'] = 'Create outcomes in category';
$string['outcomecategorynew'] = 'New category';
$string['outcomeconfirmdelete'] = 'Are you sure you wish to delete the outcome "{$a}"?';
$string['outcomecreate'] = 'Add a new outcome';
$string['outcomedelete'] = 'Delete outcome';
$string['outcomefullname'] = 'Full name';
$string['outcomeitem'] = 'Outcome item';
$string['outcomeitemsedit'] = 'Edit outcome item';
$string['outcomereport'] = 'Outcome report';
$string['outcomes'] = 'Outcomes';
$string['outcomescourse'] = 'Outcomes used in course';
$string['outcomescoursecustom'] = 'Custom used (no remove)';
$string['outcomescoursenotused'] = 'Standard not used';
$string['outcomescourseused'] = 'Standard used (no remove)';
$string['outcomescustom'] = 'Custom outcomes';
$string['outcomeshortname'] = 'Short name';
$string['outcomesstandard'] = 'Standard outcomes';
$string['outcomesstandardavailable'] = 'Available standard outcomes';
$string['outcomestandard'] = 'Standard outcome';
$string['outcomestandard_help'] = 'A standard outcome is available site-wide, for all courses.';
$string['overallaverage'] = 'Overall average';
$string['overridden'] = 'Overridden';
$string['overridden_help'] = 'If ticked, the grade can no longer be changed from within the related activity.

When a grade is edited in the grader report, the overridden checkbox is ticked automatically. However it may be un-ticked to allow the grade to be changed via the related activity.';
$string['overriddennotice'] = 'Your final grade from this activity was manually adjusted.';
$string['overridesitedefaultgradedisplaytype'] = 'Override site defaults';
$string['overridesitedefaultgradedisplaytype_help'] = 'If ticked, grade letters and boundaries for the course may be set, rather than using the site defaults.';
$string['parentcategory'] = 'Parent category';
$string['pctoftotalgrade'] = '% of total grade';
$string['percent'] = 'Percent';
$string['percentage'] = 'Percentage';
$string['percentageletter'] = 'Percentage (letter)';
$string['percentagereal'] = 'Percentage (real)';
$string['percentascending'] = 'Sort by percent ascending';
$string['percentdescending'] = 'Sort by percent descending';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Offset';
$string['plusfactor_help'] = 'The offset is a number that is added to every grade for this grade item, after the multiplicator is applied.';
<<<<<<< HEAD
=======
$string['plusfactorvalue'] = 'Offset value for {$a}';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['points'] = 'points';
$string['pointsascending'] = 'Sort by points ascending';
$string['pointsdescending'] = 'Sort by points descending';
$string['positionfirst'] = 'First';
$string['positionlast'] = 'Last';
$string['preferences'] = 'Preferences';
$string['prefgeneral'] = 'General';
$string['prefletters'] = 'Grade letters and boundaries';
$string['prefrows'] = 'Special rows';
$string['prefshow'] = 'Show/hide toggles';
$string['previewrows'] = 'Preview rows';
$string['profilereport'] = 'User profile report';
$string['profilereport_help'] = 'Grade report used on user profile page.';
$string['publishing'] = 'Publishing';
$string['quickfeedback'] = 'Quick feedback';
$string['quickgrading'] = 'Quick grading';
$string['quickgrading_help'] = 'If enabled, when editing is turned on, a text input box appears for each grade, allowing many grades to be edited at the same time. Changes are saved and highlighted when the update button is clicked.

Note that when a grade is edited in the grader report, an overridden flag is set, meaning that the grade can no longer be changed from within the related activity.';
$string['range'] = 'Range';
$string['rangesdecimalpoints'] = 'Decimals shown in ranges';
$string['rangesdecimalpoints_help'] = 'This setting determines the number of decimal points to display for each range or whether the overall decimal points setting for the category or grade item is used (inherit).';
$string['rangesdisplaytype'] = 'Range display type';
$string['rangesdisplaytype_help'] = 'This setting determines whether the range is displayed as real grades, percentages or letters, or whether the display type for the category or grade item is used (inherit).';
$string['rank'] = 'Rank';
$string['rawpct'] = 'Raw %';
$string['real'] = 'Real';
$string['realletter'] = 'Real (letter)';
$string['realpercentage'] = 'Real (percentage)';
$string['recovergradesdefault'] = 'Recover grades default';
$string['recovergradesdefault_help'] = 'By default recover old grades when re-enrolling a user in a course.';
$string['regradeanyway'] = 'Regrade anyway';
$string['removeallcoursegrades'] = 'Delete all grades';
$string['removeallcourseitems'] = 'Delete all items and categories';
$string['report'] = 'Report';
$string['reportdefault'] = 'Report default ({$a})';
$string['reportplugins'] = 'Report plugins';
$string['reportsettings'] = 'Report settings';
$string['reprintheaders'] = 'Reprint headers';
$string['respectingcurrentdata'] = 'leaving current configuration unmodified';
$string['rowpreviewnum'] = 'Preview rows';
$string['savechanges'] = 'Save changes';
$string['savepreferences'] = 'Save preferences';
$string['scaleconfirmdelete'] = 'Are you sure you wish to delete the scale "{$a}"?';
$string['scaledpct'] = 'Scaled %';
$string['seeallcoursegrades'] = 'See all course grades';
<<<<<<< HEAD
=======
$string['select'] = 'Select {$a}';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['selectalloroneuser'] = 'Select all or one user';
$string['selectauser'] = 'Select a user';
$string['selectdestination'] = 'Select destination of {$a}';
$string['separator'] = 'Separator';
$string['sepcomma'] = 'Comma';
$string['septab'] = 'Tab';
$string['setcategories'] = 'Set categories';
$string['setcategorieserror'] = 'You must first set the categories for your course before you can give weights to them.';
$string['setgradeletters'] = 'Set grade letters';
$string['setpreferences'] = 'Set preferences';
$string['setting'] = 'Setting';
$string['settings'] = 'Settings';
$string['setweights'] = 'Set weights';
$string['showanalysisicon'] = 'Show grade analysis icon';
$string['showanalysisicon_desc'] = 'Whether to show grade analysis icon by default. If the activity module supports it, the grade analysis icon links to a page with more detailed explanation of the grade and how it was obtained.';
$string['showanalysisicon_help'] = 'If the activity module supports it, the grade analysis icon links to a page with more detailed explanation of the grade and how it was obtained.';
$string['showaverage'] = 'Show average';
$string['showaverage_help'] = 'Show the average column? Students may be able to estimate other student\'s grades if the average is calculated from a small number of grades. For performance reasons the average is approximate if it is dependent on any hidden items.';
$string['showfeedback'] = 'Show feedback';
$string['showfeedback_help'] = 'Show the feedback column?';
$string['showgrade'] = 'Show grades';
$string['showgrade_help'] = 'Show the grade column?';
$string['showlettergrade'] = 'Show letter grades';
$string['showlettergrade_help'] = 'Show the letter grade column?';
$string['showrange'] = 'Show ranges';
$string['showrange_help'] = 'Show the range column?';
$string['showweight'] = 'Show weightings';
$string['showweight_help'] = 'Show the grade weight column?';
$string['rangedecimals'] = 'Range decimal points';
$string['rangedecimals_help'] = 'The number of decimal points to display for range.';
$string['showactivityicons'] = 'Show activity icons';
$string['showactivityicons_help'] = 'If enabled, activity icons are shown next to activity names.';
$string['showallhidden'] = 'Show hidden';
$string['showallstudents'] = 'Show all Students';
$string['showaverages'] = 'Show column averages';
$string['showaverages_help'] = 'If enabled, the grader report will contain an additional row displaying the average (mean) for each category and grade item.';
$string['showcalculations'] = 'Show calculations';
$string['showcalculations_help'] = 'If enabled, when editing is turned on, a calculator icon is shown for each grade item and category, with tool tips over calculated items and a visual indicator that a column is calculated.';
$string['showeyecons'] = 'Show show/hide icons';
$string['showeyecons_help'] = 'If enabled, when editing is turned on, a show/hide icon is shown for each grade for controlling its visibility to the student.';
$string['showgroups'] = 'Show groups';
$string['showhiddenitems'] = 'Show hidden items';
$string['showhiddenitems_help'] = 'Whether hidden grade items are hidden entirely or if the names of hidden grade items are visible to students.

* Show hidden - Hidden grade item names are shown but student grades are hidden
* Only hidden until - Grade items with a "hide until" date set are hidden completely until the set date, after which the whole item is shown
* Do not show - Hidden grade items are completely hidden';
$string['showhiddenuntilonly'] = 'Only hidden until';
$string['showlocks'] = 'Show locks';
$string['showlocks_help'] = 'If enabled, when editing is turned on, a lock/unlock icon is shown for each grade for controlling whether the grade can be automatically updated by the related activity.';
$string['shownohidden'] = 'Do not show';
$string['shownooutcomes'] = 'Hide outcomes';
$string['shownumberofgrades'] = 'Show number of grades in averages';
$string['shownumberofgrades_help'] = 'If enabled, the number of grades used when calculating the average (mean) is displayed in brackets after each average.';
$string['showpercentage'] = 'Show percentage';
$string['showpercentage_help'] = 'Show the percentage value of each grade item?';
$string['showquickfeedback'] = 'Show quick feedback';
$string['showquickfeedback_help'] = 'If enabled, when editing is turned on, a feedback text input box with a dotted border appears for each grade, allowing the feedback for many grades to be edited at the same time. Changes are saved and highlighted when the update button is clicked.

Note that when feedback is edited in the grader report, an overridden flag is set, meaning that the feedback can no longer be changed from within the related activity.';
$string['showranges'] = 'Show ranges';
$string['showranges_help'] = 'If enabled, the grader report will contain an additional row displaying the range for each category and grade item.';
$string['showrank'] = 'Show rank';
$string['showrank_help'] = 'Show the position of the student in relation to the rest of the class for each grade item?';
$string['showuserimage'] = 'Show user profile images';
$string['showuserimage_help'] = 'Whether to show the user\'s profile image next to the name in the grader report.';
$string['showverbose'] = 'Show {$a->category} {$a->itemmodule} {$a->itemname}';
$string['simpleview'] = 'Simple view';
$string['sitewide'] = 'Site-wide';
$string['sort'] = 'sort';
$string['sortasc'] = 'Sort in ascending order';
$string['sortbyfirstname'] = 'Sort by first name';
$string['sortbylastname'] = 'Sort by last name';
$string['sortdesc'] = 'Sort in descending order';
$string['standarddeviation'] = 'Standard deviation';
$string['stats'] = 'Statistics';
$string['statslink'] = 'Stats';
$string['student'] = 'Student';
$string['studentsperpage'] = 'Students per page';
$string['studentsperpage_help'] = 'This setting determines the number of students displayed per page in the grader report.';
$string['studentsperpagereduced'] = 'Reduced maximum students per page from {$a->originalstudentsperpage} to {$a->studentsperpage}. Consider increasing the PHP setting max_input_vars from {$a->maxinputvars}.';
$string['subcategory'] = 'Normal category';
$string['submissions'] = 'Submissions';
$string['submittedon'] = 'Submitted: {$a}';
$string['switchtofullview'] = 'Switch to full view';
$string['switchtosimpleview'] = 'Switch to simple view';
$string['tabs'] = 'Tabs';
$string['topcategory'] = 'Super category';
$string['total'] = 'Total';
$string['totalweightnot100'] = 'The total weight is not equal to 100';
$string['totalweight100'] = 'The total weight is equal to 100';
$string['turnfeedbackoff'] = 'Turn feedback off';
$string['turnfeedbackon'] = 'Turn feedback on';
$string['typenone'] = 'None';
$string['typescale'] = 'Scale';
$string['typescale_help'] = 'This setting determines the scale used when using the scale grade type. The scale for an activity-based grade item is set on the activity settings page.';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Value';
$string['uncategorised'] = 'Uncategorised';
$string['unenrolledusersinimport'] = 'This import included the following grades for users not currently enrolled in this course: {$a}';
$string['unchangedgrade'] = 'Grade unchanged';
$string['unlimitedgrades'] = 'Unlimited grades';
$string['unlimitedgrades_help'] = 'By default grades are limited by the maximum and minimum values of the grade item. Enabling this setting removes this limit, and allows grades of over 100% to be entered directly in the gradebook. It is recommended that this setting is enabled at an off-peak time, as all grades will be recalculated, which may result in a high server load.';
$string['unlock'] = 'Unlock';
$string['unlockverbose'] = 'Unlock {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'Unused';
$string['updatedgradesonly'] = 'Export new or updated grades only';
$string['uploadgrades'] = 'Upload grades';
$string['useadvanced'] = 'Use advanced features';
$string['usedcourses'] = 'Used courses';
$string['usedgradeitem'] = 'Used grade item';
$string['usenooutcome'] = 'Use no outcome';
$string['usenoscale'] = 'Use no scale';
$string['usepercent'] = 'Use percent';
$string['user'] = 'User';
$string['usergrade'] = 'User {$a->fullname} ({$a->useridnumber}) on item {$a->gradeidnumber}';
<<<<<<< HEAD
=======
$string['userid'] = 'User ID';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['userpreferences'] = 'User preferences';
$string['userenrolmentsuspended'] = 'User enrolment suspended';
$string['useweighted'] = 'Use weighted';
$string['verbosescales'] = 'Verbose scales';
$string['viewbygroup'] = 'Group';
$string['viewgrades'] = 'View grades';
$string['warningexcludedsum'] = 'Warning: excluding of grades is not compatible with sum aggregation.';
$string['weight'] = 'weight';
$string['weightcourse'] = 'Use weighted grades for course';
$string['weightedascending'] = 'Sort by weighted percent ascending';
$string['weighteddescending'] = 'Sort by weighted percent descending';
$string['weightedpct'] = 'weighted %';
$string['weightedpctcontribution'] = 'weighted % contribution';
$string['weightorextracredit'] = 'Weight or extra credit';
$string['weights'] = 'Weights';
$string['weightsedit'] = 'Edit weights and extra credits';
$string['weightuc'] = 'Weight';
$string['writinggradebookinfo'] = 'Writing gradebook settings';
$string['xml'] = 'XML';
$string['yes'] = 'Yes';
$string['yourgrade'] = 'Your grade';
