<?php

    require_once("../../config.php");
    require_once("lib.php");

    $id = required_param('id', PARAM_INT);    // Course Module ID

    $PAGE->set_url('/mod/survey/index.php', array('id'=>$id));

    if (!$course = $DB->get_record('course', array('id'=>$id))) {
        print_error('invalidcourseid');
    }

    require_course_login($course);
    $PAGE->set_pagelayout('incourse');

    add_to_log($course->id, "survey", "view all", "index.php?id=$course->id", "");

    $strsurveys = get_string("modulenameplural", "survey");
<<<<<<< HEAD
    $strsectionname  = get_string('sectionname', 'format_'.$course->format);
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    $strname = get_string("name");
    $strstatus = get_string("status");
    $strdone  = get_string("done", "survey");
    $strnotdone  = get_string("notdone", "survey");

    $PAGE->navbar->add($strsurveys);
    $PAGE->set_title($strsurveys);
    $PAGE->set_heading($course->fullname);
    echo $OUTPUT->header();

    if (! $surveys = get_all_instances_in_course("survey", $course)) {
        notice(get_string('thereareno', 'moodle', $strsurveys), "../../course/view.php?id=$course->id");
    }

    $usesections = course_format_uses_sections($course->format);
<<<<<<< HEAD
    if ($usesections) {
        $sections = get_all_sections($course->id);
    }
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    $table = new html_table();
    $table->width = '100%';

    if ($usesections) {
<<<<<<< HEAD
=======
        $strsectionname = get_string('sectionname', 'format_'.$course->format);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $table->head  = array ($strsectionname, $strname, $strstatus);
    } else {
        $table->head  = array ($strname, $strstatus);
    }

    $currentsection = '';

    foreach ($surveys as $survey) {
        if (isloggedin() and survey_already_done($survey->id, $USER->id)) {
            $ss = $strdone;
        } else {
            $ss = $strnotdone;
        }
        $printsection = "";
        if ($usesections) {
            if ($survey->section !== $currentsection) {
                if ($survey->section) {
<<<<<<< HEAD
                    $printsection = get_section_name($course, $sections[$survey->section]);
=======
                    $printsection = get_section_name($course, $survey->section);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                }
                if ($currentsection !== "") {
                    $table->data[] = 'hr';
                }
                $currentsection = $survey->section;
            }
        }
        //Calculate the href
        if (!$survey->visible) {
            //Show dimmed if the mod is hidden
            $tt_href = "<a class=\"dimmed\" href=\"view.php?id=$survey->coursemodule\">".format_string($survey->name,true)."</a>";
        } else {
            //Show normal if the mod is visible
            $tt_href = "<a href=\"view.php?id=$survey->coursemodule\">".format_string($survey->name,true)."</a>";
        }

        if ($usesections) {
            $table->data[] = array ($printsection, $tt_href, "<a href=\"view.php?id=$survey->coursemodule\">$ss</a>");
        } else {
            $table->data[] = array ($tt_href, "<a href=\"view.php?id=$survey->coursemodule\">$ss</a>");
        }
    }

    echo "<br />";
    echo html_writer::table($table);
    echo $OUTPUT->footer();


