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
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	 See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * English language strings for search block
 * @package	   block_search
 * @copyright	 Anthony Kuske <www.anthonykuske.com>
 * @license	   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//General blockyness
$string['pluginname'] = 'Sök';
$string['pagetitle'] = 'Sök';
$string['search'] = 'Sök';

//Placeholder text for the search box when shown in a block on a page
$string['search_input_text_block'] = 'Sök i den här kurs';

//Placeholder text for the search box when shown on the full search page
$string['search_input_text_page'] = 'Hitta kurser, aktiviteter, eller dokument';

//Sök form
$string['search_options'] = 'Sök alternativ:';
$string['search_all_of_site'] = 'Sök alla av {$a}';
$string['search_in_course'] = 'Sök i {$a} endast';
$string['include_hidden_results'] = 'Inkludera resultat som jag inte har tillgång till';

//Sök results
$string['error_query_too_short'] = 'Var god ställ en fråga med högst {$a} antal tecken.';
$string['search_results_for'] = 'Sök resultat för \'{$a}\'';
$string['search_results'] = 'Sök resultat';
$string['items_found'] = 'Poster hittade';
$string['showing'] = 'Visar {$a->start} till {$a->end} av {$a->total} resultat';
$string['no_results'] = 'Tyvärr hittades inga resultat på din sökning.';
$string['try_full_search'] = 'Menade du att söka hela sidan istället för endast denna kurs?';
$string['hidden_not_enrolled'] = 'Du går inte den här kursen.';
$string['hidden_not_available'] = 'Den här resursen är inte tillgänglig för dig.';
$string['folder_contents'] = 'Filer i mappar.';

//Sök stats
$string['search_took'] = 'Sökningen tog <strong>{$a}</strong> sekunder.';
$string['cached_results_generated'] = 'Cachade resultat från <strong>{$a}</strong>.';
$string['filtering_took'] = 'Att filtrera resultat tog <strong>{$a}</strong> sekunder.';
$string['user_cached_results_generated'] = 'Personifierade cachade resultat från <strong>{$a}</strong>.';
$string['displaying_took'] = 'Visning av resultat tog <strong>{$a}</strong> sekunder.';

//Admin settings
$string['settings_search_tables_name'] = 'Sök tabeller';
$string['settings_search_tables_desc'] = 'Vilka tabeller i databasen som blir genomsökta.';
$string['selectall'] = 'Välj alla';
$string['settings_cache_results_name'] = 'Cachade resultat för';
$string['settings_cache_results_desc'] = 'Hur lång tid (i sekunder) att chacha resultat för. 0 betyder inen caching. Standarn är 1 dag. This cache stores the resultat from the database, before they are personalised for a certain user (before results the user doesn\'t have access to are removed). Meaning this cache can be shared between different users and provides benefit when different users are searching for the same terms. If the content on your site doesn\'t change that often you can set this value higher.';

$string['settings_cache_results_per_user_name'] = 'Cache User-Specific Results For';
$string['settings_cache_results_per_user_desc'] = 'How long (in seconds) to cache filtered results for. 0 means no caching. Default is 15 minutes. This cache stores the results *after* results the user doesn\'t have access to have been removed. Each item in this cache is specific to a single user, so it only provides a benefit when the same person searches for the same thing again (or when they go to a different page in the results). It is reccomended to have this enabled for at least a few minutes, so users can view all the pages of results without the results having to be regenerated on each page. If it is disabled, the entire search must be run again when a user goes to another page of the results. If you think your users will search for the same thing often, consider increasing this value.';

$string['settings_log_searches_name'] = 'Log Sökes';
$string['settings_log_searches_desc'] = 'Should searches made be logged in the Moodle logs?';
$string['settings_allow_no_access_name'] = 'Show Hidden Results';
$string['settings_allow_no_access_desc'] = 'Allow users to tick "'. $string['include_hidden_results'] .'" to see results that aren\'t available to them. (This does not allow them to access the actual content that is found. But the user can see that it exists.)';
$string['settings_search_files_in_folders_name'] = 'Sök For Files Inside Folder Activities';
$string['settings_search_files_in_folders_desc'] = 'Should searches try to find files within "folder" activities/resources in kurser?';
$string['settings_results_per_page_name'] = 'Results Per Page';
$string['settings_results_per_page_desc'] = 'How many search results to show per page';
$string['settings_text_substitutions_name'] = 'Text Substitutions';
$string['settings_text_substitutions_desc'] = 'Text substitutions allow users to search for shortened words/phrases but still get results that contain the full phrase. For example, a user can search for "Docs" and  get results which contain the word "Documents" and/or "Docs".
Specify each replacement on it\'s own line in this format:
<pre>Docs => Documents
App => Application
Some Phrase => Some Much Longer Phrase</pre>';


//Advanced Sök Help
$string['advanced_search_title'] = 'Avancerade sökalternativ';
$string['advanced_search_desc'] = 'Lägg till dessa ord till din sökning för att förfina resultaten.';

$string['advanced_search_exclude_example'] = 'ord';
$string['advanced_search_exclude_desc'] = 'Hitta resultat som <strong>inte</strong> inkluderar ordet.';

$string['advanced_search_exact_example'] = 'ord i citat';
$string['advanced_search_exact_desc'] = 'Hitta resultat som innehåller en <strong>exakt fras</strong>';

$string['advanced_search_wildcard_example'] = 'w*d';
$string['advanced_search_wildcard_desc'] = '* är ett <strong>wildcard</strong>. Det kommer matcha både "word" och "weird".';

//Capabilities
$string['search:search'] = 'Genomför en sökning';
