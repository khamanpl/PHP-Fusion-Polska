<?php
// Official SVN Trunk Rev: 1960
$locale['r100'] = "Oceny";
$locale['r101'] = "Brak ocen. Mo�e czas doda� swoj�?";
$locale['r102'] = "Usu� ocen�";
$locale['r103'] = "Dodaj ocen�";
$locale['r104'] = "Tylko zarejestrowani u�ytkownicy mog� ocenia� zawarto�� strony<br /><a href='".BASEDIR."login.php'>Zaloguj si�</a> ".($settings['enable_registration'] ? " lub <a href='".BASEDIR."register.php'>zarejestruj</a>" : "").", �eby m�c zag�osowa�.";
$locale['r105'] = "Ocenione przez Ciebie na <b>%s</b> dnia %s";
$locale['r106'] = "Oce� dany materia�";
$locale['r107'] = "- nie wybrano oceny -";
$locale['r108'] = "0 g�os�w";
$locale['r109'] = "g�os";
$locale['r110'] = "g�os�w";
// Rating Options
$locale['r120'] = "�wietne!";
$locale['r121'] = "Bardzo dobre";
$locale['r122'] = "Dobre";
$locale['r123'] = "�rednie";
$locale['r124'] = "S�abe";

/* My own patch, if you don't want it - comment lines below.
 * To moja w�asna �atka, je�li nie chcesz z niej korzysta� - zakomentuj poni�sze linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 16:10 */
require_once INCLUDES."output_handling_include.php";
$locale['r110a'] = "g�osy";
replace_in_output("2 ".$locale['r110'],"2 ".$locale['r110a']);
replace_in_output("3 ".$locale['r110'],"3 ".$locale['r110a']);
replace_in_output("4 ".$locale['r110'],"4 ".$locale['r110a']);
?>
