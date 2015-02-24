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
 * Strings for component 'question', language 'sv', branch 'MOODLE_20_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Rapport över  möjliga problem i Din frågedatabas.';
$string['availableq'] = 'Tillgänglig?';
$string['badbase'] = 'Dålig grund före **:{$a}**';
$string['broken'] = 'Det här är en \'bruten\' länk, den pekar på en fil som inte finns.';
$string['byandon'] = 'av <em>{$a->user}</em> på <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Det gick inte att kopiera säkerhetskopian';
$string['cannotcreate'] = 'Kunde inte skapa ny post i question_attempts table';
$string['cannotcreatepath'] = 'Det gick inte att skapa vägen: {$a}';
$string['cannotdeletecate'] = 'Du kan inte ta bort den här kategorin eftersom det är standardkategorin i det här sammanhanget.';
$string['cannotenable'] = ' Det går inte att skapa frågetypen {$a} direkt.';
$string['cannotfindcate'] = 'Det gick inte att hitta posten för kategori';
$string['cannotfindquestionfile'] = 'Det gick inte att hitta datafilen för frågor i zip-filen';
$string['cannotgetdsfordependent'] = 'Det gick inte att hitta det angivna datasetet för en fråga som är beroende av dataset! (question: {$a[0]}, datasetitem: {a[1]})';
$string['cannotgetdsforquestion'] = 'Det gick inte att hitta det angivna datasetet för en kalkylerad fråga! (question: {$a})';
$string['cannothidequestion'] = 'Kunde inte dölja frågan';
$string['cannotimportformat'] = 'Import av det här formatet är tyvärr ännu inte implementerat!';
$string['cannotinsertquestion'] = 'Kunde inte infoga ny fråga!';
$string['cannotinsertquestioncatecontext'] = 'Det gick inte att foga in den nya kategorin {$a->cat} för frågor p g a ett ogiltigt \'contextid\' {$a->ctx}';
$string['cannotloadquestion'] = 'Det gick inte att ladda fråga';
$string['cannotmovequestion'] = 'Du kan inte använda det här skriptet för att flytta frågor som är associerade till filer från olika andra områden. ';
$string['cannotopenforwriting'] = 'Det går inte att öppna för att skriva: {$a}';
$string['cannotpreview'] = 'Du kan inte förhandsgranska de här frågorna!';
$string['cannotretrieveqcat'] = 'Det gick att återhämta kategori för frågor';
$string['cannotunhidequestion'] = 'Kunde inte göra frågan synlig.';
$string['cannotunzip'] = 'Det gick inte att packa upp filen';
$string['cannotwriteto'] = 'Det går inte att skriva exporterade frågor till {$a}';
$string['categorycurrent'] = 'Aktuell kategori';
$string['categorycurrentuse'] = 'Använd den här kategorin';
$string['categorydoesnotexist'] = 'Den här kategorin finns inte.';
$string['categorymoveto'] = 'Spara i kategori';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">Kategorin "{$a->name}"</a> i kursen "{$a->coursename}" kommer att få sin status för gemenskap ändrad från <strong>{$a->changefrom} till {$a->changeto}</strong>';
$string['chooseqtypetoadd'] = 'Välj en frågetyp som Du vill lägga till';
$string['clicktoflag'] = 'Klicka för att flagga den här frågan';
$string['clicktounflag'] = 'Klicka för att av-flagga den här frågan';
$string['contexterror'] = 'Du borde inte ha hamnat här om Du inte håller på att flytta en kategori från ett annat sammanhang';
$string['copy'] = 'Kopiera från {$a} och ändra länkar';
$string['created'] = 'Skapad';
$string['createdby'] = 'Skapad av';
$string['createdmodifiedheader'] = 'Skapad/Senast sparad';
$string['createnewquestion'] = 'Skapa en ny fråga';
$string['cwrqpfs'] = 'Slumpmässiga frågor som väljer frågor ur underkategorier.';
$string['cwrqpfsinfo'] = '<p>I samband med uppgraderingen till Moodle 1.9 kommer vi att fördela frågekategorier på olika sammanhang. En del frågekategorier och frågor på Din webbplats kommer att få sin status angående vad som är gemensamt ändrad. Detta är nödvändigt i det sällsynta fall där en eller fler slumpmässiga frågor i ett test har ställts in från en blandning av gemensamma och separata kategorier, så som är fallet på den här webbplatsen. Detta inträffar när en slumpmässig fråga är inställd till att välja ur underkategorier och en eller flera underkategorier har en annan status angående gemenskap än den föräldrakategori i vilken den slumpmässiga frågan har skapats.</p><p>De följande frågekategorierna, som slumpmässiga frågor i föräldrakategorier väljer frågor ur kommer i samband med uppgradering till Moodle 1.9 att få sin status ändrad till samma gemensamma status som kategorin med  den slumpmässiga frågan i. De följande kategorierna kommer att få sin status som gemensamma ändrad. De frågor som påverkas kommer att fortsätta att  fungera i alla befintliga test ända tills Du tar bort dem från dessa test.</p>';
$string['cwrqpfsnoprob'] = 'Inga frågekategorier på Din webbplats påverkas av funktionen \'Slumpmässiga frågor som väljer frågor ur underkategorier\'.';
$string['defaultfor'] = 'Förinställt standardvärde för {$a}';
$string['defaultinfofor'] = 'Det förinställda standardvärdet för frågor som är gemensamma i sammanhanget \'{$a}\'.';
$string['deletecoursecategorywithquestions'] = 'Det finns frågor i frågebanken associerade med denna kurskategori. Om du fortsätter kommer dessa att raderas. Vill du flytta dem först, ska du använda frågebanken administrationssida.';
$string['disabled'] = 'Avaktiverad';
$string['disterror'] = 'Distributionen {$a} förorsakade problem';
$string['donothing'] = 'Kopiera inte eller flytta filer eller ändra länkar.';
$string['editcategories'] = 'Redigera kategorier';
$string['editcategories_help'] = 'Istället för att ha allt i en enda lista kan frågor delas in i kategorier och underkategorier. Varje kategori har ett sammanhang som avgör var frågorna i kategorin kan användas.

<strong>Aktivitetskontext</strong> - frågor enbart tillgängliga i den aktuella aktivitetsmodulen.

<strong>Kurskontext</strong> - frågor tillgängliga i alla aktivitetsmoduler i kursen.

<strong>Kurskategorikontext</strong> - frågor tillgängliga i alla aktivitetsmoduler och kurser i kurskategorin.

<strong>Systemkontext</strong> - frågor tillgängliga i alla aktiviteter, kurser och kategorier på webbplatsen.

Kategorier används också för slumpfrågor, då frågor slumpas fram från en vald kategori.';
$string['editingcategory'] = 'Redigerar en kategori';
$string['editingquestion'] = 'Redigerar en fråga';
$string['editthiscategory'] = 'Redigera den här kategorin';
$string['emptyxml'] = 'Okänt fel - tomt imsmanifest.xml';
$string['enabled'] = 'Aktiverad';
$string['erroraccessingcontext'] = 'Det går inte att få tillgång till sammanhanget';
$string['errordeletingquestionsfromcategory'] = 'Fel i sb m borttagande av frågor från kategori {$a}';
$string['errorduringpost'] = 'Fel vid post-processing!';
$string['errorduringpre'] = 'Fel vid pre-processing!';
$string['errorduringproc'] = 'Fel uppstod!
(Error occurred during processing!)';
$string['errorduringregrade'] = 'Det gick inte att regradera fråga {$a->qid} på väg till läget {$a->stateid}';
$string['errorfilecannotbecopied'] = 'Fel: Det går inte att kopiera filen {$a}.';
$string['errorfilecannotbemoved'] = 'Fel: Det går inte att flytta filen {$a}.';
$string['errorfileschanged'] = 'De fel-filer som har länkats till från frågor har ändrats sedan formuläret visades.';
$string['errormanualgradeoutofrange'] = 'Betyget/omdömet {$a->grade} ligger inte mellan 0 och {$a->maxgrade} för fråga {$a->name}. Resultatet och kommentaren har inte sparats.';
$string['errormovingquestions'] = 'Fel vid flytt av frågor med id {$a}.';
$string['errorpostprocess'] = 'Fel vid post-processing!';
$string['errorpreprocess'] = 'Fel vid pre-processing!';
$string['errorprocess'] = 'Fel vid processing!';
$string['errorsavingcomment'] = 'Fel då kommentaren för fråga {$a->name} skulle sparas.';
$string['errorupdatingattempt'] = 'Försök {$a->id} gick inte att spara.';
$string['exportcategory'] = 'Kategori för export';
$string['exportcategory_help'] = '<p align="center"><b>Exportera kategori</b></p>

<p><b>Kategori:</b> nedrullningsmenyn kan Du använda för att
välja den kategori som innehåller de frågor som Du vill exportera.</p>

<p>Vissa format för import (GIFT and XML Format) tillåter att
kategorin tas med i den skrivna filen vilket (som alternativ)
gör det möjligt att återskapa kategorierna vid import.
För att dessa data ska tas med så måste Du markera kryssrutan
<b>Till fil</b>.</p>';
$string['exporterror'] = 'Fel uppstod vid export!';
$string['exportfilename'] = 'quiz';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Exportera frågor till fil';
$string['exportquestions_help'] = '<p>Den h&auml;r funktionen g&ouml;r det m&ouml;jligt f&ouml;r Dig att exportera en komplett kategori av fr&aring;gor till en textfil.  </p>
<p>L&auml;gg dock m&auml;rke till att i m&aring;nga filformat &auml;r det s&aring; att viss information
f&ouml;rsvinner n&auml;r man exporterar fr&aring;gorna. Det beror p&aring; att det finns m&aring;nga format som inte
st&ouml;djer alla de finesser som man kan anv&auml;nda i Moodle-fr&aring;gor.
Du b&ouml;r inte f&ouml;rv&auml;nta Dig att kunna exportera och importera fr&aring;gor
samtidigt som Du bevarar dem i exakt samma format.
Vissa typer av fr&aring;gor kanske inte g&aring;r att exportera alls.
Du b&ouml;r allts&aring; testa exporterade fr&aring;gor innan Du anv&auml;nder dem
i en skarp produktionsmilj&ouml;. </p>

<p>De format som f n st&ouml;djs &auml;r:</p>

<p><b>GIFT-formatet</b></p>
<ul>
<li>GIFT &auml;r det mest helt&auml;ckande import- och exportformatet som finns n&auml;r det g&auml;ller att
exportera testfr&aring;gor av Moodle-typ till en textfil.
Man har utformat det s&aring; att det ska vara en enkel metod f&ouml;r l&auml;rare att skriva fr&aring;gor som en textfil.
Det st&ouml;djer flervalsfr&aring;gor, fr&aring;gor av typen Sant-Falskt, kortsvar, para-ihop och numeriska fr&aring;gor.
Det st&ouml;djer &auml;ven test av typen: Vilket &auml;r det ord som saknas? L&auml;gg dock m&auml;rke till att test med inb&auml;ddade svar f n
inte st&ouml;djs. Olika fr&aring;getyper kan blandas i en enda textfil. Formatet st&ouml;djer &auml;ven kommentarer till rader,
namn p&aring; fr&aring;gor och procentviktade betyg/omd&ouml;men.
<br /><br />
Nedan kommer n&aring;gra exempel:
<pre>
Vem &auml;r begravd i "Grant\'s tomb"?{~Grant ~Jefferson =ingen}

Grant &auml;r{~begravd =gravsatt ~lever} i "Grant\'s tomb".
Grant &auml;r begravd i "Grant\'s tomb".{FALSE}

Vem &auml;r begravd i "Grant\'s tomb"?{=ingen =ingen alls}

N&auml;r f&ouml;ddes Ulysses S. Grant?{#1822}
</pre></li>
</ul>
<p align="right"><a href="help.php?file=formatgift.html&amp;module=quiz">Mer info om "GIFT"-formatet</a></p>

<p><b>XML-format för Moodle</b></p>

<p>Detta för Moodle specifika formatet exporterar testfrågor i ett enkelt XML-format. De kan sedan  importeras till en annan kategori av frågor eller användas i någon annan process så som XSLT transformation. XML-formatet kommer att exportera bilder som är kopplade till frågor.</p>

<p><b>IMS QTI 2.0</b></p>

<p>Exporterar i standardformatet IMS QTI (version 2.0). Lägg märke till att detta skapar en grupp filer inne i en enskild \'zip\'-fil.</p>
<p class="moreinfo"><a href="http://www.imsglobal.org/question/" target="_qti">Mer information om IMS QTI </a>
 (extern webbplats i nytt fönster)</p>

<p><b>XHTML</b></p>

<p>Exporterar kategorin som en enskild sida med \'strict\' XHTML. Varje fråga får en klar position inom sina egna &lt;div&gt; taggar. Om du vill använda den här sidan som-den-är så behöver du åtminstone redigera &lt;form&gt;-taggen vid början av &lt;body&gt;-sektionen för att tillhandahålla en lämplig åtgärd (t.ex. ett \'mailto\').</p>

<p>Import och export format är pluggbara resurser. Det kan finnas andra alternativa format i databasen för moduler och plugin-program.</p>

<p>Fler format kommer att tillkomma, vad helst annat som Moodle-anv&auml;ndare kan komma att bidra med! </p>';
$string['filecantmovefrom'] = 'Frågefilerna kan inte flyttas då du inte har rättigheter att flytta filer från den plats du försöker flytta frågorna från.';
$string['filecantmoveto'] = 'Frågefilerna kan inte flyttas då du inte har rättigheter att lägga till filer på den plats du försöker flytta frågorna till.';
$string['filesareacourse'] = 'arkiv för kursfiler';
$string['filesareasite'] = 'arkiv för filer på webbplatsnivå';
$string['filestomove'] = 'Flytta/kopiera filer till {$a}?';
$string['flagged'] = 'Flaggad';
$string['flagthisquestion'] = 'Flagga denna fråga';
$string['formquestionnotinids'] = 'Formuläret innehåll en fråga som saknar frågeID';
$string['fractionsnomax'] = 'Ett av svaren bör ha ett resultat på 100% så att det blir möjligt att få komplett betyg för den här frågan.';
$string['getcategoryfromfile'] = 'Hämta kategori från fil';
$string['getcontextfromfile'] = 'Hämta sammanhang från fil';
$string['ignorebroken'] = 'Ta inte hänsyn till brutna länkar';
$string['importcategory'] = 'Importera kategori';
$string['importcategory_help'] = 'Denna inställning bestämmer vilken kategori de importerade frågorna ska hamna i. Vissa importformat, som GIFT och Moodle XML, kan innehålla kategori - och kontextdata i filen.
För att använda denna data, istället för den valda kategorin, ska motsvarande alternativ kryssas för. Om kategorier som anges i den importerade filen inte existerar kommer de att skapas.';
$string['importquestions'] = 'Importera frågor från fil';
$string['importquestions_help'] = 'Denna funktion tillåter att frågor i olika format kan importeras från en textfil. Observera att filen måste ha UTF-8-kodning.';
$string['impossiblechar'] = 'Felaktigt tecken {$a} upptäcktes som parentestecken.';
$string['invalidarg'] = 'Giltiga argument saknas, eller är servern inte korrekt konfigurerad.';
$string['invalidcategoryidforparent'] = 'Ogiltigt kategori-id för förälder!';
$string['invalidcategoryidtomove'] = 'Ogiltigt kategori-id för att flytta!';
$string['invalidconfirm'] = 'Bekräftelse strängen var felaktig';
$string['invalidcontextinhasanyquestions'] = 'Ogiltig sammanhang skickas till question_context_has_any_questions.';
$string['invalidwizardpage'] = 'Felaktig eller ingen guidesida angiven!';
$string['lastmodifiedby'] = 'Senast ändrad av';
$string['linkedfiledoesntexist'] = 'Den länkade filen {$a} finns inte.';
$string['makechildof'] = 'Gör om \'{$a}\'  till ett barn';
$string['maketoplevelitem'] = 'Flytta till översta positionen';
$string['matchgrades'] = 'Matcha betygssättningar';
$string['matchgrades_help'] = 'Importerade betygspoäng måste motsvara den låsta listan över giltiga poäng - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (även negativa värden). Om inte, finns två alternativ:
* Fel om betyg inte finns i listan - Om en fråga innehåller betyg som inte återfinns i listan visas ett felmeddelande och frågan importeras inte.

* Närmsta värde om betyg inte finns i listan - Om en fråga innehåller ett betyg som inte återfinns i listan ändras dess betyg till det närmast liggande värdet i listan.';
$string['missingcourseorcmid'] = 'Måste ange courseid eller cmid till print_question.';
$string['missingcourseorcmidtolink'] = 'Måste ange courseid eller cmid till get_question_edit_link.';
$string['missingimportantcode'] = 'Den här frågan saknar viktig kod: {$a}';
$string['missingoption'] = 'Den stängda frågan {$a} saknar svarsalternativ.';
$string['modified'] = 'Senast sparad';
$string['move'] = 'Flytta från {$a} och byt länkar';
$string['movecategory'] = 'Flytta kategori';
$string['movedquestionsandcategories'] = 'Flyttar frågor och frågekategorier från {$a->oldplace} till {$a->newplace}.';
$string['movelinksonly'] = 'Ändra bara länkadresserna, flytta inte och kopiera inte filerna.';
$string['moveq'] = 'Flytta fråga/or';
$string['moveqtoanothercontext'] = 'Flytta fråga till ett annat sammanhang';
$string['movingcategory'] = 'Flyttar kategori';
$string['movingcategoryandfiles'] = 'Är Du säker på att Du vill flytta kategorin {$a->name} och alla barn-kategorier till sammanhanget för "{$a->contextto}"?<br />Vi har upptäckt {$a->urlcount} filer som är länkade från frågor i {$a->fromareaname}, skulle Du vilja kopiera eller flytta dessa till {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Är Du säker på att Du vill flytta kategorin "{$a->name}" och alla barn-kategorier till sammanhanget för "{$a->contextto}"?';
$string['movingquestions'] = 'Flyttar frågor och alla typer av filer';
$string['movingquestionsandfiles'] = 'Är Du säker på att Du vill flytta frågorna  {$a->questions}till sammanhanget <strong>"{$a->tocontext}"</strong>?Vi har upptäckt <strong>{$a->urlcount} filer</strong> som är länkade från dessa frågor i {$a->fromareaname}, skulle Du vilja kopiera eller flytta dessa till {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Är Du säker på att Du vill flytta frågorna  {$a->questions}till sammanhanget <strong>"{$a->tocontext}"</strong>?<br /> Det finns  <strong>inga filer</strong> som är länkade från dessa frågor i {$a->fromareaname}.';
$string['needtochoosecat'] = 'Du måste välja en kategori för att flytta den här frågan eller klicka på \'Avbryt\'.';
$string['nocate'] = 'Det finns ingen sådan kategori {$a}!';
$string['nopermissionadd'] = 'Du har inte tillstånd att lägga till frågor här.';
$string['nopermissionmove'] = 'Du har inte rättigheter att flytta frågor härifrån. Du måste spara frågan i den här kategorin eller spara den som en ny fråga.';
$string['noprobs'] = 'Det fanns inga problem i Din databas för frågor.';
$string['notenoughdatatoeditaquestion'] = 'Varken ett fråge-id, en kategori-id eller frågetyp har angivits.';
$string['notenoughdatatomovequestions'] = 'Du måste ange fråge-id för de frågor som Du vill flytta.';
$string['notflagged'] = 'Ej flaggad';
$string['novirtualquestiontype'] = 'Ingen virtuell frågetyp för frågetypen {$a}';
$string['parentcategory'] = 'Överliggande kategori';
$string['parentcategory_help'] = 'Den övergripande kategorin är den kategori som den nya kategorin kommer att placeras under. "Topp" innebär att kategorin inte är under någon annan kategori. Kategorisammanhangvisas med fet text. Det måste finna åtminstone en kategori i varje kategorisammanhang.';
$string['parenthesisinproperclose'] = 'Parentes före ** är inte korrekt avslutat i {$a}**';
$string['parenthesisinproperstart'] = 'Parentes före ** är inte korrekt påbörjad i {$a}**';
$string['penaltyfactor'] = 'Avdragsfaktor';
$string['penaltyfactor_help'] = '<p>Du kan ange vilken del (fraktion) av det uppn&aring;dda resultatet som b&ouml;r dras av f&ouml;r varje felaktigt svar. Det h&auml;r &auml;r bara relevant om testet k&ouml;rs i adaptiv form s&aring; att studenten/eleven/deltagaren/den l&auml;rande har r&auml;tt att svara upprepade g&aring;nger p&aring; fr&aring;gan. Faktorn f&ouml;r avdrag b&ouml;r vara ett tal mellan 0 och 1. En faktor f&ouml;r avdrag p&aring; 1 betyder att studenten/eleven/deltagaren/den l&auml;rande m&aring;ste svara r&auml;tt p&aring; fr&aring;gan i sitt f&ouml;rsta svar f&ouml;r att &ouml;verhuvudtaget f&aring; tilgodor&auml;kna sig n&aring;gra po&auml;ng f&ouml;r fr&aring;gan. En faktor f&ouml;r avdrag p&aring; 0 betyder att studenten/eleven/deltagaren/den l&auml;rande kan f&ouml;rs&ouml;ka hur m&aring;nga g&aring;nger som helst och &auml;nd&aring; f&aring; h&ouml;gsta po&auml;ng.</p>';
$string['permissionedit'] = 'Redigera den här frågan';
$string['permissionmove'] = 'Flytta den här frågan';
$string['permissionsaveasnew'] = 'Spara det här som en ny fråga';
$string['permissionto'] = 'Du har tillstånd att:';
$string['published'] = 'gemensam';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">Frågan "{$a->name}" ({$a->qtype})</a> finns i den här frågekategorin men den används även i <a href="{$a->qurl}">test "{$a->quizname}"</a> i en annan kurs "{$a->coursename}".';
$string['questionbank'] = 'Frågebank';
$string['questioncategory'] = 'Frågekategori';
$string['questioncatsfor'] = 'Frågekategorier för \'{$a}\'';
$string['questiondoesnotexist'] = 'Den här frågan finns inte.';
$string['questionname'] = 'Frågenamn';
$string['questionsaveerror'] = 'Fel vid sparande av fråga ({$a})';
$string['questionsmovedto'] = 'Frågor som fortfarande används flyttades till "{$a}" i den nuvarande kurskategorin.';
$string['questionsrescuedfrom'] = 'Frågor sparade från sammanhanget {$a}.';
$string['questionsrescuedfrominfo'] = 'Dessa frågor (varav vissa kan vara dolda) sparades när sammanhanget {$a} raderades, då dessa fortfarande användi i vissa tester eller andra aktiviteter.';
$string['questiontype'] = 'Frågetyp';
$string['questionuse'] = 'Använd frågan i den här aktiviteten';
$string['saveflags'] = 'Spara flaggstatus';
$string['selectacategory'] = 'Välj kategori:';
$string['selectaqtypefordescription'] = 'Välj en frågetyp för att se dess beskrivning.';
$string['selectquestionsforbulk'] = 'Välj frågor för bulkåtgärder';
$string['shareincontext'] = 'Dela i sammanhanget för {$a}';
$string['stoponerror'] = 'Avbryt vid fel';
$string['stoponerror_help'] = 'Detta alternativ bestämmer om iporten ska avbrytas när ett fel hittas, så att inga frågor importeras, eller om frågor med fel ska ignoreras och korrekta frågor importeras.';
$string['tofilecategory'] = 'Skriv kategori till fil';
$string['tofilecontext'] = 'Skriv sammanhang till fil';
$string['unknown'] = 'Okänd';
$string['unknownquestiontype'] = 'Okänd frågetyp: {$a}';
$string['unknowntolerance'] = 'Okänd toleranstyp  {$a}';
$string['unpublished'] = 'Inte gemensam';
$string['upgradeproblemcategoryloop'] = 'Ett problem upptäcktes när frågekategorier uppgraderades. Det finns en loop i kategoristrukturen. De påverkade kategoriernas id är {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Kunde inte uppdatera frågekategori {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Problem hittades då frågekategorier skulle uppgraderas. Kategorin {$a->id} hänvisar till förälder {$a->parent}, vilken inte existerar. Förälder ändrades för att lösa problemet.';
$string['wrongprefix'] = 'Felaktigt formatterat namnprefix {$a}';
$string['youmustselectaqtype'] = 'Du måste välja en frågetyp.';
$string['yourfileshoulddownload'] = 'Din exporterade fil borde starta laddas ned snart. Om inte, <a href="{$a}">klicka här</a>.';
