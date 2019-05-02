<?php
// Official SVN Trunk Rev: 2013
// Titles
$locale['400'] = "robots.txt";
// Messages
$locale['410'] = "Na pewno? Plik robots.txt zostanie przywr�cony do pocz�tkowych ustawie�.";
$locale['411'] = "Brak pliku robots.txt. Utw�rz go w g��wnym katalogu strony i spr�buj ponownie.";
$locale['412'] = "Zaktualizowano plik robots.txt.";
$locale['413'] = "Wyst�pi�y nast�puj�ce b��dy:";
$locale['414'] = "plik robots.txt jest tylko do odczytu.";
$locale['415'] = "nie mo�na by�o zapisa� pliku robots.txt.";
// Edit form
$locale['420'] = "Edytuj plik robots.txt";
$locale['421'] = "Wi�cej informacji na temat pliku robots.txt";
$locale['422'] = "Zapisz";
$locale['423'] = "Przywr�� domy�lne ustawienia";

/* My own patch, if you don't want it - comment lines below.
 * To moja w�asna �atka, je�li nie chcesz z niej korzysta� - zakomentuj poni�sze linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 10:30 */
require_once INCLUDES."output_handling_include.php";
$locale['421'] = "Wi�cej informacji na temat pliku robots.txt po ";
$locale['421a']= "<a href='http://www.robotstxt.org/' target='_blank'>angielsku</a> lub po <a href='http://pl.wikipedia.org/wiki/Robots.txt' target='_blank'>polsku</a>.";
replace_in_output("<a href=\'http://www.robotstxt.org/\' target=\'_blank\'>".$locale['421']."</a>",$locale['421'].addslashes($locale['421a']));
?>
