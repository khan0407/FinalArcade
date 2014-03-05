Description of Bennu library import - customised library by author, this version is not available upstream

modifications:
1/ removed ereg functions deprecated as of php 5.3 (18 Nov 2009)
<<<<<<< HEAD
2/ replaced mbstring functions with moodle textlib (28 Nov 2011)
=======
2/ replaced mbstring functions with moodle textlib (28 Nov 2011)
3/ replaced explode in iCalendar_component::unserialize() with preg_split to support various line breaks (20 Nov 2012)
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
