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
 * This file contains tests for the question_attempt_iterator class.
 *
 * @package    moodlecore
 * @subpackage questionengine
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once(dirname(__FILE__) . '/../lib.php');
require_once(dirname(__FILE__) . '/helpers.php');


/**
 * This file contains tests for the {@link question_attempt_iterator} class.
 *
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class question_attempt_iterator_test extends advanced_testcase {
    private $quba;
    private $qas = array();
    private $iterator;

    protected function setUp() {
        $this->quba = question_engine::make_questions_usage_by_activity('unit_test',
<<<<<<< HEAD
                get_context_instance(CONTEXT_SYSTEM));
=======
                context_system::instance());
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        $this->quba->set_preferred_behaviour('deferredfeedback');

        $slot = $this->quba->add_question(test_question_maker::make_question('description'));
        $this->qas[$slot] = $this->quba->get_question_attempt($slot);

        $slot = $this->quba->add_question(test_question_maker::make_question('description'));
        $this->qas[$slot] = $this->quba->get_question_attempt($slot);

        $this->iterator = $this->quba->get_attempt_iterator();
    }

    protected function tearDown() {
        $this->quba = null;
        $this->iterator = null;
    }

    public function test_foreach_loop() {
        $i = 1;
        foreach ($this->iterator as $key => $qa) {
            $this->assertEquals($i, $key);
            $this->assertSame($this->qas[$i], $qa);
            $i++;
        }
        $this->assertEquals(3, $i);
    }

    public function test_offsetExists_before_start() {
        $this->assertFalse(isset($this->iterator[0]));
    }

    public function test_offsetExists_at_start() {
        $this->assertTrue(isset($this->iterator[1]));
    }

    public function test_offsetExists_at_endt() {
        $this->assertTrue(isset($this->iterator[2]));
    }

    public function test_offsetExists_past_end() {
        $this->assertFalse(isset($this->iterator[3]));
    }

    public function test_offsetGet_before_start() {
        $this->setExpectedException('moodle_exception');
        $step = $this->iterator[0];
    }

    public function test_offsetGet_at_start() {
        $this->assertSame($this->qas[1], $this->iterator[1]);
    }

    public function test_offsetGet_at_end() {
        $this->assertSame($this->qas[2], $this->iterator[2]);
    }

    public function test_offsetGet_past_end() {
        $this->setExpectedException('moodle_exception');
        $step = $this->iterator[3];
    }

    public function test_cannot_set() {
        $this->setExpectedException('moodle_exception');
        $this->iterator[0] = null;
    }

    public function test_cannot_unset() {
        $this->setExpectedException('moodle_exception');
        unset($this->iterator[2]);
    }
}