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
 * Strings for component 'workshop', language 'sv', branch 'MOODLE_20_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Tillgänglighetskontroll';
$string['aggregategrades'] = 'Räkna om betyg';
$string['aggregation'] = 'Sammanställ betyg';
$string['allocate'] = 'Fördela inskickat';
$string['allocatedetails'] = 'förväntade:: {$a->expected}<br />inskickade: {$a->submitted}<br />att fördela: {$a->allocate}';
$string['allocation'] = 'Fördelning av inskickat';
$string['allocationdone'] = 'Fördelning klar';
$string['allocationerror'] = 'Fel vid fördelningen';
$string['allsubmissions'] = 'Alla inskickade uppgifter';
$string['alreadygraded'] = 'Redan bedömd/betygssatt';
$string['areainstructauthors'] = 'Instruktioner för inskickning av uppgifter';
$string['areainstructreviewers'] = 'Instruktioner för bedömning/värdering';
$string['areasubmissionattachment'] = 'Inskickade bilagor';
$string['areasubmissioncontent'] = 'Inskickade texter';
$string['assess'] = 'Bedöm/värdera/betygssätt';
$string['assessedexample'] = 'Inskickad exempeluppgift som är bedömd/värderad/betygssatt';
$string['assessedsubmission'] = 'Inskickad uppgift som är bedömd/värderad/betygssatt';
$string['assessingexample'] = 'Bedömer/värderar/betygssätter inskickad exempeluppgift';
$string['assessingsubmission'] = 'Bedömer/värderar/betygssätter inskickad uppgift';
$string['assessment'] = 'Bedömning';
$string['assessmentby'] = 'av <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Bedömning/värdering/betygssättning av {$a}';
$string['assessmentbyyourself'] = 'Bedömning/värdering/betygssättning av dig själv';
$string['assessmentdeleted'] = 'Bedömning återkallad';
$string['assessmentend'] = 'Sluttid för bedömningar/värderingar/betygssättningar';
$string['assessmentenddatetime'] = 'Sluttid för bedömningar/värderingar/betygssättningar:
{$a->daydatetime} ({$a->distanceday})';
$string['assessmentform'] = 'Formulär för bedömningar/värderingar/betygssättningar';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Bedömning/värdering/betygssättning</a> of <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Referens för bedömning/värdering/betygssättning';
$string['assessmentreferenceconflict'] = 'Det är inte möjligt att bedöma en exempelinlämning som du gav en referensbedömning.';
$string['assessmentreferenceneeded'] = 'Du måste bedöma denna exempelinlämning för att ge en referensbedömning. Klicka på knappen "Fortsätt" för att bedöma inlämningen.';
$string['assessmentsettings'] = 'Inställningar för bedömning/värdering/betygssättning';
$string['assessmentstart'] = 'Öppen för bedömningar/värderingar/betygssättningar från';
$string['assessmentstartdatetime'] = 'Öppen för bedömningar/värderingar/betygssättningar från  {$a->daydatetime} ({$a->distanceday})';
$string['assessmentweight'] = 'Bedömnings viktning';
$string['assignedassessments'] = 'Tilldelade arbeten att bedöma';
$string['assignedassessmentsnone'] = 'Du har inga tilldelade arbeten att bedöma';
$string['backtoeditform'] = 'Tillbaka till formuläret för att redigera';
$string['byfullname'] = 'av <a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = 'Beräkna betyg på bedömning';
$string['calculategradinggradesdetails'] = 'förväntat:  {$a->expected}<br />calculated: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Beräkna betyg på inskickat arbete';
$string['calculatesubmissiongradesdetails'] = 'förväntat:  {$a->expected}<br />calculated: {$a->calculated}';
$string['chooseuser'] = 'Välj användare...';
$string['clearaggregatedgrades'] = 'Rensa alla sammanställda betyg';
$string['clearaggregatedgradesconfirm'] = 'Är du säker på att du vill rensa de beräknade betygen för inskickade arbeten och betyg för bedömningar?';
$string['clearaggregatedgrades_help'] = 'De aggregerade betygen för inlämningar och betyg för bedömningar återställs. Du kan omberäkna dessa betyg från början i Betygsfas.';
$string['clearassessments'] = 'Töm bedömningar/värderingar/betyssättningar';
$string['clearassessmentsconfirm'] = 'Är du säker på att du vill ta bort alla betyg/bedömningar? Du kommer inte att kunna få tillbaka informationen på egen hand, alla granskare måste på nytt bedöma sina tilldelade inlämningsuppgifter.';
$string['clearassessments_help'] = 'De beräknade betygen för inlämningar samt betyg för bedömningar kommer att tas bort. Informationen om hur bedömningsformuläret ska fyllas i kommer behållas, men alla granskare måste öppna bedömningsformuläret på nytt och spara om det för att få de givna betygen att beräknas igen.';
$string['configexamplesmode'] = 'Förinställt läge för bedömningsexempel i Workshop.';
$string['configgrade'] = 'Förinställt högsta betyg för inskickade arbeten i Workshop.';
$string['configgradedecimals'] = 'Förinställd antal decimaler som ska visas för betyg i Wokshop.';
$string['configgradinggrade'] = 'Förinställt högsta betyg för bedömningar i Workshop.';
$string['configmaxbytes'] = 'Förinställd max-storlek för inskickade arbeten till Wokshop (kursens lokala inställningar påverkar också).';
$string['configstrategy'] = 'Förinställd betygsättningsmetod i Workshop.';
$string['createsubmission'] = 'Skicka in';
$string['daysago'] = 'för {$a} dagar sedan ';
$string['daysleft'] = '{$a} dagar kvar';
$string['daystoday'] = 'idag';
$string['daystomorrow'] = 'imorgon';
$string['daysyesterday'] = 'igår';
$string['editassessmentform'] = 'Redigera formulär för bedömning/värdering/betygssättning';
$string['editassessmentformstrategy'] = 'Redigera formulär för bedömning ({$a})';
$string['editingassessmentform'] = 'Redigerar formulär för bedömning/värdering/betygssättning';
$string['editingsubmission'] = 'Redigerar inskickad uppgiftslösning';
$string['editsubmission'] = 'Redigera inskickad uppgiftslösning';
$string['err_multiplesubmissions'] = 'Medan du redigerade detta formulär har en annan version av inlämningen sparats. Multipla inlämningar per användare är inte tillåtna.';
$string['err_removegrademappings'] = 'Kunde inte ta bort oanvända betygsmappningar';
$string['evaluategradeswait'] = 'Vänta tills bedömningarna är utvärderade och betygen beräknade.';
$string['evaluation'] = 'Betygsutvärdering';
$string['evaluationmethod'] = 'Betygsutvärderingsmetod';
$string['evaluationmethod_help'] = 'Metoden för att utvärdera hur bedömningar/värderingar/betygssättningar avgör hur bedömningen/värderingen/betygssättningen beräknas. F n finns det vara ett alternativ -att jämföra med den bästa bedömningen/värderingen/betygssättningen';
$string['example'] = 'Lägg till exempel på uppgiftslösning';
$string['exampleadd'] = 'Lägg till exempel på uppgiftslösning';
$string['exampleassess'] = 'Bedöm exempel på uppgiftslösning';
$string['exampleassessments'] = 'Exempel på uppgiftslösningar att bedöma';
$string['exampleassesstask'] = 'Bedöm exempel på uppgiftslösning';
$string['exampleassesstaskdetails'] = 'förväntad: {$a->expected}<br />assessed: {$a->assessed}';
$string['examplecomparing'] = 'Jämför bedömningar av exempel på uppgiftslösningar';
$string['exampledelete'] = 'Ta bort exempel';
$string['exampledeleteconfirm'] = 'Är du säker på att du vill ta bort följande exempelinlämning? Klicka på knappen "Fortsätt" för att ta bort inlämningen.';
$string['exampleedit'] = 'Redigera exempel';
$string['exampleediting'] = 'Redigerar exempel';
$string['exampleneedassessed'] = 'Du måste bedöma alla exempel på uppgiftslösningar först';
$string['exampleneedsubmission'] = 'Du måste skicka in ditt eget arbete och bedöma alla exempel på uppgiftslösningar först';
$string['examplesbeforeassessment'] = 'Bedömning av exempel på  uppgiftslösningar blir tillgängliga efter inskickad egen lösning och måste bedömas innan bedömning av andras arbete';
$string['examplesbeforesubmission'] = 'Bedömning av exempel på  uppgiftslösningar måste göras före inskick av eget arbete';
$string['examplesmode'] = 'Läge för exempel på  uppgiftslösningar';
$string['examplesubmissions'] = 'Prov på inskickade uppgiftslösningar';
$string['examplesvoluntary'] = 'Bedömning av exempel på  uppgiftslösningar är frivillig';
$string['feedbackauthor'] = 'Återkoppling för författaren';
$string['feedbackby'] = 'Återkoppling av {$a}';
$string['feedbackreviewer'] = 'Återkoppling för recensenten/utvärderaren';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Satta betyg';
$string['gradecalculated'] = 'Beräkna betyg för inskickad uppgift';
$string['gradedecimals'] = 'Antal decimaler i betyg/omdöme';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Betyg /omdöme: {$a->received} av {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (bedömning/värdering/betygssättning)';
$string['gradeitemsubmission'] = '{$a->workshopname} (inskickad uppgiftslösning)';
$string['gradeover'] = 'Åsidosätt betyg för inlämning';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Betygsrapport för Workshop';
$string['gradinggrade'] = 'Betyg/omdöme för betygssättning/omdöme';
$string['gradinggradecalculated'] = 'Beräknat betyg för bedömning';
$string['gradinggrade_help'] = 'Den inställning bestämmed det maximala betyget för bedömning av inskickat arbete.';
$string['gradinggradeof'] = 'Betyg för bedömning (av {$a})';
$string['gradinggradeover'] = 'Åsidosätt betyg för bedömning';
$string['gradingsettings'] = 'Inställningar för betyg';
$string['iamsure'] = 'Ja, jag är säker';
$string['info'] = 'Info';
$string['instructauthors'] = 'Instruktioner för inskickning av uppgiftslösningar';
$string['instructreviewers'] = 'Instruktioner för bedömning/värdering/betygssättning';
$string['introduction'] = 'Introduktioon';
$string['latesubmissions'] = 'Sent inskickade uppgiftslösningar';
$string['latesubmissionsallowed'] = 'Sent inskickade uppgiftslösningar accepteras';
$string['latesubmissions_desc'] = 'Tillåt inskickning av uppgiftslösningar efter sluttiden.';
$string['latesubmissions_help'] = 'Om aktiverat kan en workshopdeltagare lämna in sitt arbete efter tidsfristen för inlämning eller under bedömningsfasen. För sent inlämnade arbeten kan däremot inte redigeras.';
$string['maxbytes'] = 'Maximal filstorlek';
$string['modulename'] = 'Workshop';
$string['modulenameplural'] = 'Workshops';
$string['mysubmission'] = 'Min inskickade uppgiftslösning';
$string['nattachments'] = 'Max antal bilagor till inskickad uppgiftslösning';
$string['noexamples'] = 'Den här workshoppen har ännu inga exempel på uppgiftslösningar';
$string['noexamplesformready'] = 'Du måste definiera bedömningsformuläret innan du ger exempel på inlämningsuppgift';
$string['nogradeyet'] = 'Inget betyg ännu';
$string['nosubmissionfound'] = 'Studenten har inte skickat in någon uppgiftslösning.';
$string['nosubmissions'] = 'Inga inskickade uppgiftslöningar ännu.';
$string['notassessed'] = 'Ännu ej bedömd';
$string['nothingtoreview'] = 'Inget att granska';
$string['notoverridden'] = 'Ej överskriden';
$string['noworkshops'] = 'Det finns inga Workshops i den här kursen';
$string['noyoursubmission'] = 'Du har inte skickat in Ditt arbete ännu';
$string['nullgrade'] = '-';
$string['participant'] = 'Deltagare';
$string['participantrevierof'] = 'Deltagaren är utvärderare av ';
$string['participantreviewedby'] = 'Deltagaren utvärderas av ';
$string['phaseassessment'] = 'Bedömningsfas';
$string['phaseclosed'] = 'Stängd';
$string['phaseevaluation'] = 'Betygssättningsfasen';
$string['phasesetup'] = 'Inställningsfasen';
$string['phasesubmission'] = 'Inskickningsfasen';
$string['pluginadministration'] = 'Administration av workshop';
$string['pluginname'] = 'Workshop';
$string['prepareexamples'] = 'Förbered exempel på uppgiftslösningar';
$string['previewassessmentform'] = 'Förhandsgranska';
$string['publishedsubmissions'] = 'Inskickade uppgiftslösningar som har offentliggjorts';
$string['publishsubmission'] = 'Publicera uppgiftslösning';
$string['publishsubmission_help'] = 'Publicerade uppgiftslösningar är tillgängliga för andra studenter när Workshoppen är avslutad.';
$string['reassess'] = 'Bedöm/värdera/betygssätt igen';
$string['receivedgrades'] = 'Betyg mottagna';
$string['recentassessments'] = 'Workshoppens bedömningar:';
$string['recentsubmissions'] = 'Workshoppens inskickade uppgiftslösningar:';
$string['saveandclose'] = 'Spara och stäng';
$string['saveandcontinue'] = 'Spara och fortsätt att redigera';
$string['saveandpreview'] = 'Spara och förhandsgranska';
$string['selfassessmentdisabled'] = 'Självbedömning avstängd';
$string['someuserswosubmission'] = 'Det är minst en deltagare som ännu inte har skickat in sin uppgiftslösning';
$string['sortasc'] = 'Stigande sortering';
$string['sortdesc'] = 'Fallande sortering';
$string['strategy'] = 'Strategi för betygssättning';
$string['strategyhaschanged'] = 'Workshopens betygsstrategi har ändrats sedan formuläret öppnades för redigering.';
$string['strategy_help'] = 'Bestygssättningsstrategin bestämmer bedömningsformulär och metod för att betygssätta inskickade uppgiftslösningar. Det finns 4 varianter:<BR>
* <STRONG>Ackumulerande betygssättning - Kommentarer och ett betyg ges utifrån specificerade aspekter</STRONG><BR>
* <STRONG>Kommentarer</STRONG> - Kommentarer ges utifrån specificerade aspekter med betyg kan inte sättas.<BR>
* <STRONG>Antal fel</STRONG> - Kommentarer och en Ja/Nej-bedömning ges utifrån angivna påståenden<BR>
* <STRONG>Rubriker</STRONG> - Graderade påståenden som passar arbetet.';
$string['submission'] = 'Inskickad  uppgiftslösning';
$string['submissionattachment'] = 'Bilaga';
$string['submissionby'] = 'Inskickad uppgiftslösning av {$a}';
$string['submissioncontent'] = 'Innehåll i inskickad uppgiftslösning';
$string['submissionend'] = 'Sluttid för inskickning av uppgiftslösningar';
$string['submissionenddatetime'] = 'Sluttid för inskickning av uppgiftslösningar: {$a->daydatetime} ({$a->distanceday})';
$string['submissiongrade'] = 'Bedömning/värdering/betygssättning av inskickat bidrag';
$string['submissiongrade_help'] = 'Denna inställning bestämmer maximalt betyg för inskickat arbete.';
$string['submissiongradeof'] = 'Betyg för inskickad uppgiftslösning (av {$a})';
$string['submissionsettings'] = 'Inställningar för inskickat arbete';
$string['submissionstart'] = 'Öppen för inskickning av uppgiftslösningar';
$string['submissionstartdatetime'] = 'Öppen för inskickning av uppgiftslösningar från {$a->daydatetime} ({$a->distanceday})';
$string['submissiontitle'] = 'Titel';
$string['switchingphase'] = 'Byter fas';
$string['switchphase'] = 'Byt fas';
$string['switchphase10info'] = 'Du håller på att skifta workshopen till
<strong>Fas för initiering</strong>.  I den här fasen kan studenterna/eleverna/deltagarna/ de lärande inte redigera sina inskickade bidrag eller sina bedömningar/värderingar/betygssättningar. Som distanslärare kan Du använda den här fasen för att ändra intställningarna för workshopen och redigera strategin för formulären för bedömningar/värderingar/betygssättningar';
$string['switchphase20info'] = 'Du är på väg att flytta workshoppen till <strong>Inskickningsfasen</strong>. Studenterna kan skicka in sina arbeten under denna fasen (inom angivna datum om sådana angivits). Lärare kan fördela inskickade uppgifter för peer review/bedömning.';
$string['switchphase30info'] = 'Du är på väg att flytta workshoppen till <strong>Bedömningsfasen</strong>. I denna fasen kan deltagarna bedöma de uppgifter de fått sig tilldelade (inom angivna datum om sådana angivits).';
$string['switchphase40info'] = 'Du är på väg att flytta workshoppen till <strong>Betygssättningsfasen</strong>. I denna fasen kan studenterna inte ändra sina inskickade uppgifter eller de bedömningar de har gjort. Lärare kan använda "betygsvärderingsverktygen" för att beräkna slutliga betyg och ge återkoppling till bedömare/opponenter.';
$string['switchphase50info'] = 'Du är på väg att stänga workshoppen. Därmed kommer betygen att visas i betygsboken. Studenterna kan se sina inskickade uppgifter och sina bedömningar.';
$string['taskassesspeers'] = 'Bedöm  student/kollega';
$string['taskassesspeersdetails'] = 'summa: {$a->total}<br />pending: {$a->todo}';
$string['taskassessself'] = 'Bedöm/värdera/betygssätt dig själv';
$string['taskinstructauthors'] = 'Ge instruktioner för inskickad uppgift';
$string['taskinstructreviewers'] = 'Ge instruktioner för bedömning';
$string['taskintro'] = 'Formulera introduktionen av av Workshopen';
$string['tasksubmit'] = 'Skicka in ditt arbete';
$string['toolbox'] = 'Verktygslåda för Workshop';
$string['undersetup'] = 'Workshoppen är för närvarande under uppbyggnad. Var vänlig vänta tills den går in i nästa fas.';
$string['useexamples'] = 'Använd exempel';
$string['useexamples_desc'] = 'Exempel på uppgiftslösningar för att öva i att bedöma uppgiftslösningar';
$string['useexamples_help'] = 'Om aktiverad så kan studenterna prova att bedöma ett eller flera exempel på uppgiftslösningar och jämföra sina bedömningar med en referensbedömning. Betyget för detta räknas inte in i det slutliga betyget för omdömen.';
$string['usepeerassessment'] = 'Använd kamratbedömning (peer assessment)';
$string['usepeerassessment_desc'] = 'Studenter bedömer andra studenters inskickade arbeten.';
$string['usepeerassessment_help'] = 'Om aktiverad så kan studenten tilldelas en annan students arbete för att bedöma detta, och kommer själv att få ett betyg för detta tillsammans med betyget för det egna inskickade arbetet.';
$string['userdatecreated'] = 'inskickat <span>{$a}</span>';
$string['userdatemodified'] = 'ändrat <span>{$a}</span>';
$string['userplan'] = 'Workshop-planerare';
$string['userplan_help'] = 'Workshop-planeraren visar alla faser i aktiviteten och vilka uppgifter som ingår i varje fas. Den aktuella fasen är markerad, liksom genomförda uppgifter.';
$string['useselfassessment'] = 'Använd självbedömning';
$string['useselfassessment_desc'] = 'Studenter bedömer sitt eget arbete';
$string['useselfassessment_help'] = 'Om aktiverad kan studenten bli tilldelad sitt eget arbete för bedömning och kommer att få ett betyg för detta tillsammans med betyget för det egna inskickade arbetet.';
$string['weightinfo'] = 'Vikt: {$a}';
$string['withoutsubmission'] = 'Bedömare utan eget inskickat arbete';
$string['workshop:allocate'] = 'Fördela inskickade arbeten för bedömning';
$string['workshop:editdimensions'] = 'Ändra formulär för bedömning';
$string['workshopfeatures'] = 'Workshoppens möjligheter';
$string['workshop:manageexamples'] = 'Hantera exemepl på uppgiftslösningar';
$string['workshopname'] = 'Workshoppens namn';
$string['workshop:overridegrades'] = 'Ändra beräknade betyg';
$string['workshop:peerassess'] = 'Bedöm andras arbete';
$string['workshop:publishsubmissions'] = 'Publicera inskickade arbeten';
$string['workshop:submit'] = 'Skicka';
$string['workshop:switchphase'] = 'Byt fas';
$string['workshop:view'] = 'Granska workshoppen';
$string['workshop:viewallassessments'] = 'Visa alla bedömningar';
$string['workshop:viewallsubmissions'] = 'Visa alla inskickade arbeten';
$string['workshop:viewauthornames'] = 'Visa namn på författare';
$string['workshop:viewauthorpublished'] = 'Visa författare med publicerade uppgiftslösningar';
$string['workshop:viewpublishedsubmissions'] = 'Visa publicerade uppgiftslösningar';
$string['workshop:viewreviewernames'] = 'Visa namn på bedömare';
$string['yourassessment'] = 'Din bedömning';
$string['yoursubmission'] = 'Din inskickade uppgiftslösning';
