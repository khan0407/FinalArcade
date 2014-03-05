<?php

$THEME->name = 'afterburner';

$THEME->parents = array('base');

$THEME->sheets = array(
<<<<<<< HEAD
    'afterburner_layout',   /** Must come first: Page layout **/
=======
    'afterburner_pagelayout',   /** Must come first: page layout **/
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'afterburner_styles',   /** Must come second: default styles **/
    'afterburner_menu',
    'afterburner_blocks',
    'afterburner_mod',
    'afterburner_calendar',
    'afterburner_dock',
<<<<<<< HEAD
    'afterburner_settings',
    'rtl'
=======
    'afterburner_rtl',
    'afterburner_settings',

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
);

$THEME->parents_exclude_sheets = array(
    'base'=>array(
        'pagelayout',
        'dock'
    ),
);
$THEME->editor_sheets = array('editor');

$THEME->layouts = array(
    // Most backwards compatible layout without the blocks - this is the layout used by default
    'base' => array(
        'file' => 'default.php',
        'regions' => array(),
    ),
    // Standard layout with blocks, this is recommended for most pages with default information
    'standard' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // Main course page
    'course' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'coursecategory' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // part of course, typical for modules - default page layout if $cm specified in require_login()
    'incourse' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // The site home page.
    'frontpage' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    // Server administration scripts.
    'admin' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // My dashboard page
    'mydashboard' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true),
    ),
    // My public page
    'mypublic' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'login' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu'=>true),
    ),

    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'default.php',
        'regions' => array(),
<<<<<<< HEAD
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nologininfo'=>true),
=======
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nologininfo'=>true, 'nocourseheaderfooter'=>true),
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'default.php',
        'regions' => array(),
<<<<<<< HEAD
        'options' => array('nofooter'=>true),
=======
        'options' => array('nofooter'=>true, 'nocoursefooter'=>true),
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    ),
    // Embedded pages, like iframe/object embeded in moodleform - it needs as much space as possible
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, and it is good idea if it does not have links to
    // other places - for example there should not be a home link in the footer...
    'maintenance' => array(
        'file' => 'default.php',
        'regions' => array(),
<<<<<<< HEAD
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
=======
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nocourseheaderfooter'=>true),
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'default.php',
        'regions' => array(),
<<<<<<< HEAD
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>false, 'nocustommenu'=>true),
=======
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>false, 'nocustommenu'=>true, 'nocourseheaderfooter'=>true),
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    ),
    // The pagelayout used when a redirection is occuring.
    'redirect' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
<<<<<<< HEAD
    // The pagelayout used for reports
=======
    // The pagelayout used for reports.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    'report' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
<<<<<<< HEAD
=======
    // The pagelayout used for safebrowser and securewindow.
    'secure' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nologinlinks'=>true, 'nocourseheaderfooter'=>true),
    ),
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
);

$THEME->enable_dock = true;

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

<<<<<<< HEAD
$THEME->csspostprocess = 'afterburner_process_css';
=======
$THEME->csspostprocess = 'afterburner_process_css';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
