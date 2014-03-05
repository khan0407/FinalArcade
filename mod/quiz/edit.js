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
 * JavaScript library for the quiz module editing interface.
 *
 * @package    mod
 * @subpackage quiz
 * @copyright  2008 Olli Savolainen
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


// Initialise everything on the quiz edit/order and paging page.
var quiz_edit = {};
function quiz_edit_init(Y) {
    M.core_scroll_manager.scroll_to_saved_pos(Y);
    Y.on('submit', function(e) {
            M.core_scroll_manager.save_scroll_pos(Y, 'id_existingcategory');
        }, '#mform1');
    Y.on('submit', function(e) {
            M.core_scroll_manager.save_scroll_pos(Y, e.target.get('firstChild'));
        }, '.quizsavegradesform');

    // Add random question dialogue --------------------------------------------
<<<<<<< HEAD
    var randomquestiondialog = YAHOO.util.Dom.get('randomquestiondialog');
    if (randomquestiondialog) {
        YAHOO.util.Dom.get(document.body).appendChild(randomquestiondialog);
    }

    quiz_edit.randomquestiondialog = new YAHOO.widget.Dialog('randomquestiondialog', {
=======
    var randomquestiondialog = Y.YUI2.util.Dom.get('randomquestiondialog');
    if (randomquestiondialog) {
        Y.YUI2.util.Dom.get(document.body).appendChild(randomquestiondialog);
    }

    quiz_edit.randomquestiondialog = new Y.YUI2.widget.Dialog('randomquestiondialog', {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            modal: true,
            width: '100%',
            iframe: true,
            zIndex: 1000, // zIndex must be way above 99 to be above the active quiz tab
            fixedcenter: true,
            visible: false,
            close: true,
            constraintoviewport: true,
            postmethod: 'form'
    });
    quiz_edit.randomquestiondialog.render();
    var div = document.getElementById('randomquestiondialog');
    if (div) {
        div.style.display = 'block';
    }

    // Show the form on button click.
<<<<<<< HEAD
    YAHOO.util.Event.addListener(quiz_edit_config.dialoglisteners, 'click', function(e) {
        // Transfer the page number from the button form to the pop-up form.
        var addrandombutton = YAHOO.util.Event.getTarget(e);
        var addpagehidden = YAHOO.util.Dom.getElementsByClassName('addonpage_formelement', 'input', addrandombutton.form);
=======
    Y.YUI2.util.Event.addListener(quiz_edit_config.dialoglisteners, 'click', function(e) {
        // Transfer the page number from the button form to the pop-up form.
        var addrandombutton = Y.YUI2.util.Event.getTarget(e);
        var addpagehidden = Y.YUI2.util.Dom.getElementsByClassName('addonpage_formelement', 'input', addrandombutton.form);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        document.getElementById('rform_qpage').value = addpagehidden[0].value;

        // Show the dialogue and stop the default action.
        quiz_edit.randomquestiondialog.show();
<<<<<<< HEAD
        YAHOO.util.Event.stopEvent(e);
    });

    // Make escape close the dialogue.
    quiz_edit.randomquestiondialog.cfg.setProperty('keylisteners', [new YAHOO.util.KeyListener(
=======
        Y.YUI2.util.Event.stopEvent(e);
    });

    // Make escape close the dialogue.
    quiz_edit.randomquestiondialog.cfg.setProperty('keylisteners', [new Y.YUI2.util.KeyListener(
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            document, {keys:[27]}, function(types, args, obj) { quiz_edit.randomquestiondialog.hide();
    })]);

    // Make the form cancel button close the dialogue.
<<<<<<< HEAD
    YAHOO.util.Event.addListener('id_cancel', 'click', function(e) {
        quiz_edit.randomquestiondialog.hide();
        YAHOO.util.Event.preventDefault(e);
    });

    YAHOO.util.Event.addListener('id_existingcategory', 'click', quiz_yui_workaround);

    YAHOO.util.Event.addListener('id_newcategory', 'click', quiz_yui_workaround);

    // Repaginate dialogue -----------------------------------------------------
    quiz_edit.repaginatedialog = new YAHOO.widget.Dialog('repaginatedialog', {
=======
    Y.YUI2.util.Event.addListener('id_cancel', 'click', function(e) {
        quiz_edit.randomquestiondialog.hide();
        Y.YUI2.util.Event.preventDefault(e);
    });

    Y.YUI2.util.Event.addListener('id_existingcategory', 'click', quiz_yui_workaround);

    Y.YUI2.util.Event.addListener('id_newcategory', 'click', quiz_yui_workaround);

    // Repaginate dialogue -----------------------------------------------------
    quiz_edit.repaginatedialog = new Y.YUI2.widget.Dialog('repaginatedialog', {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            modal: true,
            width: '30em',
            iframe: true,
            zIndex: 1000,
            context: ['repaginatecommand', 'tr', 'br', ['beforeShow']],
            visible: false,
            close: true,
            constraintoviewport: true,
            postmethod: 'form'
    });
    quiz_edit.repaginatedialog.render();
    quiz_edit.randomquestiondialog.render();
    var div = document.getElementById('repaginatedialog');
    if (div) {
        div.style.display = 'block';
    }

    // Show the form on button click.
<<<<<<< HEAD
    YAHOO.util.Event.addListener('repaginatecommand', 'click', function() {
=======
    Y.YUI2.util.Event.addListener('repaginatecommand', 'click', function() {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        quiz_edit.repaginatedialog.show();
    });

    // Reposition the dialogue when the window resizes. For some reason this was not working automatically.
<<<<<<< HEAD
    YAHOO.widget.Overlay.windowResizeEvent.subscribe(function() {
=======
    Y.YUI2.widget.Overlay.windowResizeEvent.subscribe(function() {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
      quiz_edit.repaginatedialog.cfg.setProperty('context', ['repaginatecommand', 'tr', 'br', ['beforeShow']]);
    });

    // Make escape close the dialogue.
<<<<<<< HEAD
    quiz_edit.repaginatedialog.cfg.setProperty('keylisteners', [new YAHOO.util.KeyListener(
=======
    quiz_edit.repaginatedialog.cfg.setProperty('keylisteners', [new Y.YUI2.util.KeyListener(
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            document, {keys:[27]}, function(types, args, obj) { quiz_edit.repaginatedialog.hide();
    })]);

    // Nasty hack, remove once the YUI bug causing MDL-17594 is fixed.
    // https://sourceforge.net/tracker/index.php?func=detail&aid=2493426&group_id=165715&atid=836476
    var elementcauseinglayoutproblem = document.getElementById('_yuiResizeMonitor');
    if (elementcauseinglayoutproblem) {
        elementcauseinglayoutproblem.style.left = '0px';
    }
}

function quiz_yui_workaround(e) {
<<<<<<< HEAD
    // YUI does not send the button pressed with the form submission, so copy
    // the button name to a hidden input.
    var submitbutton = YAHOO.util.Event.getTarget(e);
=======
YUI().use('yui2-event', function(Y) {
    // YUI does not send the button pressed with the form submission, so copy
    // the button name to a hidden input.
    var submitbutton = Y.YUI2.util.Event.getTarget(e);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = submitbutton.name;
    input.value = 1;
    submitbutton.form.appendChild(input);
<<<<<<< HEAD
}

// Initialise everything on the quiz settings form.
function quiz_settings_init() {
=======
});
}

// Initialise everything on the quiz settings form.
function quiz_settings_init(Y) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    var repaginatecheckbox = document.getElementById('id_repaginatenow');
    if (!repaginatecheckbox) {
        // This checkbox does not appear on the create new quiz form.
        return;
    }
    var qppselect = document.getElementById('id_questionsperpage');
    var qppinitialvalue = qppselect.value;
<<<<<<< HEAD
    YAHOO.util.Event.addListener([qppselect, 'id_shufflequestions'] , 'change', function() {
=======
    Y.YUI2.util.Event.addListener([qppselect, 'id_shufflequestions'] , 'change', function() {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        setTimeout(function() { // Annoyingly, this handler runs before the formlib disabledif code, hence the timeout.
            if (!repaginatecheckbox.disabled) {
                repaginatecheckbox.checked = qppselect.value != qppinitialvalue;
            }
        }, 50);
    });
}
