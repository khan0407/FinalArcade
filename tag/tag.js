var coursetagdivs = null;
var coursetag_tags = new Array();

function init_tag_autocomplete() {
<<<<<<< HEAD

    var myDataSource = new YAHOO.util.XHRDataSource("./tag_autocomplete.php");
    myDataSource.responseType = YAHOO.util.XHRDataSource.TYPE_TEXT;
=======
YUI().use('yui2-autocomplete', 'yui2-datasource', 'yui2-animation', 'yui2-connection', function(Y) {
    var myDataSource = new Y.YUI2.util.XHRDataSource("./tag_autocomplete.php");
    myDataSource.responseType = Y.YUI2.util.XHRDataSource.TYPE_TEXT;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    myDataSource.responseSchema = {
        recordDelim: "\n",
        fieldDelim: "\t"
    };
    myDataSource.maxCacheEntries = 60;
    myDataSource.minQueryLength = 3;

    // Instantiate the AutoComplete
<<<<<<< HEAD
    var myAutoComp = new YAHOO.widget.AutoComplete("id_relatedtags", "relatedtags-autocomplete", myDataSource);
=======
    var myAutoComp = new Y.YUI2.widget.AutoComplete("id_relatedtags", "relatedtags-autocomplete", myDataSource);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    document.getElementById('id_relatedtags').style.width = '30%';
    myAutoComp.allowBrowserAutocomplete = false;
    myAutoComp.maxResultsDisplayed = 20;
    myAutoComp.delimChar = [","," "];
    myAutoComp.formatResult = function(oResultData, sQuery, sResultMatch) {
        return (sResultMatch);
    };

    return {
        myDataSource: myDataSource,
        myAutoComp: myAutoComp
    };
<<<<<<< HEAD

=======
});
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
}

function ctags_checkinput(val) {
    var len = val.length;
    if (len < 2 || len > 50) {
        alert(M.str.block_tags.jserror1);
        return false;
    } else if (val.indexOf("<") > 0) {
        alert(M.str.block_tags.jserror2);
        return false;
    } else if (val.indexOf(">") > 0) {
        alert(M.str.block_tags.jserror2);
        return false;
    } else {
        return true;
    }
}

<<<<<<< HEAD
function set_course_tag_divs(ctagdivs) {
    window.coursetagdivs = ctagdivs;
}

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
function set_course_tag(key) {
    window.coursetag_tags[window.coursetag_tags.length] = key;
}

function add_tag_footer_link(eid, ltitle, laction, ltext) {
    var e = document.getElementById(eid);
    if (e) {
        var link = document.createElement('a');
        link.setAttribute('href', '');
        link.setAttribute('title', ltitle);
        link.appendChild(document.createTextNode(ltext));
        var callback = function () {
            ctags_show_div(laction);
        };
<<<<<<< HEAD
        YAHOO.util.Event.addListener(link, 'click', callback);
=======
        YUI().use('yui2-event', function(Y) {
            Y.YUI2.util.Event.addListener(link, 'click', callback);
        });
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        if (e.childNodes.length > 0) {
            e.appendChild(document.createTextNode(' | '));
        } else {
            e.appendChild(document.createElement('hr'));
        }
        e.appendChild(link);
    }
}