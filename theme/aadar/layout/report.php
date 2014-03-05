<?php
/// This file contains a few configuration variables that control
/// how Moodle uses this theme.
////////////////////////////////////////////////////////////////////////////////
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
 * Version details
 *
 * @package    Theme
 * @subpackage Aadar 
 * @copyright  2013 eabyas <eabyas.in>
 * @author     Niranjan Reddy <niranjan@eabyas.in>  
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$showsidepre = $hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT);
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if (!$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}
if ($hasnavbar) {
    $bodyclasses[] = 'hasnavbar';
}

$courseheader = $coursecontentheader = $coursecontentfooter = $coursefooter = '';
if (empty($PAGE->layout_options['nocourseheaderfooter'])) {
    $courseheader = $OUTPUT->course_header();
    $coursecontentheader = $OUTPUT->course_content_header();
    if (empty($PAGE->layout_options['nocoursefooter'])) {
        $coursecontentfooter = $OUTPUT->course_content_footer();
        $coursefooter = $OUTPUT->course_footer();
    }
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page">
<?php if ($hasheading || $hasnavbar) { ?>
    <div id="page-header">
        <div class="rounded-corner top-left"></div>
        <div class="rounded-corner top-right"></div>
        <?php if ($hasheading) { ?>
        <h1 class="headermain"><?php echo $PAGE->heading ?></h1>
        <div class="headermenu"><?php
            echo $OUTPUT->login_info();
            if (!empty($PAGE->layout_options['langmenu'])) {
                echo $OUTPUT->lang_menu();
            }
            echo $PAGE->headingmenu
        ?></div><?php } ?>

        <?php if (!empty($courseheader)) { ?>
            <div id="course-header"><?php echo $courseheader; ?></div>
        <?php } ?>
        <?php if ($hascustommenu) { ?>
 	<div id="custommenu"><?php echo $custommenu; ?></div>
		<?php } ?>

        <?php if ($hasnavbar) { ?>
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                <div class="navbutton"><?php echo $PAGE->button; ?></div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
<!-- END OF HEADER -->

    <div id="page-content" class="clearfix">
        <div id="report-main-content">
            <div class="region-content">
                <?php echo $coursecontentheader; ?>
                <?php echo $OUTPUT->main_content() ?>
                <?php echo $coursecontentfooter; ?>
            </div>
        </div>
        <?php if ($hassidepre) { ?>
        <div id="report-region-wrap">
            <div id="report-region-pre" class="block-region">
                <div class="region-content">
                    <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

<!-- START OF FOOTER -->
    <?php if (!empty($coursefooter)) { ?>
        <div id="course-footer"><?php echo $coursefooter; ?></div>
    <?php } ?>
    <?php if ($hasfooter) { ?>
    <div id="page-footer" class="clearfix">
        <p class="helplink">

<p>
<img src="http://www.concerto-sesac.eu/squelettes/images/home/logo_eu.gif">&nbsp;&nbsp;&nbsp;<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQii1haFski496FD2GkTiusZv7uJ5uexrfzO6Dj-oym6SkXl-K8">
</br>     
       
            St. Johns National Academy of Health Science </br>
         This website is funded by the European Union Seventh Framework program (No. 281930)</br>
        <?php /*echo page_doc_link(get_string('moodledocslink')) */?>
&nbsp;&nbsp;       
<a href="https://facebook.com">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStNh2xR2VaoVKIngrFPdsp-YAfFQat-l1gjDX5OkYA_mwMh97UOg" >
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/">
<img src="http://abstractions.deidreadams.com/wp-content/themes/photocrati-theme/images/social/small-twitter.png">
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://plus.google.com">
<img src="http://imaging.ubmmedica.com/all/editorial/icon-google-plus.jpg">
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.linkedin.com/">
<img src="https://infopeople.org/sites/all/themes/infopeople/social/linkedin.png">
        </p>
</p>

<?php /*echo page_doc_link(get_string('moodledocslink'))*/ ?></p>
        <?php
        /*echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();*/
        ?>
        <div class="rounded-corner bottom-left"></div>
        <div class="rounded-corner bottom-right"></div>
    </div>
    <?php } ?>
  <div class="clearfix"></div>
</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>