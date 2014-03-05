<?php

function afterburner_process_css($css, $theme) {

    // Set the background image for the logo
    if (!empty($theme->settings->logo)) {
        $logo = $theme->settings->logo;
    } else {
        $logo = null;
    }
<<<<<<< HEAD
    $css = afterburner_set_logo($css, $logo);
=======
    $css = afterburner_set_logo($css, $logo, $theme);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    // Set custom CSS
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = afterburner_set_customcss($css, $customcss);

    return $css;
}

<<<<<<< HEAD
function afterburner_set_logo($css, $logo) {
    global $OUTPUT;
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('images/logo','theme');
=======
function afterburner_set_logo($css, $logo, $theme = null) {
    global $OUTPUT;
    if ($theme === null) {
        $theme = $OUTPUT;
    }
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = $theme->pix_url('images/logo','theme');
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function afterburner_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
<<<<<<< HEAD
}
=======
}
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
