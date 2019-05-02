<?php
// Official SVN Trunk Rev: 2354
$locale['400'] = "Download";
// Download File Information
$locale['410'] = "[NOWY]";
$locale['411'] = "Licencja:";
$locale['412'] = "O/S:";
$locale['413'] = "Wersja:";
$locale['414'] = "Dodano:";
$locale['415'] = "��cznie plik�w:";
$locale['416'] = "Pobierz";
$locale['417'] = "Download";
$locale['418'] = "Strona domowa";
$locale['419'] = "Zrzut ekranu";
$locale['420'] = "Nazwa";
$locale['421'] = "Data";
$locale['422'] = "Autor";
$locale['423'] = "Wersja";
$locale['424'] = "Pobra�";
$locale['425'] = "Komentarzy";
$locale['426'] = "Ocen";
$locale['427'] = "Kalendarz";
$locale['428'] = "Informacje";
$locale['429'] = "Statystyka";
// Downloads Notices
$locale['430'] = "Brak udost�pnionych kategorii downloadu.";
$locale['431'] = "Brak udost�pnionych plik�w do pobrania.";
// Statistics
$locale['440'] = "��czna liczba pobra�:";
$locale['441'] = "Najpopularniejszy plik:";
$locale['442'] = "Najnowszy plik:";
// Search and filters
$locale['450'] = "U�yj filtr�w po prawej, aby zaw�zi� zakres poszukiwa�.";
$locale['451'] = "Wszystkie";
$locale['452'] = "ID";
$locale['453'] = "Tytu�u";
$locale['454'] = "Autora";
$locale['455'] = "Pobra�";
$locale['456'] = "Daty";
$locale['457'] = "Rosn�co";
$locale['458'] = "Malej�co";
$locale['459'] = "Zastosuj";
$locale['460'] = "Przeszukaj download:";
$locale['461'] = "Szukaj";
$locale['462'] = "Kategoria:";
$locale['463'] = "Sortuj wg:";

/* My own patch, if you don't want it - comment lines below.
 * To moja w�asna �atka, je�li nie chcesz z niej korzysta� - zakomentuj poni�sze linie
 * Tomasz "jantom" Jankowski, Date: 10 04 2011 23:30 */
$locale['415_pl'] = "Liczba pobra�:";
replace_in_output ("<img src=\'".get_image("downloads")."\'(.*?)/><br />".$locale['415'],"<img src=\'".get_image("downloads")."\'$1/><br />".$locale['415_pl']);
?>
