<?php
// Official SVN Trunk Rev: 2435
/* My own patch, if you don't want it - comment lines below.
 * To moja w�asna �atka, je�li nie chcesz z niej korzysta� - zakomentuj poni�sze linie
 * Tomasz "jantom" Jankowski, Date: 17 04 2011 23:00 */
if (!isset($_POST['delete'])) {$_POST['delete']='';}
// End patch/Koniec �atki
$locale['100'] = "Dziennik zmiany danych";
$locale['101'] = "Id";
$locale['102'] = "Data";
$locale['103'] = "Nazwa u�ytkownika";
$locale['104'] = "Pole u�ytkownika";
$locale['105'] = "Poprzednia warto��";
$locale['106'] = "Nowa warto��";
$locale['107'] = "Sortuj wg:";
$locale['108'] = "Nazwa u�ytkownika/ID u�ytkownika:";
$locale['109'] = "Wy�lij";
$locale['110'] = "Usu� wpisy starsze ni�";
$locale['111'] = "dzie�/dni";
$locale['112'] = "Brak informacji w dzienniku.";
$locale['113'] = "Wybrana nazwa u�ytkownika:";
$locale['114'] = "Anuluj";
$locale['115'] = "Pole u�ytkownika:";
$locale['116'] = "Usu�";
$locale['117'] = "Opcje";
$locale['118'] = "Usuni�to wpisy starsze ni� %d ".($_POST['delete'] > 1 || $_POST['delete'] == 0 ? "dni." : "dzie�.");
$locale['119'] = "Usuni�to wpis";
?>
