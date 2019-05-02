<?php
// Official SVN Trunk Rev: 2363
$locale['400'] = "Aktualizacja";
// No upgrade
$locale['401'] = "Nie ma dost�pnych aktualizacji.";
// Stage 6 - User Field Categories
$locale['420'] = "Informacje kontaktowe";
$locale['421'] = "Dodatkowe informacje";
$locale['422'] = "Dodatkowe opcje";
$locale['423'] = "Statystyki";
$locale['430'] = "Kategorie p�l profilu";
$locale['432'] = "U�ytkownicy";
$locale['434'] = "Element�w na stronie";
$locale['435'] = "Polityka bezpiecze�stwa";
$locale['436'] = "Newsy";
$locale['437'] = "Download";
// v7.02 new locales
$locale['440'] = "Dodaj plik";
$locale['441'] = "Shoutbox";
$locale['442'] = "robots.txt";
$locale['443'] = "Dziennik zmian danych";
$locale['444'] = "Odnowienie has�a administratora";
$locale['445'] = "Dziennik b��d�w";
// Upgrade locales
$locale['500'] = "Jest dost�pna %s aktualizacja dla zainstalowanej wersji PHP-Fusion.";
$locale['501'] = "Wystarczy nacisn�� Aktualizacja, aby mie� najnowsz� wersj� PHP-Fusion.";
$locale['502'] = "Zako�czono aktualizacj� bazy danych.";
$locale['503'] = "wa�na";
$locale['504'] = ""; //minor, cleared by jantom
$locale['505'] = "Zamie� poni�szymi liniami ich odpowiedniki z pliku config.php!";
// Cookie Prefix
$locale['600'] = "Edytuj sw�j plik config.php i podmie� jego zawarto�� nast�puj�cym kodem:";

/* My own patch, if you don't want it - comment lines below.
 * To moja w�asna �atka, je�li nie chcesz z niej korzysta� - zakomentuj poni�sze linie
 * Tomasz "jantom" Jankowski, Date: 21 04 2011 16:00 */
require_once INCLUDES."output_handling_include.php";
replace_in_output("Please replace these lines with the lines in your config.php!",$locale['600']);
?>
