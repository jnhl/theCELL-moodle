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
 * Strings for component 'qtype_calculated', language 'sv', branch 'MOODLE_20_STABLE'
 *
 * @package   qtype_calculated
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Lägg till';
$string['addmoreanswerblanks'] = 'Lägg till ytterligare ett tomt svar';
$string['addmoreunitblanks'] = 'Tomma för ytterligare {$a} enheter';
$string['addsets'] = 'Lägg till uppsättning(-ar)';
$string['answerhdr'] = 'Svar';
$string['answerstoleranceparam'] = 'Toleransparametrar för svar';
$string['atleastoneanswer'] = 'Du behöver lämna åtminstone ett svar';
$string['atleastonerealdataset'] = 'Där ska finna minst ett verkligt dataset i frågetexten.';
$string['atleastonewildcard'] = 'Där ska finna minst ett wildcard i svarsformeln eller i frågetexten.';
$string['calcdistribution'] = 'Distribution';
$string['calclength'] = 'Decimalpositioner';
$string['calcmax'] = 'Max';
$string['calcmin'] = 'Min';
$string['choosedatasetproperties'] = 'Välj inställningar för datauppsättning.';
$string['choosedatasetproperties_help'] = 'En datauppsättning är en uppsättning värden/tal som sätts in som "wildcard" (slumptal). Du kan skapa en egen datauppsättning för en specifik fråga, eller en delat datauppsättning som kan användas för andra kalkylerade frågor inom kategorin.';
$string['correctanswershows'] = 'Det korrekta svaret visar';
$string['correctanswershowsformat'] = 'Format';
$string['correctfeedback'] = 'För rätt svar';
$string['dataitemdefined'] = 'med {$a} fördefinierade numeriska är tillgänlig';
$string['datasetrole'] = 'Wildcarden <strong>{x..}</strong> kommer att bytas ut mot numeriska värden från dess datauppsättning';
$string['deleteitem'] = 'Radera objekt';
$string['deletelastitem'] = 'Radera senaste objekt';
$string['editdatasets'] = 'Redigera wildcard-datauppsättningar';
$string['editdatasets_help'] = 'Wildcard-värden/tal kan skapas genom att ange ett värde/tal i varje fält och sedan klicka Lägg till-knappen. För att automatiskt generera 10 eller fler värden/tal, välj antal önskade värden/tal innan du klickar Lägg till-knappen.
En jämn fördelning innebär att varje värde/tal mellan högsta och lägsta angivna värde/tal är sannolikt att genereras; en logaritmisk fördelning innebär att lägre tal/värden är mer sannolika att genereras.';
$string['existingcategory1'] = 'kommer att använda ett redan befintligt gemensamt dataset.';
$string['existingcategory2'] = 'en fil från en redan existerande uppsättning filer som även används av andra frågor i denna kategori';
$string['existingcategory3'] = 'en länk från en redan existerande uppsättning länkar som även används av andra frågor i denna kategori';
$string['forceregeneration'] = 'tvinga omgenerering';
$string['forceregenerationall'] = 'generera om alla wildcards';
$string['forceregenerationshared'] = 'tvinga omgenerering bara om icke delade wildcards';
$string['getnextnow'] = 'Ta fram nytt "Objekt att lägga till" nu';
$string['incorrectfeedback'] = 'För fel svar';
$string['itemno'] = 'Objekt {$a}';
$string['itemscount'] = 'Antal<br />objekt';
$string['itemtoadd'] = 'Objekt att lägga till';
$string['keptcategory1'] = 'kommer att använda samma redan befintliga gemensammma dataset som tidigare';
$string['keptcategory2'] = 'en fil från samma kategori återanvändbara filuppsättning som tidigare';
$string['keptcategory3'] = 'en länk från samma kategori återanvändbara länkuppsättning som tidigare';
$string['keptlocal1'] = 'kommer att använda samma redan befintliga privata dataset som tidigare';
$string['keptlocal2'] = 'en fil från samma privata filuppsättning som tidigare';
$string['keptlocal3'] = 'en länk från samma privata länkuppsättning som tidigare';
$string['loguniform'] = 'Loguniform';
$string['makecopynextpage'] = 'Nästa sida (ny fråga)';
$string['mandatoryhdr'] = 'Obligatoriska \'wild cards\' finns med i svar';
$string['minmax'] = 'Värdeomfång';
$string['mustbenumeric'] = 'Du måste ange ett (an)tal här';
$string['mustnotbenumeric'] = 'Det här kan inte vara ett (an)tal';
$string['newcategory1'] = 'kommer att använda ett nytt gemensamt dataset.';
$string['newcategory2'] = 'en fil från en ny uppsättning filer som även kan användas av andra frågor i den här kategorin';
$string['newcategory3'] = 'en länk från en ny uppsättning länkar som även kan användas av andra frågor i den här kategorin';
$string['newlocal1'] = 'kommer att använda ett nytt privat dataset.';
$string['newlocal2'] = 'en fil från en ny uppsättning filer som bara kommer att användas av den här frågan';
$string['newlocal3'] = 'en länk från en ny uppsättning länkar som bara kommer att användas av den här frågan';
$string['newsetwildcardvalues'] = 'ny(-a) uppsättning(-ar) wildcard-värden';
$string['nextitemtoadd'] = 'Nästa \'komponent att lägga till\'';
$string['nextpage'] = 'Nästa sida';
$string['nocoherencequestionsdatyasetcategory'] = 'För fråge ID {$a->qid}, är kategori-ID {$a->qcat} inte identisk med det delade wildcard {$a->name} i kategori id {$a->sharedcat}. Redigera frågan.';
$string['nocommaallowed'] = 'Kommatecken kan inte användas, använd punkt som i "0.013" eller "1.3e-2".';
$string['nodataset'] = 'ingenting - detta är inte ett wild card';
$string['nosharedwildcard'] = 'Det finns inget gemensamt \'wild card\' i den här kategorin';
$string['notvalidnumber'] = 'Wildcardvärdet är inte ett giltigt tal';
$string['oneanswertrueansweroutsidelimits'] = 'Åtminstone ett korrekt svar utanför värdegränsen. <br /> Ändra svarstoleransen i  inställningarna som finns  i avancerade parametrar';
$string['param'] = 'Parameter <strong>{{$a}}</strong>';
$string['partiallycorrectfeedback'] = 'För delvis rätt svar';
$string['possiblehdr'] = 'Möjliga \'wild cards\' finns endast med i frågetexten';
$string['questiondatasets'] = 'Frågeuppsättningar';
$string['questiondatasets_help'] = 'Frågeuppsättninger med wildcards som kommer att användas i varje individuell fråga';
$string['questionstoredname'] = 'Frågans sparade namn';
$string['replacewithrandom'] = 'Ersätt med ett slumpvärde';
$string['reuseifpossible'] = 'återanvänd föregående värde om det är tillgängligt';
$string['setno'] = 'Uppsättning {$a}';
$string['setwildcardvalues'] = 'uppsättning(-ar) med wildcard-värde(-n)';
$string['sharedwildcardname'] = 'Delat wildcard';
$string['sharedwildcards'] = 'Delade wildcard';
$string['showitems'] = 'Visa';
$string['synchronize'] = 'Synkronisera datan från delade datauppsättningar med andra frågor i en test';
$string['synchronizeno'] = 'Synkronisera inte';
$string['synchronizeyes'] = 'Synkronisera';
$string['synchronizeyesdisplay'] = 'Synkronisera och visa den delade datauppsättningen som prefix i frågan namn';
$string['tolerance'] = 'Tolerans  &plusmn;';
$string['trueanswerinsidelimits'] = 'Rätt svar : {$a->correct} inom gränserna för sant värde {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">FEL Rätt svar : {$a->correct} utanför gränserna för sant värde{$a->true}</span>';
$string['uniform'] = 'Jämnt';
$string['updatecategory'] = 'Uppdatera kategorin';
$string['updatedatasetparam'] = 'Uppdatera datauppsättningens parametrar';
$string['updatetolerancesparam'] = 'Uppdatera svarens toleransparametrar';
$string['updatewildcardvalues'] = 'Uppdatera wildcards värde';
$string['useadvance'] = 'Använd knappen avancerat för att se felen';
$string['usedinquestion'] = 'Använd i fråga';
$string['wildcard'] = 'Wildcard {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Wildcard parametrar som används för att generera värdena';
$string['wildcardrole'] = 'Wildcard <strong>{x..}</strong> kommer att ersättas av numeriska värden från de som genererats';
$string['wildcards'] = 'Wildcard {a}...{z}';
$string['wildcardvalues'] = 'Wildcard(s) värden';
$string['wildcardvaluesgenerated'] = 'Wildcard(s) värden genererades';
$string['youmustaddatleastoneitem'] = 'Du måste lägga till minst ett datauppsättningsobjekt innan du kan spara den här frågan';
$string['youmustaddatleastonevalue'] = 'Du måste lägga till minst en uppsättning wildcard-värden innan du kan spara den här frågan';
$string['youmustenteramultiplierhere'] = 'Du måste ange en multiplikator här';
