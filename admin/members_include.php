<?php
// Official SVN Trunk Rev: 1732
$locale['susp00'] = "Aktywne";
$locale['susp01'] = "Zablokowane";
$locale['susp02'] = "Nieaktywne";
$locale['susp03'] = "Zawieszone";
$locale['susp04'] = "Zablokowane zp. bezpiecze�stwa";
$locale['susp05'] = "Wy��czone zp. bezczynno�ci";
$locale['susp06'] = "Ukryte";
$locale['susp07'] = "Wy��czone";
$locale['susp08'] = "Bezczynne";

/*Sprawdzenie i wybranie odpowiedniej odmiany wyraz�w*/
if (!isset($_GET['action'])) {
	/*Normalny widok w PA, bez podj�cia jakiejkolwiek akcji (pole wyboru w przy li�cie u�ytkownik�w*/
	$locale['susp10'] = "Przywr��";
	$locale['susp11'] = "Zablokuj";
	$locale['susp12'] = "Deaktywuj";
	$locale['susp13'] = "Zawie�";
	$locale['susp14'] = "Zablokuj zp. bezpiecze�stwa";
	$locale['susp15'] = "Wy��cz zp. bezczynno�ci";
	$locale['susp16'] = "Ukryj";
	$locale['susp17'] = "Wy��cz";
	$locale['susp18'] = "Bezczynne";
} else {
	/*Odmiana dla dzienniku konta*/
	$locale['susp10'] = "Przywr�ce�";
	$locale['susp11'] = "Blokad";
	$locale['susp12'] = "Deaktywacji";
	$locale['susp13'] = "Zawiesze�";
	$locale['susp14'] = "Blokad zp. bezpiecze�stwa";
	$locale['susp15'] = "Wy��cze� zp. bezczynno�ci";
	$locale['susp16'] = "Ukry�";
	$locale['susp17'] = "Wy��cze�";
	$locale['susp18'] = "Bezczynno�ci";
}
$locale['susp_sys'] = "Akcje";
$locale['susp100'] = "Dziennik konta u�ytkownika %s";
$locale['susp100b'] = "%s dla %s";
$locale['susp101'] = "Dziennik konta dla  %s";
$locale['susp102'] = "Wcze�niejsza historia <strong>%s</strong> dla konta %s";
$locale['susp103'] = "Nr";
$locale['susp104'] = "Data";
$locale['susp105'] = "Typ/Pow�d";
$locale['susp106'] = "Administrator";
$locale['susp107'] = "Nie podano powodu!";
$locale['susp108'] = "IP";
$locale['susp109'] = "Akcje";
$locale['susp110'] = "Konto u�ytkownika nie posiada zarejestrowanych akcji.";
$locale['susp111'] = "Aktywowano";
$locale['susp112'] = "IP: ";
$locale['susp113'] = "Zdj�ty";
$locale['susp114'] = "Dziennik konta";
$locale['susp115'] = "Konta u�ytkownik�w";
?>
