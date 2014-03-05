<?php

require('../../config.php');

require_once($CFG->libdir.'/adminlib.php');

require_login();
<<<<<<< HEAD
$context = get_context_instance(CONTEXT_SYSTEM);
=======
$context = context_system::instance();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$PAGE->set_context($context);
$adminroot = admin_get_root(false, false); // settings not required - only pages

if ($section = optional_param('section', '', PARAM_SAFEDIR) and confirm_sesskey()) {

    if (get_user_preferences('admin_bookmarks')) {

        $bookmarks = explode(',', get_user_preferences('admin_bookmarks'));

        $key = array_search($section, $bookmarks);

        if ($key === false) {
            print_error('nonexistentbookmark','admin');
            die;
        }

        unset($bookmarks[$key]);
        $bookmarks = implode(',', $bookmarks);
        set_user_preference('admin_bookmarks', $bookmarks);

        $temp = $adminroot->locate($section);

        if ($temp instanceof admin_externalpage) {
            redirect($temp->url, get_string('bookmarkdeleted','admin'));
        } elseif ($temp instanceof admin_settingpage) {
            redirect($CFG->wwwroot . '/' . $CFG->admin . '/settings.php?section=' . $section);
        } else {
            redirect($CFG->wwwroot);
        }
        die;


    }

    print_error('nobookmarksforuser','admin');
    die;

} else {
    print_error('invalidsection', 'admin');
    die;
}


