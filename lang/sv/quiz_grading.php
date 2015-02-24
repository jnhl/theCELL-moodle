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
 * Strings for component 'quiz_grading', language 'sv', branch 'MOODLE_20_STABLE'
 *
 * @package   quiz_grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotloadquestioninfo'] = 'Kunde inte ladda frågespecifik information';
$string['essayonly'] = 'De följande frågorna måste Du bedöma/betygssätta manuellt.';
$string['graded'] = '(betygsatt)';
$string['gradenextungraded'] = 'Bedöm nästa {$a} obedömda';
$string['gradeungraded'] = 'Bedöm alla {$a} obedömda';
$string['grading'] = 'Manuell bedömning/betygssättning';
$string['gradingall'] = 'Alla {$a} försök på denna fråga';
$string['gradingattempt'] = 'Försök nr {$a->attempt} av {$a->fullname}';
$string['gradingnextungraded'] = 'Nästa {$a} obedömda försök';
$string['gradingnotallowed'] = 'Du har inte tillstånd att manuellt sätta betyg på svaren på det här testet.';
$string['gradingreport'] = 'Manuell betygsrapport';
$string['gradingungraded'] = '{$a} obedömda försök';
$string['gradinguser'] = 'Försök av {$a}';
$string['invalidattemptid'] = 'Inget sånt försöks ID existerar';
$string['invalidquestionid'] = 'Bedömningsbar fråga med id {$a} kunde inte hittas';
$string['questiontitle'] = 'Fråga {$a->number} : "{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} försök {$a->openspan}graded{$a->closespan}).';
