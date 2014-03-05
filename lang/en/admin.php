<?php

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
 * Strings for component 'admin', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   admin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['accessdenied'] = 'Access denied';
$string['accounts'] = 'Accounts';
$string['additionalhtml'] = 'Additional HTML';
$string['additionalhtml_heading'] = 'Additional HTML to be added to every page.';
$string['additionalhtml_desc'] = 'These settings allow you to specify HTML that you want added to every page. You can set HTML that will be added within the HEAD tag for the page, immediately after the BODY tag has been opened, or immediately before the body tag is closed.<br />Doing this allows you add custom headers or footers on every page, or add support for services like Google Analytics very easily and independent of your chosen theme.';
$string['additionalhtmlhead'] = 'Within HEAD';
$string['additionalhtmlhead_desc'] = 'Content here will be added to the bottom of the HEAD tag for every page.';
$string['additionalhtmltopofbody'] = 'When BODY is opened';
$string['additionalhtmltopofbody_desc'] = 'Content here will be added in to every page immediately after the opening body tag.';
$string['additionalhtmlfooter'] = 'Before BODY is closed';
$string['additionalhtmlfooter_desc'] = 'Content here will be added in to every page right before the body tag is closed.';
$string['admincategory'] = 'Category: {$a}';
$string['adminseesall'] = 'Admins see all';
$string['adminseesallevents'] = 'Administrators see all events';
$string['adminseesownevents'] = 'Administrators are just like other users';
$string['advancedfeatures'] = 'Advanced features';
$string['allcountrycodes'] = 'All country codes';
$string['allowbeforeblock'] = 'Allowed list will be processed first';
$string['allowbeforeblockdesc'] = 'By default, entries in the blocked IPs list are matched first. If this option is enabled, entries in the allowed IPs list are processed before the blocked list.';
$string['allowblockstodock'] = 'Allow blocks to use the dock';
$string['allowcategorythemes'] = 'Allow category themes';
$string['allowcoursethemes'] = 'Allow course themes';
$string['allowediplist'] = 'Allowed IP list';
$string['allowemailaddresses'] = 'Allowed email domains';
$string['allowframembedding'] = 'Allow frame embedding';
$string['allowframembedding_help'] = 'Allow embedding of this site in frames on external sites. Enabling of this feature is not recommended for security reasons.';
<<<<<<< HEAD
=======
$string['allowguestmymoodle'] = 'Allow guest access to My home';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['allowobjectembed'] = 'Allow EMBED and OBJECT tags';
$string['allowthemechangeonurl'] = 'Allow theme changes in the URL';
$string['allowuserblockhiding'] = 'Allow users to hide blocks';
$string['allowuserswitchrolestheycantassign'] = 'Allow users without the assign roles capability to switch roles';
$string['allowuserthemes'] = 'Allow user themes';
$string['antivirus'] = 'Anti-Virus';
$string['appearance'] = 'Appearance';
$string['aspellpath'] = 'Path to aspell';
$string['authentication'] = 'Authentication';
$string['authpreventaccountcreation'] = 'Prevent account creation when authenticating';
$string['authpreventaccountcreation_help'] = 'When a user authenticates, an account on the site is automatically created if it doesn\'t yet exist. If an external database, such as LDAP, is used for authentication, but you wish to restrict access to the site to users with an existing account only, then this option should be enabled. New accounts will need to be created manually or via the upload users feature. Note that this setting doesn\'t apply to MNet authentication.';
$string['authsettings'] = 'Manage authentication';
$string['autolang'] = 'Language autodetect';
$string['autologinguests'] = 'Auto-login guests';
$string['availableto'] = 'Available to';
$string['availablelicenses'] = 'Available licences';
$string['backgroundcolour'] = 'Transparent colour';
$string['backups'] = 'Backups';
$string['backup_shortname'] = 'Use course name in backup filename';
$string['backup_shortnamehelp'] = 'Use the course name as part of the backup filename.';
$string['badwordsconfig'] = 'Enter your list of bad words separated by commas.';
$string['badwordsdefault'] = 'If the custom list is empty, a default list from the language pack will be used.';
$string['badwordslist'] = 'Custom bad words list';
$string['blockediplist'] = 'Blocked IP List';
$string['blockinstances'] = 'Instances';
$string['blockmultiple'] = 'Multiple';
<<<<<<< HEAD
$string['blockprotect'] = 'Protect from delete';
$string['blockprotect_help'] = 'Selected block instances will be protected from deletion from the site-wide context. This is primarily used to protect the navigation and settings blocks which can be very hard to get back if accidentally deleted.';
=======
$string['blockprotect'] = 'Protect instances';
$string['blockprotect_help'] = 'If you lock a particular type of block, then no-one will be able to add or delete instances. (You can, of course, unlock again if you need to edit instances.)

This is intended to protect blocks like the navigation and settings which are very hard to get back if accidentally deleted.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['blockunprotect'] = 'Unprotect';
$string['blocksettings'] = 'Manage blocks';
$string['bloglevel'] = 'Blog visibility';
$string['bookmarkadded'] = 'Bookmark added.';
$string['bookmarkalreadyexists'] = 'You have already bookmarked this page.';
$string['bookmarkdeleted'] = 'Bookmark deleted.';
$string['bookmarkthispage'] = 'bookmark this page';
$string['cachejs'] = 'Cache Javascript';
$string['cachejs_help'] = 'Javascript caching and compression greatly improves page loading performance. it is strongly recommended for production sites. Developers will probably want to disable this feature.';
$string['cachetext'] = 'Text cache lifetime';
<<<<<<< HEAD
$string['cachetype'] = 'Cache type';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['calendarexportsalt'] = 'Calendar export salt';
$string['calendarsettings'] = 'Calendar';
$string['calendar_weekend'] = 'Weekend days';
$string['cannotdeletemodfilter'] = 'You cannot uninstall the \'{$a->filter}\' because it is part of the \'{$a->module}\' module.';
<<<<<<< HEAD
=======
$string['cannotuninstall'] = '{$a} can not be uninstalled.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['cfgwwwrootslashwarning'] = 'You have defined $CFG->wwwroot incorrectly in your config.php file. You have included a \'/\' character at the end. Please remove it, or you will experience strange bugs like <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['cfgwwwrootwarning'] = 'You have defined $CFG->wwwroot incorrectly in your config.php file. It does not match the URL you are using to access this page. Please correct it, or you will experience strange bugs like <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['clamfailureonupload'] = 'On clam AV failure';
$string['cleanup'] = 'Cleanup';
$string['clianswerno'] = 'n';
$string['cliansweryes'] = 'y';
$string['cliincorrectvalueerror'] = 'Error, incorrect value "{$a->value}" for "{$a->option}"';
$string['cliincorrectvalueretry'] = 'Incorrect value, please retry';
$string['clistatusdisabled'] = 'Status: disabled';
$string['clistatusenabled'] = 'Status: enabled';
$string['clitypevalue'] = 'type value';
$string['clitypevaluedefault'] = 'type value, press Enter to use default value ({$a})';
$string['cliunknowoption'] = 'Unrecognised options:
  {$a}
Please use --help option.';
$string['cliupgradefinished'] = 'Command line upgrade completed successfully.';
$string['cliupgradenoneed'] = 'No upgrade needed for the installed version {$a}. Thanks for coming anyway!';
$string['cliyesnoprompt'] = 'type y (means yes) or n (means no)';
$string['commentsperpage'] = 'Comments displayed per page';
$string['commonfiltersettings'] = 'Common filter settings';
$string['commonsettings'] = 'Common settings';
$string['componentinstalled'] = 'Component installed';
$string['computedfromlogs'] = 'Computed from logs since {$a}.';
<<<<<<< HEAD
$string['condifmodeditdefaults'] = 'The values you set here define the default values that are used in the activity settings form when you create a new activity. You can also configure which activity settings are considered advanced.';
=======
$string['condifmodeditdefaults'] = 'Default values are used in the settings form when creating a new activity or resource.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['confeditorhidebuttons'] = 'Select the buttons that should be hidden in the HTML editor.';
$string['configallcountrycodes'] = 'This is the list of countries that may be selected in various places, for example in a user\'s profile. If blank (the default) the list in countries.php in the standard English language pack is used. That is the list from ISO 3166-1. Otherwise, you can specify a comma-separated list of codes, for example \'GB,FR,ES\'. If you add new, non-standard codes here, you will need to add them to countries.php in \'en\' and your language pack.';
$string['configallowassign'] = 'You can allow people who have the roles on the left side to assign some of the column roles to other people';
$string['configallowblockstodock'] = 'If enabled and supported by the selected theme users can choose to move blocks to a special dock.';
$string['configallowcategorythemes'] = 'If you enable this, then themes can be set at the category level. This will affect all child categories and courses unless they have specifically set their own theme. WARNING: Enabling category themes may affect performance.';
$string['configallowcoursethemes'] = 'If you enable this, then courses will be allowed to set their own themes.  Course themes override all other theme choices (site, user, or session themes)';
$string['configallowemailaddresses'] = 'If you want to restrict all new email addresses to particular domains, then list them here separated by spaces.  All other domains will be rejected.  To allow subdomains add the domain with a preceding \'.\'. eg <strong>ourcollege.edu.au .gov.au</strong>';
<<<<<<< HEAD
=======
$string['configallowguestmymoodle'] = 'If enabled guests can access My home, otherwise guests are redirected to the site front page.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configallowobjectembed'] = 'As a default security measure, normal users are not allowed to embed multimedia (like Flash) within texts using explicit EMBED and OBJECT tags in their HTML (although it can still be done safely using the mediaplugins filter).  If you wish to allow these tags then enable this option.';
$string['configallowoverride'] = 'You can allow people with the roles on the left side to override some of the column roles';
$string['configallowoverride2'] = 'Select which role(s) can be overridden by each role in the left column.<br />Note that these settings only apply to users who have either the capability moodle/role:override or the capability moodle/role:safeoverride allowed.';
$string['configallowswitch'] = 'Select which roles a user may switch to, based on which roles they already have. In addition to an entry in this table, a user must also have the moodle/role:switchroles capability to be able to switch.<br />Note that it is only possible to switch to roles that have the moodle/course:view capability, and that do not have the moodle/site:doanything capability, so some columns in this table are disabled.';
$string['configallowthemechangeonurl'] = 'If enabled, the theme can be changed by adding either:<br />?theme=themename to any Moodle URL (eg: mymoodlesite.com/?theme=afterburner ) or <br />&theme=themename to any internal Moodle URL (eg: mymoodlesite.com/course/view.php?id=2&theme=afterburner ).';
$string['configallowuserblockhiding'] = 'Do you want to allow users to hide/show side blocks throughout this site?  This feature uses Javascript and cookies to remember the state of each collapsible block, and only affects the user\'s own view.';
$string['configallowuserswitchrolestheycantassign'] = 'By default, moodle/role:assign is required for users to switch roles. Enabling this setting removes this requirement, and results in the roles available in the "Switch role to" dropdown menu being determined by settings in the "Allow role assignments" table only.
It is recommended that the settings in the "Allow role assignments" table do not allow users to switch to a role with more capabilities than their existing role.';
$string['configallowuserthemes'] = 'If you enable this, then users will be allowed to set their own themes.  User themes override site themes (but not course themes)';
$string['configallusersaresitestudents'] = 'For activities on the front page of the site, should ALL users be considered as students?  If you answer "Yes", then any confirmed user account will be allowed to participate as a student in those activities.  If you answer "No", then only users who are already a participant in at least one course will be able to take part in those front page activities. Only admins and specially assigned teachers can act as teachers for these front page activities.';
$string['configauthenticationplugins'] = 'Please choose the authentication plugins you wish to use and arrange them in order of failthrough.';
$string['configautolang'] = 'Detect default language from browser setting, if disabled site default is used.';
$string['configautologinguests'] = 'Should visitors be logged in as guests automatically when entering courses with guest access?';
$string['configbloglevel'] = 'This setting allows you to restrict the level to which user blogs can be viewed on this site.  Note that they specify the maximum context of the VIEWER not the poster or the types of blog posts.  Blogs can also be disabled completely if you don\'t want them at all.';
$string['configcachetext'] = 'For larger sites or sites that use text filters, this setting can really speed things up.  Copies of texts will be retained in their processed form for the time specified here.  Setting this too small may actually slow things down slightly,  but setting it too large may mean texts take too long to refresh (with new links, for example).';
<<<<<<< HEAD
$string['configcachetype'] = 'Select a type of cache for Moodle to use. This will only configure the cache, remember to enable rcache so that the cache is used for something. Use <strong>only</strong> if you need to reduce the load on the database system -- otherwise Moodle will actually run slower. Medium-traffic sites may see benefits using \'internal\'. A single webserver with eAccelerator or Turckmmcache installed <em>with the shared memory options enabled</em> should try \'eaccelerator\'. If you have a multiple-server setup, and you have one or more memcached daemons running and the PHP-memcached extension, select \'memcached\' and configure the memached options below. <br /><strong>Note:</strong> make sure you test performance under load and tune accordingly -- the caches can make your site slower. In high-traffic situations, eAccelerator and memcached can yield the most benefits, but have the higher costs in CPU usage on the webserver.';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configcalendarexportsalt'] = 'This random text is used for improving of security of authentication tokens used for exporting of calendars. Please note that all current tokens are invalidated if you change this hash salt.';
$string['configclamactlikevirus'] = 'Treat files like viruses';
$string['configclamdonothing'] = 'Treat files as OK';
$string['configclamfailureonupload'] = 'If you have configured clam to scan uploaded files, but it is configured incorrectly or fails to run for some unknown reason, how should it behave?  If you choose \'Treat files like viruses\', they\'ll be moved into the quarantine area, or deleted. If you choose \'Treat files as OK\', the files will be moved to the destination directory like normal. Either way, admins will be alerted that clam has failed.  If you choose \'Treat files like viruses\' and for some reason clam fails to run (usually because you have entered an invalid pathtoclam), ALL files that are uploaded will be moved to the given quarantine area, or deleted. Be careful with this setting.';
$string['configconvertformat'] = 'If <i>latex</i>, <i>dvips</i> and <i>convert</i> are available, the images are created using the specified format. If it is not, mimeTeX will be used and it will create GIF images.';
$string['configcookiehttponly'] = 'Enables new PHP 5.2.0 feature - browsers are instructed to send cookie with real http requests only, cookies should not be accessible by scripting languages. This is not supported in all browsers and it may not be fully compatible with current code. It helps to prevent some types of XSS attacks.';
$string['configcookiesecure'] = 'If server is accepting only https connections it is recommended to enable sending of secure cookies. If enabled please make sure that web server is not accepting http:// or set up permanent redirection to https:// address. When <em>wwwroot</em> address does not start with https:// this setting is turned off automatically.';
$string['configcountry'] = 'If you set a country here, then this country will be selected by default on new user accounts.  To force users to choose a country, just leave this unset.';
$string['configcourserequestnotify'] = 'Type username of user to be notified when new course requested.';
$string['configcourserequestnotify2'] = 'Users who will be notified when a course is requested. Only users who can approve course requests are listed here.';
$string['configcoursesperpage'] = 'Enter the number of courses to be displayed per page in a course listing.';
<<<<<<< HEAD
=======
$string['configcourseswithsummarieslimit'] = 'The maximum number of courses to display in a course listing including summaries before falling back to a simpler listing.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configcronclionly'] = 'If this is set, then the cron script can only be run from the command line instead of via the web.  This overrides the cron password setting below.';
$string['configcronremotepassword'] = 'This means that the cron.php script cannot be run from a web browser without supplying the password using the following form of URL:<pre>
    http://site.example.com/admin/cron.php?password=opensesame
</pre>If this is left empty, no password is required.';
$string['configcurlcache'] = 'Time-to-live for cURL cache, in seconds.';
<<<<<<< HEAD
$string['configcustommenuitems'] = 'You can configure a custom menu here to be shown by themes. Each line consists of some menu text, a link URL (optional) and a tooltip title (optional), separated by pipe characters. You can specify a structure using hyphens. For example:
<pre>
Moodle community|http://moodle.org
-Moodle free support|http://moodle.org/support
-Moodle development|http://moodle.org/development
--Moodle Tracker|http://tracker.moodle.org
--Moodle Docs|http://docs.moodle.org
-Moodle News|http://moodle.org/news
Moodle company
-Moodle commercial hosting|http://moodle.com/hosting
-Moodle commercial support|http://moodle.com/support
=======
$string['configcustommenuitems'] = 'You can configure a custom menu here to be shown by themes. Each line consists of some menu text, a link URL (optional), a tooltip title (optional) and a language code or comma-separated list of codes (optional, for displaying the line to users of the specified language only), separated by pipe characters. You can specify a structure using hyphens. For example:
<pre>
Moodle community|https://moodle.org
-Moodle free support|https://moodle.org/support
-Moodle development|https://moodle.org/development
--Moodle Docs|http://docs.moodle.org|Moodle Docs
--German Moodle Docs|http://docs.moodle.org/de|Documentation in German|de
Moodle.com|http://moodle.com/
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
</pre>';
$string['configdbsessions'] = 'If enabled, this setting will use the database to store information about current sessions.  This is especially useful for large/busy sites or sites built on cluster of servers.  For most sites this should probably be left disabled so that the server disk is used instead.  Note that changing this setting now will log out all current users (including you). If you are using MySQL please make sure that \'max_allowed_packet\' in my.cnf (or my.ini) is at least 4M.';
$string['configdebug'] = 'If you turn this on, then PHP\'s error_reporting will be increased so that more warnings are printed.  This is only useful for developers.';
$string['configdebugdisplay'] = 'Set to on, the error reporting will go to the HTML page. This is practical, but breaks XHTML, JS, cookies and HTTP headers in general. Set to off, it will send the output to your server logs, allowing better debugging. The PHP setting error_log controls which log this goes to.';
$string['configdebugpageinfo'] = 'Enable if you want page information printed in page footer.';
$string['configdebugsmtp'] = 'Enable verbose debug information during sending of email messages to SMTP server.';
$string['configdebugvalidators'] = 'Enable if you want to have links to external validator servers in page footer. You may need to create new user with username <em>w3cvalidator</em>, and enable guest access. These changes may allow unauthorized access to server, do not enable on production sites!';
$string['configdefaulthomepage'] = 'This determines the home page for logged in users';
$string['configdefaultrequestcategory'] = 'Courses requested by users will be automatically placed in this category.';
$string['configdefaultrequestedcategory'] = 'Default category to put courses that were requested into, if they\'re approved.';
$string['configdefaultuserroleid'] = 'All logged in users will be given the capabilities of the role you specify here, at the site level, in ADDITION to any other roles they may have been given.  The default is the Authenticated user role.  Note that this will not conflict with other roles they have unless you prohibit capabilities, it just ensures that all users have capabilities that are not assignable at the course level (eg post blog entries, manage own calendar, etc).';
$string['configdeleteincompleteusers'] = 'After this period, old not fully setup accounts are deleted.';
$string['configdeleteunconfirmed'] = 'If you are using email authentication, this is the period within which a response will be accepted from users.  After this period, old unconfirmed accounts are deleted.';
$string['configdenyemailaddresses'] = 'To deny email addresses from particular domains list them here in the same way.  All other domains will be accepted. To deny subdomains add the domain with a preceding \'.\'. eg <strong>hotmail.com yahoo.co.uk .live.com</strong>';
<<<<<<< HEAD
=======
$string['configenableblogs'] = 'This switch provides all site users with their own blog.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configenabledevicedetection'] = 'Enables detection of mobiles, smartphones, tablets or default devices (desktop PCs, laptops, etc) for the application of themes and other features.';
$string['configdisableuserimages'] = 'Disable the ability for users to change user profile images.';
$string['configdisplayloginfailures'] = 'This will display information to selected users about previous failed logins.';
$string['configdndallowtextandlinks'] = 'Enable or disable the dragging and dropping of text and links onto a course page, alongside the dragging and dropping of files. Note that the dragging of text into Firefox or between different browsers is unreliable and may result in no data being uploaded, or corrupted text being uploaded.';
<<<<<<< HEAD
$string['configdocroot'] = 'Defines the path to the Moodle Docs. You can change this if you wish to have your own custom online documentation. However, if you do that make sure that the paths in your documentation follow the same format as http://docs.moodle.org.';
=======
$string['configdocroot'] = 'Defines the path to the Moodle Docs for providing context-specific documentation via \'Moodle Docs for this page\' links in the footer of each page. If the field is left blank, links will not be displayed.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configdoctonewwindow'] = 'If you enable this, then links to Moodle Docs will be shown in a new window.';
$string['configeditordictionary'] = 'This value will be used if aspell doesn\'t have dictionary for users own language.';
$string['configeditorfontlist'] = 'Select the fonts that should appear in the editor\'s drop-down list.';
$string['configemailchangeconfirmation'] = 'Require an email confirmation step when users change their email address in their profile.';
$string['configenableajax'] = 'This setting controls the use of AJAX across the site. AJAX is required for certain functionality such as drag and drop.';
$string['configenablecalendarexport'] = 'Enable exporting or subscribing to calendars.';
$string['configenablecomments'] = 'Enable comments';
$string['configenablecourserequests'] = 'This will allow any user to request a course be created.';
$string['configenablegroupmembersonly'] = 'If enabled, access to activities can be restricted to group members only. This may result in an increased server load. In addition, gradebook categories must be set up in a certain way to ensure that activities are hidden from non-group members.';
$string['configenablemobilewebservice'] = 'Enable mobile service for the official Moodle app or other app requesting it. For more information, read the {$a}';
$string['configenablerssfeeds'] = 'If enabled, RSS feeds are generated by various features across the site, such as blogs, forums, database activities and glossaries. Note that RSS feeds also need to be enabled for the particular activity modules.';
$string['configenablerssfeedsdisabled'] = 'It is not available because RSS feeds are disabled in all the Site. To enable them, go to the Variables settings under Admin Configuration.';
$string['configenablerssfeedsdisabled2'] = 'RSS feeds are disabled at the server level. You need to enable them first in Server/RSS.';
$string['configenablesafebrowserintegration'] = 'This adds the choice \'Require Safe Exam Browser\' to the \'Browser security\' field on the quiz settings form. See http://www.safeexambrowser.org/ for more information.';
$string['configenablestats'] = 'If you choose \'yes\' here, Moodle\'s cronjob will process the logs and gather some statistics.  Depending on the amount of traffic on your site, this can take awhile. If you enable this, you will be able to see some interesting graphs and statistics about each of your courses, or on a sitewide basis.';
$string['configenabletrusttext'] = 'By default Moodle will always thoroughly clean text that comes from users to remove any possible bad scripts, media etc that could be a security risk.  The Trusted Content system is a way of giving particular users that you trust the ability to include these advanced features in their content without interference.  To enable this system, you need to first enable this setting, and then grant the Trusted Content permission to a specific Moodle role.  Texts created or uploaded by such users will be marked as trusted and will not be cleaned before display.';
$string['configenablewebservices'] = 'Web services enable other systems to log in to this Moodle and perform operations.  For extra security this feature should be disabled unless you are really using it.';
$string['configenablewsdocumentation'] = 'Enable auto-generation of web services documentation. A user can access to his own documentation on his security keys page {$a}. It displays the documentation for the enabled protocols only.';
$string['configerrorlevel'] = 'Choose the amount of PHP warnings that you want to be displayed.  Normal is usually the best choice.';
$string['configextendedusernamechars'] = 'Enable this setting to allow students to use any characters in their usernames (note this does not affect their actual names).  The default is "false" which restricts usernames to be alphanumeric lowercase characters, underscore (_), hyphen (-), period (.) or at symbol (@).';
$string['configextramemorylimit'] = 'Some scripts like search, backup/restore or cron require more memory. Set higher values for large sites.';
$string['configfilterall'] = 'Filter all strings, including headings, titles, navigation bar and so on.  This is mostly useful when using the multilang filter, otherwise it will just create extra load on your site for little gain.';
$string['configfiltermatchoneperpage'] = 'Automatic linking filters will only generate a single link for the first matching text instance found on the complete page. All others are ignored.';
$string['configfiltermatchonepertext'] = 'Automatic linking filters will only generate a single link for the first matching text instance found in each item of text (e.g., resource, block) on the page. All others are ignored. This setting is ignored if the one per page setting is <i>yes</i>.';
$string['configfilteruploadedfiles'] = 'Process all uploaded HTML and text files with the filters before displaying them, only uploaded HTML files or none at all.';
$string['configforcelogin'] = 'Normally, the front page of the site and the course listings (but not courses) can be read by people without logging in to the site.  If you want to force people to log in before they do ANYTHING on the site, then you should enable this setting.';
$string['configforceloginforprofiles'] = 'This setting forces people to login as a real (non-guest) account before viewing any user\'s profile. If you disabled this setting, you may find that some users post advertising (spam) or other inappropriate content in their profiles, which is then visible to the whole world.';
$string['configfrontpage'] = 'The items selected above will be displayed on the site\'s front page.';
$string['configfrontpageloggedin'] = 'The items selected above will be displayed on the site\'s front page when a user is logged in.';
$string['configfullnamedisplay'] = 'This defines how names are shown when they are displayed in full. For most mono-lingual sites the most efficient setting is "First name + Surname", but you may choose to hide surnames altogether, or to leave it up to the current language pack to decide (some languages have different conventions).';
$string['configgdversion'] = 'Indicate the version of GD that is installed.  The version shown by default is the one that has been auto-detected.  Don\'t change this unless you really know what you\'re doing.';
$string['configgeoipfile'] = 'Location of GeoIP City binary data file. This file is not part of Moodle distribution and must be obtained separately from <a href="http://www.maxmind.com/">MaxMind</a>. You can either buy a commercial version or use the free version.<br />Simply download <a href="http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz" >http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz</a> and extract it into "{$a}" directory on your server.';
$string['configgetremoteaddrconf'] = 'If your server is behind a reverse proxy, you can use this setting to specify which HTTP headers can be trusted to contain the remote IP address. The headers are read in order, using the first one that is available.';
<<<<<<< HEAD
$string['configgooglemapkey'] = 'You need to enter a special key to use Google Maps for IP address lookup visualization. You can obtain the key free of charge at <a href="https://developers.google.com/maps/documentation/javascript/v2/introduction#Obtaining_Key">https://developers.google.com/maps/documentation/javascript/v2/introduction#Obtaining_Key</a>.<br />Your web site URL is: {$a}';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configgradebookroles'] = 'This setting allows you to control who appears on the gradebook.  Users need to have at least one of these roles in a course to be shown in the gradebook for that course.';
$string['configgradeexport'] = 'Choose which gradebook export formats are your primary methods for exporting grades.  Chosen plugins will then set and use a "last exported" field for every grade.  For example, this might result in exported records being identified as being "new" or "updated".  If you are not sure about this then leave everything unchecked.';
$string['confighiddenuserfields'] = 'Select which user information fields you wish to hide from other users other than course teachers/admins. This will increase student privacy. Hold CTRL key to select multiple fields.';
$string['configidnumber'] = 'This option specifies whether (a) Users are not be asked for an ID number at all, (b) Users are asked for an ID number but can leave it blank or (c) Users are asked for an ID Number and cannot leave it blank. If given the User\'s ID number is displayed in their Profile.';
<<<<<<< HEAD
$string['configintcachemax'] = 'For internal cache only. Maximum number of records to keep in the cache. Recommended value: 50. Use lower values to reduce memory usage.';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configintro'] = 'On this page you can specify a number of configuration variables that help make Moodle work properly on your server.  Don\'t worry too much about it - the defaults will usually work fine and you can always come back to this page later and change these settings.';
$string['configintroadmin'] = 'On this page you should configure your main administrator account which will have complete control over the site. Make sure you give it a secure username and password as well as a valid email address.  You can create more admin accounts later on.';
$string['configintrosite'] = 'This page allows you to configure the front page and name of this new site.  You can come back here later to change these settings any time using the Administration menus.';
$string['configiplookup'] = 'When you click on an IP address (such as 34.12.222.93), such as in the logs, you are shown a map with a best guess of where that IP is located.  There are different plugins for this that you can choose from, each has benefits and disadvantages.';
$string['configkeeptagnamecase'] = 'Check this if you want tag names to keep the original casing as entered by users who created them';
$string['configlang'] = 'Choose a default language for the whole site. Users can override this setting using the language menu or the setting in their personal profile.';
$string['configlangstringcache'] = 'Caches all the language strings into compiled files in the data directory.  If you are translating Moodle or changing strings in the Moodle source code then you may want to switch this off.  Otherwise leave it on to see performance benefits.';
$string['configlanglist'] = 'Leave this blank to allow users to choose from any language you have in this installation of Moodle.  However, you can shorten the language menu by entering a comma-separated list of language codes that you want.  For example:  en,es_es,fr,it';
$string['configlangmenu'] = 'Choose whether or not you want to display the general-purpose language menu on the home page, login page etc.  This does not affect the user\'s ability to set the preferred language in their own profile.';
$string['configlatinexcelexport'] = 'Choose the encoding for Excel exports.';
$string['configlocale'] = 'Choose a sitewide locale - this will override the format and language of dates for all language packs (though names of days in calendar are not affected). You need to have this locale data installed on your operating system (eg for linux en_US.UTF-8 or es_ES.UTF-8). In most cases this field should be left blank.';
$string['configloginhttps'] = 'Turning this on will make Moodle use a secure https connection just for the login page (providing a secure login), and then afterwards revert back to the normal http URL for general speed.  CAUTION: this setting REQUIRES https to be specifically enabled on the web server - if it is not then YOU COULD LOCK YOURSELF OUT OF YOUR SITE.';
$string['configloglifetime'] = 'This specifies the length of time you want to keep logs about user activity.  Logs that are older than this age are automatically deleted.  It is best to keep logs as long as possible, in case you need them, but if you have a very busy server and are experiencing performance problems, then you may want to lower the log lifetime. Values lower than 30 are not recommended because statistics may not work properly.';
$string['configlookahead'] = 'Days to look ahead';
$string['configmaxbytes'] = 'This specifies a maximum size that uploaded files can be throughout the whole site. This setting is limited by the PHP settings post_max_size and upload_max_filesize, as well as the Apache setting LimitRequestBody. In turn, maxbytes limits the range of sizes that can be chosen at course level or module level. If \'Server Limit\' is chosen, the server maximum allowed by the server will be used.';
$string['configmaxconsecutiveidentchars'] = 'Passwords must not have more than this number of consecutive identical characters. Use 0 to disable this check.';
$string['configmaxeditingtime'] = 'This specifies the amount of time people have to re-edit forum postings, glossary comments etc.  Usually 30 minutes is a good value.';
$string['configmaxevents'] = 'Events to Lookahead';
<<<<<<< HEAD
$string['configmemcachedhosts'] = 'For memcached. Comma-separated list of hosts that are running the memcached daemon. Use IP addresses to avoid DNS latency. memcached does not behave well if you add/remove hosts on a running setup.';
$string['configmemcachedpconn'] = 'For memcached. Use persistent connections. Use carefully -- it can make Apache/PHP crash after a restart of the memcached daemon.';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configmessaging'] = 'Should the messaging system between site users be enabled?';
$string['configmessagingallowemailoverride'] = 'Allow users to have email message notifications sent to an email address other than the email address in their profile';
$string['configmessaginghidereadnotifications'] = 'Hide read notifications of events like forum posts when viewing messaging history';
$string['configmessagingdeletereadnotificationsdelay'] = 'Read notifications can be deleted to save space. How long after a notification is read can it be deleted?';
$string['configminpassworddigits'] = 'Passwords must have at least these many digits.';
$string['configminpasswordlength'] = 'Passwords must be at least these many characters long.';
$string['configminpasswordlower'] = 'Passwords must have at least these many lower case letters.';
$string['configminpasswordnonalphanum'] = 'Passwords must have at least these many non-alphanumeric characters.';
$string['configminpasswordupper'] = 'Passwords must have at least these many upper case letters.';
<<<<<<< HEAD
=======
$string['configmobilecssurl'] = 'A CSS file to customise your mobile app interface.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configmodchooserdefault'] = 'Should the activity chooser be presented to users by default?';
$string['configmycoursesperpage'] = 'Maximum number of courses to display in any list of a user\'s own courses';
$string['configmymoodleredirect'] = 'This setting forces redirects to /my on login for non-admins and replaces the top level site navigation with /my';
$string['configmypagelocked'] = 'This setting prevents the default page from being edited by any non-admins';
$string['confignavcourselimit'] = 'Limits the number of courses shown to the user when they are either not logged in or are not enrolled in any courses.';
$string['confignavshowallcourses'] = 'This setting determines whether users who are enrolled in courses can see Courses (listing all courses) in the navigation, in addition to My Courses (listing courses in which they are enrolled).';
$string['confignavshowcategories'] = 'Show course categories in the navigation bar and navigation blocks. This does not occur with courses the user is currently enrolled in, they will still be listed under mycourses without categories.';
$string['confignotifyloginfailures'] = 'If login failures have been recorded, email notifications can be sent out.  Who should see these notifications?';
$string['confignotifyloginthreshold'] = 'If notifications about failed logins are active, how many failed login attempts by one user or one IP address is it worth notifying about?';
$string['confignotloggedinroleid'] = 'Users who are not logged in to the site will be treated as if they have this role granted to them at the site context.  Guest is almost always what you want here, but you might want to create roles that are less or more restrictive.  Things like creating posts still require the user to log in properly.';
$string['configopentogoogle'] = 'If you enable this setting, then Google will be allowed to enter your site as a Guest.  In addition, people coming in to your site via a Google search will automatically be logged in as a Guest.  Note that this only provides transparent access to courses that already allow guest access.';
$string['configoverride'] = 'Defined in config.php';
$string['configpasswordpolicy'] = 'Turning this on will make Moodle check user passwords against a valid password policy. Use the settings below to specify your policy (they will be ignored if you set this to \'No\').';
$string['configpathtoclam'] = 'Path to clam AV.  Probably something like /usr/bin/clamscan or /usr/bin/clamdscan. You need this in order for clam AV to run.';
$string['configpathtodu'] = 'Path to du. Probably something like /usr/bin/du. If you enter this, pages that display directory contents will run much faster for directories with a lot of files.';
$string['configperfdebug'] = 'If you turn this on, performance info will be printed in the footer of the standard theme';
$string['configprofileroles'] = 'List of roles that are visible on user profiles and participation page.';
$string['configprofilesforenrolledusersonly'] = 'To prevent misuse by spammers, profile descriptions of users who are not yet enrolled in any course are hidden. New users must enrol in at least one course before they can add a profile description.';
$string['configprotectusernames'] = 'By default forget_password.php does not display any hints that would allow guessing of usernames or email addresses.';
$string['configproxybypass'] = 'Comma separated list of (partial) hostnames or IPs that should bypass proxy (e.g., 192.168., .mydomain.com)';
$string['configproxyhost'] = 'If this <b>server</b> needs to use a proxy computer (eg a firewall) to access the Internet, then provide the proxy hostname here.  Otherwise leave it blank.';
$string['configproxypassword'] = 'Password needed to access internet through proxy if required, empty if none (PHP cURL extension required).';
$string['configproxyport'] = 'If this server needs to use a proxy computer, then provide the proxy port here.';
$string['configproxytype'] = 'Type of web proxy (PHP5 and cURL extension required for SOCKS5 support).';
$string['configproxyuser'] = 'Username needed to access internet through proxy if required, empty if none (PHP cURL extension required).';
$string['configquarantinedir'] = 'If you want clam AV to move infected files to a quarantine directory, enter it here. It must be writable by the webserver.  If you leave this blank, or if you enter a directory that doesn\'t exist or isn\'t writable, infected files will be deleted.  Do not include a trailing slash.';
<<<<<<< HEAD
$string['configrcache'] = 'Use the cache to store database records. Remember to set \'cachetype\' as well!';
$string['configrcachettl'] = 'Time-to-live for cached records, in seconds. Use a short (&lt;15) value here.';
$string['configrecaptchaprivatekey'] = 'String of characters used to communicate between your Moodle server and the recaptcha server. Obtain one for this site by visiting http://www.google.com/recaptcha';
$string['configrecaptchapublickey'] = 'String of characters used to display the reCAPTCHA element in the signup form. Generated by http://www.google.com/recaptcha';
=======
$string['configrecaptchaprivatekey'] = 'String of characters used to communicate between your Moodle server and the recaptcha server. Obtain one for this site by visiting http://www.google.com/recaptcha';
$string['configrecaptchapublickey'] = 'String of characters used to display the reCAPTCHA element in the signup form. Generated by http://www.google.com/recaptcha';
$string['configrequestcategoryselection'] = 'Allow the selection of a category when requesting a course.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configrequestedstudentname'] = 'Word for student used in requested courses';
$string['configrequestedstudentsname'] = 'Word for students used in requested courses';
$string['configrequestedteachername'] = 'Word for teacher used in requested courses';
$string['configrequestedteachersname'] = 'Word for teachers used in requested courses';
$string['configrequiremodintro'] = 'Disable this option if you do not want to force users to enter description of each activity.';
$string['configrunclamavonupload'] = 'When enabled, clam AV will be used to scan all uploaded files.';
$string['configrunclamonupload'] = 'Run clam AV on file upload? You will need a correct path in pathtoclam for this to work.  (Clam AV is a free virus scanner that you can get from http://www.clamav.net/)';
$string['configuserquota'] = 'The maximum number of bytes that a user can store in their own private file area. {$a->bytes} bytes == {$a->displaysize}';
$string['configsectioninterface'] = 'Interface';
$string['configsectionmail'] = 'Mail';
$string['configsectionmaintenance'] = 'Maintenance';
$string['configsectionmisc'] = 'Miscellaneous';
$string['configsectionoperatingsystem'] = 'Operating system';
$string['configsectionpermissions'] = 'Permissions';
$string['configsectionrequestedcourse'] = 'Course requests';
$string['configsectionsecurity'] = 'Security';
$string['configsectionstats'] = 'Statistics';
$string['configsectionuser'] = 'User';
$string['configsecureforms'] = 'Moodle can use an additional level of security when accepting data from web forms. If this is enabled, then the browser\'s HTTP_REFERER variable is checked against the current form address.  In a very few cases this can cause problems if the user is using a firewall (eg Zonealarm) configured to strip HTTP_REFERER from their web traffic.  Symptoms are getting \'stuck\' on a form. If your users are having problems with the login page (for example) you might want to disable this setting, although it might leave your site more open to brute-force password attacks.  If in doubt, leave this set to \'Yes\'.';
$string['configsessioncookie'] = 'This setting customises the name of the cookie used for Moodle sessions.  This is optional, and only useful to avoid cookies being confused when there is more than one copy of Moodle running within the same web site.';
$string['configsessioncookiedomain'] = 'This allows you to change the domain that the Moodle cookies are available from. This is useful for Moodle customisations (e.g. authentication or enrolment plugins) that need to share Moodle session information with a web application on another subdomain. <strong>WARNING: it is strongly recommended to leave this setting at the default (empty) - an incorrect value will prevent all logins to the site.</strong>';
$string['configsessioncookiepath'] = 'If you need to change where browsers send the Moodle cookies, you can change this setting to specify a subdirectory of your web site.  Otherwise the default \'/\' should be fine.';
$string['configsessiontimeout'] = 'If people logged in to this site are idle for a long time (without loading pages) then they are automatically logged out (their session is ended).  This variable specifies how long this time should be.';
$string['configshowcommentscount'] = 'Show comments count, it will cost one more query when display comments link';
$string['configshowsiteparticipantslist'] = 'All of these site students and site teachers will be listed on the site participants list. Who shall be allowed to see this site participants list?';
$string['configsitedefaultlicense'] = 'Default site licence';
$string['configsitedefaultlicensehelp'] = 'The default licence for publishing content on this site';
$string['configsitemaxcategorydepth'] = 'Maximum category depth';
$string['configsitemaxcategorydepthhelp'] = 'This specifies the maximum depth of child categories shown';
$string['configslasharguments'] = 'Files (images, uploads etc) are provided via a script using \'slash arguments\'. This method allows files to be more easily cached in web browsers, proxy servers etc.  Unfortunately, some PHP servers don\'t allow this method, so if you have trouble viewing uploaded files or images (eg user pictures), disable this setting.';
$string['configsmartpix'] = 'With this on, icons are served through a PHP script that searches the current theme, then all parent themes, then the Moodle /pix folder. This reduces the need to duplicate image files within themes, but has a slight performance cost.';
$string['configstartwday'] = 'Start of week';
$string['configstatsfirstrun'] = 'This specifies how far back the logs should be processed <b>the first time</b> the cronjob wants to process statistics. If you have a lot of traffic and are on shared hosting, it\'s probably not a good idea to go too far back, as it could take a long time to run and be quite resource intensive. (Note that for this setting, 1 month = 28 days. In the graphs and reports generated, 1 month = 1 calendar month.)';
$string['configstatsmaxruntime'] = 'Stats processing can be quite intensive, so use a combination of this field and the next one to specify when it will run and how long for.';
$string['configstatsmaxruntime2'] = 'Stats processing can be quite intensive, specify maximum time allowed for gathering of one day of statistics. Maximum number of days processed in one cron execution is 31.';
$string['configstatsmaxruntime3'] = 'This specifies the maximum time allowed to calculate the statistics for one day, bearing in mind that statistics processing can put a big load on the server. The maximum number of days processed in one cron can be specified below.';
$string['configstatsruntimedays'] = 'This specifies the maximum number of days processed in each statistics execution. Once the statistics are up-to-date, only one day will be processed, so adjust this value depending of your server load, reducing it if shorter cron executions are needed.';
$string['configstatsruntimestart'] = 'What time should the cronjob that does the statistics processing start? Specifying different times is recommended if there are multiple Moodle sites on one server.';
$string['configstatsuserthreshold'] = 'This setting specifies the minimum number of enrolled users for a course to be included in statistics calculations.';
$string['configstrictformsrequired'] = 'If enabled, users are prevented from entering a space or line break only in required fields in forms.';
$string['configstripalltitletags'] = 'Uncheck this setting to allow HTML tags in activity and resource names.';
$string['configsupportemail'] = 'This email address will be published to users of this site as the one to email when they need general help (for example, when new users create their own accounts).  If this email is left blank then no such helpful email address is supplied.';
$string['configsupportname'] = 'This is the name of a person or other entity offering general help via the support email or web address.';
$string['configsupportpage'] = 'This web address will be published to users of this site as the one to go to when they need general help (for example, when new users create their own accounts).  If this address is left blank then no link will be supplied.';
$string['configthemedesignermode'] = 'Normally all theme images and style sheets are cached in browsers and on the server for a very long time, for performance. If you are designing themes or developing code then you probably want to turn this mode on so that you are not served cached versions.  Warning: this will make your site slower for all users!  Alternatively, you can also reset the theme caches manually from the Theme selection page.';
$string['configthemelist'] = 'Leave this blank to allow any valid theme to be used.  If you want to shorten the theme menu, you can specify a comma-separated list of names here (Don\'t use spaces!).
For example:  standard,orangewhite.';
$string['configtimezone'] = 'You can set the default timezone here.  This is the only the DEFAULT timezone for displaying dates - each user can override this by setting their own in their profile. "Server time" here will make Moodle default to the server\'s operating system setting, but "Server time" in the user profile will make the user default to this timezone setting.  Cronjobs that depend on a time of day to run will use this timezone.';
$string['configunzip'] = 'Indicate the location of your unzip program (Unix only, optional).  If specified, this will be used to unpack zip archives on the server.  If you leave this blank, then Moodle will use internal routines.';
$string['configuseblogassociations'] = 'Should users be able to organize their blog by associating entries with courses and course modules?';
$string['configuseexternalyui'] = 'Instead of using local files, use online files available on Yahoo&#145;s servers. WARNING: This requires an internet connection, or no AJAX will work on your site. This setting is not compatible with sites using https.';
$string['configusesitenameforsitepages'] = 'If enabled the site\'s shortname will be used for the site pages node in the navigation rather than the string \'Site pages\'';
$string['configusetags'] = 'Should tags functionality across the site be enabled?';
$string['configvariables'] = 'Variables';
$string['configverifychangedemail'] = 'Enables verification of changed email addresses using allowed and denied email domains settings. If this setting is disabled the domains are enforced only when creating new users.';
$string['configvisiblecourses'] = 'Display courses in hidden categories normally';
$string['configwarning'] = 'Be careful modifying these settings - strange values could cause problems.';
<<<<<<< HEAD
$string['configxmlstrictheaders'] = 'Set to on, each page will be generated using XML http headers and prolog, so browsers will show XHTML errors inline. This is only useful for developers.';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['configyuicomboloading'] = 'This options enables combined file loading optimisation for YUI libraries. This setting should be enabled on production sites for performance reasons.';
$string['configzip'] = 'Indicate the location of your zip program (Unix only, optional).  If specified, this will be used to create zip archives on the server.  If you leave this blank, then Moodle will use internal routines.';
$string['confirmation'] = 'Confirmation';
$string['confirmdeletecomments'] = 'You are about to delete comments, are you sure?';
$string['confirmed'] = 'Confirmed';
$string['convertformat'] = '<i>convert</i> output format';
$string['cookiehttponly'] = 'Only http cookies';
$string['cookiesecure'] = 'Secure cookies only';
$string['country'] = 'Default country';
$string['coursecontact'] = 'Course contacts';
$string['coursecontact_desc'] = 'This setting allows you to control who appears on the course description. Users need to have at least one of these roles in a course to be shown on the course description for that course.';
$string['courselistshortnames'] = 'Display extended course names';
$string['courselistshortnames_desc'] = 'If enabled, course short names will be displayed in addition to full names in course lists. If required, extended course names may be customised by editing the \'courseextendednamedisplay\' language string using the language customisation feature.';
$string['coursemgmt'] = 'Add/edit courses';
$string['courseoverview'] = 'Course overview';
$string['courserequestnotify'] = 'Course request notification';
$string['courserequestnotifyemail'] = 'User {$a->user} requested a new course at {$a->link}';
$string['courserequests'] = 'Course requests';
$string['courserequestspending'] = 'Pending course requests';
$string['courses'] = 'Courses';
$string['coursesperpage'] = 'Courses per page';
<<<<<<< HEAD
=======
$string['courseswithsummarieslimit'] = 'Courses with summaries limit';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['creatornewroleid'] = 'Creators\' role in new courses';
$string['creatornewroleid_help'] = 'If the user does not already have the permission to manage the new course, the user is automatically enrolled using this role.';
$string['cron'] = 'Cron';
$string['cron_help'] = 'The cron.php maintenance script assists some of Moodle\'s modules to perform tasks on a scheduled basis, such as mailing out copies of new forum posts. A mechanism is required to run the script regularly e.g. every 5 minutes.';
$string['cron_link'] = 'admin/cron';
$string['cronclionly'] = 'Cron execution via command line only';
$string['cronerrorclionly'] = 'Sorry, internet access to this page has been disabled by the administrator.';
$string['cronerrorpassword'] = 'Sorry, you have not provided a valid password to access this page';
$string['cronremotepassword'] = 'Cron password for remote access';
$string['cronwarning'] = 'The <a href="cron.php">cron.php maintenance script</a> has not been run for at least 24 hours.';
$string['ctyperecommended'] = 'Installing the optional ctype PHP extension is highly recommended in order to improve site performance, particularly if your site is supporting non-latin languages.';
$string['ctyperequired'] = 'The ctype PHP extension is now required by Moodle, in order to improve site performance and to offer multilingual compatibility.';
$string['curlcache'] = 'cURL cache TTL';
$string['curlrecommended'] = 'Installing the optional cURL library is highly recommended in order to enable Moodle Networking functionality.';
$string['curlrequired'] = 'The cURL PHP extension is now required by Moodle, in order to communicate with Moodle repositories.';
$string['curltimeoutkbitrate'] = 'Bitrate to use when calculating cURL timeouts (Kbps)';
$string['curltimeoutkbitrate_help'] = 'This setting is used to calculate an appropriate timeout during large cURL requests. As part of this calculation an HTTP HEAD request is made to determine the size of the content. Setting this to 0 disables this request from being made.';
$string['currenttheme'] = 'Current theme';
$string['customcheck'] = 'Other checks';
$string['custommenu'] = 'Custom menu';
$string['custommenuitems'] = 'Custom menu items';
$string['datarootsecurityerror'] = '<p><strong>SECURITY WARNING!</strong></p><p>Your dataroot directory is in the wrong location and is exposed to the web. This means that all your private files are available to anyone in the world, and some of them could be used by a cracker to obtain unauthorised administrative access to your site!</p>
<p>You <em>must</em> move dataroot directory ({$a}) to a new location that is not within your public web directory, and update the <code>$CFG->dataroot</code> setting in your config.php accordingly.</p>';
$string['datarootsecuritywarning'] = 'Your site configuration might not be secure. Please make sure that your dataroot directory ({$a}) is not directly accessible via web.';
$string['dbmigrate'] = 'Moodle database migration';
$string['dbmigrateconnecerror'] = 'Could not connect to the database specified.';
$string['dbmigrateencodingerror'] = 'The database specified has encoding {$a} rather than required UNICODE/UTF8.<br />Please specify another.';
$string['dbmigratepostgres'] = 'It seems that you are using PostgreSQL as the database server. To continue the migration process you need to manually create a new database with encoding "UNICODE"(PostgreSQL 7) or "UTF8" (PostgreSQL 8) to store the migrated data. Please enter your new database connection settings below to continue:';
$string['dbmigratewarning'] = 'Please make sure that you have backed up your Moodle database before commencing this procedure. If you are unsure of how to do that, please contact your system admin. Your Moodle site will be put under maintenance mode after you start the migration process';
$string['dbmigratewarning2'] = '<b>Warning: You are about to start the database migration process. Please be very sure that your entire Moodle database is backed up.</b>';
$string['dbmigrationdeprecateddb'] = '<font color="#ff0000">This database is migrated to a new UTF8 database and deprecated. Please edit your config.php and use the new database for this moodle.</font>';
$string['dbmigrationdupfailed'] = 'Database duplication failed with possible error:<font color="#ff0000"><pre>{$a}</pre></font>';
$string['dbsessions'] = 'Use database for session information';
$string['debug'] = 'Debug messages';
$string['debugall'] = 'ALL: Show all reasonable PHP debug messages';
$string['debugdeveloper'] = 'DEVELOPER: extra Moodle debug messages for developers';
$string['debugdisplay'] = 'Display debug messages';
$string['debugging'] = 'Debugging';
$string['debugminimal'] = 'MINIMAL: Show only fatal errors';
$string['debugnone'] = 'NONE: Do not show any errors or warnings';
$string['debugnormal'] = 'NORMAL: Show errors, warnings and notices';
$string['debugpageinfo'] = 'Show page information';
$string['debugsmtp'] = 'Debug email sending';
$string['debugstringids'] = 'Show origin of languages strings';
$string['debugstringids_desc'] = 'This option is designed to help translators. When this option is enabled, if you add the parameter strings=1 to a request URL, it will show the language file and string id beside each string that is output.';
$string['debugvalidators'] = 'Show validator links';
$string['defaultcity'] = 'Default city';
$string['defaultcity_help'] = 'A city entered here will be the default city when creating new user accounts.';
<<<<<<< HEAD
=======
$string['defaultformatnotset'] = 'Error determining default course format. Please check site settings.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['defaulthomepage'] = 'Default home page for users';
$string['defaultrequestcategory'] = 'Default category for course requests';
$string['defaultsettinginfo'] = 'Default: {$a}';
$string['defaultuserroleid'] = 'Default role for all users';
$string['deletefilterareyousure'] = 'Are you sure you want to delete the filter \'{$a}\'';
$string['deletefilterareyousuremessage'] = 'You are about to completely delete the filter \'{$a}\'. Are you sure you want to uninstall it?';
$string['deletefilterfiles'] = 'All data associated with the filter \'{$a->filter}\' has been deleted from the database. To complete the deletion (and to prevent the filter from re-installing itself), you should now delete this directory from your server: {$a->directory}';
$string['deleteincompleteusers'] = 'Delete incomplete users after';
$string['deleteunconfirmed'] = 'Delete not fully setup users after';
$string['deleteuser'] = 'Delete user';
$string['deletingfilter'] = 'Deleting filter \'{$a}\'';
$string['density'] = 'Density';
$string['denyemailaddresses'] = 'Denied email domains';
$string['development'] = 'Development';
$string['devicedetectregex'] = 'Device detection regular expressions';
$string['devicedetectregex_desc'] = '<p>By default, Moodle can detect devices of the type default (desktop PCs, laptops, etc), mobile (phones and small hand held devices), tablet (iPads, Android tablets) and legacy (Internet Explorer 6 users).  The theme selector can be used to apply separate themes to all of these.  This setting allows regular expressions that allow the detection of extra device types (these take precedence over the default types).</p>
<p>For example, you could enter the regular expression \'/(MIDP-1.0|Maemo|Windows CE)/\' to detect some commonly used feature phones add the return value \'featurephone\'.  This adds \'featurephone\' on the theme selector that would allow you to add a theme that would be used on these devices.  Other phones would still use the theme selected for the mobile device type.</p>';
$string['devicedetectregexexpression'] = 'Regular expression';
$string['devicedetectregexvalue'] = 'Return value';
$string['devicetype'] = 'Device type';
$string['disableuserimages'] = 'Disable user profile images';
$string['displayerrorswarning'] = 'Enabling the PHP setting <em>display_errors</em> is not recommended on production sites because some error messages may reveal sensitive information about your server.';
$string['displayloginfailures'] = 'Display login failures to';
$string['dndallowtextandlinks'] = 'Drag and drop upload of text/links';
$string['docroot'] = 'Moodle Docs document root';
$string['doctonewwindow'] = 'Open in new window';
$string['download'] = 'Download';
$string['edithelpdocs'] = 'Edit help documents';
$string['editingnoncorelangfile'] = 'You are trying to modify translation of an add-on module/plugin. You can save translation of 3rd party modules in your _local folder only. You may want to move the file with translation into the module\'s lang directory and/or send it to the maintainer of the add-on module.';
$string['editlang'] = '<b>Edit</b>';
$string['editorbackgroundcolor'] = 'Background colour';
$string['editordictionary'] = 'Editor dictionary';
$string['editorfontfamily'] = 'Font family';
$string['editorfontlist'] = 'Font list';
$string['editorfontsize'] = 'Font size';
$string['editorhidebuttons'] = 'Hidden buttons';
$string['editorkillword'] = 'Word format filter';
$string['editorspelling'] = 'Editor spelling';
$string['editorspellinghelp'] = 'Enable or disable spell-checking. When enabled, <strong>aspell</strong> must be installed on the server.';
$string['editstrings'] = 'Edit words or phrases';
$string['emailchangeconfirmation'] = 'Email change confirmation';
$string['emoticontext'] = 'Text';
$string['emoticonimagename'] = 'Image name';
$string['emoticonalt'] = 'Alternative text';
$string['emoticoncomponent'] = 'Image component';
$string['emoticons'] = 'Emoticons';
$string['emoticons_desc'] = 'This form defines the emoticons (or smileys) used at your site. To remove a row from the table, save the form with an empty value in any of the required fields. To register a new emoticon, fill the fields in the last blank row. To reset all the fields into default values, follow the link above.

* Text (required) - This text will be replaced with the emoticon image. It must be at least two characters long.
* Image name (required) - The emoticon image file name without the extension, relative to the component pix folder.
* Image component (required) - The component providing the icon.
* Alternative text (optional) - String identifier and component of the alternative text of the emoticon.';
$string['emoticonsreset'] = 'Reset emoticons setting to default values';
$string['emptysettingvalue'] = 'Empty';
$string['enableajax'] = 'Enable AJAX';
<<<<<<< HEAD
=======
$string['enableblogs'] = 'Enable blogs';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['enablecalendarexport'] = 'Enable calendar export';
$string['enablecomments'] = 'Enable comments';
$string['enablecourserequests'] = 'Enable course requests';
$string['enablecssoptimiser'] = 'Enable CSS optimiser';
$string['enablecssoptimiser_desc'] = 'When enabled CSS will be run through an optimisation process before being cached. The optimiser processes the CSS removing duplicate rules and styles, as well as white space removable and reformatting. Please note turning this on at the same time as theme designer mode is awful for performance but will help theme designers create optimised CSS.';
$string['enabledevicedetection'] = 'Enable device detection';
$string['enablegravatar'] = 'Enable Gravatar';
$string['enablegravatar_help'] = 'When enabled Moodle will attempt to fetch a user profile picture from Gravatar if the user has not uploaded an image.';
$string['enablegroupmembersonly'] = 'Enable group members only';
$string['enablemobilewebservice'] = 'Enable web services for mobile devices';
$string['enablerecordcache'] = 'Enable record cache';
$string['enablerssfeeds'] = 'Enable RSS feeds';
$string['enablesafebrowserintegration'] = 'Enable Safe Exam Browser integration';
$string['enablestats'] = 'Enable statistics';
$string['enabletrusttext'] = 'Enable trusted content';
$string['enablewebservices'] = 'Enable web services';
$string['enablewsdocumentation'] = 'Web services documentation';
$string['enrolinstancedefaults'] = 'Enrolment instance defaults';
$string['enrolinstancedefaults_desc'] = 'Default enrolment settings in new courses.';
$string['enrolmultipleusers'] = 'Enrol the users';
$string['environment'] = 'Environment';
$string['environmenterrortodo'] = 'You must solve all the environmental problems (errors) found above before proceeding to install this Moodle version!';
$string['environmenterrorupgrade'] = 'Warning: you should solve all the environmental problems (errors) found above before proceeding to upgrade this Moodle version!  Upgrading without fixing these requirements could cause problems such as data loss.  Are you sure you want to continue with the upgrade?';
$string['environmentmustfixsetting'] = 'PHP setting must be changed.';
$string['environmentok'] = 'Your server environment meets all minimum requirements.';
$string['environmentrecommendcustomcheck'] = 'if this test fails, it indicates a potential problem';
$string['environmentrecommendinstall'] = 'should be installed and enabled for best results';
$string['environmentrecommendversion'] = 'version {$a->needed} is recommended and you are running {$a->current}';
$string['environmentrequirecustomcheck'] = 'this test must pass';
$string['environmentrequireinstall'] = 'must be installed and enabled';
$string['environmentrequireversion'] = 'version {$a->needed} is required and you are running {$a->current}';
$string['environmentsettingok'] = 'recommended setting detected';
$string['environmentshouldfixsetting'] = 'PHP setting should be changed.';
$string['environmentxmlerror'] = 'Error reading environment data ({$a->error_code})';
$string['errordeletingconfig'] = 'An error occurred while deleting the configuration records for plugin \'{$a}\'.';
$string['errorsetting'] = 'Could not save setting:';
$string['errorwithsettings'] = 'Some settings were not changed due to an error.';
$string['everyonewhocan'] = 'Everyone who can \'{$a}\'';
$string['exceptions'] = 'exceptions';
$string['experimental'] = 'Experimental';
$string['experimentalsettings'] = 'Experimental settings';
$string['extendedusernamechars'] = 'Allow extended characters in usernames';
$string['extramemorylimit'] = 'Extra PHP memory limit';
$string['fatalmagicquotesruntime'] = '<p>Serious configuration error detected, please notify server administrator.</p><p> To operate properly, Moodle requires that administrator changes PHP settings.</p><p><code>magic_quotes_runtime</code> must be set to <code>off</code>.</p><p>This setting is controlled by editing <code>php.ini</code>, Apache/IIS <br />configuration or <code>.htaccess</code> file on the server.</p>';
$string['fatalsessionautostart'] = '<p>Serious configuration error detected, please notify server administrator.</p><p> To operate properly, Moodle requires that administrator changes PHP settings.</p><p><code>session.auto_start</code> must be set to <code>off</code>.</p><p>This setting is controlled by editing <code>php.ini</code>, Apache/IIS <br />configuration or <code>.htaccess</code> file on the server.</p>';
$string['filecreated'] = 'New file created';
$string['filestoredin'] = 'Save file into folder :';
$string['filestoredinhelp'] = 'Where the file will be stored';
$string['filterall'] = 'Filter all strings';
$string['filtermatchoneperpage'] = 'Filter match once per page';
$string['filtermatchonepertext'] = 'Filter match once per text';
$string['filters'] = 'Filters';
$string['filtersettings'] = 'Manage filters';
$string['filtersettingsgeneral'] = 'General filter settings';
$string['filteruploadedfiles'] = 'Filter uploaded files';
<<<<<<< HEAD
$string['forcelogin'] = 'Force users to login';
$string['forceloginforprofileimage'] = 'Force users to login to view user pictures';
$string['forceloginforprofileimage_help'] = 'If enabled, users must login in order to view user profile pictures and the default user picture will be used in all notification emails.';
$string['forceloginforprofiles'] = 'Force users to login for profiles';
$string['forcetimezone'] = 'Force default timezone';
=======
$string['forcelogin'] = 'Force users to log in';
$string['forceloginforprofileimage'] = 'Force users to log in to view user pictures';
$string['forceloginforprofileimage_help'] = 'If enabled, users must login in order to view user profile pictures and the default user picture will be used in all notification emails.';
$string['forceloginforprofiles'] = 'Force users to log in for profiles';
$string['forcetimezone'] = 'Force timezone';
$string['formatuninstallwithcourses'] = 'There are {$a->count} courses using {$a->format}. Their format will be changed to {$a->defaultformat} (default format for this site). Some format-specific data may be lost. Are you sure you want to proceed?';
$string['formatuninstallconfirm'] = '{$a} will be uninstalled. No courses currently use it. Continue?';
$string['formatuninstalled'] = 'All data associated with the format plugin \'{$a->plugin}\' has been deleted from the database.  To complete the deletion (and prevent the plugin re-installing itself), you should now delete this directory from your server: {$a->directory}';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['frontpage'] = 'Front page';
$string['frontpagebackup'] = 'Front page backup';
$string['frontpagedefaultrole'] = 'Default frontpage role';
$string['frontpagefilters'] = 'Front page filters';
$string['frontpageloggedin'] = 'Front page items when logged in';
$string['frontpageoverrides'] = 'Front page permission overrides';
$string['frontpagequestions'] = 'Front page questions';
$string['frontpagerestore'] = 'Front page restore';
$string['frontpageroles'] = 'Front page roles';
$string['frontpagesettings'] = 'Front page settings';
$string['fullnamedisplay'] = 'Full name format';
$string['gdrecommended'] = 'GD extension is used for conversion of images, some features such as user profile images will not be available if missing.';
$string['gdrequired'] = 'The GD extension is now required by Moodle for image conversion.';
$string['gdversion'] = 'GD version';
$string['generalsettings'] = 'General settings';
$string['geoipfile'] = 'GeoIP city data file';
$string['getremoteaddrconf'] = 'Logged IP address source';
$string['globalsquoteswarning'] = '<p><strong>Security Warning</strong>: to operate properly, Moodle requires <br />that you make certain changes to your current PHP settings.<p/><p>You <em>must</em> set <code>register_globals=off</code> and/or <code>magic_quotes_gpc=on</code>. <br />If possible, you should set <code>register_globals=off</code> to improve general <br /> server security, setting <code>magic_quotes_gpc=on</code> is also recommended.<p/><p>These settings are controlled by editing your <code>php.ini</code>, Apache/IIS <br />configuration or <code>.htaccess</code> file.</p>';
$string['globalswarning'] = '<p><strong>SECURITY WARNING!</strong></p><p> To operate properly, Moodle requires <br />that you make certain changes to your current PHP settings.</p><p>You <em>must</em> set <code>register_globals=off</code>.</p><p>This setting is controlled by editing your <code>php.ini</code>, Apache/IIS <br />configuration or <code>.htaccess</code> file.</p>';
$string['groupenrolmentkeypolicy'] = 'Group enrolment key policy';
$string['groupenrolmentkeypolicy_desc'] = 'Turning this on will make Moodle check group enrolment keys against a valid password policy.';
<<<<<<< HEAD
$string['googlemapkey'] = 'Google Maps API V2 key';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['googlemapkey3'] = 'Google Maps API V3 key';
$string['googlemapkey3_help'] = 'You need to enter a special key to use Google Maps for IP address lookup visualization. You can obtain the key free of charge at <a href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key" target="_blank">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a>';
$string['gotofirst'] = 'Go to first missing string';
$string['gradebook'] = 'Gradebook';
$string['gradebookroles'] = 'Graded roles';
$string['gravatardefaulturl'] = 'Gravatar default image URL';
$string['gravatardefaulturl_help'] = 'Gravatar needs a default image to display if it is unable to find a picture for a given user. Provide a full URL for an image. If you leave this setting empty, Moodle will attempt to use the most appropriate default image for the page you are viewing. Note also that Gravatar has a number of codes which can be used to <a href="https://en.gravatar.com/site/implement/images/#default-image">generate default images</a>.';
$string['gradeexport'] = 'Primary grade export methods';
$string['guestroleid'] = 'Role for guest';
$string['guestroleid_help'] = 'This role is automatically assigned to the guest user. It is also temporarily assigned to not enrolled users that enter the course via guest enrolment plugin.';
$string['helpadminseesall'] = 'Do admins see all calendar events or just those that apply to themselves?';
$string['helpcalendarsettings'] = 'Configure various calendar and date/time-related aspects of Moodle';
$string['helpforcetimezone'] = 'You can allow users to individually select their timezone, or force a timezone for everyone.';
$string['helpsitemaintenance'] = 'For upgrades and other work';
$string['helpstartofweek'] = 'Which day starts the week in the calendar?';
$string['helpupcominglookahead'] = 'How many days in the future does the calendar look for upcoming events by default?';
$string['helpupcomingmaxevents'] = 'How many (maximum) upcoming events are shown to users by default?';
$string['helpweekenddays'] = 'Which days of the week are treated as "weekend" and shown with a different colour?';
$string['hiddenuserfields'] = 'Hide user fields';
$string['hidefromall'] = 'Hide from all users';
$string['hidefromnone'] = 'Hide from nobody';
$string['hidefromstudents'] = 'Hide from students';
$string['htmleditor'] = 'HTML editor';
$string['htmleditorsettings'] = 'HTML editor settings';
$string['htmlsettings'] = 'HTML settings';
$string['http'] = 'HTTP';
$string['httpsecurity'] = 'HTTP security';
$string['hubs'] = 'Hubs';
$string['change'] = 'change';
$string['checkboxno'] = 'No';
$string['checkboxyes'] = 'Yes';
$string['choosefiletoedit'] = 'Choose file to edit';
$string['iconvrecommended'] = 'Installing the optional ICONV library is highly recommended in order to improve site performance, particularly if your site is supporting non-Latin languages.';
$string['iconvrequired'] = 'Installing ICONV extension is required.';
$string['ignore'] = 'Ignore';
$string['includemoduleuserdata'] = 'Include module user data';
$string['incompatibleblocks'] = 'Incompatible blocks';
$string['installhijacked'] = 'Installation must be finished from the original IP address, sorry.';
$string['installsessionerror'] = 'Can not initialise PHP session, please verify that your browser accepts cookies.';
<<<<<<< HEAD
$string['intcachemax'] = 'Int. cache max';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['intlrecommended'] = 'Intl extension is used to improve internationalization support, such as locale aware sorting.';
$string['invalidsection'] = 'Invalid section.';
$string['invaliduserchangeme'] = 'Username "changeme" is reserved -- you cannot create an account with it.';
$string['ipblocked'] = 'This site is not available currently.';
$string['ipblocker'] = 'IP blocker';
$string['ipblockersyntax'] = 'Put every entry on one line. Valid entries are either full IP address (such as <b>192.168.10.1</b>) which matches a single host; or partial address (such as <b>192.168.</b>) which matches any address starting with those numbers; or CIDR notation (such as <b>231.54.211.0/20</b>); or a range of IP addresses (such as <b>231.3.56.10-20</b>) where the range applies to the last part of the address. Text domain names (like \'example.com\') are not supported. Blank lines are ignored.';
$string['iplookup'] = 'IP address lookup';
$string['iplookupgeoplugin'] = '<a href="http://www.geoplugin.com">geoPlugin</a> service is currently being used to look up geographical information. For more accurate results we recommend installing a local copy of the MaxMind GeoLite database.';
$string['iplookupinfo'] = 'By default Moodle uses the free online NetGeo (The Internet Geographic Database) server to lookup location of IP addresses, unfortunately this database is not maintained anymore and may return <em>wildly incorrect</em> data.
It is recommended to install local copy of free GeoLite City database from MaxMind.<br />
IP address location is displayed on simple map or using Google Maps. Please note that you need to have a Google account and apply for free Google Maps API key to enable interactive maps.';
$string['iplookupmaxmindnote'] = 'This product includes GeoLite data created by MaxMind, available from <a href="http://www.maxmind.com/">http://www.maxmind.com/</a>.';
$string['keeptagnamecase'] = 'Keep tag name casing';
$string['lang'] = 'Default language';
$string['langcache'] = 'Cache language menu';
$string['langcache_desc'] = 'Cache the language menu. If enabled, the list of available translations is cached. The cache is automatically refreshed when you install or delete a language pack via the in-built language packs management tool. If you install a new language pack manually, you have to use Purge all caches feature to refresh the cached list.';
$string['langlist'] = 'Languages on language menu';
$string['langmenu'] = 'Display language menu';
$string['langpackwillbeupdated'] = 'NOTE: Moodle will try to download updates for your language packs during the upgrade.';
$string['langstringcache'] = 'Cache all language strings';
$string['languagesettings'] = 'Language settings';
$string['latexpreamble'] = 'LaTeX preamble';
$string['latexsettings'] = 'LaTeX renderer Settings';
$string['latinexcelexport'] = 'Excel encoding';
$string['legacyfilesinnewcourses'] = 'Legacy course files in new courses';
$string['legacyfilesinnewcourses_help'] = 'By default legacy course files areas are available only in upgraded courses. Please note some features like single activity backup/restore are not compatible with this settings.';
$string['licensesettings'] = 'Licence settings';
$string['linkadmincategories'] = 'Link admin categories';
$string['linkadmincategories_help'] = 'If enabled admin setting categories will be displayed as links in the navigation and will lead to the admin category pages.';
$string['loading'] = 'Loading';
$string['localetext'] = 'Sitewide locale';
$string['localstringcustomization'] = 'Local string customization';
$string['location'] = 'Location';
$string['locationsettings'] = 'Location settings';
$string['locked'] = 'locked';
$string['log'] = 'Logs';
$string['logguests'] = 'Log guest access';
$string['logguests_help'] = 'This setting enables logging of actions by guest account and not logged in users. High profile sites may want to disable this logging for performance reasons. It is recommended to keep this setting enabled on production sites.';
$string['loginhttps'] = 'Use HTTPS for logins';
$string['loginpageautofocus'] = 'Autofocus login page form';
$string['loginpageautofocus_help'] = 'Enabling this option improves usability of the login page, but automatically focusing fields may be considered an accessibility issue.';
$string['loginpasswordautocomplete'] = 'Prevent password autocompletion on login form';
$string['loginpasswordautocomplete_help'] = 'Having this off will let users save their account password in their browser. Switching this setting on will result in your site no longer following XHTML strict validation rules.';
$string['loglifetime'] = 'Keep logs for';
$string['longtimewarning'] = '<b>Please note that this process can take a long time.</b>';
$string['maintenancemode'] = 'In maintenance mode';
$string['maintfileopenerror'] = 'Error opening maintenance files!';
$string['maintinprogress'] = 'Maintenance is in progress...';
<<<<<<< HEAD
=======
$string['manageformats'] = 'Manage course formats';
$string['manageformatsgotosettings'] = 'Default format can be changed in {$a}';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['managelang'] = 'Manage';
$string['managelicenses'] = 'Manage licences';
$string['manageqbehaviours'] = 'Manage question behaviours';
$string['manageqtypes'] = 'Manage question types';
$string['maturity50'] = 'Alpha';
$string['maturity100'] = 'Beta';
$string['maturity150'] = 'Release candidate';
$string['maturity200'] = 'Stable version';
$string['maturityallowunstable'] = 'Hint: You may want to run this script with --allow-unstable option';
$string['maturitycoreinfo'] = 'Your site is currently running unstable "{$a}" development code.';
$string['maturitycorewarning'] = 'The version of Moodle that you are about to install or upgrade to contains
unstable "{$a}" development code that is not suitable for use on most production
sites. If this is not what you wanted then you should make sure you are updating
from a STABLE branch of the Moodle code. See Moodle Docs for more details.';
$string['maxbytes'] = 'Maximum uploaded file size';
$string['maxconsecutiveidentchars'] = 'Consecutive identical characters';
$string['maxeditingtime'] = 'Maximum time to edit posts';
$string['mbstringrecommended'] = 'Installing the optional MBSTRING library is highly recommended in order to improve site performance, particularly if your site is supporting non-Latin languages.';
$string['mediapluginavi'] = 'Enable .avi filter';
$string['mediapluginflv'] = 'Enable .flv filter';
$string['mediapluginimg'] = 'Enable auto-embedding of linked images';
$string['mediapluginmov'] = 'Enable .mov filter';
$string['mediapluginmpg'] = 'Enable .mpg filter';
$string['mediapluginmp3'] = 'Enable .mp3 filter';
$string['mediapluginogg'] = 'Enable .ogg filter';
$string['mediapluginogv'] = 'Enable .ogv filter';
$string['mediapluginram'] = 'Enable .ram filter';
$string['mediapluginrm'] = 'Enable .rm filter';
$string['mediapluginrpm'] = 'Enable .rpm filter';
$string['mediapluginswf'] = 'Enable .swf filter';
$string['mediapluginswfnote'] = 'As a default security measure, normal users should not be allowed to embed swf flash files.';
$string['mediapluginwmv'] = 'Enable .wmv filter';
$string['mediapluginyoutube'] = 'Enable YouTube links filter';
<<<<<<< HEAD
$string['memcachedhosts'] = 'memcached hosts';
$string['memcachedpconn'] = 'memcached use persistent connections';
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['messaging'] = 'Enable messaging system';
$string['messagingallowemailoverride'] = 'Notification email override';
$string['messaginghidereadnotifications'] = 'Hide read notifications';
$string['messagingdeletereadnotificationsdelay'] = 'Delete read notifications';
$string['minpassworddigits'] = 'Digits';
$string['minpasswordlength'] = 'Password length';
$string['minpasswordlower'] = 'Lowercase letters';
$string['minpasswordnonalphanum'] = 'Non-alphanumeric characters';
$string['minpasswordupper'] = 'Uppercase letters';
$string['misc'] = 'Miscellaneous';
$string['mnetrestore_extusers'] = '<strong>Note:</strong> This backup file contains remote Moodle Network user accounts which will be restored as part of the process.';
$string['mnetrestore_extusers_admin'] = '<strong>Note:</strong> This backup file seems to come from a different Moodle installation and contains remote Moodle Network user accounts. The restore process will try to match the Moodle Network hosts for all created users. Those not matching will be automatically switched to internal authentication (instead of mnet one). The restore log will inform you about that.';
$string['mnetrestore_extusers_mismatch'] = '<strong>Note:</strong> This backup file apparently originates from a different Moodle installation and contains remote Moodle Network user accounts that may fail to restore. This operation is unsupported. If you are certain that it was created on this Moodle installation, or you can ensure that all the needed Moodle Network Hosts are configured, you may want to still try the restore.';
$string['mnetrestore_extusers_noadmin'] = '<strong>Note:</strong> This backup file seems to come from a different Moodle installation and contains remote Moodle Network user accounts. You are not allowed to execute this type of restore. Contact the administrator of the site or, alternatively, restore this course without any user information (modules, files...)';
$string['mnetrestore_extusers_switchuserauth'] = 'Remote Moodle Network user {$a->username} (coming from {$a->mnethosturl}) switched to local {$a->auth} authenticated user.';
<<<<<<< HEAD
=======
$string['mobile'] = 'Mobile';
$string['mobilecssurl'] = 'CSS';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['modchooserdefault'] = 'Activity chooser default';
$string['modeditdefaults'] = 'Default values for activity settings';
$string['modsettings'] = 'Manage activities';
$string['modulesecurity'] = 'Module security';
$string['multilangforceold'] = 'Force old multilang syntax: &lt;span&gt; without the class="multilang" and &lt;lang&gt;';
$string['mustenablestats'] = 'Statistics have not yet been enabled on this site.';
$string['mycoursesperpage'] = 'Number of courses';
$string['mydashboard'] = 'System default dashboard';
$string['mymoodle'] = 'My home';
$string['mymoodleredirect'] = 'Force users to use My Moodle';
$string['mypage'] = 'Default My home page';
$string['myprofile'] = 'Default profile page';
$string['mypagelocked'] = 'Lock default page';
$string['mysql416bypassed'] = 'However, if your site is using iso-8859-1 (latin) languages ONLY, you may continue using your currently installed MySQL 4.1.12 (or higher).';
$string['mysql416required'] = 'MySQL 4.1.16 is the minimum version required for Moodle 1.6 in order to guarantee that all data can be converted to UTF-8 in the future.';
$string['navadduserpostslinks'] = 'Add links to view user posts';
$string['navadduserpostslinks_help'] = 'If enabled two links will be added to each user in the navigation to view discussions the user has started and posts the user has made in forums throughout the site or in specific courses.';
$string['navigationupgrade'] = 'This upgrade introduces two new navigation blocks that will replace these blocks: Administration, Courses, Activities and Participants.  If you had set any special permissions on those blocks you should check to make sure everything is behaving as you want it.';
$string['navcourselimit'] = 'Course limit';
$string['navshowfrontpagemods'] = 'Show front page activities in the navigation';
$string['navshowfrontpagemods_help'] = 'If enabled, front page activities will be shown on the navigation under site pages.';
$string['navshowallcourses'] = 'Show all courses';
$string['navshowcategories'] = 'Show course categories';
$string['navshowmycoursecategories'] = 'Show my course categories';
$string['navshowmycoursecategories_help'] = 'If enabled courses in the users my courses branch will be shown in categories.';
<<<<<<< HEAD
=======
$string['navsortmycoursessort'] = 'Sort my courses';
$string['navsortmycoursessort_help'] = 'This determines whether courses are listed under My courses according to the sort order (i.e. the order set in Settings > Site Administration > Courses > Add/edit courses) or alphabetically by course setting.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['neverdeleteruns'] = 'Never delete runs';
$string['nobookmarksforuser'] = 'You do not have any bookmarks.';
$string['nodatabase'] = 'No database';
$string['nohttpsformobilewarning'] = 'It is recommended to enable HTTPS with a valid certificate. The Moodle app will always try to use a secured connection first.';
$string['nomissingstrings'] = 'No missing strings';
$string['nonewsettings'] = 'No new settings were added during this upgrade.';
$string['nonexistentbookmark'] = 'The bookmark you requested does not exist.';
$string['noresults'] = 'No results found.';
$string['noroles'] = 'No roles';
$string['notifications'] = 'Notifications';
$string['notifyloginfailures'] = 'Email login failures to';
$string['notifyloginthreshold'] = 'Threshold for email notifications';
$string['notloggedinroleid'] = 'Role for visitors';
$string['numberofmissingstrings'] = 'Number of missing strings: {$a}';
$string['numberofstrings'] = 'Total number of strings: {$a->strings}<br />Missing: {$a->missing} ({$a->missingpercent}&nbsp;%)';
$string['numcoursesincombo'] = 'Maximum number of courses in combo list';
$string['numcoursesincombo_help'] = 'The combo list doesn\'t work well with large numbers of courses. When the total number of courses in the site is higher than this setting then a link to the dedicated course listing will be shown instead of trying to display all the courses on the front page.';
$string['opensslrecommended'] = 'Installing the optional OpenSSL library is highly recommended -- it enables Moodle Networking functionality.';
$string['opentogoogle'] = 'Open to Google';
$string['optionalmaintenancemessage'] = 'Optional maintenance message';
$string['order1'] = 'First';
$string['order2'] = 'Second';
$string['order3'] = 'Third';
$string['order4'] = 'Fourth';
$string['passwordpolicy'] = 'Password policy';
$string['pathconvert'] = 'Path of <i>convert</i> binary';
$string['pathdvips'] = 'Path of <i>dvips</i> binary';
$string['pathlatex'] = 'Path of <i>latex</i> binary';
$string['pathtoclam'] = 'clam AV path';
$string['pathtodot'] = 'Path to dot';
$string['pathtodot_help'] = 'Path to dot. Probably something like /usr/bin/dot. To be able to generate graphics from DOT files, you must have installed the dot executable and point to it here. Note that, for now, this only used by the profiling features (Development->Profiling) built into Moodle.';
$string['pathtodu'] = 'Path to du';
$string['pathtopgdump'] = 'Path to pg_dump';
$string['pathtopgdumpdesc'] = 'This is only necessary to enter if you have more than one pg_dump on your system (for example if you have more than one version of postgresql installed)';
$string['pathtopgdumpinvalid'] = 'Invalid path to pg_dump - either wrong path or not executable';
$string['pathtopsql'] = 'Path to psql';
$string['pathtopsqldesc'] = 'This is only necessary to enter if you have more than one psql on your system (for example if you have more than one version of postgresql installed)';
$string['pathtopsqlinvalid'] = 'Invalid path to psql - either wrong path or not executable';
$string['pathtounzip'] = 'Path to unzip';
$string['pathtozip'] = 'Path to zip';
$string['pcreunicodewarning'] = 'It is strongly recommended to use PCRE PHP extension that is compatible with Unicode characters.';
$string['perfdebug'] = 'Performance info';
$string['performance'] = 'Performance';
$string['pgcluster'] = 'PostgreSQL Cluster';
$string['pgclusterdescription'] = 'PostgreSQL version/cluster parameter for command line operations. If you only have one postgresql on your system or you are not sure what this is, leave this blank.';
$string['php533warning'] = 'PHP 5.3.3 and upwards is recommended';
$string['phpfloatproblem'] = 'Detected unexpected problem in handling of PHP float numbers - {$a}';
$string['php50restricted'] = 'PHP 5.0.x has a number of known problems, please upgrade to 5.1.x or downgrade to 4.3.x or 4.4.x';
$string['pleaserefreshregistration'] = 'Your site has been registered with moodle.org, please consider updating the registration if significant changes happened since your last update, on {$a}';
$string['pleaseregister'] = 'Please register your site to remove this button';
$string['plugin'] = 'Plugin';
$string['plugins'] = 'Plugins';
$string['pluginscheck'] = 'Plugin dependencies check';
$string['pluginscheckfailed'] = 'Dependencies check failed for {$a->pluginslist}';
$string['pluginschecktodo'] = 'You must solve all the plugin requirements before proceeding to install this Moodle version!';
$string['pluginsoverview'] = 'Plugins overview';
<<<<<<< HEAD
=======
$string['pluginsoverviewsee'] = 'See <a href="{$a->url}">plugins overview</a> page for more details.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['profilecategory'] = 'Category';
$string['profilecategoryname'] = 'Category name (must be unique)';
$string['profilecategorynamenotunique'] = 'This category name is already in use';
$string['profilecommonsettings'] = 'Common settings';
$string['profileconfirmcategorydeletion'] = 'There is/are {$a} field/s in this category which will be moved into the category above (or below if in the top category).<br />Do you still wish to delete this category?';
$string['profileconfirmfielddeletion'] = 'There is/are {$a} user record/s for this field which will be deleted.<br />Do you still wish to delete this field?';
$string['profilecreatecategory'] = 'Create a new profile category';
$string['profilecreatefield'] = 'Create a new profile field:';
$string['profilecreatenewcategory'] = 'Creating a new category';
$string['profilecreatenewfield'] = 'Creating a new \'{$a}\' profile field';
$string['profiledefaultcategory'] = 'Other fields';
$string['profiledefaultdata'] = 'Default value';
$string['profiledefaultchecked'] = 'Checked by default';
$string['profiledeletecategory'] = 'Deleting a category';
$string['profiledeletefield'] = 'Deleting field \'{$a}\'';
$string['profiledescription'] = 'Description of the field';
$string['profiledscript'] = 'This script has been profiled';
$string['profiledscriptview'] = 'View profiling information for this script';
$string['profileeditcategory'] = 'Editing category: {$a}';
$string['profileeditfield'] = 'Editing profile field: {$a}';
$string['profilefield'] = 'Profile field';
$string['profilefieldcolumns'] = 'Columns';
$string['profilefieldispassword'] = 'Is this a password field?';
$string['profilefieldlink'] = 'Link';
$string['profilefieldlink_help'] = 'To transform the text into a link, enter a URL containing $$, where $$ will be replaced with the text. For example, to transform a Twitter ID to a link, enter http://twitter.com/$$.';
$string['profilefieldlinktarget'] = 'Link target';
$string['profilefieldmaxlength'] = 'Maximum length';
$string['profilefieldrows'] = 'Rows';
$string['profilefields'] = 'User profile fields';
$string['profilefieldsize'] = 'Display size';
$string['profileforceunique'] = 'Should the data be unique?';
$string['profileinvaliddata'] = 'Invalid value';
$string['profilelocked'] = 'Is this field locked?';
$string['profilemenudefaultnotinoptions'] = 'The default value is not one of the options';
$string['profilemenunooptions'] = 'No menu options supplied';
$string['profilemenuoptions'] = 'Menu options (one per line)';
$string['profilemenutoofewoptions'] = 'You must provide at least 2 options';
$string['profilename'] = 'Name';
$string['profilenofieldsdefined'] = 'No fields have been defined';
$string['profilerequired'] = 'Is this field required?';
$string['profileroles'] = 'Profile visible roles';
$string['profilesforenrolledusersonly'] = 'Profiles for enrolled users only';
$string['profileshortname'] = 'Short name (must be unique)';
$string['profileshortnamenotunique'] = 'This short name is already in use';
$string['profilesignup'] = 'Display on signup page?';
$string['profilespecificsettings'] = 'Specific settings';
$string['profilevisible'] = 'Who is this field visible to?';
$string['profilevisible_help'] = '* Not visible - For private data only viewable by administrators
* Visible to user - For private data only viewable by the user and by administrators
* Visible to everyone';
$string['profilevisibleall'] = 'Visible to everyone';
$string['profilevisiblenone'] = 'Not visible';
$string['profilevisibleprivate'] = 'Visible to user';
$string['profiling'] = 'Profiling';
$string['profilingallowall'] = 'Continuous profiling';
$string['profilingallowall_help'] = 'If you enable this setting, then, at any moment, you can use the PROFILEALL parameter anywhere (PGC) to enable profiling for all the executed scripts along the Moodle session life. Analogously, you can use the PROFILEALLSTOP parameter to stop it.';
$string['profilingallowme'] = 'Selective profiling';
$string['profilingallowme_help'] = 'If you enable this setting, then, selectively, you can use the PROFILEME parameter anywhere (PGC) and profiling for that script will happen. Analogously, you can use the DONTPROFILEME parameter to prevent profiling to happen';
$string['profilingautofrec'] = 'Automatic profiling';
$string['profilingautofrec_help'] = 'By configuring this setting, some request (randomly, based on the frequency specified - 1 of N) will be picked and automatically profiled, storing results for further analysis. Note that this way of profiling observes the include/exclude settings. Set it to 0 to disable automatic profiling.';
$string['profilingenabled'] = 'Enable profiling';
$string['profilingenabled_help'] = 'If you enable this setting, then profiling will be available in this site and you will be able to define its behavior by configuring the next options.';
$string['profilingexcluded'] = 'Exclude profiling';
$string['profilingexcluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be excluded from being profiled from the ones defined by \'Profile these\' setting.';
$string['profilingincluded'] = 'Profile these';
$string['profilingincluded_help'] = 'List of (comma separated, absolute skipping wwwroot, callable) URLs that will be automatically profiled. Examples: /index.php, /course/view.php. Also accepts the * wildchar at any position. Examples: /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = 'Keep profiling runs';
$string['profilinglifetime_help'] = 'Specify the time you want to keep information about old profiling runs. Older ones will be pruned periodically. Note that this excludes any profiling run marked as \'reference run\'.';
$string['protectusernames'] = 'Protect usernames';
$string['proxybypass'] = 'Proxy bypass hosts';
$string['proxyhost'] = 'Proxy host';
$string['proxypassword'] = 'Proxy password';
$string['proxyport'] = 'Proxy port';
$string['proxytype'] = 'Proxy type';
$string['proxyuser'] = 'Proxy username';
$string['qtyperqpwillberemoved'] = 'During the upgrade, the RQP question type will be removed. You were not using this question type, so you should not experience any problems.';
$string['qtyperqpwillberemovedanyway'] = 'During the upgrade, the RQP question type will be removed. You have some RQP questions in your database, and these will stop working unless you reinstall the code from http://moodle.org/mod/data/view.php?d=13&amp;rid=797 before continuing with the upgrade.';
$string['quarantinedir'] = 'Quarantine directory';
$string['question'] = 'Question';
$string['questionbehaviours'] = 'Question behaviours';
$string['questioncwqpfscheck'] = 'One or more \'random\' questions in a quiz are set up to select questions from a mixture of shared and unshared question categories. There is a more detailed report <a href="{$a->reporturl}">here</a> and see Moodle Docs page <a href="{$a->docsurl}">here</a>.';
$string['questioncwqpfsok'] = 'Good. There are no \'random\' questions in your quizzes that are set up to select questions from a mixture of shared and unshared question categories.';
$string['questiontype'] = 'Question type';
$string['questiontypes'] = 'Question types';
<<<<<<< HEAD
$string['rcache'] = 'Record cache';
$string['rcachettl'] = 'Record cache TTL';
=======
$string['quizattemptsupgradedmessage'] = 'In Moodle 2.1 there was a major upgrade to questions. It was possible to delay parts of the database upgrade to be run later. Before upgrading to Moodle 2.7, this upgrade must be completed.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['recaptchaprivatekey'] = 'ReCAPTCHA private key';
$string['recaptchapublickey'] = 'ReCAPTCHA public key';
$string['register'] = 'Register your site';
$string['registermoodleorg'] = 'When you register your site with {$a}';
$string['registermoodleorgli1'] = 'You are added to a low-volume mailing list for important notifications such as security alerts and new releases of Moodle.';
$string['registermoodleorgli2'] = 'Statistics about your site will be added to the {$a} of the worldwide Moodle community.';
$string['registermoodleorgli3'] = 'Your site is also registered with Moodle.net ({$a}), allowing users with the publish courses capability (by default only managers) the option of publishing courses to Moodle.net.';
$string['registerwithmoodleorg'] = 'Register with Moodle.org';
$string['registration'] = 'Registration';
$string['registration_help'] = 'Registering your site with Moodle.org is recommended in order to receive security alert notifications, to contribute <a href="http://moodle.org/stats">Moodle usage statistics</a> and to be able to share courses on <a href="http://moodle.net/">Moodle.net</a>.';
$string['registrationwarning'] = 'Your site is not yet registered.';
$string['releasenoteslink'] = 'For information about this version of Moodle, please see the online <a target="_blank" href="{$a}">Release Notes</a>';
$string['rememberusername'] = 'Remember username';
$string['rememberusername_desc'] = 'Enable if you want to store permanent cookies with usernames during user login. Permanent cookies may be considered a privacy issue if used without consent.';
$string['reportsmanage'] = 'Manage reports';
$string['reportsdeleteconfirm'] = 'You are about to completely delete the report \'{$a}\'. This will completely delete everything in the database associated with this plugin. Are you SURE you want to continue?';
$string['requiredentrieschanged'] = '<strong>IMPORTANT - PLEASE READ<br/>(This warning message will only be displayed during this upgrade)</strong><br/>Due to a bug fix, the behaviour of database activities using the \'Required entries\' and \'Required entries before viewing settings\' settings will change. A more detailed explanation of the changes can be read on <a href="http://moodle.org/mod/forum/discuss.php?d=110928" target="_blank">the database module forum</a>. The expected behavior of these settings can also be read on <a href="http://docs.moodle.org/en/Adding/editing_a_database#Required_entries" target="_blank">Moodle Docs</a>.
<br/><br/>This change affects the following databases in your system: (Please save this list now, and after the upgrade, check that these activities still work the way that the teacher intends.)<br/><strong>{$a->text}</strong><br/>';
$string['requiremodintro'] = 'Require activity description';
$string['requires'] = 'Requires';
$string['purgecaches']= 'Purge all caches';
$string['purgecachesconfirm']= 'Moodle can cache themes, javascript, language strings, filtered text, rss feeds and many other pieces of calculated data.  Purging these caches will delete that data from the server and force browsers to refetch data, so that you can be sure you are seeing the most up-to-date values produced by the current code.  There is no danger in purging caches, but your site may appear slower for a while until the server and clients calculate new information and cache it.';
$string['purgecachesfinished']= 'All caches were purged.';
<<<<<<< HEAD
=======
$string['requestcategoryselection'] = 'Enable category selection';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['restorernewroleid'] = 'Restorers\' role in courses';
$string['restorernewroleid_help'] = 'If the user does not already have the permission to manage the newly restored course, the user is automatically assigned this role and enrolled if necessary. Select "None" if you do not want restorers to be able to manage every restored course.';
$string['reverseproxy'] = 'Reverse proxy';
$string['riskconfig'] = 'Users could change site configuration and behaviour';
$string['riskconfigshort'] = 'Configuration risk';
$string['riskdataloss'] = 'Users could destroy large amounts of content or information';
$string['riskdatalossshort'] = 'Data loss risk';
$string['riskmanagetrust'] = 'Users could change trust settings of other users';
$string['riskmanagetrustshort'] = 'Manage trusts';
$string['riskpersonal'] = 'Users could gain access to private information of other users';
$string['riskpersonalshort'] = 'Privacy risk';
$string['riskspam'] = 'Users could send spam to site users or others';
$string['riskspamshort'] = 'Spam risk';
$string['riskxss'] = 'Users could add files and texts that allow cross-site scripting (XSS)';
$string['riskxssshort'] = 'XSS risk';
$string['roleswithexceptions'] = '{$a->roles}, with {$a->exceptions}';
$string['rssglobaldisabled'] = 'Disabled at server level';
$string['runclamavonupload'] = 'Use clam AV on uploaded files';
$string['save'] = 'Save';
$string['savechanges'] = 'Save changes';
$string['search'] = 'Search';
$string['searchinsettings'] = 'Search in settings';
$string['searchresults'] = 'Search results';
$string['sectionerror'] = 'Section error!';
$string['secureforms'] = 'Use additional form security';
$string['security'] = 'Security';
$string['selectdevice'] = 'Select device';
$string['selecttheme'] = 'Select theme for {$a} device';
$string['server'] = 'Server';
$string['serverchecks'] = 'Server checks';
$string['serverlimit'] = 'Server limit';
$string['sessionautostartwarning'] = '<p>Serious configuration error detected, please notify server administrator.</p><p> To operate properly, Moodle requires that administrator changes PHP settings.</p><p><code>session.auto_start</code> must be set to <code>off</code>.</p><p>This setting is controlled by editing <code>php.ini</code>, Apache/IIS <br />configuration or <code>.htaccess</code> file on the server.</p>';
$string['sessioncookie'] = 'Cookie prefix';
$string['sessioncookiedomain'] = 'Cookie domain';
$string['sessioncookiepath'] = 'Cookie path';
$string['sessionhandling'] = 'Session handling';
$string['sessiontimeout'] = 'Timeout';
$string['settingfileuploads'] = 'File uploading is required for normal operation, please enable it in PHP configuration.';
$string['settingmemorylimit'] = 'Insufficient memory detected, please set higher memory limit in PHP settings.';
$string['settingsafemode'] = 'Moodle is not fully compatible with safe mode, please ask server administrator to turn it off. Running Moodle under safe mode is not supported, please expect various problems if you do so.';
$string['showcommentscount'] = 'Show comments count';
$string['showdetails'] = 'Show details';
$string['showuseridentity'] = 'Show user identity';
$string['showuseridentity_desc'] = 'When selecting or searching for users, and when displaying lists of users, these fields may be shown in addition to their full name. The fields are only shown to users who have the moodle/site:viewuseridentity capability; by default, teachers and managers. (This option makes most sense if you choose one or two fields that are mandatory at your institution.)';
$string['simplexmlrequired'] = 'The SimpleXML PHP extension is now required by Moodle.';
$string['sitemaintenance'] = 'The site is undergoing maintenance and is currently not available';
$string['sitemaintenancemode'] = 'Maintenance mode';
$string['sitemaintenanceoff'] = 'Maintenance mode has been disabled and the site is running normally again';
$string['sitemaintenanceon'] = 'Your site is currently in maintenance mode (only admins can log in or use the site).';
$string['sitemaintenancewarning'] = 'Your site is currently in maintenance mode (only admins can log in).  To return this site to normal operation, <a href="maintenance.php">disable maintenance mode</a>.';
$string['sitemaintenancewarning2'] = 'Your site is currently in maintenance mode (only admins can log in).  To return this site to normal operation, <a href="{$a}">disable maintenance mode</a>.';
$string['sitepolicies'] = 'Site policies';
$string['sitepolicy'] = 'Site policy URL';
$string['sitepolicy_help'] = 'If you have a site policy that all registered users must see and agree to before using this site, then specify the URL to it here, otherwise leave this field blank. This setting can contain any public URL.';
$string['sitepolicyguest'] = 'Site policy URL for guests';
$string['sitepolicyguest_help'] = 'If you have a site policy that all guests must see and agree to before using this site, then specify the URL to it here, otherwise leave this field blank. This setting can contain any public URL. Note: access of not-logged-in users may be prevented with forcelogin setting.';
$string['sitesectionhelp'] = 'If selected, a topic section will be displayed on the site\'s front page.';
$string['slasharguments'] = 'Use slash arguments';
$string['smartpix'] = 'Smart pix search';
$string['soaprecommended'] = 'Installing the optional soap extension is useful for web services and some contrib modules.';
<<<<<<< HEAD
=======
$string['sort_fullname'] = 'Course full name';
$string['sort_idnumber'] = 'Course ID number';
$string['sort_shortname'] = 'Course short name';
$string['sort_sortorder'] = 'Sort order';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['spellengine'] = 'Spell engine';
$string['spelllanguagelist'] = 'Spell language list';
$string['splrequired'] = 'The SPL PHP extension is now required by Moodle.';
$string['stats'] = 'Statistics';
$string['statsfirstrun'] = 'Maximum processing interval';
$string['statsmaxruntime'] = 'Maximum runtime';
$string['statsmoodleorg'] = 'statistics';
$string['statsruntimedays'] = 'Days to process';
$string['statsruntimestart'] = 'Run at';
$string['statsuserthreshold'] = 'User threshold';
$string['stickyblocks'] = 'Sticky blocks';
$string['stickyblockscourseview'] = 'Course page';
$string['stickyblocksduplicatenotice'] = 'If any block you add here is already present in a particular page, it will result in a duplicate.<br />Only the pinned block will be non-editable, the duplicate will still be editable.';
$string['stickyblocksmymoodle'] = 'My Moodle';
$string['stickyblockspagetype'] = 'Page type to configure';
$string['strictformsrequired'] = 'Strict validation of required fields';
$string['stripalltitletags'] = 'Remove HTML tags from all activity names';
$string['supportcontact'] = 'Support contact';
$string['supportemail'] = 'Support email';
$string['supportname'] = 'Support name';
$string['supportpage'] = 'Support page';
$string['suspenduser'] = 'Suspend user account';
$string['switchlang'] = 'Switch lang directory';
$string['systempaths'] = 'System paths';
$string['tablenosave'] = 'Changes in table above are saved automatically.';
$string['tablesnosave'] = 'Changes in tables above are saved automatically.';
$string['tabselectedtofront'] = 'On tables with tabs, should the row with the currently selected tab be placed at the front';
$string['tabselectedtofronttext'] = 'Bring selected tab row to front';
$string['themedesignermode'] = 'Theme designer mode';
$string['themelist'] = 'Theme list';
$string['themenoselected'] = 'No theme selected';
$string['themeresetcaches'] = 'Clear theme caches';
$string['themeselect'] = 'Change theme';
$string['themeselector'] = 'Theme selector';
$string['themesettings'] = 'Theme settings';
$string['therewereerrors'] = 'There were errors in your data';
$string['timezone'] = 'Default timezone';
$string['timezoneforced'] = 'This is forced by the site administrator';
$string['timezoneisforcedto'] = 'Force all users to use';
$string['timezonenotforced'] = 'Users can choose their own timezone';
$string['tokenizerrecommended'] = 'Installing the optional PHP Tokenizer extension is recommended -- it improves Moodle Networking functionality.';
$string['tools'] = 'Admin tools';
$string['toolsdeleteconfirm'] = 'You are about to completely delete the admin tool \'{$a}\'. This will completely delete everything in the database associated with this plugin. Are you SURE you want to continue?';
$string['toolsmanage'] = 'Manage admin tools';
$string['unattendedoperation'] = 'Unattended operation';
$string['unbookmarkthispage'] = 'Unbookmark this page';
$string['unicoderecommended'] = 'Storing all your data in Unicode (UTF-8) is recommended. New installations should be performed into databases that have their default character set as Unicode.  If you are upgrading, you should perform the UTF-8 migration process (see the Admin page).';
$string['unicoderequired'] = 'It is required that you store all your data in Unicode format (UTF-8). New installations must be performed into databases that have their default character set as Unicode.  If you are upgrading, you should perform the UTF-8 migration process (see the Admin page).';
$string['uninstallplugin'] = 'Uninstall';
$string['unsettheme'] = 'Unset theme';
$string['unsupported'] = 'Unsupported';
$string['unsuspenduser'] = 'Activate user account';
$string['updateaccounts'] = 'Update existing accounts';
$string['updatecomponent'] = 'Update component';
$string['updateavailable'] = 'There is a newer Moodle version available!';
$string['updateavailabledetailslink'] = 'See {$a->url} for more details';
$string['updateavailableforplugin'] = 'There is a newer version for some of your plugins available!';
$string['updateavailable_moreinfo'] = 'More info...';
$string['updateavailable_release'] = 'Moodle {$a}';
$string['updateavailable_version'] = 'Version {$a}';
<<<<<<< HEAD
=======
$string['updateavailableinstall'] = 'Install this update';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['updateavailablenot'] = 'Your Moodle code is up-to-date!';
$string['updatenotifications'] = 'Update notifications';
$string['updatenotificationfooter'] = 'Your Moodle site {$a->siteurl} is configured to automatically check for available updates. You are receiving this message as the administrator of the site. You can disable automatic checks for available updates in the Site administration section of the Settings block. You can customize the delivery of this message via your personal Messaging setting in the My profile settings section.';
$string['updatenotificationsubject'] = 'Moodle updates are available ({$a->siteurl})';
$string['updateautocheck'] = 'Automatically check for available updates';
$string['updateautocheck_desc'] = 'If enabled, your site will automatically check for available updates for both Moodle code and all additional plugins. If there is a new update available, a notification will be sent to site admins.';
<<<<<<< HEAD
=======
$string['updateautodeploy'] = 'Enable updates deployment';
$string['updateautodeploy_desc'] = 'If enabled, you will be able to download and install available updates directly from Moodle administration pages. Note that your web server process has to have write access into folders with Moodle installation to make this work. That can be seen as a potential security risk.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['updateminmaturity'] = 'Required code maturity';
$string['updateminmaturity_desc'] = 'Notify about available updates only if the available code has the selected maturity level at least. Updates for plugins that do not declare their code maturity level are always reported regardless this setting.';
$string['updatenotifybuilds'] = 'Notify about new builds';
$string['updatenotifybuilds_desc'] = 'If enabled, the available update for Moodle code is also reported when a new build for the current version is available. Builds are continuous improvements of a given Moodle version. They are generally released every week. If disabled, the available update will be reported only when there is a higher version of Moodle released. Checks for plugins are not affected by this setting.';
$string['upgradestart'] = 'Upgrade Moodle database now';
$string['upgradepluginsfirst'] = 'You have to download and install available updates manually';
$string['upgradepluginsinfo'] = 'Updating plugins';
$string['upgradepluginsinfo_help'] = 'There are available updates for some of your plugins. Moodle does not update them automatically yet. You have to download the update and install it at your server manually.';
$string['upgradepluginsinfo_link'] = 'admin/upgradepluginsinfo';
$string['upgradeerror'] = 'Unknown error upgrading {$a->plugin} to version {$a->version}, can not continue.';
$string['upgradeforumread'] = 'A new feature has been added in Moodle 1.5 to track read/unread forum posts.<br />To use this functionality you need to <a href="{$a}">update your tables</a>.';
$string['upgradeforumreadinfo'] = 'A new feature has been added in Moodle 1.5 to track read/unread forum posts.  To use this functionality you need to update your tables with all the tracking information for existing posts.  Depending on the size of your site this can take a long time (hours) and can be quite taxing on the database, so it\'s best to do it during a quiet period.  However, your site will continue functioning during this upgrade and users won\'t be affected.  Once you start this process you should let it finish (keep your browser window open).  However, if you stop the process by closing the window: don\'t worry, you can start over.<br /><br />Do you want to start the upgrading process now?';
$string['upgradelogs'] = 'For full functionality, your old logs need to be upgraded.  <a href="{$a}">More information</a>';
$string['upgradelogsinfo'] = 'Some changes have recently been made in the way logs are stored.  To be able to view all of your old logs on a per-activity basis, your old logs need to be upgraded.  Depending on your site this can take a long time (eg several hours) and can be quite taxing on the database for large sites.  Once you start this process you should let it finish (by keeping the browser window open).  Don\'t worry - your site will work fine for other people while the logs are being upgraded.<br /><br />Do you want to upgrade your logs now?';
$string['upgradesettings'] = 'New settings';
$string['upgradesettingsintro'] = 'The settings shown below were added during your last Moodle upgrade. Make any changes necessary to the defaults and then click the &quot;Save changes&quot; button at the bottom of this page.';
$string['upgradestalefiles'] = 'Mixed Moodle versions detected, upgrade cannot continue';
$string['upgradestalefilesinfo'] = 'The Moodle update process has been paused because PHP scripts from at least two major versions of Moodle have been detected in the Moodle directory.

This can cause significant problems later, so in order to continue you must ensure that the Moodle directory contains only files for a single version of Moodle.

The recommended way to clean your Moodle directory is as follows:

* rename the current Moodle directory to "moodle_old"
* create a new Moodle directory containing only files from either a standard Moodle package download, or from the Moodle Git repository
* move the original config.php file and any non-standard plugins from the "moodle_old" directory to the new Moodle directory

When you have a clean Moodle directory, refresh this page to resume the Moodle update process.

This warning is often caused by unzipping a standard Moodle package over a previous version of Moodle. While this is OK for minor upgrades, it is strongly discouraged for major Moodle upgrades.

This warning can also be caused by an incomplete checkout or update operation from the Git repository, in which case you may just have to wait for the operation to complete, or perhaps run the appropriate clean-up command and retry the operation.

You can find more information in upgrade documentation at <a href="{$a}">{$a}</a>.';
$string['upgradesure'] = 'Your Moodle files have been changed, and you are about to automatically upgrade your server to this version: <br /><br />
<strong>{$a}</strong> <br /><br />
Once you do this you can not go back again. <br /><br />
Please note that this process can take a long time. <br /><br />
Are you sure you want to upgrade this server to this version?';
$string['upgradetimedout'] = 'Upgrade timed out, please restart the upgrade.';
$string['upgrade197notice'] = '<p>Moodle 1.9.7 contains a number of security fixes to user passwords and backups to protect the user data on your site. As a result some of your settings and permissions relating to backups may have changed.<br />
See the <a href="http://docs.moodle.org/dev/Moodle_1.9.7_release_notes" target="_blank">Moodle 1.9.7 release notes</a> for full details.</p>';
$string['upgrade197noticesubject'] = 'Moodle 1.9.7 upgrade security notices';
$string['upgrade197salt'] = 'To reduce the risk of password theft, you are strongly recommended to set a password salt.<br />See the <a href="{$a}" target="_blank">password salting documentation</a> for details.';
$string['upgradingdata'] = 'Upgrading data';
$string['upgradinglogs'] = 'Upgrading logs';
$string['upgradingversion'] = 'Upgrading to new version';
$string['upwards'] = 'upwards';
$string['useblogassociations'] = 'Enable associations';
$string['useexternalyui'] = 'Use online YUI libraries';
$string['usehtmleditor'] = 'Use HTML editor';
$string['user'] = 'User';
$string['userbulk'] = 'Bulk user actions';
$string['userlist'] = 'Browse list of users';
$string['userpreference'] = 'User preference';
$string['userpolicies'] = 'User policies';
$string['users'] = 'Users';
$string['userquota'] = 'User quota';
$string['usesitenameforsitepages'] = 'Use site name for site pages';
$string['usetags'] = 'Enable tags functionality';
$string['validateerror'] = 'This value was not valid:';
$string['verifychangedemail'] = 'Restrict domains when changing email';
$string['warningcurrentsetting'] = 'Invalid current value: {$a}';
$string['warningiconvbuggy'] = 'Your version of the iconv library does not support the //IGNORE modifier. You should install the mbstring extension which can be used instead for cleaning strings containing invalid UTF-8 characters.';
$string['webproxy'] = 'Web proxy';
$string['webproxyinfo'] = 'Fill in following options if your Moodle server can not access internet directly. Internet access is required for download of environment data, language packs, RSS feeds, timezones, etc.<br /><em>PHP cURL extension is highly recommended.</em>';
$string['xmlrpcrecommended'] = 'The xmlrpc extension is needed for hub communication, and useful for web services and Moodle networking';
<<<<<<< HEAD
$string['xmlstrictheaders'] = 'XML strict headers';
$string['yuicomboloading'] = 'YUI combo loading';
$string['ziprequired'] = 'The Zip PHP extension is now required by Moodle, info-ZIP binaries or PclZip library are not used anymore.';
=======
$string['yuicomboloading'] = 'YUI combo loading';
$string['ziprequired'] = 'The Zip PHP extension is now required by Moodle, info-ZIP binaries or PclZip library are not used anymore.';


$string['caching'] = 'Caching';
$string['cachesettings'] = 'Cache settings';
$string['cacherequest'] = 'Request cache';
$string['cacherequesthelp'] = 'User specific cache that expires when the request is complete. Designed to replace areas where we are using the static stores.';
$string['cachesession'] = 'Session cache';
$string['cachesessionhelp'] = 'User specific cache that expires when the user\'s session ends. Designed to alleviate session bloat/strain.';
$string['cacheapplication'] = 'Application cache';
$string['cacheapplicationhelp'] = ' Cached items are shared amoung all users and expire by a determined ttl.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
