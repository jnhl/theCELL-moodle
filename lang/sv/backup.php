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
 * Strings for component 'backup', language 'sv', branch 'MOODLE_20_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Välj om det skall göras automatisk säkerhetskopiering eller inte. Om manuell säkerhetskopiering väljs kommer automatisk säkerhetskopiering endast vara möjlig via CLI skript för automatiserad backup.
Säkerhetskopiering kan då göras manuellt på kommando prompten eller genom cron.';
$string['autoactivedisabled'] = 'Avaktiverad';
$string['autoactiveenabled'] = 'Aktiverad';
$string['autoactivemanual'] = 'Manuell';
$string['automatedbackupschedule'] = 'Schema';
$string['automatedbackupschedulehelp'] = 'Välj vilka dagar i veckan som automatiska säkerhetskopieringar ska genomföras.';
$string['automatedbackupsinactive'] = 'Webbplatsens administratör har inte aktiverat schemalagd säkerhetskopiering.';
$string['automatedbackupstatus'] = 'Status för schemalagd säkerhetskopiering.';
$string['automatedsettings'] = 'Schemalagda inställningar för säkerhetskopiering';
$string['automatedsetup'] = 'Inställningar för automatisk säkerhetskopiering';
$string['automatedstorage'] = 'Lagring för automatisk säkerhetskopiering';
$string['automatedstoragehelp'] = 'Välj vilken plats som automatiska säkerhetskopior ska lagras på.';
$string['backupactivity'] = 'Aktivitet av typ säkerhetskopiering: {$a}';
$string['backupcourse'] = 'Säkerhetskopierad kurs: {$a}';
$string['backupcoursedetails'] = 'Detaljer om kurs';
$string['backupcoursesection'] = 'Sektion: {$a}';
$string['backupcoursesections'] = 'Sektioner av kurs';
$string['backupdate'] = 'Datum för tagning';
$string['backupdetails'] = 'Detaljer om säkerhetskopiering';
$string['backupformat'] = 'Format';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupmode'] = 'Läge';
$string['backupmode10'] = 'Allmänt';
$string['backupmode30'] = 'Hubb';
$string['backupsection'] = 'Sektion för säkerhetskopiering av kurs: {$a}';
$string['backupsettings'] = 'Inställningar för säkerhetskopiering';
$string['backupsitedetails'] = 'Detaljer om webbplats';
$string['backupstage16action'] = 'Fortsätt';
$string['backupstage1action'] = 'Nästa';
$string['backupstage2action'] = 'Nästa';
$string['backupstage4action'] = 'Genomför säkerhetskopiering';
$string['backupstage8action'] = 'Fortsätt';
$string['backuptype'] = 'Typ';
$string['backuptypeactivity'] = 'Aktivitet';
$string['backuptypecourse'] = 'Kurs';
$string['backupversion'] = 'Version av säkerhetskopiering';
$string['cannotfindassignablerole'] = 'Rollen {$a} i säkerhetskopian kan inte likställas med någon av de roller som du har rätt (behörighet) att tilldela.';
$string['choosefilefromactivitybackup'] = 'Område för säkerhetskopiering av aktiviteter';
$string['choosefilefromactivitybackup_help'] = 'När säkerhetskopiering med standardinställningar görs kommer säkerhetskopiorna sparas här';
$string['choosefilefromautomatedbackup'] = 'Automatiska säkerhetskopior';
$string['choosefilefromautomatedbackup_help'] = 'Innehåller automatiskt genererade säkerhetskopior.';
$string['choosefilefromcoursebackup'] = 'Område för säkerhetskopiering av kurser';
$string['choosefilefromcoursebackup_help'] = 'När kurser säkerhetskopieras med standardinställningar kommer säkerhetskopiorna att sparas här';
$string['choosefilefromuserbackup'] = 'Område för privat säkerhetskopiering för användare';
$string['choosefilefromuserbackup_help'] = 'När säkerhetskopiering görs med "Anonymisera användarinformation" valet aktiverat kommer säkerhetskopiorna att sparas här';
$string['configgeneralactivities'] = 'Anger grundinställningen för att inkludera aktiviteter i en säkerhetskopia.';
$string['configgeneralanonymize'] = 'Om det är aktiverat alla uppgifter om användare kommer att anonymiseras som standard.';
$string['configgeneralblocks'] = 'Anger grundinställningen för att inkludera block i en säkerhetskopia.';
$string['configgeneralcomments'] = 'Anger grundinställningen för att inkludera kommentarer i en säkerhetskopia.';
$string['configgeneralfilters'] = 'Anger grundinställningen för att inkludera filter i en säkerhetskopia.';
$string['configgeneralhistories'] = 'Anger grundinställningen för att inkludera användarhistoria i en säkerhetskopia.';
$string['configgenerallogs'] = 'Om valet aktiverats kommer loggar att ingå i säkerhetskopiorna som standard.';
$string['configgeneralroleassignments'] = 'Om valet aktiverats kommer rolltilldelning att säkerhetskopieras.';
$string['configgeneralusers'] = 'Anger grundinställningen för om du vill inkludera användare i säkerhetskopior.';
$string['configgeneraluserscompletion'] = 'Om valet aktiverats kommer spårning av fullföljande att ingå i säkerhetskopior som standard.';
$string['confirmcancel'] = 'Avbryt säkerhetskopiering';
$string['confirmcancelno'] = 'Stanna';
$string['confirmcancelquestion'] = 'Är Du säker på att Du vill avbryta? All information som Du har matat in kommer att försvinna.';
$string['confirmcancelyes'] = 'Avbryt';
$string['coursecategory'] = 'Kategori som kursen återställs till';
$string['courseid'] = 'Ursprungligt ID';
$string['coursesettings'] = 'Inställningar för kurs';
$string['coursetitle'] = 'Titel';
$string['currentstage1'] = 'Inledande inställningar';
$string['currentstage16'] = 'Komplett';
$string['currentstage2'] = 'Inställningar för schema';
$string['currentstage4'] = 'Bekräftelse och förnyad kontroll';
$string['currentstage8'] = 'Utför säkerhetskopiering';
$string['dependenciesenforced'] = 'Dina inställningar har ändrats på grund av otillfredsställda beroenden';
$string['enterasearch'] = 'Ange en sökning';
$string['errorfilenamemustbezip'] = 'Filnamnet du anger måste vara en ZIP-fil och har .mbz förlängning';
$string['errorfilenamerequired'] = 'Du måste ange ett giltigt filnamn för denna säkerhetskopia';
$string['errorinvalidformat'] = 'Ogiltigt format för säkerhetskopiering';
$string['errorinvalidformatdesc'] = 'Den uppladdade filen är inte en giltig backupfil för Moodle och det gick inte att återställa den.';
$string['errorminbackup20version'] = 'Denna säkerhetskopia har skapats med en utvecklingsversion av Moodle backup ({$a->backup}). Minimikravet är {$a->min}. Säkerhetskopian kan inte återställas.';
$string['errormoodle1format'] = 'Återställer säkerhetskopior av typ Moodle 1.9';
$string['errorrestorefrontpage'] = 'Återställning över ingångssidan är inte tillåtet.';
$string['executionsuccess'] = 'Säkerhetskopian skapades utan problem.';
$string['filename'] = 'Filnamn';
$string['generalactivities'] = 'Ta med aktiviteter';
$string['generalanonymize'] = 'Anonymisera informationen';
$string['generalbackdefaults'] = 'Allmänna standardvärden för säkerhetskopieringar';
$string['generalblocks'] = 'Ta med block';
$string['generalcomments'] = 'Ta med kommentarer';
$string['generalfilters'] = 'Ta med filter';
$string['generalgradehistories'] = 'Ta med historik';
$string['generalhistories'] = 'Ta med historik';
$string['generallogs'] = 'Ta med loggar';
$string['generalroleassignments'] = 'Ta med tilldelningar av roller';
$string['generalusers'] = 'Ta med användare';
$string['generaluserscompletion'] = 'Ta med information om användarnas fullföljande av kurser/delar av kurser';
$string['importbackupstage16action'] = 'Fortsätt';
$string['importbackupstage1action'] = 'Nästa';
$string['importbackupstage2action'] = 'Nästa';
$string['importbackupstage4action'] = 'Utför import';
$string['importbackupstage8action'] = 'Fortsätt';
$string['importcurrentstage0'] = 'Val av kurser';
$string['importcurrentstage1'] = 'Inledande inställningar';
$string['importcurrentstage16'] = 'Komplett';
$string['importcurrentstage2'] = 'Inställningar för schema';
$string['importcurrentstage4'] = 'Bekräftelse och förnyad kontroll';
$string['importcurrentstage8'] = 'Utför import';
$string['importfile'] = 'Importera en säkerhetskopierad fil';
$string['importsuccess'] = 'Importen är komplett. Klicka för att återvända till kursen.';
$string['includeactivities'] = 'Ta med:';
$string['includeditems'] = 'Medtagna komponenter:';
$string['includesection'] = 'Sektion {$a}';
$string['includeuserinfo'] = 'Användardata';
$string['locked'] = 'Låst';
$string['lockedbyconfig'] = 'Den här inställningen har låsts av standardinställningarna för säkerhetskopiering';
$string['lockedbyhierarchy'] = 'Låst av beroenden';
$string['lockedbypermission'] = 'Du har inte tillräckliga behörigheter för att ändra den här inställningen.';
$string['managefiles'] = 'Administrera säkerhetskopierade filer';
$string['moodleversion'] = 'Version av Moodle';
$string['moreresults'] = 'Det finns för många resultat, ange en mer specifik sökning.';
$string['nomatchingcourses'] = 'Det finns inga kurser att visa';
$string['norestoreoptions'] = 'Det finns inga kategorier eller befintliga kurser du kan återställa till.';
$string['originalwwwroot'] = 'URL till säkerhetskopia';
$string['previousstage'] = 'Föregående';
$string['qcategory2coursefallback'] = 'Frågekategorin "{$a->name}", ursprungligen på systemnivå i backup-filen, kommer att återskapas inom den återställda kursen.';
$string['qcategorycannotberestored'] = 'Frågekategorin "{$a->name}" kan inte återskapas.';
$string['question2coursefallback'] = 'Frågekategorin "{$a->name}", ursprungligen på systemnivå i backup-filen, kommer att återskapas inom den återställda kursen.';
$string['questionegorycannotberestored'] = 'Frågorna "{$a->name}" kan inte skapas av återställningprocessen';
$string['restoreactivity'] = 'Återställ aktivitet';
$string['restorecourse'] = 'Återställ kurs';
$string['restorecoursesettings'] = 'Inställningar för kurs';
$string['restoreexecutionsuccess'] = 'Kursen skapades framgångsrikt. Klicka på "Nästa" för att komma till den.';
$string['restorenewcoursefullname'] = 'Namn på ny kurs';
$string['restorenewcourseshortname'] = 'Kortnamn för ny kurs';
$string['restorenewcoursestartdate'] = 'Nytt startdatum';
$string['restorerolemappings'] = 'Återställ kartläggning av roller';
$string['restorerootsettings'] = 'Återställ inställningar';
$string['restoresection'] = 'Återställ sektion';
$string['restorestage1'] = 'Bekräfta ';
$string['restorestage16'] = 'Kontrollera igen';
$string['restorestage16action'] = 'Utför återställning';
$string['restorestage1action'] = 'Nästa';
$string['restorestage2'] = 'Destination';
$string['restorestage2action'] = 'Nästa';
$string['restorestage32'] = 'Process';
$string['restorestage32action'] = 'Fortsätt';
$string['restorestage4'] = 'Inställningar';
$string['restorestage4action'] = 'Nästa';
$string['restorestage64'] = 'Komplett';
$string['restorestage64action'] = 'Fortsätt';
$string['restorestage8'] = 'Schema';
$string['restorestage8action'] = 'Nästa';
$string['restoretarget'] = 'Återställ må¨l';
$string['restoretocourse'] = 'Återställ till kurs:';
$string['restoretocurrentcourse'] = 'Återställ till den här kursen';
$string['restoretocurrentcourseadding'] = 'Slå samman den säkerhetskopierade kursen med den här kursen';
$string['restoretocurrentcoursedeleting'] = 'Ta bort innehållet i den här kursen och återställ sedan';
$string['restoretoexistingcourse'] = 'Återställ till en befintlig kurs';
$string['restoretoexistingcourseadding'] = 'Slå samman den säkerhetskopierade kursen med den befintliga kursen';
$string['restoretoexistingcoursedeleting'] = 'Ta bort innehållet i den befintliga kursen och återställ sedan';
$string['restoretonewcourse'] = 'Återställ som en ny kurs';
$string['restoringcourse'] = 'Återställning av kurs pågår';
$string['restoringcourseshortname'] = 'återställer';
$string['rootsettingactivities'] = 'Ta med aktiviteter';
$string['rootsettinganonymize'] = 'Anonymisera information om användare';
$string['rootsettingblocks'] = 'Ta med block';
$string['rootsettingcomments'] = 'Ta med kommentarer';
$string['rootsettingfilters'] = 'Ta med filter';
$string['rootsettinggradehistories'] = 'Ta med betygshistorik';
$string['rootsettinglogs'] = 'Ta med loggar för kurser';
$string['rootsettingroleassignments'] = 'Ta med tilldelningar av roller för användare';
$string['rootsettings'] = 'Inställningar för säkerhetskopiering';
$string['rootsettingusers'] = 'Ta med registrerade användare';
$string['rootsettinguserscompletion'] = 'Ta med detaljer om användares fullföljanden';
$string['sectionactivities'] = 'Aktiviteter';
$string['sectioninc'] = 'Ingår i säkerhetskopian (ingen användarinformation)';
$string['sectionincanduser'] = 'Ingår i säkerhetskopian tillsammans med användarinformation';
$string['selectacategory'] = 'Välj en kategori';
$string['selectacourse'] = 'Välj en kurs';
$string['setting_course_fullname'] = 'Namn på kurs';
$string['setting_course_shortname'] = 'Kortnamn för kurs';
$string['setting_course_startdate'] = 'Startdatum för kurs';
$string['setting_overwriteconf'] = 'Skriv över konfiguration för kurs';
$string['storagecourseandexternal'] = 'Filarea för kursens säkerhetskopian och den angivna katalogen';
$string['storagecourseonly'] = 'Filarea för kursens säkerhetskopia';
$string['storageexternalonly'] = 'Ange katalog för automatiska säkerhetskopior';
$string['totalcategorysearchresults'] = 'Summa kategorier: {$a}';
$string['totalcoursesearchresults'] = 'Summa kurser: {$a}';