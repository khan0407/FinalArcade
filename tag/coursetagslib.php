<?php
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
 * coursetagslib.php
 *
 * @package    core_tag
 * @copyright  2007 j.beedell@open.ac.uk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once $CFG->dirroot.'/tag/lib.php';
<<<<<<< HEAD
=======
require_once $CFG->dirroot.'/tag/locallib.php';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

/**
 * Returns an ordered array of tags associated with visible courses
 * (boosted replacement of get_all_tags() allowing association with user and tagtype).
 *
 * @package  core_tag
 * @category tag
 * @param    int      $courseid A course id. Passing 0 will return all distinct tags for all visible courses
 * @param    int      $userid   (optional) the user id, a default of 0 will return all users tags for the course
 * @param    string   $tagtype  (optional) The type of tag, empty string returns all types. Currently (Moodle 2.2) there are two
 *                              types of tags which are used within Moodle, they are 'official' and 'default'.
 * @param    int      $numtags  (optional) number of tags to display, default of 80 is set in the block, 0 returns all
<<<<<<< HEAD
 * @param    string   $sort     (optional) selected sorting, default is alpha sort (name) also timemodified or popularity
 * @return   array
 */
function coursetag_get_tags($courseid, $userid=0, $tagtype='', $numtags=0, $sort='name') {
=======
 * @param    string   $unused   (optional) was selected sorting, moved to tag_print_cloud()
 * @return   array
 */
function coursetag_get_tags($courseid, $userid=0, $tagtype='', $numtags=0, $unused = '') {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    global $CFG, $DB;

    // get visible course ids
    $courselist = array();
    if ($courseid === 0) {
        if ($courses = $DB->get_records_select('course', 'visible=1 AND category>0', null, '', 'id')) {
            foreach ($courses as $key => $value) {
                $courselist[] = $key;
            }
        }
    }

    // get tags from the db ordered by highest count first
    $params = array();
    $sql = "SELECT id as tkey, name, id, tagtype, rawname, f.timemodified, flag, count
              FROM {tag} t,
                 (SELECT tagid, MAX(timemodified) as timemodified, COUNT(id) as count
                    FROM {tag_instance}
                   WHERE itemtype = 'course' ";

    if ($courseid > 0) {
        $sql .= "    AND itemid = :courseid ";
        $params['courseid'] = $courseid;
    } else {
        if (!empty($courselist)) {
            list($usql, $uparams) = $DB->get_in_or_equal($courselist, SQL_PARAMS_NAMED);
            $sql .= "AND itemid $usql ";
            $params = $params + $uparams;
        }
    }

    if ($userid > 0) {
        $sql .= "    AND tiuserid = :userid ";
        $params['userid'] = $userid;
    }

    $sql .= "   GROUP BY tagid) f
             WHERE t.id = f.tagid ";
    if ($tagtype != '') {
        $sql .= "AND tagtype = :tagtype ";
        $params['tagtype'] = $tagtype;
    }
    $sql .= "ORDER BY count DESC, name ASC";

    // limit the number of tags for output
    if ($numtags == 0) {
        $tags = $DB->get_records_sql($sql, $params);
    } else {
        $tags = $DB->get_records_sql($sql, $params, 0, $numtags);
    }

    // prepare the return
    $return = array();
    if ($tags) {
<<<<<<< HEAD
        // sort the tag display order
        if ($sort != 'popularity') {
            $CFG->tagsort = $sort;
            usort($tags, "coursetag_sort");
        }
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        // avoid print_tag_cloud()'s ksort upsetting ordering by setting the key here
        foreach ($tags as $value) {
            $return[] = $value;
        }
    }

    return $return;

}

/**
 * Returns an ordered array of tags
 * (replaces popular_tags_count() allowing sorting).
 *
 * @package  core_tag
 * @category tag
<<<<<<< HEAD
 * @param    string $sort    (optional) selected sorting, default is alpha sort (name) also timemodified or popularity
 * @param    int    $numtags (optional) number of tags to display, default of 20 is set in the block, 0 returns all
 * @return   array
 */
function coursetag_get_all_tags($sort='name', $numtags=0) {
=======
 * @param    string $unused (optional) was selected sorting - moved to tag_print_cloud()
 * @param    int    $numtags (optional) number of tags to display, default of 20 is set in the block, 0 returns all
 * @return   array
 */
function coursetag_get_all_tags($unused='', $numtags=0) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    global $CFG, $DB;

    // note that this selects all tags except for courses that are not visible
    $sql = "SELECT id, name, tagtype, rawname, f.timemodified, flag, count
        FROM {tag} t,
        (SELECT tagid, MAX(timemodified) as timemodified, COUNT(id) as count
            FROM {tag_instance} WHERE tagid NOT IN
                (SELECT tagid FROM {tag_instance} ti, {course} c
                WHERE c.visible = 0
                AND ti.itemtype = 'course'
                AND ti.itemid = c.id)
        GROUP BY tagid) f
        WHERE t.id = f.tagid
        ORDER BY count DESC, name ASC";
    if ($numtags == 0) {
        $tags = $DB->get_records_sql($sql);
    } else {
        $tags = $DB->get_records_sql($sql, null, 0, $numtags);
    }

    $return = array();
    if ($tags) {
<<<<<<< HEAD
        if ($sort != 'popularity') {
            $CFG->tagsort = $sort;
            usort($tags, "coursetag_sort");
        }
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        foreach ($tags as $value) {
            $return[] = $value;
        }
    }

    return $return;
}

/**
<<<<<<< HEAD
 * Sorting callback function for coursetag_get_tags() and coursetag_get_all_tags() only
 *
 * This function does a comparision on a field withing two variables, $a and $b. The field used is specified by
 * $CFG->tagsort or we just use the 'name' field if $CFG->tagsort is empty. The comparison works as follows:
 * If $a->$tagsort is greater than $b->$tagsort, 1 is returned.
 * If $a->$tagsort is equal to $b->$tagsort, 0 is returned.
 * If $a->$tagsort is less than $b->$tagsort, -1 is returned.
 *
 * Also if $a->$tagsort is not numeric or a string, 0 is returned.
 *
 * @package core_tag
 * @access  private
 * @param   int|string|mixed $a Variable to compare against $b
 * @param   int|string|mixed $b Variable to compare against $a
 * @return  int                 The result of the comparison/validation 1, 0 or -1
 */
function coursetag_sort($a, $b) {
    // originally from block_blog_tags
    global $CFG;

    // set up the variable $tagsort as either 'name' or 'timemodified' only, 'popularity' does not need sorting
    if (empty($CFG->tagsort)) {
        $tagsort = 'name';
    } else {
        $tagsort = $CFG->tagsort;
    }

    if (is_numeric($a->$tagsort)) {
        return ($a->$tagsort == $b->$tagsort) ? 0 : ($a->$tagsort > $b->$tagsort) ? 1 : -1;
    } elseif (is_string($a->$tagsort)) {
        return strcmp($a->$tagsort, $b->$tagsort);
    } else {
        return 0;
    }
}

/**
 * Prints a tag cloud
 *
 * @package  core_tag
 * @category tag
 * @param    array $tagcloud array of tag objects (fields: id, name, rawname, count and flag)
 * @param    mixed $return   if true return html string
 * @param    int   $max_size maximum text size, in percentage
 * @param    int   $min_size minimum text size, in percentage
 */
function coursetag_print_cloud($tagcloud, $return=false, $max_size=180, $min_size=80) {

    global $CFG;

    if (empty($tagcloud)) {
        return;
    }

    ksort($tagcloud);

    $count = array();
    foreach ($tagcloud as $key => $value) {
        if(!empty($value->count)) {
            $count[$key] = log10($value->count);
        } else {
            $count[$key] = 0;
        }
    }

    $max = max($count);
    $min = min($count);

    $spread = $max - $min;
    if (0 == $spread) { // we don't want to divide by zero
        $spread = 1;
    }

    $step = ($max_size - $min_size)/($spread);

    $systemcontext   = get_context_instance(CONTEXT_SYSTEM);
    $can_manage_tags = has_capability('moodle/tag:manage', $systemcontext);

    //prints the tag cloud
    $output = '<ul class="tag-cloud inline-list">';
    foreach ($tagcloud as $key => $tag) {

        $size = $min_size + ((log10($tag->count) - $min) * $step);
        $size = ceil($size);

        $style = 'style="font-size: '.$size.'%"';

        if ($tag->count > 1) {
            $title = 'title="'.s(get_string('thingstaggedwith','tag', $tag)).'"';
        } else {
            $title = 'title="'.s(get_string('thingtaggedwith','tag', $tag)).'"';
        }

        $href = 'href="'.$CFG->wwwroot.'/tag/index.php?id='.$tag->id.'"';

        //highlight tags that have been flagged as inappropriate for those who can manage them
        $tagname = tag_display_name($tag);
        if ($tag->flag > 0 && $can_manage_tags) {
            $tagname =  '<span class="flagged-tag">' . tag_display_name($tag) . '</span>';
        }

        $tag_link = '<li><a '.$href.' '.$title.' '. $style .'>'.$tagname.'</a></li> ';

        $output .= $tag_link;

    }
    $output .= '</ul>'."\n";

    if ($return) {
        return $output;
    } else {
        echo $output;
    }
}

/**
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * Returns javascript for use in tags block and supporting pages
 *
 * @package  core_tag
 * @category tag
<<<<<<< HEAD
 * @param    string   $coursetagdivs comma separated divs ids
 * @return   null
 */
function coursetag_get_jscript($coursetagdivs = '') {
=======
 * @return   null
 */
function coursetag_get_jscript() {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    global $CFG, $DB, $PAGE;

    $PAGE->requires->js('/tag/tag.js');
    $PAGE->requires->strings_for_js(array('jserror1', 'jserror2'), 'block_tags');

<<<<<<< HEAD
    if ($coursetagdivs) {
        $PAGE->requires->js_function_call('set_course_tag_divs', $coursetagdivs);
    }

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    if ($coursetags = $DB->get_records('tag', null, 'name ASC', 'name, id')) {
        foreach ($coursetags as $key => $value) {
            $PAGE->requires->js_function_call('set_course_tag', array($key));
        }
    }

    $PAGE->requires->js('/blocks/tags/coursetags.js');

    return '';
}

/**
 * Returns javascript to create the links in the tag block footer.
 *
 * @package  core_tag
 * @category tag
 * @param    string   $elementid       the element to attach the footer to
 * @param    array    $coursetagslinks links arrays each consisting of 'title', 'onclick' and 'text' elements
 * @return   string   always returns a blank string
 */
function coursetag_get_jscript_links($elementid, $coursetagslinks) {
    global $PAGE;

    if (!empty($coursetagslinks)) {
        foreach ($coursetagslinks as $a) {
            $PAGE->requires->js_function_call('add_tag_footer_link', array($elementid, $a['title'], $a['onclick'], $a['text']), true);
        }
    }

    return '';
}

/**
 * Returns all tags created by a user for a course
 *
 * @package  core_tag
 * @category tag
 * @param    int      $courseid tags are returned for the course that has this courseid
 * @param    int      $userid   return tags which were created by this user
 */
function coursetag_get_records($courseid, $userid) {
    global $CFG, $DB;

    $sql = "SELECT t.id, name, rawname
              FROM {tag} t, {tag_instance} ti
             WHERE t.id = ti.tagid
                 AND ti.tiuserid = :userid
                 AND ti.itemid = :courseid
          ORDER BY name ASC";

    return $DB->get_records_sql($sql, array('userid'=>$userid, 'courseid'=>$courseid));
}

/**
 * Stores a tag for a course for a user
 *
 * @package  core_tag
 * @category tag
 * @param    array  $tags     simple array of keywords to be stored
 * @param    int    $courseid the id of the course we wish to store a tag for
 * @param    int    $userid   the id of the user we wish to store a tag for
 * @param    string $tagtype  official or default only
 * @param    string $myurl    (optional) for logging creation of course tags
 */
function coursetag_store_keywords($tags, $courseid, $userid=0, $tagtype='official', $myurl='') {

    global $CFG;

    if (is_array($tags) and !empty($tags)) {
<<<<<<< HEAD
        foreach($tags as $tag) {
=======
        foreach ($tags as $tag) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            $tag = trim($tag);
            if (strlen($tag) > 0) {
                //tag_set_add('course', $courseid, $tag, $userid); //deletes official tags

                //add tag if does not exist
                if (!$tagid = tag_get_id($tag)) {
                    $tag_id_array = tag_add(array($tag), $tagtype);
                    $tagid = $tag_id_array[textlib::strtolower($tag)];
                }
                //ordering
                $ordering = 0;
                if ($current_ids = tag_get_tags_ids('course', $courseid)) {
                    end($current_ids);
                    $ordering = key($current_ids) + 1;
                }
                //set type
                tag_type_set($tagid, $tagtype);

                //tag_instance entry
                tag_assign('course', $courseid, $tagid, $ordering, $userid);

                //logging - note only for user added tags
                if ($tagtype == 'default' and $myurl != '') {
                    $url = $myurl.'?query='.urlencode($tag);
                    add_to_log($courseid, 'coursetags', 'add', $url, 'Course tagged');
                }
            }
        }
    }

}

/**
 * Deletes a personal tag for a user for a course.
 *
 * @package  core_tag
 * @category tag
 * @param    int      $tagid    the tag we wish to delete
 * @param    int      $userid   the user that the tag is associated with
 * @param    int      $courseid the course that the tag is associated with
 */
function coursetag_delete_keyword($tagid, $userid, $courseid) {

    global $CFG, $DB;

    $sql = "SELECT COUNT(*)
        FROM {tag_instance}
        WHERE tagid = $tagid
        AND tiuserid = $userid
        AND itemtype = 'course'
        AND itemid = $courseid";
    if ($DB->count_records_sql($sql) == 1) {
        $sql = "tagid = $tagid
            AND tiuserid = $userid
            AND itemtype = 'course'
            AND itemid = $courseid";
        $DB->delete_records_select('tag_instance', $sql);
        // if there are no other instances of the tag then consider deleting the tag as well
        if (!$DB->record_exists('tag_instance', array('tagid' => $tagid))) {
            // if the tag is a personal tag then delete it - don't do official tags
            if ($DB->record_exists('tag', array('id' => $tagid, 'tagtype' => 'default'))) {
                $DB->delete_records('tag', array('id' => $tagid, 'tagtype' => 'default'));
            }
        }
    } else {
        print_error("errordeleting", 'tag', '', $tagid);
    }

}

/**
 * Get courses tagged with a tag
 *
 * @global moodle_database $DB
 * @package  core_tag
 * @category tag
 * @param int $tagid
 * @return array of course objects
 */
function coursetag_get_tagged_courses($tagid) {
    global $DB;

    $courses = array();

    $ctxselect = context_helper::get_preload_record_columns_sql('ctx');

    $sql = "SELECT c.*, $ctxselect
            FROM {course} c
            JOIN {tag_instance} t ON t.itemid = c.id
            JOIN {context} ctx ON ctx.instanceid = c.id
            WHERE t.tagid = :tagid AND
            t.itemtype = 'course' AND
            ctx.contextlevel = :contextlevel
            ORDER BY c.sortorder ASC";
    $params = array('tagid' => $tagid, 'contextlevel' => CONTEXT_COURSE);
    $rs = $DB->get_recordset_sql($sql, $params);
    foreach ($rs as $course) {
        context_helper::preload_from_record($course);
        if ($course->visible == 1 || has_capability('moodle/course:viewhiddencourses', context_course::instance($course->id))) {
            $courses[$course->id] = $course;
        }
    }
    return $courses;
}

/**
 * Course tagging function used only during the deletion of a course (called by lib/moodlelib.php) to clean up associated tags
 *
 * @package core_tag
 * @param   int      $courseid     the course we wish to delete tag instances from
 * @param   bool     $showfeedback if we should output a notification of the delete to the end user
 */
function coursetag_delete_course_tags($courseid, $showfeedback=false) {
    global $DB, $OUTPUT;

    if ($tags = $DB->get_records_select('tag_instance', "itemtype='course' AND itemid=:courseid", array('courseid'=>$courseid))) {
        foreach ($tags as $tag) {
            //delete the course tag instance record
            $DB->delete_records('tag_instance', array('tagid'=>$tag->tagid, 'itemtype'=>'course', 'itemid'=> $courseid));
            // delete tag if there are no other tag_instance entries now
            if (!($DB->record_exists('tag_instance', array('tagid'=>$tag->tagid)))) {
                $DB->delete_records('tag', array('id'=>$tag->tagid));
                // Delete files
                $fs = get_file_storage();
                $fs->delete_area_files(get_system_context()->id, 'tag', 'description', $tag->tagid);
            }
        }
    }

    if ($showfeedback) {
        echo $OUTPUT->notification(get_string('deletedcoursetags', 'tag'), 'notifysuccess');
    }
}

<<<<<<< HEAD
/*
 * Function called by cron to create/update users rss feeds
 *
 * @return true
 *
 * Function removed.
 * rsslib.php needs updating to accept Dublin Core tags (dc/cc) input before this can work.
 */
/*
function coursetag_rss_feeds() {

    global $CFG, $DB;
    require_once($CFG->dirroot.'/lib/dmllib.php');
    require_once($CFG->dirroot.'/lib/rsslib.php');

    $status = true;
    mtrace('    Preparing to update all user unit tags RSS feeds');
    if (empty($CFG->enablerssfeeds)) {
        mtrace('      RSS DISABLED (admin variables - enablerssfeeds)');
    } else {

        //  Load all the categories for use later on
        $categories = $DB->get_records('course_categories');

        // get list of users who have tagged a unit
        $sql = "
            SELECT DISTINCT u.id as userid, u.username, u.firstname, u.lastname, u.email
            FROM {user} u, {course} c, {tag_instance} cti, {tag} t
            WHERE c.id = cti.itemid
            AND u.id = cti.tiuserid
            AND t.id = cti.tagid
            AND t.tagtype = 'personal'
            AND u.confirmed = 1
            AND u.deleted = 0
            ORDER BY userid";
        if ($users = $DB->get_records_sql($sql)) {

            $items = array(); //contains rss data items for each user
            foreach ($users as $user) {

                // loop through each user, getting the data (tags for courses)
                $sql = "
                    SELECT cti.id, c.id as courseid, c.fullname, c.shortname, c.category, t.rawname, cti.timemodified
                    FROM {course} c, {tag_instance} cti, {tag} t
                    WHERE c.id = cti.itemid
                    AND cti.tiuserid = :userid{$user->userid}
                    AND cti.tagid = t.id
                    AND t.tagtype = 'personal'
                    ORDER BY courseid";
                if ($usertags = $DB->get_records_sql($sql, array('userid' => $user->userid))) {
                    $latest_date = 0; //latest date any tag was created by a user
                    $c = 0; //course identifier

                    foreach ($usertags as $usertag) {
                        if ($usertag->courseid != $c) {
                            $c = $usertag->courseid;
                            $items[$c] = new stdClass();
                            $items[$c]->title = $usertag->fullname . '(' . $usertag->shortname . ')';
                            $items[$c]->link = $CFG->wwwroot . '/course/view.php?name=' . $usertag->shortname;
                            $items[$c]->description = ''; //needs to be blank
                            $items[$c]->category = $categories[$usertag->category]->name;
                            $items[$c]->subject[] = $usertag->rawname;
                            $items[$c]->pubdate = $usertag->timemodified;
                            $items[$c]->tag = true;
                        } else {
                            $items[$c]->subject[] .= $usertag->rawname;
                        }
                        //  Check and set the latest modified date.
                        $latest_date = $usertag->timemodified > $latest_date ? $usertag->timemodified : $latest_date;
                    }

                    //  Setup some vars for use while creating the file
                    $path = $CFG->dataroot.'/1/usertagsrss/'.$user->userid;
                    $file_name = 'user_unit_tags_rss.xml';
                    $title = get_string('rsstitle', 'tag', ucwords(strtolower($user->firstname.' '.$user->lastname)));
                    $desc = get_string('rssdesc', 'tag');
                    // check that the path exists
                    if (!file_exists($path)) {
                        mtrace('  Creating folder '.$path);
                        check_dir_exists($path, TRUE, TRUE);
                    }

                    // create or update the feed for the user
                    // this functionality can be copied into seperate lib as in next two lines
                    //require_once($CFG->dirroot.'/local/ocilib.php');
                    //oci_create_rss_feed( $path, $file_name, $latest_date, $items, $title, $desc, $dc=true, $cc=false);

                    //  Set path to RSS file
                    $full_path = "$save_path/$file_name";

                    mtrace("    Preparing to update RSS feed for $file_name");

                    //  First let's make sure there is work to do by checking the time the file was last modified,
                    //  if a course was update after the file was mofified
                    if (file_exists($full_path)) {
                        if ($lastmodified = filemtime($full_path)) {
                            mtrace("        XML File $file_name Created on ".date( "D, j M Y G:i:s T", $lastmodified ));
                            mtrace('        Lastest course modification on '.date( "D, j M Y G:i:s T", $latest_date ));
                            if ($latest_date > $lastmodified) {
                                mtrace("        XML File $file_name needs updating");
                                $changes = true;
                            } else {
                                mtrace("        XML File $file_name doesn't need updating");
                                $changes = false;
                            }
                        }
                    } else {
                        mtrace("        XML File $file_name needs updating");
                        $changes = true;
                    }

                    if ($changes) {
                        //  Now we know something has changed, write the new file

                        if (!empty($items)) {
                            //  First set rss feeds common headers
                            $header = rss_standard_header(strip_tags(format_string($title,true)),
                                                          $CFG->wwwroot,
                                                          $desc,
                                                          true, true);
                            //  Now all the rss items
                            if (!empty($header)) {
                                $articles = rss_add_items($items,$dc,$cc);
                            }
                            //  Now all rss feeds common footers
                            if (!empty($header) && !empty($articles)) {
                                $footer = rss_standard_footer();
                            }
                            //  Now, if everything is ok, concatenate it
                            if (!empty($header) && !empty($articles) && !empty($footer)) {
                                $result = $header.$articles.$footer;
                            } else {
                                $result = false;
                            }
                        } else {
                            $result = false;
                        }

                        //  Save the XML contents to file
                        if (!empty($result)) {
                            $rss_file = fopen($full_path, "w");
                            if ($rss_file) {
                                $status = fwrite ($rss_file, $result);
                                fclose($rss_file);
                            } else {
                                $status = false;
                            }
                        }

                        //  Output result
                        if (empty($result)) {
                            // There was nothing to put into the XML file. Delete it!
                            if( is_file($full_path) ) {
                                mtrace("        There were no items for XML File $file_name. Deleting XML File");
                                unlink($full_path);
                                mtrace("        $full_path -> (deleted)");
                            } else {
                                mtrace("        There were no items for the XML File $file_name and no file to delete. Ignore.");
                            }
                        } else {
                            if (!empty($status)) {
                                mtrace("        $full_path -> OK");
                            } else {
                                mtrace("        $full_path -> FAILED");
                            }
                        }
                    }
                    //end of oci_create_rss_feed()
                }
            }
        }
    }

    return $status;
}
 */

/*
 * Get official keywords for the <meta name="keywords"> in header.html
 * use: echo '<meta name="keywords" content="'.coursetag_get_official_keywords($COURSE->id).'"/>';
 *
 * @param int $courseid
 * @return string
 *
 * Function removed but fully working
 * This function is potentially useful to anyone wanting to improve search results for course pages.
 * The idea is to add official tags (not personal tags to prevent their deletion) to all
 * courses (facility not added yet) which will be automatically added to the page header to boost
 * search engine specificity/ratings.
 */
/*
function coursetag_get_official_keywords($courseid, $asarray=false) {
    global $CFG;
    $returnstr = '';
    $sql = "SELECT t.id, name, rawname
        FROM {tag} t, {tag_instance} ti
        WHERE ti.itemid = :courseid
        AND ti.itemtype = 'course'
        AND t.tagtype = 'official'
        AND ti.tagid = t.id
        ORDER BY name ASC";
    if ($tags = $DB->get_records_sql($sql, array('courseid' => $courseid))) {
        if ($asarray) {
            return $tags;
        }
        foreach ($tags as $tag) {
            if( empty($CFG->keeptagnamecase) ) {
                $name = textlib::strtotitle($tag->name);
            } else {
                $name = $tag->rawname;
            }
            $returnstr .= $name.', ';
        }
        $returnstr = rtrim($returnstr, ', ');
    }
    return $returnstr;
}
*/
=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
