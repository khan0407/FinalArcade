<?php

    require_once("../../config.php");
    require_once("lib.php");

    $id = required_param('id',PARAM_INT);   // course

    $PAGE->set_url('/mod/choice/index.php', array('id'=>$id));

    if (!$course = $DB->get_record('course', array('id'=>$id))) {
        print_error('invalidcourseid');
    }

    require_course_login($course);
    $PAGE->set_pagelayout('incourse');

    add_to_log($course->id, "choice", "view all", "index.php?id=$course->id", "");

    $strchoice = get_string("modulename", "choice");
    $strchoices = get_string("modulenameplural", "choice");
<<<<<<< HEAD
    $strsectionname  = get_string('sectionname', 'format_'.$course->format);
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    $PAGE->set_title($strchoices);
    $PAGE->set_heading($course->fullname);
    $PAGE->navbar->add($strchoices);
    echo $OUTPUT->header();

    if (! $choices = get_all_instances_in_course("choice", $course)) {
        notice(get_string('thereareno', 'moodle', $strchoices), "../../course/view.php?id=$course->id");
    }

    $usesections = course_format_uses_sections($course->format);
<<<<<<< HEAD
    if ($usesections) {
        $sections = get_all_sections($course->id);
    }
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    $sql = "SELECT cha.*
              FROM {choice} ch, {choice_answers} cha
             WHERE cha.choiceid = ch.id AND
                   ch.course = ? AND cha.userid = ?";

    $answers = array () ;
    if (isloggedin() and !isguestuser() and $allanswers = $DB->get_records_sql($sql, array($course->id, $USER->id))) {
        foreach ($allanswers as $aa) {
            $answers[$aa->choiceid] = $aa;
        }
        unset($allanswers);
    }


    $timenow = time();

    $table = new html_table();

    if ($usesections) {
<<<<<<< HEAD
=======
        $strsectionname = get_string('sectionname', 'format_'.$course->format);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $table->head  = array ($strsectionname, get_string("question"), get_string("answer"));
        $table->align = array ("center", "left", "left");
    } else {
        $table->head  = array (get_string("question"), get_string("answer"));
        $table->align = array ("left", "left");
    }

    $currentsection = "";

    foreach ($choices as $choice) {
        if (!empty($answers[$choice->id])) {
            $answer = $answers[$choice->id];
        } else {
            $answer = "";
        }
        if (!empty($answer->optionid)) {
            $aa = format_string(choice_get_option_text($choice, $answer->optionid));
        } else {
            $aa = "";
        }
        if ($usesections) {
            $printsection = "";
            if ($choice->section !== $currentsection) {
                if ($choice->section) {
<<<<<<< HEAD
                    $printsection = get_section_name($course, $sections[$choice->section]);
=======
                    $printsection = get_section_name($course, $choice->section);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                }
                if ($currentsection !== "") {
                    $table->data[] = 'hr';
                }
                $currentsection = $choice->section;
            }
        }

        //Calculate the href
        if (!$choice->visible) {
            //Show dimmed if the mod is hidden
            $tt_href = "<a class=\"dimmed\" href=\"view.php?id=$choice->coursemodule\">".format_string($choice->name,true)."</a>";
        } else {
            //Show normal if the mod is visible
            $tt_href = "<a href=\"view.php?id=$choice->coursemodule\">".format_string($choice->name,true)."</a>";
        }
        if ($usesections) {
            $table->data[] = array ($printsection, $tt_href, $aa);
        } else {
            $table->data[] = array ($tt_href, $aa);
        }
    }
    echo "<br />";
    echo html_writer::table($table);

    echo $OUTPUT->footer();


