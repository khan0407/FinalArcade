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
 * Javascript extensions for LTI submission viewer.
 *
 * @package    mod
 * @subpackage lti
 * @copyright  Copyright (c) 2011 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Chris Scribner
 */
(function(){
    var Y;

    M.mod_lti = M.mod_lti || {};

    M.mod_lti.submissions = {
        init: function(yui3){
            if(yui3){
                Y = yui3;
            }

            this.setupTable();
        },

        setupTable: function(){
<<<<<<< HEAD
            var lti_submissions_table = YAHOO.util.Dom.get('lti_submissions_table');

            var dataSource = new YAHOO.util.DataSource(lti_submissions_table);
=======
            var lti_submissions_table = Y.YUI2.util.Dom.get('lti_submissions_table');

            var dataSource = new Y.YUI2.util.DataSource(lti_submissions_table);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

            var configuredColumns = [
                { key: "user", label: "User", sortable:true },
                { key: "date", label: "Submission Date", sortable:true, formatter: 'date' },
                { key: "grade",
                  label: "Grade",
                  sortable:true,
                  formatter: function(cell, record, column, data){
                      cell.innerHTML = parseFloat(data).toFixed(1) + '%';
                  }
                }
            ];

<<<<<<< HEAD
            dataSource.responseType = YAHOO.util.DataSource.TYPE_HTMLTABLE;
=======
            dataSource.responseType = Y.YUI2.util.DataSource.TYPE_HTMLTABLE;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            dataSource.responseSchema = {
                fields: [
                    { key: "user" },
                    { key: "date", parser: "date" },
                    { key: "grade", parser: "number" },
                ]
            };

<<<<<<< HEAD
            new YAHOO.widget.DataTable("lti_submissions_table_container", configuredColumns, dataSource,
=======
            new Y.YUI2.widget.DataTable("lti_submissions_table_container", configuredColumns, dataSource,
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                {
                    sortedBy: {key:"date", dir:"desc"}
                }
            );

            Y.one('#lti_submissions_table_container').setStyle('display', '');
        }
    }
})();
