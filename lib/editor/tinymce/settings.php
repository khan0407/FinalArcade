<?php
<<<<<<< HEAD

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
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
 * TinyMCE admin settings
 *
<<<<<<< HEAD
 * @package    editor
 * @subpackage tinymce
=======
 * @package    editor_tinymce
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @copyright  2009 Petr Skoda (http://skodak.org)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

<<<<<<< HEAD
if ($ADMIN->fulltree) {
    $options = array(
        'PSpell'=>'PSpell',
        'GoogleSpell'=>'Google Spell',
        'PSpellShell'=>'PSpellShell');
    $settings->add(new admin_setting_configselect('editor_tinymce/spellengine',
            get_string('spellengine', 'admin'), '', 'GoogleSpell', $options));
    $settings->add(new admin_setting_configtextarea('editor_tinymce/spelllanguagelist',
            get_string('spelllanguagelist', 'admin'), '',
            '+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,' .
            'Portuguese=pt,Spanish=es,Swedish=sv', PARAM_RAW));
    $settings->add(new admin_setting_configtextarea('editor_tinymce/fontselectlist',
        get_string('fontselectlist', 'editor_tinymce'), '',
        'Trebuchet=Trebuchet MS,Verdana,Arial,Helvetica,sans-serif;Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;Wingdings=wingdings', PARAM_RAW));
}
=======
$ADMIN->add('editorsettings', new admin_category('editortinymce', $editor->displayname, $editor->is_enabled() === false));

$settings = new admin_settingpage('editorsettingstinymce', new lang_string('settings', 'editor_tinymce'));
if ($ADMIN->fulltree) {
    require_once(__DIR__.'/adminlib.php');
    $settings->add(new tiynce_subplugins_settings());
    $settings->add(new admin_setting_heading('tinymcegeneralheader', new lang_string('settings'), ''));
    $default = "fontselect,fontsizeselect,formatselect,|,undo,redo,|,search,replace,|,fullscreen

bold,italic,underline,strikethrough,sub,sup,|,justifyleft,justifycenter,justifyright,|,cleanup,removeformat,pastetext,pasteword,|,forecolor,backcolor,|,ltr,rtl

bullist,numlist,outdent,indent,|,link,unlink,|,image,nonbreaking,charmap,table,|,code";
    $settings->add(new admin_setting_configtextarea('editor_tinymce/customtoolbar',
        get_string('customtoolbar', 'editor_tinymce'), get_string('customtoolbar_desc', 'editor_tinymce', 'http://www.tinymce.com/wiki.php/TinyMCE3x:Buttons/controls'), $default, PARAM_RAW, 100, 8));
    $settings->add(new admin_setting_configtextarea('editor_tinymce/fontselectlist',
        get_string('fontselectlist', 'editor_tinymce'), '',
        'Trebuchet=Trebuchet MS,Verdana,Arial,Helvetica,sans-serif;Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;Wingdings=wingdings', PARAM_RAW, 100, 8));
    $settings->add(new editor_tinymce_json_setting_textarea('editor_tinymce/customconfig',
        get_string('customconfig', 'editor_tinymce'), get_string('customconfig_desc', 'editor_tinymce'), '', PARAM_RAW, 100, 8));
}
$ADMIN->add('editortinymce', $settings);
unset($settings);

require_once("$CFG->libdir/pluginlib.php");
$allplugins = plugin_manager::instance()->get_plugins();
foreach ($allplugins['tinymce'] as $plugin) {
    $plugin->load_settings($ADMIN, 'editortinymce', $hassiteconfig);
}

// TinyMCE does not have standard settings page.
$settings = null;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
