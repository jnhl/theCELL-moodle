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
 * Strings for component 'qtype_numerical', language 'sv', branch 'MOODLE_20_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Tomma utrymmen för {no}  fler svar';
$string['addmoreunitblanks'] = 'Tomma utrymmen för {no} fler enheter';
$string['answermustbenumberorstar'] = 'Svaret måste vara ett tal, eller \'*\'.';
$string['answerno'] = 'Svar {$a}';
$string['errornomultiplier'] = 'Du måste ange en multiplikator för den här enheten.';
$string['errorrepeatedunit'] = 'Du kan inte ha två enheter med samma namn.';
$string['noneditableunittext'] = 'ICKE redigerbar text för enheten Nr1';
$string['nonvalidcharactersinnumber'] = 'Ogiltigt tecken i nummer';
$string['notenoughanswers'] = 'Du måste åtminstone mata in ett svar.';
$string['nounitdisplay'] = 'Ingen enhetsgradering';
$string['numericalmultiplier'] = 'Multiplikator';
$string['numericalmultiplier_help'] = 'Multiplikatorn är den faktor med vilken det korrekta numeriska svaret kommer att multipliceras. Den första enheten (Enhet 1) har ursprungsfaktorn 1. Därför, om det korrekta numeriska svaret är 5500 och enheten är "W" för Enhet 1, vilken alltså har 1 som multiplikator, är det korrekta svaret "5500W". <BR>Om du lägger till enheten kW med multiplikatorn 0.001, läggs det korrekta svaret "5.5kW" till. <BR>Detta innebär att de angivna svaren "5500W" och "5.5kW" markeras som korrekt. <BR>Observera att den accepterade angivna toleransen också multipliceras, så en tillåten felmarginal om 100W blir en tillåten felmarginal om 0.1kW.';
$string['selectunit'] = 'Välj en enhet';
$string['selectunits'] = 'Välj enheter';
$string['unitappliedpenalty'] = 'Poängsättningen innefattar ett avdrag på {$a} för fel enhet.';
$string['unitedit'] = 'Redigera enhet';
$string['unithdr'] = 'Enhet {$a}';
$string['unitmandatory'] = 'Obligatorisk';
$string['unitmandatory_help'] = '* Svaret poängsätts med hänsyn till angiven enhet. * Avdrag tillämpas om fältet för enhet är tomt.';
$string['unitoptional'] = 'Valfri enhet';
$string['unitoptional_help'] = '* Om fältet för enhet inte är tomt, kommer svaret att bedömas ihop med denna enhet * Om enheten är felaktigt angiven (dåligt angiven eller okänd), kommer svaret att betraktas som ogiltigt.';
$string['unitpenalty'] = 'Avdrag för felaktig enhet.';
$string['validnumberformats'] = 'Giltiga talformat';
