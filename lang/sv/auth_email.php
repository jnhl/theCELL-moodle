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
 * Strings for component 'auth_email', language 'sv', branch 'MOODLE_20_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_changingemailaddress'] = 'Du har begärt en ändring av e-postadress från {$a->oldemail} till {$a->newemail}. Av säkerhetsskäl skickar vi ett e-postmeddelande till Din nya adress för att bekräfta att det är Din. Din e-postadress kommer att uppdateras så snart som Du öppnar länken i det meddelandet.';
$string['auth_emailchangecancel'] = 'Avbryt ändring av e-postadress';
$string['auth_emailchangepending'] = 'Aktivera ändringen av Din e-postadress. Öppna länken som Du har fått i {$a->preference_newemail}.';
$string['auth_emaildescription'] = 'E-postbekräftelse är standardvalet som autenticeringsmetod.  När användaren registrerar sig, väljer eget nytt användarnamn och lösenord, kommer en bekräftelse via e-post sändas till användarens e-postadress.  Detta e-postbrev innehåller en säker länk till en sida där användaren kan bekräfta sitt konto. Framtida inlogging kontrollerar bara användarnamn och lösenord mot de lagrade värdena i Moodles databas.';
$string['auth_emailnoemail'] = 'Vi försökte att skicka e-post till Dig men det misslyckades!';
$string['auth_emailnoinsert'] = 'Det gick inte att lägga till Din post i databasen!';
$string['auth_emailnowexists'] = 'Den e-postadress som Du försökte lägga till till Din profil har tilldelats någon annan efter Din ursprungliga begäran. Denna begäran har härmed avbrutits men Du kan pröva igen med en annan adress.';
$string['auth_emailrecaptcha'] = 'Lägger till ett audio/visuellt formulärelement till sidan där användare kan registrera sig själva med hjälp av e-post. Det här skyddar din webbplats mot de som skickar ut skräppost och bidrar till något som är värt att ta vara på. Se http://recaptcha.net/learnmore.html för mer detaljer.';
$string['auth_emailrecaptcha_key'] = 'Aktivera reCAPTCHA-elementet';
$string['auth_emailsettings'] = 'Inställningar';
$string['auth_emailupdate'] = 'Uppdatering av e-postadress';
$string['auth_emailupdatemessage'] = 'Käre/a  {$a->fullname},
Du har begärt en ändring av Din e-postadress för Ditt användarkonto på  {$a->site}. Var snäll och öppna länken nedan i Din webbläsare för att bekräfta den här ändringen.

 {$a->url},';
$string['auth_emailupdatesuccess'] = 'Användaren <em>{$a->fullname}</em>s e-postadress har framgångsrikt uppdaterats till <em>{$a->email}</em>.';
$string['auth_emailupdatetitle'] = 'Bekräftelse av uppdatering av e-postadress vid {$a->site}';
$string['auth_outofnewemailupdateattempts'] = 'Du har inga fler tillåtna försök att uppdatera Din e-postadress kvar. Din begäran om uppdatering har avbrutits.';
$string['pluginname'] = 'E-postbaserad autenticering';
