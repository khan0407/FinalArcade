<<<<<<< HEAD
Description of ADODB V5.16 library import into Moodle
=======
Description of ADODB V5.17 library import into Moodle
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

This library will be probably removed in Moodle 2.1,
it is now used only in enrol and auth db plugins.
The core DML drivers are not using ADODB any more.

Removed:
 * contrib/
 * cute_icons_for_site/
 * docs/
 * pear/
 * session/
 * tests/
 * server.php
 * lang/* except en (because they were not in utf8)

Added:
 * index.html - prevent directory browsing on misconfigured servers
 * readme_moodle.txt - this file ;-)

Our changes:
<<<<<<< HEAD
 * fixed leading whitespace in adodb-active-record.inc.php
=======
 * Removed random seed initialization from lib/adodb/adodb.inc.php:172
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

skodak, iarenaza, moodler, stronk7
