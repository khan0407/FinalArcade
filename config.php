<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodleuser';
$CFG->dbpass    = 'arcade';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);

<<<<<<< HEAD
$CFG->wwwroot   = 'http://122.248.233.112/moodle';
=======
$CFG->wwwroot   = 'http://122.248.251.93/moodle';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$CFG->dataroot  = '/var/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

<<<<<<< HEAD
$CFG->passwordsaltmain = '=Z6[6ta>F2*N78s<S]&Hni9^]TW_A';
=======
$CFG->passwordsaltmain = 'NG^G>P9%j>uV:O?EOgSfY3E-J/S8';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
