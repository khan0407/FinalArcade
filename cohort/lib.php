<?php
<<<<<<< HEAD

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
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
 * Cohort related management functions, this file needs to be included manually.
 *
<<<<<<< HEAD
 * @package    core
 * @subpackage cohort
=======
 * @package    core_cohort
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

<<<<<<< HEAD
require_once($CFG->dirroot . '/user/selector/lib.php');
=======
defined('MOODLE_INTERNAL') || die();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

/**
 * Add new cohort.
 *
<<<<<<< HEAD
 * @param  object $cohort
 * @return int
=======
 * @param  stdClass $cohort
 * @return int new cohort id
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 */
function cohort_add_cohort($cohort) {
    global $DB;

    if (!isset($cohort->name)) {
        throw new coding_exception('Missing cohort name in cohort_add_cohort().');
    }
    if (!isset($cohort->idnumber)) {
        $cohort->idnumber = NULL;
    }
    if (!isset($cohort->description)) {
<<<<<<< HEAD
        $cohort->description = $DB->sql_empty();
=======
        // sql_empty() does not belong here, this crazy Oracle hack is implemented in insert_record()!
        $cohort->description = '';
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }
    if (!isset($cohort->descriptionformat)) {
        $cohort->descriptionformat = FORMAT_HTML;
    }
    if (empty($cohort->component)) {
        $cohort->component = '';
    }
    if (!isset($cohort->timecreated)) {
        $cohort->timecreated = time();
    }
    if (!isset($cohort->timemodified)) {
        $cohort->timemodified = $cohort->timecreated;
    }

    $cohort->id = $DB->insert_record('cohort', $cohort);

    events_trigger('cohort_added', $cohort);

    return $cohort->id;
}

/**
 * Update existing cohort.
<<<<<<< HEAD
 * @param  object $cohort
=======
 * @param  stdClass $cohort
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @return void
 */
function cohort_update_cohort($cohort) {
    global $DB;
    if (property_exists($cohort, 'component') and empty($cohort->component)) {
        // prevent NULLs
        $cohort->component = '';
    }
    $cohort->timemodified = time();
    $DB->update_record('cohort', $cohort);

    events_trigger('cohort_updated', $cohort);
}

/**
 * Delete cohort.
<<<<<<< HEAD
 * @param  object $cohort
=======
 * @param  stdClass $cohort
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @return void
 */
function cohort_delete_cohort($cohort) {
    global $DB;

    if ($cohort->component) {
        // TODO: add component delete callback
    }

    $DB->delete_records('cohort_members', array('cohortid'=>$cohort->id));
    $DB->delete_records('cohort', array('id'=>$cohort->id));

    events_trigger('cohort_deleted', $cohort);
}

/**
 * Somehow deal with cohorts when deleting course category,
 * we can not just delete them because they might be used in enrol
 * plugins or referenced in external systems.
<<<<<<< HEAD
 * @param  object $category
=======
 * @param  stdClass $category
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @return void
 */
function cohort_delete_category($category) {
    global $DB;
    // TODO: make sure that cohorts are really, really not used anywhere and delete, for now just move to parent or system context

<<<<<<< HEAD
    $oldcontext = get_context_instance(CONTEXT_COURSECAT, $category->id, MUST_EXIST);

    if ($category->parent and $parent = $DB->get_record('course_categories', array('id'=>$category->parent))) {
        $parentcontext = get_context_instance(CONTEXT_COURSECAT, $parent->id, MUST_EXIST);
        $sql = "UPDATE {cohort} SET contextid = :newcontext WHERE contextid = :oldcontext";
        $params = array('oldcontext'=>$oldcontext->id, 'newcontext'=>$parentcontext->id);
    } else {
        $syscontext = get_context_instance(CONTEXT_SYSTEM);
=======
    $oldcontext = context_coursecat::instance($category->id);

    if ($category->parent and $parent = $DB->get_record('course_categories', array('id'=>$category->parent))) {
        $parentcontext = context_coursecat::instance($parent->id);
        $sql = "UPDATE {cohort} SET contextid = :newcontext WHERE contextid = :oldcontext";
        $params = array('oldcontext'=>$oldcontext->id, 'newcontext'=>$parentcontext->id);
    } else {
        $syscontext = context_system::instance();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $sql = "UPDATE {cohort} SET contextid = :newcontext WHERE contextid = :oldcontext";
        $params = array('oldcontext'=>$oldcontext->id, 'newcontext'=>$syscontext->id);
    }

    $DB->execute($sql, $params);
}

/**
 * Add cohort member
 * @param  int $cohortid
 * @param  int $userid
 * @return void
 */
function cohort_add_member($cohortid, $userid) {
    global $DB;
<<<<<<< HEAD
=======
    if ($DB->record_exists('cohort_members', array('cohortid'=>$cohortid, 'userid'=>$userid))) {
        // No duplicates!
        return;
    }
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    $record = new stdClass();
    $record->cohortid  = $cohortid;
    $record->userid    = $userid;
    $record->timeadded = time();
    $DB->insert_record('cohort_members', $record);

    events_trigger('cohort_member_added', (object)array('cohortid'=>$cohortid, 'userid'=>$userid));
}

/**
 * Remove cohort member
 * @param  int $cohortid
 * @param  int $userid
 * @return void
 */
function cohort_remove_member($cohortid, $userid) {
    global $DB;
    $DB->delete_records('cohort_members', array('cohortid'=>$cohortid, 'userid'=>$userid));

    events_trigger('cohort_member_removed', (object)array('cohortid'=>$cohortid, 'userid'=>$userid));
}

/**
<<<<<<< HEAD
 * Returns list of visible cohorts in course.
 *
 * @param  object $course
 * @param  bool $enrolled true means include only cohorts with enrolled users
 * @return array
 */
function cohort_get_visible_list($course) {
    global $DB, $USER;

    $context = get_context_instance(CONTEXT_COURSE, $course->id, MUST_EXIST);
    list($esql, $params) = get_enrolled_sql($context);
    $parentsql = get_related_contexts_string($context);

    $sql = "SELECT c.id, c.name, c.idnumber, COUNT(u.id) AS cnt
              FROM {cohort} c
              JOIN {cohort_members} cm ON cm.cohortid = c.id
              JOIN ($esql) u ON u.id = cm.userid
             WHERE c.contextid $parentsql
          GROUP BY c.id, c.name, c.idnumber
            HAVING COUNT(u.id) > 0
          ORDER BY c.name, c.idnumber";
    $params['ctx'] = $context->id;
=======
 * Is this user a cohort member?
 * @param int $cohortid
 * @param int $userid
 * @return bool
 */
function cohort_is_member($cohortid, $userid) {
    global $DB;

    return $DB->record_exists('cohort_members', array('cohortid'=>$cohortid, 'userid'=>$userid));
}

/**
 * Returns list of cohorts from course parent contexts.
 *
 * Note: this function does not implement any capability checks,
 *       it means it may disclose existence of cohorts,
 *       make sure it is displayed to users with appropriate rights only.
 *
 * @param  stdClass $course
 * @param  bool $onlyenrolled true means include only cohorts with enrolled users
 * @return array of cohort names with number of enrolled users
 */
function cohort_get_visible_list($course, $onlyenrolled=true) {
    global $DB;

    $context = context_course::instance($course->id);
    list($esql, $params) = get_enrolled_sql($context);
    list($parentsql, $params2) = $DB->get_in_or_equal($context->get_parent_context_ids(), SQL_PARAMS_NAMED);
    $params = array_merge($params, $params2);

    if ($onlyenrolled) {
        $left = "";
        $having = "HAVING COUNT(u.id) > 0";
    } else {
        $left = "LEFT";
        $having = "";
    }

    $sql = "SELECT c.id, c.name, c.contextid, c.idnumber, COUNT(u.id) AS cnt
              FROM {cohort} c
        $left JOIN ({cohort_members} cm
                   JOIN ($esql) u ON u.id = cm.userid) ON cm.cohortid = c.id
             WHERE c.contextid $parentsql
          GROUP BY c.id, c.name, c.contextid, c.idnumber
           $having
          ORDER BY c.name, c.idnumber";
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    $cohorts = $DB->get_records_sql($sql, $params);

    foreach ($cohorts as $cid=>$cohort) {
<<<<<<< HEAD
        $cohorts[$cid] = format_string($cohort->name);
        if ($cohort->idnumber) {
=======
        $cohorts[$cid] = format_string($cohort->name, true, array('context'=>$cohort->contextid));
        if ($cohort->cnt) {
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            $cohorts[$cid] .= ' (' . $cohort->cnt . ')';
        }
    }

    return $cohorts;
}

/**
<<<<<<< HEAD
 * Get all the cohorts.
 *
 * @global moodle_database $DB
=======
 * Get all the cohorts defined in given context.
 *
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 * @param int $contextid
 * @param int $page number of the current page
 * @param int $perpage items per page
 * @param string $search search string
<<<<<<< HEAD
 * @return array    Array(totalcohorts => int, cohorts => array)
=======
 * @return array    Array(totalcohorts => int, cohorts => array, allcohorts => int)
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
 */
function cohort_get_cohorts($contextid, $page = 0, $perpage = 25, $search = '') {
    global $DB;

<<<<<<< HEAD
    $cohorts = array();

=======
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    // Add some additional sensible conditions
    $tests = array('contextid = ?');
    $params = array($contextid);

    if (!empty($search)) {
<<<<<<< HEAD
        $conditions = array(
            'name',
            'idnumber',
            'description',
        );
        $searchparam = '%' . $search . '%';
        foreach ($conditions as $key=>$condition) {
            $conditions[$key] = $DB->sql_like($condition,"?", false);
=======
        $conditions = array('name', 'idnumber', 'description');
        $searchparam = '%' . $DB->sql_like_escape($search) . '%';
        foreach ($conditions as $key=>$condition) {
            $conditions[$key] = $DB->sql_like($condition, "?", false);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
            $params[] = $searchparam;
        }
        $tests[] = '(' . implode(' OR ', $conditions) . ')';
    }
    $wherecondition = implode(' AND ', $tests);

<<<<<<< HEAD
    $fields = 'SELECT *';
    $countfields = 'SELECT COUNT(1)';
    $sql = " FROM {cohort}
             WHERE $wherecondition";
    $order = ' ORDER BY name ASC';
    $totalcohorts = $DB->count_records_sql($countfields . $sql, $params);
    $cohorts = $DB->get_records_sql($fields . $sql . $order, $params, $page*$perpage, $perpage);

    return array('totalcohorts' => $totalcohorts, 'cohorts' => $cohorts);
}

/**
 * Cohort assignment candidates
 */
class cohort_candidate_selector extends user_selector_base {
    protected $cohortid;

    public function __construct($name, $options) {
        $this->cohortid = $options['cohortid'];
        parent::__construct($name, $options);
    }

    /**
     * Candidate users
     * @param <type> $search
     * @return array
     */
    public function find_users($search) {
        global $DB;
        //by default wherecondition retrieves all users except the deleted, not confirmed and guest
        list($wherecondition, $params) = $this->search_sql($search, 'u');
        $params['cohortid'] = $this->cohortid;

        $fields      = 'SELECT ' . $this->required_fields_sql('u');
        $countfields = 'SELECT COUNT(1)';

        $sql = " FROM {user} u
            LEFT JOIN {cohort_members} cm ON (cm.userid = u.id AND cm.cohortid = :cohortid)
                WHERE cm.id IS NULL AND $wherecondition";

        $order = ' ORDER BY u.lastname ASC, u.firstname ASC';

        if (!$this->is_validating()) {
            $potentialmemberscount = $DB->count_records_sql($countfields . $sql, $params);
            if ($potentialmemberscount > 100) {
                return $this->too_many_results($search, $potentialmemberscount);
            }
        }

        $availableusers = $DB->get_records_sql($fields . $sql . $order, $params);

        if (empty($availableusers)) {
            return array();
        }


        if ($search) {
            $groupname = get_string('potusersmatching', 'cohort', $search);
        } else {
            $groupname = get_string('potusers', 'cohort');
        }

        return array($groupname => $availableusers);
    }

    protected function get_options() {
        $options = parent::get_options();
        $options['cohortid'] = $this->cohortid;
        $options['file'] = 'cohort/lib.php';
        return $options;
    }
}

/**
 * Cohort assignment candidates
 */
class cohort_existing_selector extends user_selector_base {
    protected $cohortid;

    public function __construct($name, $options) {
        $this->cohortid = $options['cohortid'];
        parent::__construct($name, $options);
    }

    /**
     * Candidate users
     * @param <type> $search
     * @return array
     */
    public function find_users($search) {
        global $DB;
        //by default wherecondition retrieves all users except the deleted, not confirmed and guest
        list($wherecondition, $params) = $this->search_sql($search, 'u');
        $params['cohortid'] = $this->cohortid;

        $fields      = 'SELECT ' . $this->required_fields_sql('u');
        $countfields = 'SELECT COUNT(1)';

        $sql = " FROM {user} u
                 JOIN {cohort_members} cm ON (cm.userid = u.id AND cm.cohortid = :cohortid)
                WHERE $wherecondition";

        $order = ' ORDER BY u.lastname ASC, u.firstname ASC';

        if (!$this->is_validating()) {
            $potentialmemberscount = $DB->count_records_sql($countfields . $sql, $params);
            if ($potentialmemberscount > 100) {
                return $this->too_many_results($search, $potentialmemberscount);
            }
        }

        $availableusers = $DB->get_records_sql($fields . $sql . $order, $params);

        if (empty($availableusers)) {
            return array();
        }


        if ($search) {
            $groupname = get_string('currentusersmatching', 'cohort', $search);
        } else {
            $groupname = get_string('currentusers', 'cohort');
        }

        return array($groupname => $availableusers);
    }

    protected function get_options() {
        $options = parent::get_options();
        $options['cohortid'] = $this->cohortid;
        $options['file'] = 'cohort/lib.php';
        return $options;
    }
=======
    $fields = "SELECT *";
    $countfields = "SELECT COUNT(1)";
    $sql = " FROM {cohort}
             WHERE $wherecondition";
    $order = " ORDER BY name ASC, idnumber ASC";
    $allcohorts = $DB->count_records('cohort', array('contextid'=>$contextid));
    $totalcohorts = $DB->count_records_sql($countfields . $sql, $params);
    $cohorts = $DB->get_records_sql($fields . $sql . $order, $params, $page*$perpage, $perpage);

    return array('totalcohorts' => $totalcohorts, 'cohorts' => $cohorts, 'allcohorts'=>$allcohorts);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
}
