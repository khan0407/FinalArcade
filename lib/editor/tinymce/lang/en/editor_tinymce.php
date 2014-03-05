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
<<<<<<< HEAD
 * Strings for component 'editor_tinymce', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    editor
 * @subpackage tinymce
=======
 * Strings for component 'editor_tinymce', language 'en'.
 *
 * Note: use editor/tinymce/extra/tools/update_lang_files.php script to import strings from upstream JS lang files.
 *
 * @package    editor_tinymce
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


//== Custom Moodle strings that are not part of upstream TinyMCE ==
<<<<<<< HEAD
$string['common:browseimage'] = 'Find or upload an image...';
$string['common:browsemedia'] = 'Find or upload a sound, video or applet...';
$string['dragmath:dragmath_desc'] = 'Insert equation';
$string['dragmath:dragmath_javaneeded'] = 'To use this page you need a Java-enabled browser. Download the latest Java plug-in from {$a}.';
$string['dragmath:dragmath_title'] = 'DragMath Equation Editor';
$string['fontselectlist'] = 'Available fonts list';
$string['media_dlg:filename'] = 'Filename';
$string['moodleemoticon:desc'] = 'Insert emoticon';
$string['moodlenolink:desc'] = 'Prevent automatic linking';
$string['pluginname'] = 'TinyMCE HTML editor';


// == TinyMCE upstream lang strings from all plugins ==
=======
$string['availablebuttons'] = 'Available buttons';
$string['customconfig'] = 'Custom configuration';
$string['customconfig_desc'] = 'Custom advanced TinyMCE configuration in JSON format, for example: {"option1" : "value2", "option2" : "value2"}. Any options specified here override standard and plugin settings.';
$string['customtoolbar'] = 'Editor toolbar';
$string['customtoolbar_desc'] = 'Each line contains a list of comma separated button names, use "|" as a group separator, empty lines are ignored. See <a href="{$a}" target="_blank">{$a}</a> for the list of default TinyMCE buttons.';
$string['fontselectlist'] = 'Available fonts list';
$string['pluginname'] = 'TinyMCE HTML editor';
$string['settings'] = 'General settings';
$string['subplugindeleteconfirm'] = 'You are about to completely delete TinyMCE subplugin \'{$a}\'. This will completely delete everything in the database associated with this subplugin. Are you SURE you want to continue?';
$string['subplugintype_tinymce_plural'] = 'Plugins';


// == TinyMCE upstream lang strings from all standard upstream plugins ==
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced:address'] = 'Address';
$string['advanced:anchor_delta_height'] = '';
$string['advanced:anchor_delta_width'] = '';
$string['advanced:anchor_desc'] = 'Insert/edit anchor';
$string['advanced:backcolor_desc'] = 'Select background color';
$string['advanced:block'] = 'Format';
<<<<<<< HEAD
$string['advanced:blockquote'] = 'Blockquote';
$string['advanced:blockquote_desc'] = 'Blockquote';
$string['advanced:bold_desc'] = 'Bold (Ctrl+B)';
$string['advanced:bullist_desc'] = 'Unordered list';
$string['advanced:charmap_delta_height'] = '';
$string['advanced:charmap_delta_width'] = '';
$string['advanced:charmap_desc'] = 'Insert custom character';
$string['advanced:cleanup_desc'] = 'Cleanup messy code';
$string['advanced:clipboard_msg'] = 'Copy/Cut/Paste is not available in Mozilla and Firefox.
Do you want more information about this issue?';
$string['advanced:code'] = 'Code';
$string['advanced:code_desc'] = 'Edit HTML Source';
$string['advanced:colorpicker_delta_height'] = '';
$string['advanced:colorpicker_delta_width'] = '';
$string['advanced:copy_desc'] = 'Copy';
$string['advanced:custom1_desc'] = 'Your custom description here';
$string['advanced:cut_desc'] = 'Cut';
$string['advanced:dd'] = 'Definition description';
$string['advanced:div'] = 'Div';
=======
$string['advanced:blockquote'] = 'Block quote';
$string['advanced:blockquote_desc'] = 'Block quote';
$string['advanced:bold_desc'] = 'Bold (Ctrl+B)';
$string['advanced:bullist_desc'] = 'Insert/remove bulleted list';
$string['advanced:charmap_delta_height'] = '';
$string['advanced:charmap_delta_width'] = '';
$string['advanced:charmap_desc'] = 'Insert special character';
$string['advanced:cleanup_desc'] = 'Cleanup messy code';
$string['advanced:clipboard_msg'] = 'Copy/cut/paste is not available in Mozilla and Firefox.
Do you want more information about this issue?';
$string['advanced:code'] = 'Code';
$string['advanced:code_desc'] = 'Edit HTML source';
$string['advanced:colorpicker_delta_height'] = '';
$string['advanced:colorpicker_delta_width'] = '';
/* $string['advanced:copy_desc'] = 'Copy (Ctrl+C)'; */
$string['advanced:custom1_desc'] = 'Your custom description here';
/* $string['advanced:cut_desc'] = 'Cut (Ctrl+X)'; */
$string['advanced:dd'] = 'Definition description';
$string['advanced:div'] = 'DIV';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced:dt'] = 'Definition term ';
$string['advanced:font_size'] = 'Font size';
$string['advanced:fontdefault'] = 'Font family';
$string['advanced:forecolor_desc'] = 'Select text color';
$string['advanced:h1'] = 'Heading 1';
$string['advanced:h2'] = 'Heading 2';
$string['advanced:h3'] = 'Heading 3';
$string['advanced:h4'] = 'Heading 4';
$string['advanced:h5'] = 'Heading 5';
$string['advanced:h6'] = 'Heading 6';
$string['advanced:help_desc'] = 'Help';
<<<<<<< HEAD
$string['advanced:hr_desc'] = 'Insert horizontal ruler';
=======
$string['advanced:help_shortcut'] = 'Press ALT-F10 for toolbar. Press ALT-0 for help';
$string['advanced:hr_desc'] = 'Insert horizontal line';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced:image_delta_height'] = '';
$string['advanced:image_delta_width'] = '';
$string['advanced:image_desc'] = 'Insert/edit image';
$string['advanced:image_props_desc'] = 'Image properties';
<<<<<<< HEAD
$string['advanced:indent_desc'] = 'Indent';
=======
$string['advanced:indent_desc'] = 'Increase indent';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced:italic_desc'] = 'Italic (Ctrl+I)';
$string['advanced:justifycenter_desc'] = 'Align center';
$string['advanced:justifyfull_desc'] = 'Align full';
$string['advanced:justifyleft_desc'] = 'Align left';
$string['advanced:justifyright_desc'] = 'Align right';
$string['advanced:link_delta_height'] = '';
$string['advanced:link_delta_width'] = '';
$string['advanced:link_desc'] = 'Insert/edit link';
<<<<<<< HEAD
$string['advanced:more_colors'] = 'More colors';
$string['advanced:newdocument'] = 'Are you sure you want clear all contents?';
$string['advanced:newdocument_desc'] = 'New document';
$string['advanced:numlist_desc'] = 'Ordered list';
$string['advanced:outdent_desc'] = 'Outdent';
$string['advanced:paragraph'] = 'Paragraph';
$string['advanced:paste_desc'] = 'Paste';
=======
$string['advanced:more_colors'] = 'More colors...';
$string['advanced:newdocument'] = 'Are you sure you want clear all contents?';
$string['advanced:newdocument_desc'] = 'New document';
$string['advanced:numlist_desc'] = 'Insert/remove numbered list';
$string['advanced:outdent_desc'] = 'Decrease indent';
$string['advanced:paragraph'] = 'Paragraph';
/* $string['advanced:paste_desc'] = 'Paste (Ctrl+V)'; */
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced:path'] = 'Path';
$string['advanced:pre'] = 'Preformatted';
$string['advanced:redo_desc'] = 'Redo (Ctrl+Y)';
$string['advanced:removeformat_desc'] = 'Remove formatting';
<<<<<<< HEAD
$string['advanced:samp'] = 'Code sample';
=======
$string['advanced:rich_text_area'] = 'Rich text area';
$string['advanced:samp'] = 'Code sample';
/* $string['advanced:shortcuts_desc'] = 'Accessability Help'; */
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced:striketrough_desc'] = 'Strikethrough';
$string['advanced:style_select'] = 'Styles';
$string['advanced:sub_desc'] = 'Subscript';
$string['advanced:sup_desc'] = 'Superscript';
<<<<<<< HEAD
$string['advanced:toolbar_focus'] = 'Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X';
$string['advanced:underline_desc'] = 'Underline (Ctrl+U)';
$string['advanced:undo_desc'] = 'Undo (Ctrl+Z)';
$string['advanced:unlink_desc'] = 'Unlink';
$string['advanced:visualaid_desc'] = 'Toggle guidelines/invisible elements';
=======
$string['advanced:toolbar'] = 'Toolbar';
$string['advanced:toolbar_focus'] = 'Jump to tool buttons - Alt+Q, jump to editor - Alt-Z, jump to element path - Alt-X';
$string['advanced:underline_desc'] = 'Underline (Ctrl+U)';
$string['advanced:undo_desc'] = 'Undo (Ctrl+Z)';
$string['advanced:unlink_desc'] = 'Unlink';
$string['advanced:visualaid_desc'] = 'Show/hide guidelines/invisible elements';
$string['advanced_dlg:'] = '';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced_dlg:about_author'] = 'Author';
$string['advanced_dlg:about_general'] = 'About';
$string['advanced_dlg:about_help'] = 'Help';
$string['advanced_dlg:about_license'] = 'License';
$string['advanced_dlg:about_loaded'] = 'Loaded plugins';
$string['advanced_dlg:about_plugin'] = 'Plugin';
$string['advanced_dlg:about_plugins'] = 'Plugins';
$string['advanced_dlg:about_title'] = 'About TinyMCE';
$string['advanced_dlg:about_version'] = 'Version';
<<<<<<< HEAD
$string['advanced_dlg:anchor_name'] = 'Anchor name';
$string['advanced_dlg:anchor_title'] = 'Insert/edit anchor';
$string['advanced_dlg:charmap_title'] = 'Select custom character';
$string['advanced_dlg:charmap_usage'] = 'Use left and right arrows to navigate.';
$string['advanced_dlg:code_title'] = 'HTML Source Editor';
=======
$string['advanced_dlg:accessibility_help'] = 'Accessibility help';
$string['advanced_dlg:accessibility_usage_title'] = 'General usage';
$string['advanced_dlg:anchor_invalid'] = 'Please specify a valid anchor name.';
$string['advanced_dlg:anchor_name'] = 'Anchor name';
$string['advanced_dlg:anchor_title'] = 'Insert/edit anchor';
$string['advanced_dlg:charmap_title'] = 'Select special character';
$string['advanced_dlg:charmap_usage'] = 'Use left and right arrows to navigate.';
$string['advanced_dlg:code_title'] = 'HTML source editor';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced_dlg:code_wordwrap'] = 'Word wrap';
$string['advanced_dlg:colorpicker_color'] = 'Color:';
$string['advanced_dlg:colorpicker_name'] = 'Name:';
$string['advanced_dlg:colorpicker_named_tab'] = 'Named';
$string['advanced_dlg:colorpicker_named_title'] = 'Named colors';
$string['advanced_dlg:colorpicker_palette_tab'] = 'Palette';
$string['advanced_dlg:colorpicker_palette_title'] = 'Palette colors';
$string['advanced_dlg:colorpicker_picker_tab'] = 'Picker';
$string['advanced_dlg:colorpicker_picker_title'] = 'Color picker';
$string['advanced_dlg:colorpicker_title'] = 'Select a color';
$string['advanced_dlg:image_align'] = 'Alignment';
$string['advanced_dlg:image_align_baseline'] = 'Baseline';
$string['advanced_dlg:image_align_bottom'] = 'Bottom';
$string['advanced_dlg:image_align_left'] = 'Left';
$string['advanced_dlg:image_align_middle'] = 'Middle';
$string['advanced_dlg:image_align_right'] = 'Right';
$string['advanced_dlg:image_align_textbottom'] = 'Text bottom';
$string['advanced_dlg:image_align_texttop'] = 'Text top';
$string['advanced_dlg:image_align_top'] = 'Top';
$string['advanced_dlg:image_alt'] = 'Image description';
$string['advanced_dlg:image_border'] = 'Border';
$string['advanced_dlg:image_dimensions'] = 'Dimensions';
$string['advanced_dlg:image_hspace'] = 'Horizontal space';
$string['advanced_dlg:image_list'] = 'Image list';
$string['advanced_dlg:image_src'] = 'Image URL';
$string['advanced_dlg:image_title'] = 'Insert/edit image';
$string['advanced_dlg:image_vspace'] = 'Vertical space';
<<<<<<< HEAD
=======
$string['advanced_dlg:invalid_color_value'] = 'Invalid color value';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advanced_dlg:link_is_email'] = 'The URL you entered seems to be an email address. Do you want to add the required mailto: prefix?';
$string['advanced_dlg:link_is_external'] = 'The URL you entered seems to be an external link. Do you want to add the required http:// prefix?';
$string['advanced_dlg:link_list'] = 'Link list';
$string['advanced_dlg:link_target'] = 'Target';
$string['advanced_dlg:link_target_blank'] = 'Open link in a new window';
$string['advanced_dlg:link_target_same'] = 'Open link in the same window';
$string['advanced_dlg:link_title'] = 'Insert/edit link';
$string['advanced_dlg:link_titlefield'] = 'Title';
$string['advanced_dlg:link_url'] = 'Link URL';
<<<<<<< HEAD
$string['advhr:advhr_desc'] = 'Horizontal rule';
$string['advhr:delta_height'] = '';
$string['advhr:delta_width'] = '';
$string['advhr_dlg:noshade'] = 'No shadow';
$string['advhr_dlg:size'] = 'Height';
$string['advhr_dlg:width'] = 'Width';
=======
$string['advhr:advhr_desc'] = 'Insert horizontal line';
$string['advhr:delta_height'] = '';
$string['advhr:delta_width'] = '';
$string['advhr_dlg:normal'] = 'Normal';
$string['advhr_dlg:noshade'] = 'No shadow';
$string['advhr_dlg:size'] = 'Height';
$string['advhr_dlg:width'] = 'Width';
$string['advhr_dlg:widthunits'] = 'Units';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advimage:delta_height'] = '';
$string['advimage:delta_width'] = '';
$string['advimage:image_desc'] = 'Insert/edit image';
$string['advimage_dlg:align'] = 'Alignment';
$string['advimage_dlg:align_baseline'] = 'Baseline';
$string['advimage_dlg:align_bottom'] = 'Bottom';
$string['advimage_dlg:align_left'] = 'Left';
$string['advimage_dlg:align_middle'] = 'Middle';
$string['advimage_dlg:align_right'] = 'Right';
$string['advimage_dlg:align_textbottom'] = 'Text bottom';
$string['advimage_dlg:align_texttop'] = 'Text top';
$string['advimage_dlg:align_top'] = 'Top';
$string['advimage_dlg:alt'] = 'Image description';
$string['advimage_dlg:alt_image'] = 'Alternative image';
$string['advimage_dlg:border'] = 'Border';
$string['advimage_dlg:classes'] = 'Classes';
$string['advimage_dlg:constrain_proportions'] = 'Constrain proportions';
$string['advimage_dlg:dialog_title'] = 'Insert/edit image';
$string['advimage_dlg:dimensions'] = 'Dimensions';
$string['advimage_dlg:example_img'] = 'Appearance preview image';
$string['advimage_dlg:general'] = 'General';
<<<<<<< HEAD
$string['advimage_dlg:hspace'] = 'Horizontal space';
$string['advimage_dlg:id'] = 'Id';
=======
$string['advimage_dlg:height'] = 'Height';
$string['advimage_dlg:hspace'] = 'Horizontal space';
$string['advimage_dlg:id'] = 'ID';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advimage_dlg:image_list'] = 'Image list';
$string['advimage_dlg:langcode'] = 'Language code';
$string['advimage_dlg:langdir'] = 'Language direction';
$string['advimage_dlg:list'] = 'Image list';
$string['advimage_dlg:long_desc'] = 'Long description link';
$string['advimage_dlg:ltr'] = 'Left to right';
$string['advimage_dlg:map'] = 'Image map';
$string['advimage_dlg:misc'] = 'Miscellaneous';
<<<<<<< HEAD
$string['advimage_dlg:missing_alt'] = 'Are you sure you want to continue without including an Image Description? Without it the image may not be accessible to some users with disabilities, or to those using a text browser, or browsing the Web with images turned off.';
=======
$string['advimage_dlg:missing_alt'] = 'Are you sure you want to continue without including an image description? Without it the image may not be accessible to some users with disabilities, or to those using a text browser, or browsing the Web with images turned off.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advimage_dlg:mouseout'] = 'for mouse out';
$string['advimage_dlg:mouseover'] = 'for mouse over';
$string['advimage_dlg:preview'] = 'Preview';
$string['advimage_dlg:rtl'] = 'Right to left';
$string['advimage_dlg:src'] = 'Image URL';
$string['advimage_dlg:style'] = 'Style';
$string['advimage_dlg:swap_image'] = 'Swap image';
$string['advimage_dlg:tab_advanced'] = 'Advanced';
$string['advimage_dlg:tab_appearance'] = 'Appearance';
$string['advimage_dlg:tab_general'] = 'General';
$string['advimage_dlg:title'] = 'Title';
$string['advimage_dlg:vspace'] = 'Vertical space';
<<<<<<< HEAD
$string['advlink:delta_height'] = '';
$string['advlink:delta_width'] = '';
$string['advlink:link_desc'] = 'Insert/edit link';
$string['advlink_dlg:accesskey'] = 'Accesskey';
=======
$string['advimage_dlg:width'] = 'Width';
$string['advlink:delta_height'] = '';
$string['advlink:delta_width'] = '';
$string['advlink:link_desc'] = 'Insert/edit link';
$string['advlink_dlg:accesskey'] = 'AccessKey';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advlink_dlg:advanced_props'] = 'Advanced properties';
$string['advlink_dlg:advanced_tab'] = 'Advanced';
$string['advlink_dlg:anchor_names'] = 'Anchors';
$string['advlink_dlg:classes'] = 'Classes';
$string['advlink_dlg:encoding'] = 'Target character encoding';
$string['advlink_dlg:event_props'] = 'Events';
$string['advlink_dlg:events_tab'] = 'Events';
$string['advlink_dlg:general_props'] = 'General properties';
$string['advlink_dlg:general_tab'] = 'General';
<<<<<<< HEAD
$string['advlink_dlg:id'] = 'Id';
=======
$string['advlink_dlg:height'] = 'Height';
$string['advlink_dlg:id'] = 'ID';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advlink_dlg:is_email'] = 'The URL you entered seems to be an email address. Do you want to add the required mailto: prefix?';
$string['advlink_dlg:is_external'] = 'The URL you entered seems to be an external link. Do you want to add the required http:// prefix?';
$string['advlink_dlg:langcode'] = 'Language code';
$string['advlink_dlg:langdir'] = 'Language direction';
$string['advlink_dlg:link_list'] = 'Link list';
$string['advlink_dlg:list'] = 'Link list';
$string['advlink_dlg:ltr'] = 'Left to right';
$string['advlink_dlg:mime'] = 'Target MIME type';
<<<<<<< HEAD
$string['advlink_dlg:popup'] = 'Javascript popup';
=======
$string['advlink_dlg:popup'] = 'JavaScript popup';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advlink_dlg:popup_dependent'] = 'Dependent (Mozilla/Firefox only)';
$string['advlink_dlg:popup_location'] = 'Show location bar';
$string['advlink_dlg:popup_menubar'] = 'Show menu bar';
$string['advlink_dlg:popup_name'] = 'Window name';
$string['advlink_dlg:popup_opts'] = 'Options';
$string['advlink_dlg:popup_position'] = 'Position (X/Y)';
$string['advlink_dlg:popup_props'] = 'Popup properties';
$string['advlink_dlg:popup_resizable'] = 'Make window resizable';
$string['advlink_dlg:popup_return'] = 'Insert \'return false\'';
$string['advlink_dlg:popup_scrollbars'] = 'Show scrollbars';
$string['advlink_dlg:popup_size'] = 'Size';
$string['advlink_dlg:popup_statusbar'] = 'Show status bar';
$string['advlink_dlg:popup_tab'] = 'Popup';
$string['advlink_dlg:popup_toolbar'] = 'Show toolbars';
$string['advlink_dlg:popup_url'] = 'Popup URL';
$string['advlink_dlg:rel'] = 'Relationship page to target';
$string['advlink_dlg:rev'] = 'Relationship target to page';
$string['advlink_dlg:rtl'] = 'Right to left';
$string['advlink_dlg:style'] = 'Style';
<<<<<<< HEAD
$string['advlink_dlg:tabindex'] = 'Tabindex';
=======
$string['advlink_dlg:tabindex'] = 'TabIndex';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advlink_dlg:target'] = 'Target';
$string['advlink_dlg:target_blank'] = 'Open in new window';
$string['advlink_dlg:target_langcode'] = 'Target language';
$string['advlink_dlg:target_name'] = 'Target name';
<<<<<<< HEAD
$string['advlink_dlg:target_parent'] = 'Open in parent window / frame';
$string['advlink_dlg:target_same'] = 'Open in this window / frame';
=======
$string['advlink_dlg:target_parent'] = 'Open in parent window/frame';
$string['advlink_dlg:target_same'] = 'Open in this window/frame';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advlink_dlg:target_top'] = 'Open in top frame (replaces all frames)';
$string['advlink_dlg:title'] = 'Insert/edit link';
$string['advlink_dlg:titlefield'] = 'Title';
$string['advlink_dlg:url'] = 'Link URL';
<<<<<<< HEAD
=======
$string['advlink_dlg:width'] = 'Width';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['advlist:circle'] = 'Circle';
$string['advlist:def'] = 'Default';
$string['advlist:disc'] = 'Disc';
$string['advlist:lower_alpha'] = 'Lower alpha';
$string['advlist:lower_greek'] = 'Lower greek';
$string['advlist:lower_roman'] = 'Lower roman';
$string['advlist:square'] = 'Square';
$string['advlist:types'] = 'Types';
$string['advlist:upper_alpha'] = 'Upper alpha';
$string['advlist:upper_roman'] = 'Upper roman';
<<<<<<< HEAD
$string['autosave:restore_content'] = 'Restore auto-saved content.';
$string['autosave:unload_msg'] = 'The changes you made will be lost if you navigate away from this page.';
$string['autosave:warning_message'] = 'If you restore the saved content, you will lose all the content that is currently in the editor.

Are you sure you want to restore the saved content?.';
=======
$string['aria:rich_text_area'] = 'Rich text area';
$string['autosave:restore_content'] = 'Restore auto-saved content';
$string['autosave:unload_msg'] = 'The changes you made will be lost if you navigate away from this page.';
$string['autosave:warning_message'] = 'If you restore the saved content, you will lose all the content that is currently in the editor.

Are you sure you want to restore the saved content?';
$string['colors:000000'] = 'Black';
$string['colors:000080'] = 'Navy blue';
$string['colors:0000FF'] = 'Blue';
$string['colors:003300'] = 'Dark green';
$string['colors:003366'] = 'Dark azure';
$string['colors:008000'] = 'Green';
$string['colors:008080'] = 'Teal';
$string['colors:00CCFF'] = 'Sky blue';
$string['colors:00FF00'] = 'Lime';
$string['colors:00FFFF'] = 'Aqua';
$string['colors:333300'] = 'Dark olive';
$string['colors:333333'] = 'Very dark gray';
$string['colors:333399'] = 'Indigo';
$string['colors:3366FF'] = 'Royal blue';
$string['colors:339966'] = 'Sea green';
$string['colors:33CCCC'] = 'Turquoise';
$string['colors:666699'] = 'Grayish blue';
$string['colors:800000'] = 'Maroon';
$string['colors:800080'] = 'Purple';
$string['colors:808000'] = 'Olive';
$string['colors:808080'] = 'Gray';
$string['colors:993300'] = 'Burnt orange';
$string['colors:993366'] = 'Brown';
$string['colors:999999'] = 'Medium gray';
$string['colors:99CC00'] = 'Yellow green';
$string['colors:99CCFF'] = 'Light sky blue';
$string['colors:C0C0C0'] = 'Silver';
$string['colors:CC99FF'] = 'Plum';
$string['colors:CCFFCC'] = 'Pale green';
$string['colors:CCFFFF'] = 'Pale cyan';
$string['colors:FF0000'] = 'Red';
$string['colors:FF00FF'] = 'Magenta';
$string['colors:FF6600'] = 'Orange';
$string['colors:FF9900'] = 'Amber';
$string['colors:FF99CC'] = 'Pink';
$string['colors:FFCC00'] = 'Gold';
$string['colors:FFCC99'] = 'Peach';
$string['colors:FFFF00'] = 'Yellow';
$string['colors:FFFF99'] = 'Light yellow';
$string['colors:FFFFFF'] = 'White';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['common:apply'] = 'Apply';
$string['common:browse'] = 'Browse';
$string['common:cancel'] = 'Cancel';
$string['common:class_name'] = 'Class';
<<<<<<< HEAD
$string['common:clipboard_msg'] = 'Copy/Cut/Paste is not available in Mozilla and Firefox.
=======
$string['common:clipboard_msg'] = 'Copy/cut/paste is not available in Mozilla and Firefox.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
Do you want more information about this issue?';
$string['common:clipboard_no_support'] = 'Currently not supported by your browser, use keyboard shortcuts instead.';
$string['common:close'] = 'Close';
$string['common:edit_confirm'] = 'Do you want to use the WYSIWYG mode for this textarea?';
$string['common:insert'] = 'Insert';
$string['common:invalid_data'] = 'Error: Invalid values entered, these are marked in red.';
<<<<<<< HEAD
$string['common:more_colors'] = 'More colors';
$string['common:not_set'] = '-- Not set --';
$string['common:popup_blocked'] = 'Sorry, but we have noticed that your popup-blocker has disabled a window that provides application functionality. You will need to disable popup blocking on this site in order to fully utilize this tool.';
$string['common:update'] = 'Update';
=======
$string['common:invalid_data_min'] = '{#field} must be a number greater than {#min}';
$string['common:invalid_data_number'] = '{#field} must be a number';
$string['common:invalid_data_size'] = '{#field} must be a number or percentage';
$string['common:more_colors'] = 'More colors...';
$string['common:not_set'] = '-- Not set --';
$string['common:popup_blocked'] = 'Sorry, but we have noticed that your popup-blocker has disabled a window that provides application functionality. You will need to disable popup blocking on this site in order to fully utilize this tool.';
$string['common:update'] = 'Update';
$string['common:value'] = '(value)';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['contextmenu:align'] = 'Alignment';
$string['contextmenu:center'] = 'Center';
$string['contextmenu:full'] = 'Full';
$string['contextmenu:left'] = 'Left';
$string['contextmenu:right'] = 'Right';
$string['directionality:ltr_desc'] = 'Direction left to right';
$string['directionality:rtl_desc'] = 'Direction right to left';
$string['emotions:delta_height'] = '';
$string['emotions:delta_width'] = '';
$string['emotions:emotions_desc'] = 'Emotions';
$string['emotions_dlg:cool'] = 'Cool';
$string['emotions_dlg:cry'] = 'Cry';
$string['emotions_dlg:desc'] = 'Emotions';
$string['emotions_dlg:embarassed'] = 'Embarassed';
$string['emotions_dlg:foot_in_mouth'] = 'Foot in mouth';
$string['emotions_dlg:frown'] = 'Frown';
$string['emotions_dlg:innocent'] = 'Innocent';
$string['emotions_dlg:kiss'] = 'Kiss';
$string['emotions_dlg:laughing'] = 'Laughing';
$string['emotions_dlg:money_mouth'] = 'Money mouth';
$string['emotions_dlg:sealed'] = 'Sealed';
$string['emotions_dlg:smile'] = 'Smile';
$string['emotions_dlg:surprised'] = 'Surprised';
$string['emotions_dlg:title'] = 'Insert emotion';
$string['emotions_dlg:tongue_out'] = 'Tongue out';
$string['emotions_dlg:undecided'] = 'Undecided';
<<<<<<< HEAD
=======
$string['emotions_dlg:usage'] = 'Use left and right arrows to navigate.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['emotions_dlg:wink'] = 'Wink';
$string['emotions_dlg:yell'] = 'Yell';
$string['fullpage:delta_height'] = '';
$string['fullpage:delta_width'] = '';
$string['fullpage:desc'] = 'Document properties';
$string['fullpage_dlg:active_color'] = 'Active color';
$string['fullpage_dlg:add'] = 'Add new element';
$string['fullpage_dlg:add_base'] = 'Base element';
$string['fullpage_dlg:add_comment'] = 'Comment node';
$string['fullpage_dlg:add_link'] = 'Link element';
$string['fullpage_dlg:add_meta'] = 'Meta element';
$string['fullpage_dlg:add_script'] = 'Script element';
$string['fullpage_dlg:add_style'] = 'Style element';
$string['fullpage_dlg:add_title'] = 'Title element';
$string['fullpage_dlg:advanced_props'] = 'Advanced';
$string['fullpage_dlg:advanced_tab'] = 'Advanced';
$string['fullpage_dlg:appearance_bgprops'] = 'Background properties';
$string['fullpage_dlg:appearance_linkprops'] = 'Link colors';
$string['fullpage_dlg:appearance_marginprops'] = 'Body margins';
$string['fullpage_dlg:appearance_style'] = 'Stylesheet and style properties';
$string['fullpage_dlg:appearance_tab'] = 'Appearance';
$string['fullpage_dlg:appearance_textprops'] = 'Text properties';
$string['fullpage_dlg:author'] = 'Author';
$string['fullpage_dlg:base_element'] = 'Base element';
$string['fullpage_dlg:bgcolor'] = 'Background color';
$string['fullpage_dlg:bgimage'] = 'Background image';
$string['fullpage_dlg:bottom_margin'] = 'Bottom margin';
$string['fullpage_dlg:charset'] = 'Charset';
$string['fullpage_dlg:comment_element'] = 'Comment';
$string['fullpage_dlg:content'] = 'Content';
$string['fullpage_dlg:copyright'] = 'Copyright';
$string['fullpage_dlg:defer'] = 'Defer';
$string['fullpage_dlg:doctypes'] = 'Doctype';
$string['fullpage_dlg:encoding'] = 'Character encoding';
$string['fullpage_dlg:font_face'] = 'Font face';
$string['fullpage_dlg:font_size'] = 'Font size';
$string['fullpage_dlg:fontface'] = 'Font family';
$string['fullpage_dlg:fontsize'] = 'Font size';
$string['fullpage_dlg:general_props'] = 'General';
$string['fullpage_dlg:head_elements'] = 'Head elements';
$string['fullpage_dlg:hover_color'] = 'Hover color';
<<<<<<< HEAD
$string['fullpage_dlg:href'] = 'Href';
$string['fullpage_dlg:hreflang'] = 'Href lang';
=======
$string['fullpage_dlg:href'] = 'HREF';
$string['fullpage_dlg:hreflang'] = 'HREF lang';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['fullpage_dlg:info'] = 'Information';
$string['fullpage_dlg:langcode'] = 'Language code';
$string['fullpage_dlg:langdir'] = 'Language direction';
$string['fullpage_dlg:langprops'] = 'Language and encoding';
$string['fullpage_dlg:language'] = 'Language';
$string['fullpage_dlg:left_margin'] = 'Left margin';
$string['fullpage_dlg:link_color'] = 'Link color';
$string['fullpage_dlg:link_element'] = 'Link element';
$string['fullpage_dlg:ltr'] = 'Left to right';
$string['fullpage_dlg:media'] = 'Media';
$string['fullpage_dlg:meta_description'] = 'Description';
$string['fullpage_dlg:meta_element'] = 'Meta element';
$string['fullpage_dlg:meta_index_follow'] = 'Index and follow the links';
$string['fullpage_dlg:meta_index_nofollow'] = 'Index and don\'t follow the links';
$string['fullpage_dlg:meta_keywords'] = 'Keywords';
$string['fullpage_dlg:meta_noindex_follow'] = 'Do not index but follow the links';
<<<<<<< HEAD
$string['fullpage_dlg:meta_noindex_nofollow'] = 'Do not index and don\\\'t follow the links';
=======
$string['fullpage_dlg:meta_noindex_nofollow'] = 'Do not index and don\'t follow the links';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['fullpage_dlg:meta_props'] = 'Meta information';
$string['fullpage_dlg:meta_robots'] = 'Robots';
$string['fullpage_dlg:meta_tab'] = 'General';
$string['fullpage_dlg:meta_title'] = 'Title';
$string['fullpage_dlg:movedown'] = 'Move selected element down';
$string['fullpage_dlg:moveup'] = 'Move selected element up';
$string['fullpage_dlg:name'] = 'Name';
$string['fullpage_dlg:properties'] = 'Properties';
$string['fullpage_dlg:rel'] = 'Rel';
$string['fullpage_dlg:remove'] = 'Remove selected element';
$string['fullpage_dlg:rev'] = 'Rev';
$string['fullpage_dlg:right_margin'] = 'Right margin';
$string['fullpage_dlg:rtl'] = 'Right to left';
$string['fullpage_dlg:script_element'] = 'Script element';
<<<<<<< HEAD
$string['fullpage_dlg:src'] = 'Src';
=======
$string['fullpage_dlg:src'] = 'Source';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['fullpage_dlg:style'] = 'Style';
$string['fullpage_dlg:style_element'] = 'Style element';
$string['fullpage_dlg:stylesheet'] = 'Stylesheet';
$string['fullpage_dlg:target'] = 'Target';
$string['fullpage_dlg:text_color'] = 'Text color';
$string['fullpage_dlg:textcolor'] = 'Color';
$string['fullpage_dlg:title'] = 'Document properties';
$string['fullpage_dlg:title_element'] = 'Title element';
$string['fullpage_dlg:top_margin'] = 'Top margin';
$string['fullpage_dlg:type'] = 'Type';
$string['fullpage_dlg:value'] = 'Value';
$string['fullpage_dlg:visited_color'] = 'Visited color';
$string['fullpage_dlg:xml_pi'] = 'XML declaration';
<<<<<<< HEAD
$string['fullscreen:desc'] = 'Toggle fullscreen mode';
$string['iespell:download'] = 'ieSpell not detected. Do you want to install it now?';
$string['iespell:iespell_desc'] = 'Run spell checking';
=======
$string['fullscreen:desc'] = 'Toggle full screen mode';
$string['iespell:download'] = 'ieSpell not detected. Do you want to install it now?';
$string['iespell:iespell_desc'] = 'Check spelling';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['insertdatetime:date_fmt'] = '%Y-%m-%d';
$string['insertdatetime:day_long'] = 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday';
$string['insertdatetime:day_short'] = 'Sun,Mon,Tue,Wed,Thu,Fri,Sat,Sun';
$string['insertdatetime:insertdate_desc'] = 'Insert date';
$string['insertdatetime:inserttime_desc'] = 'Insert time';
$string['insertdatetime:months_long'] = 'January,February,March,April,May,June,July,August,September,October,November,December';
$string['insertdatetime:months_short'] = 'Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec';
$string['insertdatetime:time_fmt'] = '%H:%M:%S';
$string['layer:absolute_desc'] = 'Toggle absolute positioning';
$string['layer:backward_desc'] = 'Move backward';
$string['layer:content'] = 'New layer...';
$string['layer:forward_desc'] = 'Move forward';
$string['layer:insertlayer_desc'] = 'Insert new layer';
$string['media:delta_height'] = '';
$string['media:delta_width'] = '';
<<<<<<< HEAD
$string['media:desc'] = 'Insert / edit embedded media';
=======
$string['media:desc'] = 'Insert/edit embedded media';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['media:edit'] = 'Edit embedded media';
$string['media_dlg:advanced'] = 'Advanced';
$string['media_dlg:align'] = 'Align';
$string['media_dlg:align_bottom'] = 'Bottom';
$string['media_dlg:align_bottom_left'] = 'Bottom left';
$string['media_dlg:align_bottom_right'] = 'Bottom right';
$string['media_dlg:align_center'] = 'Center';
$string['media_dlg:align_left'] = 'Left';
$string['media_dlg:align_right'] = 'Right';
$string['media_dlg:align_top'] = 'Top';
$string['media_dlg:align_top_left'] = 'Top left';
$string['media_dlg:align_top_right'] = 'Top right';
<<<<<<< HEAD
$string['media_dlg:autogotourl'] = 'Auto goto URL';
$string['media_dlg:autohref'] = 'AutoHREF';
=======
$string['media_dlg:altsource1'] = 'Alternative source 1';
$string['media_dlg:altsource2'] = 'Alternative source 2';
$string['media_dlg:audio'] = 'HTML5 audio';
$string['media_dlg:autogotourl'] = 'Auto goto URL';
$string['media_dlg:autohref'] = 'Auto HREF';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['media_dlg:autostart'] = 'Auto start';
$string['media_dlg:balance'] = 'Balance';
$string['media_dlg:base'] = 'Base';
$string['media_dlg:baseurl'] = 'Base URL';
$string['media_dlg:bgcolor'] = 'Background';
$string['media_dlg:cache'] = 'Cache';
<<<<<<< HEAD
$string['media_dlg:captioningid'] = 'Captioning id';
=======
$string['media_dlg:captioningid'] = 'Captioning ID';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['media_dlg:center'] = 'Center';
$string['media_dlg:class_name'] = 'Class';
$string['media_dlg:console'] = 'Console';
$string['media_dlg:constrain_proportions'] = 'Constrain proportions';
$string['media_dlg:controller'] = 'Controller';
$string['media_dlg:controls'] = 'Controls';
$string['media_dlg:correction'] = 'No correction';
$string['media_dlg:currentmarker'] = 'Current marker';
$string['media_dlg:currentposition'] = 'Current position';
$string['media_dlg:defaultframe'] = 'Default frame';
<<<<<<< HEAD
=======
$string['media_dlg:embedded_audio_options'] = 'Embedded audio options';
$string['media_dlg:embeddedaudio'] = 'Embedded audio';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['media_dlg:enabled'] = 'Enabled';
$string['media_dlg:enablejavascript'] = 'Enable JavaScript';
$string['media_dlg:endtime'] = 'End time';
$string['media_dlg:file'] = 'File/URL';
<<<<<<< HEAD
$string['media_dlg:flash_options'] = 'Flash options';
$string['media_dlg:flashvars'] = 'Flashvars';
$string['media_dlg:flv_autostart'] = 'Auto start';
$string['media_dlg:flv_buffer'] = 'Buffer';
$string['media_dlg:flv_defaultvolume'] = 'Default volumne';
$string['media_dlg:flv_hiddengui'] = 'Hidden GUI';
$string['media_dlg:flv_jscallback'] = 'JS Callback';
$string['media_dlg:flv_loop'] = 'Loop';
$string['media_dlg:flv_options'] = 'Flash video options';
$string['media_dlg:flv_scalemode'] = 'Scale mode';
$string['media_dlg:flv_showscalemodes'] = 'Show scale modes';
$string['media_dlg:flv_smoothvideo'] = 'Smooth video';
$string['media_dlg:flv_startimage'] = 'Start image';
$string['media_dlg:flv_starttime'] = 'Start time';
$string['media_dlg:fullscreen'] = 'Fullscreen';
$string['media_dlg:general'] = 'General';
$string['media_dlg:hidden'] = 'Hidden';
$string['media_dlg:href'] = 'Href';
$string['media_dlg:hspace'] = 'H-Space';
$string['media_dlg:id'] = 'Id';
=======
$string['media_dlg:flash'] = 'Flash';
$string['media_dlg:flash_options'] = 'Flash options';
$string['media_dlg:flashvars'] = 'Flash vars';
$string['media_dlg:fullscreen'] = 'Full screen';
$string['media_dlg:general'] = 'General';
$string['media_dlg:hidden'] = 'Hidden';
$string['media_dlg:href'] = 'HREF';
$string['media_dlg:hspace'] = 'H-Space';
$string['media_dlg:html5_audio_options'] = 'Audio options';
$string['media_dlg:html5_video_options'] = 'HTML5 video options';
$string['media_dlg:id'] = 'ID';
$string['media_dlg:iframe'] = 'Iframe';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['media_dlg:imagestatus'] = 'Image status';
$string['media_dlg:invokeurls'] = 'Invoke URLs';
$string['media_dlg:kioskmode'] = 'Kiosk mode';
$string['media_dlg:list'] = 'List';
$string['media_dlg:liveconnect'] = 'SWLiveConnect';
$string['media_dlg:loop'] = 'Loop';
$string['media_dlg:maintainaspect'] = 'Maintain aspect';
$string['media_dlg:menu'] = 'Show menu';
$string['media_dlg:mute'] = 'Mute';
$string['media_dlg:name'] = 'Name';
<<<<<<< HEAD
$string['media_dlg:nojava'] = 'No java';
=======
$string['media_dlg:nojava'] = 'No Java';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['media_dlg:numloop'] = 'Num loops';
$string['media_dlg:play'] = 'Auto play';
$string['media_dlg:playcount'] = 'Play count';
$string['media_dlg:playeveryframe'] = 'Play every frame';
<<<<<<< HEAD
$string['media_dlg:prefetch'] = 'Prefetch';
$string['media_dlg:preview'] = 'Preview';
$string['media_dlg:progress'] = 'Progress';
$string['media_dlg:qt_options'] = 'Quicktime options';
$string['media_dlg:qt_stream_warn'] = 'Streamed rtsp resources should be added to the QT Src field under the advanced tab.
You should also add a non streamed version to the Src field..';
$string['media_dlg:qtsrc'] = 'QT Src';
$string['media_dlg:qtsrcchokespeed'] = 'Choke speed';
$string['media_dlg:quality'] = 'Quality';
$string['media_dlg:rate'] = 'Rate';
$string['media_dlg:rmp_options'] = 'Real media player options';
$string['media_dlg:salign'] = 'SAlign';
$string['media_dlg:scale'] = 'Scale';
$string['media_dlg:scriptcallbacks'] = 'Script callbacks';
=======
$string['media_dlg:poster'] = 'Poster';
$string['media_dlg:prefetch'] = 'Prefetch';
$string['media_dlg:preload'] = 'Preload';
$string['media_dlg:preload_auto'] = 'Let user\'s browser decide';
$string['media_dlg:preload_metadata'] = 'Preload video metadata';
$string['media_dlg:preload_none'] = 'Don\'t preload';
$string['media_dlg:preview'] = 'Preview';
$string['media_dlg:progress'] = 'Progress';
$string['media_dlg:qt_options'] = 'QuickTime options';
$string['media_dlg:qt_stream_warn'] = 'Streamed RTSP resources should be added to the QT source field under the advanced tab.
You should also add a non-streamed version to the source field.';
$string['media_dlg:qtsrc'] = 'QT source';
$string['media_dlg:qtsrcchokespeed'] = 'Choke speed';
$string['media_dlg:quality'] = 'Quality';
$string['media_dlg:quicktime'] = 'QuickTime';
$string['media_dlg:rate'] = 'Rate';
$string['media_dlg:realmedia'] = 'Real Media';
$string['media_dlg:rmp_options'] = 'Real Media Player options';
$string['media_dlg:salign'] = 'SAlign';
$string['media_dlg:scale'] = 'Scale';
$string['media_dlg:scriptcallbacks'] = 'Script callbacks';
$string['media_dlg:shockwave'] = 'Shockwave';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['media_dlg:shockwave_options'] = 'Shockwave options';
$string['media_dlg:shuffle'] = 'Shuffle';
$string['media_dlg:size'] = 'Dimensions';
$string['media_dlg:sound'] = 'Sound';
<<<<<<< HEAD
$string['media_dlg:starttime'] = 'Start time';
$string['media_dlg:stretchtofit'] = 'Stretch to fit';
$string['media_dlg:swstretchhalign'] = 'Stretch H-Align';
$string['media_dlg:swstretchstyle'] = 'Stretch style';
$string['media_dlg:swstretchvalign'] = 'Stretch V-Align';
$string['media_dlg:target'] = 'Target';
$string['media_dlg:targetcache'] = 'Target cache';
$string['media_dlg:title'] = 'Insert / edit embedded media';
$string['media_dlg:type'] = 'Type';
$string['media_dlg:uimode'] = 'UI Mode';
$string['media_dlg:volume'] = 'Volume';
$string['media_dlg:vspace'] = 'V-Space';
$string['media_dlg:windowlessvideo'] = 'Windowless video';
$string['media_dlg:wmode'] = 'WMode';
$string['media_dlg:wmp_options'] = 'Windows media player options';
$string['nonbreaking:nonbreaking_desc'] = 'Insert non-breaking space character';
$string['pagebreak:desc'] = 'Insert page break.';
$string['paste:paste_text_desc'] = 'Paste as Plain Text';
$string['paste:paste_word_desc'] = 'Paste from Word';
$string['paste:plaintext_mode'] = 'Paste is now in plain text mode. Click again to toggle back to regular paste mode.';
$string['paste:plaintext_mode_sticky'] = 'Paste is now in plain text mode. Click again to toggle back to regular paste mode. After you paste something you will be returned to regular paste mode.';
$string['paste:selectall_desc'] = 'Select All';
$string['paste_dlg:text_linebreaks'] = 'Keep linebreaks';
$string['paste_dlg:text_title'] = 'Use CTRL+V on your keyboard to paste the text into the window.';
$string['paste_dlg:word_title'] = 'Use CTRL+V on your keyboard to paste the text into the window.';
=======
$string['media_dlg:source'] = 'Source';
$string['media_dlg:starttime'] = 'Start time';
$string['media_dlg:stretchtofit'] = 'Stretch to fit';
$string['media_dlg:swstretchhalign'] = 'Stretch H-Align';
$string['media_dlg:swstretchstyle'] = 'Stretch Style';
$string['media_dlg:swstretchvalign'] = 'Stretch V-Align';
$string['media_dlg:target'] = 'Target';
$string['media_dlg:targetcache'] = 'Target cache';
$string['media_dlg:title'] = 'Insert/edit embedded media';
$string['media_dlg:type'] = 'Type';
$string['media_dlg:uimode'] = 'UI mode';
$string['media_dlg:video'] = 'HTML5 video';
$string['media_dlg:volume'] = 'Volume';
$string['media_dlg:vspace'] = 'V-Space';
$string['media_dlg:windowlessvideo'] = 'Windowless video';
$string['media_dlg:windowsmedia'] = 'Windows Media';
$string['media_dlg:wmode'] = 'WMode';
$string['media_dlg:wmp_options'] = 'Windows Media Player options';
$string['nonbreaking:nonbreaking_desc'] = 'Insert non-breaking space character';
$string['pagebreak:desc'] = 'Insert page break for printing';
$string['paste:paste_text_desc'] = 'Paste as plain Text';
$string['paste:paste_word_desc'] = 'Paste from Word';
$string['paste:plaintext_mode'] = 'Paste is now in plain text mode. Click again to toggle back to regular paste mode. After you paste something you will be returned to regular paste mode.';
$string['paste:plaintext_mode_stick'] = 'Paste is now in plain text mode. Click again to toggle back to regular paste mode.';
$string['paste:selectall_desc'] = 'Select All';
$string['paste_dlg:text_linebreaks'] = 'Keep linebreaks';
$string['paste_dlg:text_title'] = 'Use Ctrl+V on your keyboard to paste the text into the window.';
$string['paste_dlg:word_title'] = 'Use Ctrl+V on your keyboard to paste the text into the window.';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['preview:preview_desc'] = 'Preview';
$string['print:print_desc'] = 'Print';
$string['save:cancel_desc'] = 'Cancel all changes';
$string['save:save_desc'] = 'Save';
$string['searchreplace:delta_height'] = '';
$string['searchreplace:delta_width'] = '';
<<<<<<< HEAD
$string['searchreplace:replace_desc'] = 'Find/Replace';
=======
$string['searchreplace:replace_desc'] = 'Find/replace';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['searchreplace:search_desc'] = 'Find';
$string['searchreplace_dlg:allreplaced'] = 'All occurrences of the search string were replaced.';
$string['searchreplace_dlg:direction'] = 'Direction';
$string['searchreplace_dlg:down'] = 'Down';
$string['searchreplace_dlg:findnext'] = 'Find next';
$string['searchreplace_dlg:findwhat'] = 'Find what';
$string['searchreplace_dlg:mcase'] = 'Match case';
$string['searchreplace_dlg:notfound'] = 'The search has been completed. The search string could not be found.';
$string['searchreplace_dlg:replace'] = 'Replace';
<<<<<<< HEAD
$string['searchreplace_dlg:replace_title'] = 'Find/Replace';
=======
$string['searchreplace_dlg:replace_title'] = 'Find/replace';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['searchreplace_dlg:replaceall'] = 'Replace all';
$string['searchreplace_dlg:replacewith'] = 'Replace with';
$string['searchreplace_dlg:search_title'] = 'Find';
$string['searchreplace_dlg:searchnext_desc'] = 'Find again';
$string['searchreplace_dlg:up'] = 'Up';
$string['simple:bold_desc'] = 'Bold (Ctrl+B)';
<<<<<<< HEAD
$string['simple:bullist_desc'] = 'Unordered list';
$string['simple:cleanup_desc'] = 'Cleanup messy code';
$string['simple:italic_desc'] = 'Italic (Ctrl+I)';
$string['simple:numlist_desc'] = 'Ordered list';
=======
$string['simple:bullist_desc'] = 'Insert/remove bulleted list';
$string['simple:cleanup_desc'] = 'Cleanup messy code';
$string['simple:italic_desc'] = 'Italic (Ctrl+I)';
$string['simple:numlist_desc'] = 'Insert/remove numbered list';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['simple:redo_desc'] = 'Redo (Ctrl+Y)';
$string['simple:striketrough_desc'] = 'Strikethrough';
$string['simple:underline_desc'] = 'Underline (Ctrl+U)';
$string['simple:undo_desc'] = 'Undo (Ctrl+Z)';
<<<<<<< HEAD
$string['spellchecker:desc'] = 'Toggle spellchecker';
$string['spellchecker:ignore_word'] = 'Ignore word';
$string['spellchecker:ignore_words'] = 'Ignore all';
$string['spellchecker:langs'] = 'Languages';
$string['spellchecker:menu'] = 'Spellchecker settings';
$string['spellchecker:no_mpell'] = 'No misspellings found.';
$string['spellchecker:no_sug'] = 'No suggestions';
=======
$string['spellchecker:desc'] = 'Toggle spell checker';
$string['spellchecker:ignore_word'] = 'Ignore word';
$string['spellchecker:ignore_words'] = 'Ignore all';
$string['spellchecker:langs'] = 'Languages';
$string['spellchecker:learn_word'] = 'Learn word';
$string['spellchecker:menu'] = 'Spell checker settings';
$string['spellchecker:no_mpell'] = 'No misspellings found.';
$string['spellchecker:no_sug'] = 'No Suggestions';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['spellchecker:sug'] = 'Suggestions';
$string['spellchecker:wait'] = 'Please wait...';
$string['style:delta_height'] = '';
$string['style:delta_width'] = '';
<<<<<<< HEAD
$string['style:desc'] = 'Edit CSS Style';
$string['style_dlg:apply'] = 'Apply';
=======
$string['style:desc'] = 'Edit CSS style';
$string['style_dlg:apply'] = 'Apply';
$string['style_dlg:background'] = 'Background';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['style_dlg:background_attachment'] = 'Attachment';
$string['style_dlg:background_color'] = 'Background color';
$string['style_dlg:background_hpos'] = 'Horizontal position';
$string['style_dlg:background_image'] = 'Background image';
$string['style_dlg:background_repeat'] = 'Repeat';
$string['style_dlg:background_tab'] = 'Background';
$string['style_dlg:background_vpos'] = 'Vertical position';
<<<<<<< HEAD
=======
$string['style_dlg:block'] = 'Block';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['style_dlg:block_display'] = 'Display';
$string['style_dlg:block_letterspacing'] = 'Letter spacing';
$string['style_dlg:block_tab'] = 'Block';
$string['style_dlg:block_text_align'] = 'Text align';
$string['style_dlg:block_text_indent'] = 'Text indent';
$string['style_dlg:block_vertical_alignment'] = 'Vertical alignment';
$string['style_dlg:block_whitespace'] = 'Whitespace';
$string['style_dlg:block_wordspacing'] = 'Word spacing';
<<<<<<< HEAD
$string['style_dlg:border_tab'] = 'Border';
$string['style_dlg:bottom'] = 'Bottom';
=======
$string['style_dlg:border'] = 'Border';
$string['style_dlg:border_tab'] = 'Border';
$string['style_dlg:bottom'] = 'Bottom';
$string['style_dlg:box'] = 'Box';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['style_dlg:box_clear'] = 'Clear';
$string['style_dlg:box_float'] = 'Float';
$string['style_dlg:box_height'] = 'Height';
$string['style_dlg:box_tab'] = 'Box';
$string['style_dlg:box_width'] = 'Width';
$string['style_dlg:bullet_image'] = 'Bullet image';
$string['style_dlg:clip'] = 'Clip';
$string['style_dlg:color'] = 'Color';
$string['style_dlg:height'] = 'Height';
$string['style_dlg:left'] = 'Left';
<<<<<<< HEAD
=======
$string['style_dlg:list'] = 'List';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['style_dlg:list_tab'] = 'List';
$string['style_dlg:list_type'] = 'Type';
$string['style_dlg:margin'] = 'Margin';
$string['style_dlg:overflow'] = 'Overflow';
$string['style_dlg:padding'] = 'Padding';
$string['style_dlg:placement'] = 'Placement';
$string['style_dlg:position'] = 'Position';
$string['style_dlg:positioning_tab'] = 'Positioning';
$string['style_dlg:positioning_type'] = 'Type';
$string['style_dlg:right'] = 'Right';
$string['style_dlg:same'] = 'Same for all';
$string['style_dlg:style'] = 'Style';
<<<<<<< HEAD
$string['style_dlg:text_blink'] = 'blink';
=======
$string['style_dlg:text'] = 'Text';
$string['style_dlg:text_blink'] = 'Blink';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['style_dlg:text_case'] = 'Case';
$string['style_dlg:text_color'] = 'Color';
$string['style_dlg:text_decoration'] = 'Decoration';
$string['style_dlg:text_font'] = 'Font';
$string['style_dlg:text_lineheight'] = 'Line height';
<<<<<<< HEAD
$string['style_dlg:text_none'] = 'none';
$string['style_dlg:text_overline'] = 'overline';
$string['style_dlg:text_props'] = 'Text';
$string['style_dlg:text_size'] = 'Size';
$string['style_dlg:text_striketrough'] = 'strikethrough';
$string['style_dlg:text_style'] = 'Style';
$string['style_dlg:text_tab'] = 'Text';
$string['style_dlg:text_underline'] = 'underline';
$string['style_dlg:text_variant'] = 'Variant';
$string['style_dlg:text_weight'] = 'Weight';
$string['style_dlg:title'] = 'Edit CSS Style';
=======
$string['style_dlg:text_none'] = 'None';
$string['style_dlg:text_overline'] = 'Overline';
$string['style_dlg:text_props'] = 'Text';
$string['style_dlg:text_size'] = 'Size';
$string['style_dlg:text_striketrough'] = 'Strikethrough';
$string['style_dlg:text_style'] = 'Style';
$string['style_dlg:text_tab'] = 'Text';
$string['style_dlg:text_underline'] = 'Underline';
$string['style_dlg:text_variant'] = 'Variant';
$string['style_dlg:text_weight'] = 'Weight';
$string['style_dlg:title'] = 'Edit CSS style';
$string['style_dlg:toggle_insert_span'] = 'Insert span at selection';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['style_dlg:top'] = 'Top';
$string['style_dlg:visibility'] = 'Visibility';
$string['style_dlg:width'] = 'Width';
$string['style_dlg:zindex'] = 'Z-index';
$string['table:cell'] = 'Cell';
$string['table:cell_desc'] = 'Table cell properties';
$string['table:cellprops_delta_height'] = '';
$string['table:cellprops_delta_width'] = '';
$string['table:col'] = 'Column';
$string['table:col_after_desc'] = 'Insert column after';
$string['table:col_before_desc'] = 'Insert column before';
$string['table:copy_row_desc'] = 'Copy table row';
$string['table:cut_row_desc'] = 'Cut table row';
<<<<<<< HEAD
$string['table:del'] = 'Delete table';
$string['table:delete_col_desc'] = 'Remove column';
$string['table:delete_row_desc'] = 'Delete row';
$string['table:desc'] = 'Inserts a new table';
=======
$string['table:del'] = 'Delete Table';
$string['table:delete_col_desc'] = 'Delete column';
$string['table:delete_row_desc'] = 'Delete row';
$string['table:desc'] = 'Insert/edit table';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['table:merge_cells_delta_height'] = '';
$string['table:merge_cells_delta_width'] = '';
$string['table:merge_cells_desc'] = 'Merge table cells';
$string['table:paste_row_after_desc'] = 'Paste table row after';
$string['table:paste_row_before_desc'] = 'Paste table row before';
$string['table:props_desc'] = 'Table properties';
$string['table:row'] = 'Row';
$string['table:row_after_desc'] = 'Insert row after';
$string['table:row_before_desc'] = 'Insert row before';
$string['table:row_desc'] = 'Table row properties';
$string['table:rowprops_delta_height'] = '';
$string['table:rowprops_delta_width'] = '';
$string['table:split_cells_desc'] = 'Split merged table cells';
$string['table:table_delta_height'] = '';
$string['table:table_delta_width'] = '';
$string['table_dlg:advanced_props'] = 'Advanced properties';
$string['table_dlg:advanced_tab'] = 'Advanced';
$string['table_dlg:align'] = 'Alignment';
$string['table_dlg:align_bottom'] = 'Bottom';
$string['table_dlg:align_default'] = 'Default';
$string['table_dlg:align_left'] = 'Left';
$string['table_dlg:align_middle'] = 'Center';
$string['table_dlg:align_right'] = 'Right';
$string['table_dlg:align_top'] = 'Top';
$string['table_dlg:bgcolor'] = 'Background color';
$string['table_dlg:bgimage'] = 'Background image';
$string['table_dlg:border'] = 'Border';
$string['table_dlg:bordercolor'] = 'Border color';
$string['table_dlg:caption'] = 'Table caption';
$string['table_dlg:cell_all'] = 'Update all cells in table';
$string['table_dlg:cell_cell'] = 'Update current cell';
$string['table_dlg:cell_col'] = 'Update all cells in column';
$string['table_dlg:cell_limit'] = 'You\'ve exceeded the maximum number of cells of {$cells}.';
$string['table_dlg:cell_row'] = 'Update all cells in row';
$string['table_dlg:cell_title'] = 'Table cell properties';
$string['table_dlg:cell_type'] = 'Cell type';
<<<<<<< HEAD
$string['table_dlg:cellpadding'] = 'Cellpadding';
$string['table_dlg:cellspacing'] = 'Cellspacing';
$string['table_dlg:col_limit'] = 'You\'ve exceeded the maximum number of columns of {$cols}.';
$string['table_dlg:colgroup'] = 'Col Group';
$string['table_dlg:cols'] = 'Cols';
=======
$string['table_dlg:cellpadding'] = 'Cell padding';
$string['table_dlg:cellspacing'] = 'Cell spacing';
$string['table_dlg:col_limit'] = 'You\'ve exceeded the maximum number of columns of {$cols}.';
$string['table_dlg:colgroup'] = 'Col group';
$string['table_dlg:cols'] = 'Columns';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['table_dlg:frame'] = 'Frame';
$string['table_dlg:frame_all'] = 'all';
$string['table_dlg:frame_cols'] = 'cols';
$string['table_dlg:frame_groups'] = 'groups';
$string['table_dlg:frame_none'] = 'none';
$string['table_dlg:frame_rows'] = 'rows';
$string['table_dlg:general_props'] = 'General properties';
$string['table_dlg:general_tab'] = 'General';
$string['table_dlg:height'] = 'Height';
<<<<<<< HEAD
$string['table_dlg:id'] = 'Id';
=======
$string['table_dlg:id'] = 'ID';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['table_dlg:langcode'] = 'Language code';
$string['table_dlg:langdir'] = 'Language direction';
$string['table_dlg:ltr'] = 'Left to right';
$string['table_dlg:merge_cells_title'] = 'Merge table cells';
$string['table_dlg:mime'] = 'Target MIME type';
$string['table_dlg:missing_scope'] = 'Are you sure you want to continue without specifying a scope for this table header cell. Without it, it may be difficult for some users with disabilities to understand the content or data displayed of the table.';
$string['table_dlg:row_all'] = 'Update all rows in table';
$string['table_dlg:row_even'] = 'Update even rows in table';
$string['table_dlg:row_limit'] = 'You\'ve exceeded the maximum number of rows of {$rows}.';
$string['table_dlg:row_odd'] = 'Update odd rows in table';
$string['table_dlg:row_row'] = 'Update current row';
$string['table_dlg:row_title'] = 'Table row properties';
<<<<<<< HEAD
$string['table_dlg:rowgroup'] = 'Row Group';
$string['table_dlg:rows'] = 'Rows';
$string['table_dlg:rowtype'] = 'Row in table part';
=======
$string['table_dlg:rowgroup'] = 'Row group';
$string['table_dlg:rows'] = 'Rows';
$string['table_dlg:rowtype'] = 'Row type';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['table_dlg:rtl'] = 'Right to left';
$string['table_dlg:rules'] = 'Rules';
$string['table_dlg:rules_above'] = 'above';
$string['table_dlg:rules_below'] = 'below';
$string['table_dlg:rules_border'] = 'border';
$string['table_dlg:rules_box'] = 'box';
$string['table_dlg:rules_hsides'] = 'hsides';
$string['table_dlg:rules_lhs'] = 'lhs';
$string['table_dlg:rules_rhs'] = 'rhs';
$string['table_dlg:rules_void'] = 'void';
$string['table_dlg:rules_vsides'] = 'vsides';
$string['table_dlg:scope'] = 'Scope';
$string['table_dlg:style'] = 'Style';
$string['table_dlg:summary'] = 'Summary';
<<<<<<< HEAD
$string['table_dlg:tbody'] = 'Table Body';
$string['table_dlg:td'] = 'Data';
$string['table_dlg:tfoot'] = 'Table Foot';
$string['table_dlg:th'] = 'Header';
$string['table_dlg:thead'] = 'Table Head';
$string['table_dlg:title'] = 'Insert/Modify table';
=======
$string['table_dlg:tbody'] = 'Body';
$string['table_dlg:td'] = 'Data';
$string['table_dlg:tfoot'] = 'Footer';
$string['table_dlg:th'] = 'Header';
$string['table_dlg:thead'] = 'Header';
$string['table_dlg:title'] = 'Insert/edit table';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['table_dlg:valign'] = 'Vertical alignment';
$string['table_dlg:width'] = 'Width';
$string['template:desc'] = 'Insert predefined template content';
$string['template_dlg:cdate_format'] = '%Y-%m-%d %H:%M:%S';
$string['template_dlg:day_long'] = 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday';
$string['template_dlg:day_short'] = 'Sun,Mon,Tue,Wed,Thu,Fri,Sat,Sun';
$string['template_dlg:desc'] = 'Insert predefined template content';
$string['template_dlg:desc_label'] = 'Description';
$string['template_dlg:label'] = 'Template';
$string['template_dlg:mdate_format'] = '%Y-%m-%d %H:%M:%S';
$string['template_dlg:months_long'] = 'January,February,March,April,May,June,July,August,September,October,November,December';
$string['template_dlg:months_short'] = 'Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec';
$string['template_dlg:preview'] = 'Preview';
$string['template_dlg:select'] = 'Select a template';
$string['template_dlg:title'] = 'Templates';
$string['template_dlg:warning'] = 'Warning: Updating a template with a different one may cause data loss.';
<<<<<<< HEAD
$string['visualchars:desc'] = 'Visual control characters on/off.';
=======
$string['visualblocks:desc'] = 'Show/hide block elements';
$string['visualchars:desc'] = 'Show/hide visual control characters';
$string['wordcount:words'] = 'Words:';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['xhtmlxtras:abbr_delta_height'] = '';
$string['xhtmlxtras:abbr_delta_width'] = '';
$string['xhtmlxtras:abbr_desc'] = 'Abbreviation';
$string['xhtmlxtras:acronym_delta_height'] = '';
$string['xhtmlxtras:acronym_delta_width'] = '';
$string['xhtmlxtras:acronym_desc'] = 'Acronym';
$string['xhtmlxtras:attribs_delta_height'] = '';
$string['xhtmlxtras:attribs_delta_width'] = '';
<<<<<<< HEAD
$string['xhtmlxtras:attribs_desc'] = 'Insert/Edit Attributes';
=======
$string['xhtmlxtras:attribs_desc'] = 'Insert/edit attributes';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['xhtmlxtras:cite_delta_height'] = '';
$string['xhtmlxtras:cite_delta_width'] = '';
$string['xhtmlxtras:cite_desc'] = 'Citation';
$string['xhtmlxtras:del_delta_height'] = '';
$string['xhtmlxtras:del_delta_width'] = '';
$string['xhtmlxtras:del_desc'] = 'Deletion';
$string['xhtmlxtras:ins_delta_height'] = '';
$string['xhtmlxtras:ins_delta_width'] = '';
$string['xhtmlxtras:ins_desc'] = 'Insertion';
$string['xhtmlxtras_dlg:attrib_tab'] = 'Attributes';
<<<<<<< HEAD
$string['xhtmlxtras_dlg:attribs_title'] = 'Insert/Edit Attributes';
=======
$string['xhtmlxtras_dlg:attribs_title'] = 'Insert/edit attributes';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['xhtmlxtras_dlg:attribute_attrib_tab'] = 'Attributes';
$string['xhtmlxtras_dlg:attribute_events_tab'] = 'Events';
$string['xhtmlxtras_dlg:attribute_label_accesskey'] = 'AccessKey';
$string['xhtmlxtras_dlg:attribute_label_cite'] = 'Cite';
$string['xhtmlxtras_dlg:attribute_label_class'] = 'Class';
<<<<<<< HEAD
$string['xhtmlxtras_dlg:attribute_label_datetime'] = 'Date/Time';
$string['xhtmlxtras_dlg:attribute_label_id'] = 'ID';
$string['xhtmlxtras_dlg:attribute_label_langcode'] = 'Language';
$string['xhtmlxtras_dlg:attribute_label_langdir'] = 'Text Direction';
=======
$string['xhtmlxtras_dlg:attribute_label_datetime'] = 'Date/time';
$string['xhtmlxtras_dlg:attribute_label_id'] = 'ID';
$string['xhtmlxtras_dlg:attribute_label_langcode'] = 'Language';
$string['xhtmlxtras_dlg:attribute_label_langdir'] = 'Text direction';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['xhtmlxtras_dlg:attribute_label_style'] = 'Style';
$string['xhtmlxtras_dlg:attribute_label_tabindex'] = 'TabIndex';
$string['xhtmlxtras_dlg:attribute_label_title'] = 'Title';
$string['xhtmlxtras_dlg:attribute_option_ltr'] = 'Left to right';
$string['xhtmlxtras_dlg:attribute_option_rtl'] = 'Right to left';
$string['xhtmlxtras_dlg:events_tab'] = 'Events';
<<<<<<< HEAD
$string['xhtmlxtras_dlg:fieldset_attrib_tab'] = 'Element Attributes';
$string['xhtmlxtras_dlg:fieldset_events_tab'] = 'Element Events';
$string['xhtmlxtras_dlg:fieldset_general_tab'] = 'General Settings';
=======
$string['xhtmlxtras_dlg:fieldset_attrib_tab'] = 'Element attributes';
$string['xhtmlxtras_dlg:fieldset_events_tab'] = 'Element events';
$string['xhtmlxtras_dlg:fieldset_general_tab'] = 'General settings';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$string['xhtmlxtras_dlg:general_tab'] = 'General';
$string['xhtmlxtras_dlg:insert_date'] = 'Insert current date/time';
$string['xhtmlxtras_dlg:option_ltr'] = 'Left to right';
$string['xhtmlxtras_dlg:option_rtl'] = 'Right to left';
$string['xhtmlxtras_dlg:remove'] = 'Remove';
<<<<<<< HEAD
$string['xhtmlxtras_dlg:title_abbr_element'] = 'Abbreviation Element';
$string['xhtmlxtras_dlg:title_acronym_element'] = 'Acronym Element';
$string['xhtmlxtras_dlg:title_cite_element'] = 'Citation Element';
$string['xhtmlxtras_dlg:title_del_element'] = 'Deletion Element';
$string['xhtmlxtras_dlg:title_ins_element'] = 'Insertion Element';
=======
$string['xhtmlxtras_dlg:title_abbr_element'] = 'Abbreviation element';
$string['xhtmlxtras_dlg:title_acronym_element'] = 'Acronym element';
$string['xhtmlxtras_dlg:title_cite_element'] = 'Citation element';
$string['xhtmlxtras_dlg:title_del_element'] = 'Deletion element';
$string['xhtmlxtras_dlg:title_ins_element'] = 'Insertion element';


// == Our modifications or upstream changes ==
$string['advanced:copy_desc'] = 'Copy';
$string['advanced:cut_desc'] = 'Cut';
$string['advanced:paste_desc'] = 'Paste';
$string['advanced:shortcuts_desc'] = 'Accessibility help';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
