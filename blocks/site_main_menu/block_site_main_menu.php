<?php

class block_site_main_menu extends block_list {
    function init() {
        $this->title = get_string('pluginname', 'block_site_main_menu');
    }

    function applicable_formats() {
        return array('site' => true);
    }

    function get_content() {
        global $USER, $CFG, $DB, $OUTPUT;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        if (empty($this->instance)) {
            return $this->content;
        }

        $course = $this->page->course;
        require_once($CFG->dirroot.'/course/lib.php');
<<<<<<< HEAD
        $context = get_context_instance(CONTEXT_COURSE, $course->id);
        $isediting = $this->page->user_is_editing() && has_capability('moodle/course:manageactivities', $context);
        $modinfo = get_fast_modinfo($course);

/// extra fast view mode
        if (!$isediting) {
=======
        $context = context_course::instance($course->id);
        $isediting = $this->page->user_is_editing() && has_capability('moodle/course:manageactivities', $context);

/// extra fast view mode
        if (!$isediting) {
            $modinfo = get_fast_modinfo($course);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            if (!empty($modinfo->sections[0])) {
                $options = array('overflowdiv'=>true);
                foreach($modinfo->sections[0] as $cmid) {
                    $cm = $modinfo->cms[$cmid];
                    if (!$cm->uservisible) {
                        continue;
                    }

                    list($content, $instancename) =
                            get_print_section_cm_text($cm, $course);

                    if (!($url = $cm->get_url())) {
                        $this->content->items[] = $content;
                        $this->content->icons[] = '';
                    } else {
                        $linkcss = $cm->visible ? '' : ' class="dimmed" ';
                        //Accessibility: incidental image - should be empty Alt text
<<<<<<< HEAD
                        $icon = '<img src="' . $cm->get_icon_url() . '" class="icon" alt="" />&nbsp;';
=======
                        $icon = '<img src="' . $cm->get_icon_url() . '" class="icon" alt="" />';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                        $this->content->items[] = '<a title="'.$cm->modplural.'" '.$linkcss.' '.$cm->extra.
                                ' href="' . $url . '">' . $icon . $instancename . '</a>';
                    }
                }
            }
            return $this->content;
        }

/// slow & hacky editing mode
        $ismoving = ismoving($course->id);
<<<<<<< HEAD
        $section  = get_course_section(0, $course->id);

        get_all_mods($course->id, $mods, $modnames, $modnamesplural, $modnamesused);
=======
        course_create_sections_if_missing($course, 0);
        $modinfo = get_fast_modinfo($course);
        $section = $modinfo->get_section_info(0);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

        $groupbuttons = $course->groupmode;
        $groupbuttonslink = (!$course->groupmodeforce);

        if ($ismoving) {
            $strmovehere = get_string('movehere');
            $strmovefull = strip_tags(get_string('movefull', '', "'$USER->activitycopyname'"));
            $strcancel= get_string('cancel');
            $stractivityclipboard = $USER->activitycopyname;
        }
    /// Casting $course->modinfo to string prevents one notice when the field is null
        $editbuttons = '';

        if ($ismoving) {
            $this->content->icons[] = '<img src="'.$OUTPUT->pix_url('t/move') . '" class="iconsmall" alt="" />';
            $this->content->items[] = $USER->activitycopyname.'&nbsp;(<a href="'.$CFG->wwwroot.'/course/mod.php?cancelcopy=true&amp;sesskey='.sesskey().'">'.$strcancel.'</a>)';
        }

<<<<<<< HEAD
        if (!empty($section->sequence)) {
            $sectionmods = explode(',', $section->sequence);
            $options = array('overflowdiv'=>true);
            foreach ($sectionmods as $modnumber) {
                if (empty($mods[$modnumber])) {
                    continue;
                }
                $mod = $mods[$modnumber];
=======
        if (!empty($modinfo->sections[0])) {
            $options = array('overflowdiv'=>true);
            foreach ($modinfo->sections[0] as $modnumber) {
                $mod = $modinfo->cms[$modnumber];
                if (!$mod->uservisible) {
                    continue;
                }
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                if (!$ismoving) {
                    if ($groupbuttons) {
                        if (! $mod->groupmodelink = $groupbuttonslink) {
                            $mod->groupmode = $course->groupmode;
                        }

                    } else {
                        $mod->groupmode = false;
                    }
                    $editbuttons = '<div class="buttons">'.make_editing_buttons($mod, true, true).'</div>';
                } else {
                    $editbuttons = '';
                }
                if ($mod->visible || has_capability('moodle/course:viewhiddenactivities', $context)) {
                    if ($ismoving) {
                        if ($mod->id == $USER->activitycopy) {
                            continue;
                        }
                        $this->content->items[] = '<a title="'.$strmovefull.'" href="'.$CFG->wwwroot.'/course/mod.php?moveto='.$mod->id.'&amp;sesskey='.sesskey().'">'.
                            '<img style="height:16px; width:80px; border:0px" src="'.$OUTPUT->pix_url('movehere') . '" alt="'.$strmovehere.'" /></a>';
                        $this->content->icons[] = '';
                    }
                    list($content, $instancename) =
                            get_print_section_cm_text($modinfo->cms[$modnumber], $course);
                    $linkcss = $mod->visible ? '' : ' class="dimmed" ';

                    if (!($url = $mod->get_url())) {
                        $this->content->items[] = $content . $editbuttons;
                        $this->content->icons[] = '';
                    } else {
                        //Accessibility: incidental image - should be empty Alt text
<<<<<<< HEAD
                        $icon = '<img src="' . $mod->get_icon_url() . '" class="icon" alt="" />&nbsp;';
=======
                        $icon = '<img src="' . $mod->get_icon_url() . '" class="icon" alt="" />';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
                        $this->content->items[] = '<a title="' . $mod->modfullname . '" ' . $linkcss . ' ' . $mod->extra .
                            ' href="' . $url . '">' . $icon . $instancename . '</a>' . $editbuttons;
                    }
                }
            }
        }

        if ($ismoving) {
            $this->content->items[] = '<a title="'.$strmovefull.'" href="'.$CFG->wwwroot.'/course/mod.php?movetosection='.$section->id.'&amp;sesskey='.sesskey().'">'.
                                      '<img style="height:16px; width:80px; border:0px" src="'.$OUTPUT->pix_url('movehere') . '" alt="'.$strmovehere.'" /></a>';
            $this->content->icons[] = '';
        }

<<<<<<< HEAD
        if (!empty($modnames)) {
            $this->content->footer = print_section_add_menus($course, 0, $modnames, true, true);
        } else {
            $this->content->footer = '';
        }
=======
        $this->content->footer = print_section_add_menus($course, 0, null, true, true);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

        return $this->content;
    }
}


