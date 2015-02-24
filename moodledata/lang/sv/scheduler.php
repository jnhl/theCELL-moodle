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
 * Strings for component 'scheduler', language 'sv', branch 'MOODLE_28_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Åtgärd';
$string['addappointment'] = 'Lägg till en annan student';
$string['addondays'] = 'Lägg till bokningar den';
$string['addscheduled'] = 'Lägg till schemalagd student';
$string['addscheduled_help'] = '<h3>Lägg till en bokning när mötestiden sätts upp</h3>
<p>Om du använder den här länken, kommer du lägga till en användare till möteslistan definierad av den här mötestidens information. Det kan vara ett enkelt och snabbt sätt att ställa in en kollektiv mötestid. </p>';
$string['addsingleslot'] = 'Lägg till en mötestid';
$string['addslot'] = 'Du kan lägga till ytterligare mötestider när som helst.';
$string['addstudenttogroup'] = 'Lägg till den här studenten till en mötesgrupp';
$string['allowgroup'] = 'Exklusiv mötestid - klicka för att ändra';
$string['allslotsincloseddays'] = 'Alla mötestider var på stängda dagar';
$string['allteachersgrading'] = 'Lärare kan betygsätta alla mötestider';
$string['alreadyappointed'] = 'Kan inte göra bokningen. Mötestiden är redan fullbokad.';
$string['appointagroup'] = 'Gruppbokning';
$string['appointagroup_help'] = 'Välj huruvida du vill göra bokningen endast för dig själv, eller för en hel grupp.';
$string['appointfor'] = 'Boka för';
$string['appointformygroup'] = 'Boka för hela min grupp';
$string['appointingstudent'] = 'Bokning för mötestid';
$string['appointingstudentinnew'] = 'Bokning för ny mötestid';
$string['appointmentmode'] = 'Välj mötestidens inställning';
$string['appointmentno'] = 'Bokning {$a}';
$string['appointmentnotes'] = 'Anteckningar för bokningen';
$string['appointments'] = 'Bokningar';
$string['appointsolo'] = 'bara mig';
$string['appointsomeone'] = 'Lägg till ny bokning';
$string['attendable'] = 'Kan närvaras';
$string['attendablelbl'] = 'Totalt antal kandidater för schemaläggning';
$string['attended'] = 'Närvarade';
$string['attendedlbl'] = 'Antal mottagna studenter';
$string['attendedslots'] = 'Mötestider som närvarats';
$string['availableslots'] = 'Tillgängliga mötestider';
$string['availableslotsall'] = 'Alla mötestider';
$string['availableslotsnotowned'] = 'Ägs inte';
$string['availableslotsowned'] = 'Ägs';
$string['bookwithteacher'] = 'Lärare';
$string['bookwithteacher_help'] = 'Välj en lärare för mötet.';
$string['break'] = 'Paus mellan mötestider';
$string['breaknotnegative'] = 'Pausens längd kan inte vara negativ';
$string['cancelledbystudent'] = '{$a} : Bokningen annullerad eller flyttad av en student';
$string['cancelledbyteacher'] = '{$a} : Bokningen annullerad av läraren';
$string['choice'] = 'Val';
$string['chooseexisting'] = 'Välj befintlig';
$string['choosingslotstart'] = 'Att välja starttid';
$string['comments'] = 'Kommentarer';
$string['complete'] = 'Bokad';
$string['composeemail'] = 'Skriv mail:';
$string['confirmdelete'] = 'Borttagning är permanent. Fortsätta ändå?';
$string['conflictingslots'] = 'Motstridiga';
$string['course'] = 'Kurs';
$string['csvencoding'] = 'Filens textkodning';
$string['csvfieldseparator'] = 'Fältseparatör för csv';
$string['csvparms'] = 'formatparametrar för csv';
$string['csvrecordseparator'] = 'Uppgiftsseparatör för csv';
$string['date'] = 'Datum';
$string['datelist'] = 'Översikt';
$string['defaultslotduration'] = 'Standard möteslängd';
$string['defaultslotduration_help'] = 'Standardlängden (i minuter) för mötestider du skapar';
$string['deleteallslots'] = 'Ta bort alla mötestider';
$string['deleteallunusedslots'] = 'Ta bort oanvända mötestider';
$string['deletemyslots'] = 'Ta bort alla mina mötestider';
$string['deleteselection'] = 'Ta bort valda mötestider';
$string['deletetheseslots'] = 'Ta bort dessa mötestider';
$string['deleteunusedslots'] = 'Ta bort mina oanvända mötestider';
$string['department'] = 'Varifrån?';
$string['disengage'] = 'Släpp mina bokningar';
$string['displayfrom'] = 'Visa bokningar för studenter från';
$string['distributetoslot'] = 'Distribuerad till hela gruppen';
$string['divide'] = 'Dela upp i mötestider?';
$string['dontforgetsaveadvice'] = 'Du har ändrat listan av bokade personer. Glöm inte att spara det här formuläret för att behålla ändringarna.';
$string['downloadexcel'] = 'Exporterar till Excel';
$string['downloads'] = 'Exporterar';
$string['duration'] = 'Varaktighet';
$string['durationrange'] = 'Mötestidens längd måste vara mellan {$a->min} och {$a->max} minuter.';
$string['email_applied_plain'] = 'En bokning har gjorts för en mötestid den {$a->date} vid {$a->time},
av studenten {$a->attendee}, i kursen:

{$a->course_short}: {$a->course}

bokningen gjordes genom schemaläggaren "{$a->module}" på sidan: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Ny bokning';
$string['email_cancelled_plain'] = 'Din bokning den {$a->date} vid {$a->time},
med studenten {$a->attendee} i kursen:

{$a->course_short} : {$a->course}

i schemaläggaren "{$a->module}" på sidan: {$a->site}

har blivit annullerad eller flyttad.';
$string['email_cancelled_subject'] = '{$a->course_short}: Bokningen annullerad eller flyttad av student';
$string['emailreminder'] = 'E-posta en påminnelse';
$string['emailreminderondate'] = 'E-posta en påminnelse den';
$string['email_reminder_plain'] = 'Du har en bokad mötestid
den {$a->date} från {$a->time} till {$a->endtime}
med {$a->attendant}.

Plats: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Bokningspåminnelse';
$string['email_teachercancelled_plain'] = 'Din bokade mötestid den {$a->date} vid {$a->time},
med {$a->staffrole} {$a->attendant} i kursen:

{$a->course_short}: {$a->course}

i schemaläggaren "{$a->module}" på sidan: {$a->site}

har blivit annullerad. Var vänlig sök en ny tid.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: bokningen annullerad av läraren';
$string['end'] = 'Slut';
$string['endtime'] = 'Sluttid';
$string['exclusive'] = 'Exklusiv';
$string['exclusivity'] = 'Exklusivitet';
$string['exclusivity_help'] = '<p>Du kan sätta en gräns för hur många studenter som kan söka en mötestid. </p>
<p>Sätter du gränsen till 1 (standard), kommer det sätta mötestiden i exklusivt läge.</p>
<p>Sätts gränsen till obegränsad (0), kommer den här mötestiden aldrig övervägas i utvärderingen av begränsingar, även om andra mötestider är satta som exklusiva eller begränsade i samma tidsram.
</p>';
$string['exclusivitylockedto'] = 'Du kan inte ändra mötestidsläge medan du schemalägger. Målmötestidens nuvarande gräns kommer gälla. Om mötestiden är ny, kommer en standardgräns på 1 att gälla.';
$string['exclusivityoverload'] = 'Mötestiden har {$a} bokade studenter, fler än vad som tillåts med den här inställningen.';
$string['explaingeneralconfig'] = 'De här alternativen kan enbart ställas in på systemnivå och kommer gälla för alla schemaläggare i den här Moodle-installationen.';
$string['exportinstructions'] = 'Du borde helst spara den genererade exportfilen på din hårddisk innan du använder filen.';
$string['finalgrade'] = 'Slutgiltigt betyg';
$string['for'] = 'för';
$string['forbidgroup'] = 'Grupptid - klicka för att ändra';
$string['forcewhenoverlap'] = 'Tvinga vid överlappning';
$string['forcourses'] = 'Välj studenter i kurser';
$string['friday'] = 'Fredag';
$string['generalconfig'] = 'Generell konfiguration';
$string['grade'] = 'Betyg';
$string['gradingstrategy'] = 'Betygsättningsstrategi';
$string['gradingstrategy_help'] = 'Välj hur betyg sammanställs i en schemaläggare där studenter kan ha flera bokningar.
    Betygsboken kan visa endera <ul><li>det genomsnittliga betyget eller</li><li>det högsta betyget</li></ul> som studenten åstadkommit.';
$string['group'] = 'grupp';
$string['groupbreakdown'] = 'Enligt gruppstorlek';
$string['groupscheduling'] = 'Aktivera gruppschemaläggning';
$string['groupscheduling_desc'] = 'Tillåt hela grupper att bli schemalagda samtidigt.
(Förutom det globala alternativet, måste aktivitetens gruppläge vara inställt på "Synliga grupper" eller "Separerade grupper" för att kunna aktivera denna funktion.)';
$string['groupsession'] = 'Gruppsession';
$string['groupsize'] = 'Gruppstorlek';
$string['guestscantdoanything'] = 'Gäster kan inte göra något här.';
$string['howtoaddstudents'] = 'För att kunna lägga till studenter till en schemaläggare som har en global skala, använd modulens rollinställning.<br/>Du kan också använda modulens rolldefinitioner för att definiera vilka som kan ta emot dina studenter.';
$string['ignoreconflicts'] = 'Ignorera schemamässiga konflikter';
$string['ignoreconflicts_help'] = 'Om den här checkrutan är markerad kommer mötestiden flyttas till det begärda datumet och tiden, även om andra mötestider redan finns vid samma tillfälle. Detta kan leda till överlappande bokningar för vissa lärare eller studenter och borde därför användas varsamt.';
$string['incourse'] = 'i kursen';
$string['introduction'] = 'Introduktion';
$string['invitation'] = 'Inbjudan';
$string['invitationtext'] = 'Var vänlig välj en mötestid för en bokning vid';
$string['isnonexclusive'] = 'Icke-exklusiv';
$string['lengthbreakdown'] = 'Enligt möteslängd';
$string['limited'] = 'Begränsad ({$a} kvar)';
$string['location'] = 'Plats';
$string['location_help'] = 'Specificera den schemalagda platsen för mötet.';
$string['markasseennow'] = 'Markera som sedd nu';
$string['markseen'] = 'Efter att du har haft ett möte med en student markera det vänligen som "Sedd" genom att bocka i checkrutan i tabellen ovan.';
$string['maxgrade'] = 'Välj det högsta betyget';
$string['maxstudentlistsize'] = 'Maximala längden på studentlistan';
$string['maxstudentlistsize_desc'] = 'The maximum length of the list of students who need to make an appointment, as shown in the teacher view of the scheduler. If there are more students than this, no list will be displayed.';
$string['maxstudentsperslot'] = 'Maximalt antal studenter per mötestid';
$string['maxstudentsperslot_desc'] = 'Gruppmöten / icke-exklusiva möten kan ha det här antalet studenter som mest. Notera även att valet "obegränsad" alltid kan väljas utöver detta för en mötestid.';
$string['meangrade'] = 'Välj det genomsnittliga betyget';
$string['meetingwith'] = 'Möte med din';
$string['meetingwithplural'] = 'Möte med dina';
$string['mins'] = 'minuter';
$string['minutes'] = 'minuter';
$string['minutesperslot'] = 'minuter per mötestid';
$string['missingstudents'] = '{$a} studenter måste fortfarande boka';
$string['missingstudentsmany'] = '{$a} studenter måste fortfarande boka. Ingen lista visas på grund av storleken.';
$string['mode'] = 'Läge';
$string['modulename'] = 'Schemaläggaren';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'Schemaläggare';
$string['monday'] = 'Måndag';
$string['move'] = 'Flytta';
$string['moveslot'] = 'Flytta mötestid';
$string['multiplestudents'] = 'Tillåta flera studenter per mötestid?';
$string['myappointments'] = 'Mina bokningar';
$string['name'] = 'Schemaläggarens namn';
$string['needteachers'] = 'Mötestider kan inte läggas till då den här kursen inte har några lärare';
$string['negativerange'] = 'Räckvidden är negativ. Så får det inte vara.';
$string['never'] = 'Aldrig';
$string['newappointment'] = '{$a} : Ny bokning';
$string['noappointments'] = 'Inga bokningar';
$string['noexistingstudents'] = 'Inga existerande studenter';
$string['nogroups'] = 'Ingen grupp tillgänglig för schemaläggning.';
$string['noresults'] = 'Inga resultat.';
$string['noschedulers'] = 'Det finns inga schemaläggare';
$string['noslots'] = 'Det finns inga bokningstider tillgängliga.';
$string['noslotsopennow'] = 'Inga mötestider är tillgängliga nu.';
$string['nostudents'] = 'Inga studenter bokade';
$string['nostudenttobook'] = 'Ingen student att boka';
$string['note'] = 'Betyg';
$string['noteacherforslot'] = 'Ingen lärare för mötestiderna';
$string['noteachershere'] = 'Ingen lärare tillgänglig';
$string['notifications'] = 'Notifikationer';
$string['notifications_help'] = 'När det här valet är aktivt, kommer lärare och studenter få notifikationer när bokningar görs eller annulleras.';
$string['notselected'] = 'Du har ännu inte gjort ett val';
$string['now'] = 'Nu';
$string['occurrences'] = 'Förekomster';
$string['on'] = 'på';
$string['onedaybefore'] = '1 dag före mötestiden';
$string['oneslotadded'] = '1 mötestid tillagd';
$string['oneweekbefore'] = '1 vecka före mötestiden';
$string['onthemorningofappointment'] = 'På morgonen för bokningen';
$string['overall'] = 'Överlag';
$string['overlappings'] = 'Andra mötestider överlappar';
$string['pluginadministration'] = 'Administration för Schemaläggaren';
$string['pluginname'] = 'Schemaläggare';
$string['registeredlbl'] = 'Student bokad';
$string['reminder'] = 'Påminnelse';
$string['remindertext'] = 'Det här är bara en påminnelse att du ännu inte har gjort din bokning. Var god välj en mötestid så snart som möjligt på';
$string['remindtitle'] = '{$a}: Bokningspåminnelse';
$string['remindwithwhom'] = 'Bokat möte med';
$string['resetappointments'] = 'Ta bort bokningar och betyg';
$string['resetslots'] = 'Ta bort mötestider i schemaläggaren';
$string['return'] = 'Tillbaka till kursen';
$string['revoke'] = 'Annullera bokningen';
$string['saturday'] = 'Lördag';
$string['save'] = 'Spara';
$string['savechoice'] = 'Spara mitt val';
$string['savecomment'] = 'Spara kommentaren';
$string['saveseen'] = 'Spara som sedd';
$string['schedule'] = 'Schema';
$string['scheduleappointment'] = 'Boka möte vid {$a}';
$string['schedulecancelled'] = '{$a} : Din bokning annullerad eller flyttad';
$string['schedulegroups'] = 'Schemalägg per grupp';
$string['scheduleinnew'] = 'Schemalägg i en ny lucka';
$string['scheduler'] = 'Schemaläggare';
$string['scheduler:addinstance'] = 'Lägg till en ny Schemaläggare';
$string['scheduler:appoint'] = 'Boka';
$string['scheduler:attend'] = 'Ta emot studenter';
$string['scheduler:canscheduletootherteachers'] = 'Boka mötestider för andra medlemmar i personalen';
$string['scheduler:canseeotherteachersbooking'] = 'Se och gå igenom andra lärares bokningar';
$string['scheduler:disengage'] = 'Avboka alla dina möten (studenter)';
$string['scheduler:manage'] = 'Hantera dina mötestider och bokningar';
$string['scheduler:manageallappointments'] = 'Hantera all data för schemaläggaren';
$string['scheduler:seeotherstudentsbooking'] = 'Se andra studenters bokningar för mötestiden';
$string['scheduler:seeotherstudentsresults'] = 'Se resultat för andra studenter från mötestiden';
$string['schedulestudents'] = 'Schemalägg per student';
$string['seen'] = 'Sedd';
$string['showemailplain'] = 'Visa epost-adresser i ren text';
$string['showemailplain_desc'] = 'I lärarens vy av schemaläggaren, visa e-post för studenter som behöver göra en bokning i klartext utöver "mailto:"-länkar.';
$string['slots'] = 'Mötestider';
$string['slotsadded'] = '{$a} mötestider har lagts till';
$string['slottype'] = 'Typ av mötestid';
$string['slotupdated'] = '1 mötestid uppdaterad';
$string['staffbreakdown'] = 'Av {$a}';
$string['staffmember'] = 'Personalmedlem';
$string['staffrolename'] = 'Lärarens rollnamn';
$string['staffrolename_help'] = 'Namnet på rollen för en användare som kan ta emot studenter. Det här är inte nödvändigtvis en lärare.';
$string['start'] = 'Start';
$string['starttime'] = 'Starttid';
$string['statistics'] = 'Statistik';
$string['strdownloadcsvgrades'] = 'CSV-export av betyg';
$string['strdownloadcsvslots'] = 'CSV-export av mötestider';
$string['strdownloadexcelsingle'] = 'Excel-export som ett blad';
$string['strdownloadexcelteachers'] = 'Excel-export av {$a}';
$string['strdownloadodssingle'] = 'OpenDoc-export som ett blad';
$string['strdownloadodsteachers'] = 'OpenDoc-export av {$a}';
$string['student'] = 'Student';
$string['studentbreakdown'] = 'Av student';
$string['studentcomments'] = 'Studentens anteckningar';
$string['studentdetails'] = 'Studentdetaljer';
$string['studentmultiselect'] = 'Varje student kan väljas endast en gång i denna mötestid';
$string['studentnotes'] = 'Dina anteckningar om mötet';
$string['students'] = 'Studenter';
$string['sunday'] = 'Söndag';
$string['teacher'] = 'Lärare';
$string['thursday'] = 'Torsdag';
$string['tuesday'] = 'Tisdag';
$string['unattended'] = 'Icke närvarad';
$string['unlimited'] = 'Obegränsad';
$string['unregisteredlbl'] = 'Ej bokade students';
$string['updategrades'] = 'Uppdatera betyg';
$string['updatesingleslot'] = '';
$string['updatingappointment'] = 'Uppdaterar en bokning';
$string['wednesday'] = 'Onsdag';
$string['welcomenewstudent'] = 'Tabellen nedan visar alla mötestider som är tillgängliga för bokningar. Gör ditt val genom att klicka i en radioknapp och glöm inte att klicka på "Spara mitt val" efteråt. Om du senare behöver ändra ditt val är det bara att gå tillbaka till den här sidan.';
$string['welcomenewteacher'] = 'Klicka vänligen på knappen nedan för att lägga till mötestider så att du kan träffa alla dina studenter.';
$string['what'] = 'Vad?';
$string['whathappened'] = 'Vad hände?';
$string['whatresulted'] = 'Vad var resultatet?';
$string['when'] = 'När?';
$string['where'] = 'Var?';
$string['who'] = 'Med vem?';
$string['whosthere'] = 'Vem är där ?';
$string['xdaysbefore'] = '{$a} dagar före mötestiden';
$string['xweeksbefore'] = '{$a} veckor före mötesttiden';
$string['yourappointmentnote'] = 'Dina privata kommentarer';
$string['yourslotnotes'] = 'Kommentarer på mötet';
