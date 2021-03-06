<?php

// This is the first file read by the lib/adminlib.php script
// We use it to create the categories in correct order,
// since they need to exist *before* settingpages and externalpages
// are added to them.

<<<<<<< HEAD
$systemcontext = get_context_instance(CONTEXT_SYSTEM);
=======
$systemcontext = context_system::instance();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$hassiteconfig = has_capability('moodle/site:config', $systemcontext);

$ADMIN->add('root', new admin_externalpage('adminnotifications', new lang_string('notifications'), "$CFG->wwwroot/$CFG->admin/index.php"));

$ADMIN->add('root', new admin_externalpage('registrationmoodleorg', new lang_string('registration', 'admin'),
        "$CFG->wwwroot/$CFG->admin/registration/register.php?huburl=" . HUB_MOODLEORGHUBURL . "&hubname=Moodle.org"));
$ADMIN->add('root', new admin_externalpage('registrationhub', new lang_string('registerwith', 'hub'),
        "$CFG->wwwroot/$CFG->admin/registration/register.php", 'moodle/site:config', true));
$ADMIN->add('root', new admin_externalpage('registrationhubs', new lang_string('hubs', 'admin'),
        "$CFG->wwwroot/$CFG->admin/registration/index.php", 'moodle/site:config', true));
$ADMIN->add('root', new admin_externalpage('siteregistrationconfirmed',
        new lang_string('registrationconfirmed', 'hub'),
        $CFG->wwwroot."/".$CFG->admin."/registration/confirmregistration.php", 'moodle/site:config', true));
 // hidden upgrade script
$ADMIN->add('root', new admin_externalpage('upgradesettings', new lang_string('upgradesettings', 'admin'), "$CFG->wwwroot/$CFG->admin/upgradesettings.php", 'moodle/site:config', true));

if ($hassiteconfig) {
    $optionalsubsystems = new admin_settingpage('optionalsubsystems', new lang_string('advancedfeatures', 'admin'));
    $ADMIN->add('root', $optionalsubsystems);
}

$ADMIN->add('root', new admin_category('users', new lang_string('users','admin')));
$ADMIN->add('root', new admin_category('courses', new lang_string('courses','admin')));
$ADMIN->add('root', new admin_category('grades', new lang_string('grades')));
$ADMIN->add('root', new admin_category('location', new lang_string('location','admin')));
$ADMIN->add('root', new admin_category('language', new lang_string('language')));
$ADMIN->add('root', new admin_category('modules', new lang_string('plugins', 'admin')));
$ADMIN->add('root', new admin_category('security', new lang_string('security','admin')));
$ADMIN->add('root', new admin_category('appearance', new lang_string('appearance','admin')));
$ADMIN->add('root', new admin_category('frontpage', new lang_string('frontpage','admin')));
$ADMIN->add('root', new admin_category('server', new lang_string('server','admin')));
$ADMIN->add('root', new admin_category('mnet', new lang_string('net','mnet'), (isset($CFG->mnet_dispatcher_mode) and $CFG->mnet_dispatcher_mode === 'off')));
$ADMIN->add('root', new admin_category('reports', new lang_string('reports')));
$ADMIN->add('root', new admin_category('development', new lang_string('development', 'admin')));

// hidden unsupported category
$ADMIN->add('root', new admin_category('unsupported', new lang_string('unsupported', 'admin'), true));

// hidden search script
$ADMIN->add('root', new admin_externalpage('search', new lang_string('searchresults'), "$CFG->wwwroot/$CFG->admin/search.php", 'moodle/site:config', true));
