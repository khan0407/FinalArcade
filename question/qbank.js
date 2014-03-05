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
 * JavaScript belonging to question_bank_view.
 *
 * This script is included by question_bank_view and other parts of question/editlib.php.
 *
 * @package    moodlecore
 * @subpackage questionbank
 * @copyright  2009 Tim Hunt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


question_bank = {
    strselectall: '',
    strdeselectall: '',
    headercheckbox: null,
    firstcheckbox: null,

<<<<<<< HEAD
    init_checkbox_column: function(strselectall, strdeselectall, firstcbid) {
=======
    init_checkbox_column: function(Y, strselectall, strdeselectall, firstcbid) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        question_bank.strselectall = strselectall;
        question_bank.strdeselectall = strdeselectall;

        // Find the header checkbox, and initialise it.
        question_bank.headercheckbox = document.getElementById('qbheadercheckbox');
        question_bank.headercheckbox.disabled = false;
        question_bank.headercheckbox.title = strselectall;

        // Find the first real checkbox.
        question_bank.firstcheckbox = document.getElementById(firstcbid);

        // Add the event handler.
<<<<<<< HEAD
        YAHOO.util.Event.addListener(question_bank.headercheckbox, 'click', question_bank.header_checkbox_click);
=======
        Y.YUI2.util.Event.addListener(question_bank.headercheckbox, 'click', question_bank.header_checkbox_click);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    },

    header_checkbox_click: function() {
        if (question_bank.firstcheckbox.checked) {
            select_all_in_element_with_id('categoryquestions', '');
            question_bank.headercheckbox.title = question_bank.strselectall;
        } else {
            select_all_in_element_with_id('categoryquestions', 'checked');
            question_bank.headercheckbox.title = question_bank.strdeselectall;
        }
        question_bank.headercheckbox.checked = false;
    }
};

// JavaScript to make the list of question types pop-up when you click an add
// add question button.
qtype_chooser = {
    radiobuttons: [],
    labels: [],
    container: null,
    submitbutton: null,
<<<<<<< HEAD

    init: function(Y, boxid) {
        // Find the radio buttons.
        qtype_chooser.radiobuttons = YAHOO.util.Dom.getElementsBy(
                function(el) { return el.type == 'radio'; }, 'input' , boxid);
        qtype_chooser.labels = YAHOO.util.Dom.getElementsByClassName('qtypeoption', 'div', boxid);
=======
    yui3: null,

    init: function(Y, boxid) {
        // Store Y reference.
        qtype_chooser.yui3 = Y;
        // Find the radio buttons.
        qtype_chooser.radiobuttons = Y.YUI2.util.Dom.getElementsBy(
                function(el) { return el.type == 'radio'; }, 'input' , boxid);
        qtype_chooser.labels = Y.YUI2.util.Dom.getElementsByClassName('qtypeoption', 'div', boxid);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

        // Find the submit button.
        qtype_chooser.submitbutton = document.getElementById(boxid + '_submit');
        qtype_chooser.enable_disable_submit();

        // Add the event handlers.
<<<<<<< HEAD
        YAHOO.util.Event.addListener(boxid, 'click', qtype_chooser.enable_disable_submit);
        YAHOO.util.Event.addListener(boxid, 'key_down', qtype_chooser.enable_disable_submit);
        YAHOO.util.Event.addListener(boxid, 'key_up', qtype_chooser.enable_disable_submit);
        YAHOO.util.Event.addListener(boxid, 'dblclick', function(e) {
=======
        Y.YUI2.util.Event.addListener(boxid, 'click', qtype_chooser.enable_disable_submit);
        Y.YUI2.util.Event.addListener(boxid, 'key_down', qtype_chooser.enable_disable_submit);
        Y.YUI2.util.Event.addListener(boxid, 'key_up', qtype_chooser.enable_disable_submit);
        Y.YUI2.util.Event.addListener(boxid, 'dblclick', function(e) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                if (!qtype_chooser.submitbutton.disabled) {
                    M.core_scroll_manager.save_scroll_pos(Y, Y.one(qtype_chooser.submitbutton));
                    qtype_chooser.submitbutton.form.submit();
                }
            });

<<<<<<< HEAD
        YAHOO.util.Event.onDOMReady(qtype_chooser.init_container);
=======
        Y.YUI2.util.Event.onDOMReady(qtype_chooser.init_container);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        Y.on('submit', function(e) {
            M.core_scroll_manager.save_scroll_pos(Y, Y.one(qtype_chooser.submitbutton));
        }, qtype_chooser.submitbutton.form);
    },

    enable_disable_submit: function() {
<<<<<<< HEAD
=======
        var Y = qtype_chooser.yui3;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        var ok = false;
        for (var i = 0; i < qtype_chooser.radiobuttons.length; i++) {
            if (qtype_chooser.radiobuttons[i].checked) {
                ok = true;
<<<<<<< HEAD
                YAHOO.util.Dom.addClass(qtype_chooser.labels[i], 'selected');
            } else {
                YAHOO.util.Dom.removeClass(qtype_chooser.labels[i], 'selected');
=======
                Y.YUI2.util.Dom.addClass(qtype_chooser.labels[i], 'selected');
            } else {
                Y.YUI2.util.Dom.removeClass(qtype_chooser.labels[i], 'selected');
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            }
        }
        qtype_chooser.submitbutton.disabled = !ok;
    },

    init_container: function() {
<<<<<<< HEAD
=======
        var Y = qtype_chooser.yui3;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        if (!document.getElementById('qtypechoicecontainer')) {
            return;
        }
        var qtypechoicecontainer = document.getElementById('qtypechoicecontainer');
        qtypechoicecontainer.style.display = 'block';
        qtypechoicecontainer.parentNode.removeChild(qtypechoicecontainer);
        document.body.appendChild(qtypechoicecontainer);
<<<<<<< HEAD
        qtype_chooser.container = new YAHOO.widget.Dialog(qtypechoicecontainer, {
=======
        qtype_chooser.container = new Y.YUI2.widget.Dialog(qtypechoicecontainer, {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            constraintoviewport: true,
            visible: false,
            modal: true,
            fixedcenter: true,
            close: true,
            draggable: true,
            dragOnly: true,
            postmethod: 'form',
            zIndex: 1000
        });
        qtype_chooser.container.render();

<<<<<<< HEAD
        YAHOO.util.Event.addListener('chooseqtypecancel', 'click', qtype_chooser.cancel_popup);

        var addforms = YAHOO.util.Dom.getElementsBy(function(el) {
                return /question\/addquestion\.php/.test(el.action); }, 'form', document.body);
        for (var i = 0; i < addforms.length; i++) {
            YAHOO.util.Event.addListener(addforms[i], 'submit', qtype_chooser.add_button_click);
=======
        Y.YUI2.util.Event.addListener('chooseqtypecancel', 'click', qtype_chooser.cancel_popup);

        var addforms = Y.YUI2.util.Dom.getElementsBy(function(el) {
                return /question\/addquestion\.php/.test(el.action); }, 'form', document.body);
        for (var i = 0; i < addforms.length; i++) {
            Y.YUI2.util.Event.addListener(addforms[i], 'submit', qtype_chooser.add_button_click);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        }
    },

    add_button_click: function(e) {
<<<<<<< HEAD
        var form = document.getElementById('qtypeformdiv');

        var oldhidden = YAHOO.util.Dom.getElementsBy(
=======
        var Y = qtype_chooser.yui3;
        var form = document.getElementById('qtypeformdiv');

        var oldhidden = Y.YUI2.util.Dom.getElementsBy(
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                function(el) { return el.type == 'hidden'; }, 'input', form);
        for (var i = 0; i < oldhidden.length; i++) {
            oldhidden[i].parentNode.removeChild(oldhidden[i]);
        }

<<<<<<< HEAD
        var wantedhidden = YAHOO.util.Dom.getElementsBy(
=======
        var wantedhidden = Y.YUI2.util.Dom.getElementsBy(
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                function(el) { return el.type == 'hidden'; }, 'input', this);
        for (i = 0; i < wantedhidden.length; i++) {
            form.appendChild(wantedhidden[i].cloneNode(true));
        }

        qtype_chooser.container.show();
<<<<<<< HEAD
        YAHOO.util.Event.preventDefault(e);
    },

    cancel_popup: function(e) {
        qtype_chooser.container.hide();
        YAHOO.util.Event.preventDefault(e);
=======
        Y.YUI2.util.Event.preventDefault(e);
    },

    cancel_popup: function(e) {
        var Y = qtype_chooser.yui3;
        qtype_chooser.container.hide();
        Y.YUI2.util.Event.preventDefault(e);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }
};