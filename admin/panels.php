<?php
// Official SVN Trunk Rev: 1853
// Panel Management
$locale['400'] = "Zarz�dzanie panelami";
$locale['401'] = "Nazwa";
$locale['402'] = "Miejsce";
$locale['403'] = "Kolejno��";
$locale['404'] = "Typ";
$locale['405'] = "Dost�p";
$locale['406'] = "Opcje";
// Panel Settings
$locale['420'] = "Lewa strona";
$locale['421'] = "Na g�rze";
$locale['422'] = "Prawa strona";
$locale['423'] = "Plik";
$locale['424'] = "Kod PHP";
$locale['425'] = "Na dole";
// Panel Options
$locale['430'] = "Przesu� na lew� stron�";
$locale['431'] = "Przesu� na praw� stron�";
$locale['432'] = "Przenie� wy�ej";
$locale['433'] = "Przenie� ni�ej";
$locale['434'] = "Edytuj";
$locale['435'] = "W��cz";
$locale['436'] = "Wy��cz";
$locale['437'] = "Usu�";
$locale['438'] = "Dodaj nowy";
$locale['439'] = "Od�wie� kolejno��";
$locale['440'] = "Usun�� panel?";
$locale['441'] = "Przesu� na lew� stron�";
$locale['442'] = "Przesu� na praw� stron�";
$locale['443'] = "Przenie� wy�ej";
$locale['444'] = "Przenie� ni�ej";
$locale['445'] = "Przesu� do paneli na g�rze";
$locale['446'] = "Przesu� do paneli na dole";
// Add/Edit Panel Form
$locale['450'] = "Edytuj panel";
$locale['451'] = "Dodaj panel";
$locale['452'] = "Nazwa:";
$locale['453'] = "Nazwa pliku panelu:";
$locale['454'] = "Je�li wybierzesz, zawarto�� panelu b�dzie zignorowana.";
$locale['455'] = "Zawarto�� panelu:";
$locale['456'] = "Has�o administratora:";
$locale['457'] = "Umiejscowienie:";
$locale['458'] = "Dost�pny dla:";
$locale['459'] = "Wy�wietl panel na wszystkich stronach";
$locale['460'] = "Podgl�d";
$locale['461'] = "Zapisz";
$locale['462'] = "Dodatkowe ograniczenia:";
$locale['463'] = "Przyk�ady:";
$locale['464'] = "Ukrywaj na tych stronach";
$locale['465'] = "Wy�wietlaj na tych stronach";
// Update/Add new Panel Errors
$locale['470'] = "Nie podano nazwy panelu.";
$locale['471'] = "Ju� istnieje panel o&nbsp;takiej nazwie.";
$locale['472'] = "Nie podano zawarto�ci panelu.";
$locale['473'] = "Nie wybrano pliku panelu.";
$locale['474'] = "Podano nieprawid�owe has�o administratora.";
$locale['475'] = "Musisz zaznaczy� \"Wy�wietl panel na wszystkich stronach\", gdy ograniczasz wy�wietlanie g�rnych lub dolnych paneli.";
// Update/Add new Panel Success/Fail
$locale['480'] = "Aktualizacja panelu";
$locale['481'] = "Nie mo�na by�o zaktualizowa� panelu.";
$locale['482'] = "Zaktualizowano panel.";
$locale['483'] = "Dodawanie nowego panelu";
$locale['484'] = "Nie mo�na by�o doda� nowego panelu.";
$locale['485'] = "Dodano nowy panel.";
$locale['486'] = "Powr�� do zarz�dzania panelami";
$locale['487'] = "Powr�� do pocz�tku panelu administratora";
$locale['488'] = "Od&#347;wie&#380;ono kolejno&#347;&#263;";

/* My own patch, if you don't want it - comment lines below. It makes table with panels wider
 * To moja w�asna �atka, je�li nie chcesz z niej korzysta� - zakomentuj poni�sze linie
 * Tomasz "jantom" Jankowski, Date: 03 04 2011 23:30 */
require_once INCLUDES."output_handling_include.php"; //Without it, after moving a panel, you can see error - Fatal error: Call to undefined function replace_in_output
replace_in_output("<div style=\'width:600px;\' class=\'panels tbl-border center floatfix\'>","<div style=\'width:80%;min-width:650px;\' class=\'panels tbl-border center floatfix\'>","si");
?>
