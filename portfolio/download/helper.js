function submit_download_form() {
<<<<<<< HEAD
    f = YAHOO.util.Dom.get("redirectform");
    YAHOO.util.Dom.addClass(f.parentNode, "hide");
    f.submit();
=======
YUI().use('yui2-dom', function(Y) {
    f = Y.YUI2.util.Dom.get("redirectform");
    Y.YUI2.util.Dom.addClass(f.parentNode, "hide");
    f.submit();
});
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
}
