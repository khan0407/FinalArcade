<<<<<<< HEAD
Description of TinyMCE v3.4.9 library integration in Moodle
=========================================================================================

Copyright: (c) 2004-2011, Moxiecode Systems AB, All rights reserved.
=======
Description of TinyMCE library integration in Moodle
=========================================================================================

Copyright: (c) 2004-2012, Moxiecode Systems AB, All rights reserved.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
License: GNU LESSER GENERAL PUBLIC LICENSE Version 2.1, February 1999

Moodle maintainer: Petr Skoda (skodak)

=========================================================================================
<<<<<<< HEAD
Upgrade procedure (by maintainer):

 1/ clone https://github.com/moodle/custom-tinymce
 2/ clone https://github.com/moodle/custom-tinymce_spellchecker_php
 3/ cherry pick Moodle changes into new branches based on stable upstream
 4/ tweak paths in build script in moodle_build.sh and execute
 5/ fix line endings
 6/ download all TinyMCE lang files (extra/tools/download_langs.sh)
 7/ make sure your moodle installation has all language packs installed.
 7/ update moodle lang string files (extra/tools/update_lang_files.php)
 8/ ensure lang packs are updated into AMOS (lang.moodle.net)

=========================================================================================
Prepare local modification procedure (by developer):

 1/ clone https://github.com/moodle/custom-tinymce
 2/ clone https://github.com/moodle/custom-tinymce_spellchecker_php
 3/ apply local modifications to the STABLE branches in those two repos
 4/ tweak paths in build script in moodle_build.sh and execute
 5/ fix line endings
 6/ provide 2 patches into the corresponding MDL issue:
    a) one patch with the version to be applied to custom-tinymce (one for each target branch)
    b) another patch with the resulting changes to be applied to moodle.git (one for each target branch)
 7/ then integrator will:
    a) apply patches in 6a/ to custom-tinymce repo
    b/ standard integration of patches in 6b/ to moodle.git (review, test, upstream)
 8/ Done!

Note1: if the local modification includes lang changes, then steps 6-8 (from upgrade) may be necessary. Contact
AMOS maintainer / custom-tinymce maintainer / integrators about that.

=========================================================================================
Added:
 * plugins/gragmath/*
 * plugins/moodlemotions/*
 * plugins/moodlenolink/*
 * plugins/moodlemedia/*

Modified:
 * image integration - file picker integration
 * string processing - uses our lang framework
 * form hacks
 * MDL-27890 - allow editor to be smaller
 * MDL-25736 - French spellchecker fixes.

 TODO:
 * update strings to integrate with AMOS
=======
Upgrade procedure:

1/ extract standard TinyMCE package into lib/editor/tinymce/tiny_mce/x.y.z/
2/ bump up editor version in lib.php to match the directory name x.y.z
3/ bump up main version.php
4/ update lib/thirdpartylibs.xml
5/ execute cli/update_lang_files.php and review changes in lang/en/editor_tinymce.php
6/ use search to find oversized zIndexes and divide them by 100


Changes:

1/ zIndex 300000 and 200000 changed to 5003 and 5002 - this prevents collision with YUI,
   see MDL-35771

TODO:
 * create some new automated script that sends other languages from upstream into AMOS
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
