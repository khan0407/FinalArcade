<?php

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));

$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);

$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

<<<<<<< HEAD
=======
$courseheader = $coursecontentheader = $coursecontentfooter = $coursefooter = '';
if (empty($PAGE->layout_options['nocourseheaderfooter'])) {
    $courseheader = $OUTPUT->course_header();
    $coursecontentheader = $OUTPUT->course_content_header();
    if (empty($PAGE->layout_options['nocoursefooter'])) {
        $coursecontentfooter = $OUTPUT->course_content_footer();
        $coursefooter = $OUTPUT->course_footer();
    }
}

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}


echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <meta name="description" content="<?php p(strip_tags(format_text($SITE->summary, FORMAT_HTML))) ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>

<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page">
<<<<<<< HEAD
<?php if ($hasheading || $hasnavbar) { ?>
=======
<?php if ($hasheading || $hasnavbar || !empty($courseheader)) { ?>
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    <div id="page-header" >
		<div id="page-header-wrapper" class="wrapper clearfix">
	        <?php if ($hasheading) { ?>
    		    <h1 class="headermain"><?php echo $PAGE->heading ?></h1>
		        <div class="headermenu"><?php
        	    	echo $OUTPUT->login_info();
            			if (!empty($PAGE->layout_options['langmenu'])) {
	        	        	echo $OUTPUT->lang_menu();
	    		        }
		            echo $PAGE->headingmenu ?>
	            </div>
	        <?php } if ($hascustommenu) { ?>
			<div id="custommenuwrap"><div id="custommenu"><?php echo $custommenu; ?></div></div>
			<?php } ?>
	    </div>
    </div>

<div id="top">

<<<<<<< HEAD
=======
        <?php if (!empty($courseheader)) { ?>
            <div id="course-header" class="wrapper"><?php echo $courseheader; ?></div>
        <?php } ?>

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        <?php if ($hasnavbar) { ?>
            <div class="navbar">
            	<div class="wrapper clearfix">
	                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
    	            <div class="navbutton"> <?php echo $PAGE->button; ?></div>
    	        </div>
            </div>
        <?php } ?>

<?php } ?>
<!-- END OF HEADER -->

	<div id="page-content-wrapper" class="wrapper clearfix">
	    <div id="page-content">
    	    <div id="region-main-box">
        	    <div id="region-post-box">

	                <div id="region-main-wrap">
    	                <div id="region-main">
        	                <div class="region-content">
<<<<<<< HEAD
            	                <?php echo $OUTPUT->main_content() ?>
=======
                                <?php echo $coursecontentheader; ?>
            	                <?php echo $OUTPUT->main_content() ?>
                                <?php echo $coursecontentfooter; ?>
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                	        </div>
                    	</div>
	                </div>

	                <?php if ($hassidepre) { ?>
    	            <div id="region-pre" class="block-region">
        	            <div class="region-content">
            	            <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                	    </div>
	                </div>
    	            <?php } ?>

	                <?php if ($hassidepost) { ?>
    	            <div id="region-post" class="block-region">
        	            <div class="region-content">
            	            <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                	    </div>
	                </div>
    	            <?php } ?>

        	    </div>
	        </div>
    	</div>
    </div>

<<<<<<< HEAD
<?php if ($hasheading || $hasnavbar) { ?>
</div>
<?php } ?>

=======
<?php if ($hasheading || $hasnavbar || !empty($courseheader)) { ?>
</div>
<?php } ?>

<?php if (!empty($coursefooter)) { ?>
    <div id="course-footer" class="wrapper"><?php echo $coursefooter; ?></div>
<?php } ?>

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
<!-- START OF FOOTER -->
    <?php if ($hasfooter) { ?>
    <div id="page-footer" class="wrapper">
        <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
    </div>
    <?php } ?>
</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>