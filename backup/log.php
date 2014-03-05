<?php
       // log.php - old scheduled backups report. Now redirecting
       // to the new admin one

    require_once("../config.php");

    require_login();

<<<<<<< HEAD
    require_capability('moodle/backup:backupcourse', get_context_instance(CONTEXT_SYSTEM));
=======
    require_capability('moodle/backup:backupcourse', context_system::instance());
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    redirect("$CFG->wwwroot/report/backups/index.php", '', 'admin', 1);
