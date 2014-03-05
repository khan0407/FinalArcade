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
 * MOODLE VERSION INFORMATION
 *
 * This file defines the current version of the core Moodle code being used.
 * This is compared against the values stored in the database to determine
 * whether upgrades should be performed (see lib/db/*.php)
 *
 * @package    core
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

<<<<<<< HEAD
$version  = 2012062510.02;              // 20120625      = branching date YYYYMMDD - do not modify!
                                        //         RR    = release increments - 00 in DEV branches
                                        //           .XX = incremental changes

$release  = '2.3.10+ (Build: 20131122)';  // Human-friendly version name

$branch   = '23';                       // this version's branch
=======
$version  = 2012120308.01;              // 20121203      = branching date YYYYMMDD - do not modify!
                                        //         RR    = release increments - 00 in DEV branches
                                        //           .XX = incremental changes

$release  = '2.4.8+ (Build: 20140220)';  // Human-friendly version name

$branch   = '24';                       // this version's branch
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
$maturity = MATURITY_STABLE;            // this version's maturity level
