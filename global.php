<?php
// Official SVN Trunk Rev: 2364
/*English Language Fileset
 Produced by Nick Jones (Digitanium)
 Email: digitanium@php-fusion.co.uk
 Web: http://www.php-fusion.co.uk

 Polish (ISO-8859-2) Language Fileset for PHP-Fusion v7.02.03, based at translation for PHP-Fusion v7.01.xx
 Translations from english, modifications and tests:
 PHP-Fusion po Polsku (PHP-Fusion in Polish)
 https://launchpad.net/pf-pl
 Main translator: Tomasz Jankowski (jantom)
 Translator and tester: Micha� Pospieszy�ski (sony)
 This program is released as free software under the
 Affero GPL license.*/

// Locale Settings
setlocale(LC_TIME, "pl", "pl_PL", "polish"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-2";
$locale['xml_lang'] = "pl";
$locale['tinymce'] = "pl";
$locale['phpmailer'] = "pl";

// Full & Short Months
$locale['months'] = "&nbsp|stycze�|luty|marzec|kwiecie�|maj|czerwiec|lipiec|sierpie�|wrzesie�|pa�dziernik|listopad|grudzie�";
$locale['shortmonths'] = "&nbsp|st.|lt.|mar.|kwi.|maj|czer.|lip.|sier.|wrz.|pa�.|lis.|gru.";

// Standard User Levels
$locale['user0'] = "Go��";
$locale['user1'] = "U�ytkownik";
$locale['user2'] = "Administrator";
$locale['user3'] = "G��wny administrator";
$locale['user_na'] = "Nd.";
$locale['user_anonymous'] = "Konto ukryte";
// Standard User Status
$locale['status0'] = "Aktywne";
$locale['status1'] = "Zablokowane";
$locale['status2'] = "Nieaktywne";
$locale['status3'] = "Zawieszone";
$locale['status4'] = "Zablokowane zp. bezpiecze�stwa";
$locale['status5'] = "Wy��czone zp. bezczynno�ci";
$locale['status6'] = "Ukryte";
$locale['status7'] = "Wy��czone";
$locale['status8'] = "Bezczynne";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Nawigacja";
$locale['global_002'] = "Brak link�w\n";
// Users Online
$locale['global_010'] = "Aktualnie online";
$locale['global_011'] = "Go�ci online";
$locale['global_012'] = "U�ytkownik�w online";
$locale['global_013'] = "Brak u�ytkownik�w online";
$locale['global_014'] = "��cznie u�ytkownik�w";
$locale['global_015'] = "Nieaktywnych u�ytkownik�w";
$locale['global_016'] = "Najnowszy u�ytkownik";
// Forum Side panel
$locale['global_020'] = "Ostatnio na forum";
$locale['global_021'] = "Najnowsze tematy";
$locale['global_022'] = "Najciekawsze tematy";
$locale['global_023'] = "Brak temat�w na forum";
// Comments Side panel
$locale['global_025'] = "Ostatnie komentarze";
$locale['global_026'] = "Brak komentarzy";
// Articles Side panel
$locale['global_030'] = "Ostatnie artyku�y";
$locale['global_031'] = "Brak artyku��w";
// Downloads Side panel
$locale['global_032'] = "Ostatnie pliki";
$locale['global_033'] = "Brak plik�w";
// Welcome panel
$locale['global_035'] = "Powitanie";
// Latest Active Forum Threads panel
$locale['global_040'] = "Ostatnio poruszane tematy";
$locale['global_041'] = "Moje ostatnie tematy";
$locale['global_042'] = "Moje ostatnie posty";
$locale['global_043'] = "Nowe posty";
$locale['global_044'] = "Temat";
$locale['global_045'] = "Wy�wietle�";
$locale['global_046'] = "Odpowiedzi";
$locale['global_047'] = "Ostatni post";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Napisane przez";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Ankieta";
$locale['global_052'] = "Przeniesiony";
$locale['global_053'] = "Brak rozpocz�tych przez Ciebie temat�w.";
$locale['global_054'] = "Brak napisanych przez Ciebie post�w.";
$locale['global_055'] = "Nowych post�w od Twojej ostatniej wizyty: %u w %u tematach";
$locale['global_056'] = "Moje obserwowane tematy";
$locale['global_057'] = "Opcje";
$locale['global_058'] = "Przesta� <br /> obserwowa�";
$locale['global_059'] = "Brak obserwowanych przez Ciebie temat�w.";
$locale['global_060'] = "Przesta� obserwowa� temat?";
// News & Articles
$locale['global_070'] = "Napisane przez ";
$locale['global_071'] = "dnia ";
$locale['global_072'] = "Czytaj wi�cej";
$locale['global_073'] = " komentarzy";
$locale['global_073b'] = " komentarz";
$locale['global_074'] = " czyta�";
$locale['global_075'] = "Drukuj";
$locale['global_076'] = "Edytuj";
$locale['global_077'] = "News";
$locale['global_078'] = "Brak opublikowanych news�w.";
$locale['global_079'] = "Kategoria: ";
$locale['global_080'] = "Bez kategorii";
// Page Navigation
$locale['global_090'] = "Poprzednia";
$locale['global_091'] = "Nast�pna";
$locale['global_092'] = "Strona ";
$locale['global_093'] = " z&nbsp;";
// Guest User Menu
$locale['global_100'] = "Logowanie";
$locale['global_101'] = "Nazwa u�ytkownika";
$locale['global_102'] = "Has�o";
$locale['global_103'] = "Zapami�taj mnie";
$locale['global_104'] = "Zaloguj";
$locale['global_105'] = "Nie masz jeszcze konta? <br /><a href='".BASEDIR."register.php' class='side'>Zarejestruj si�</a>";
$locale['global_106'] = "Nie mo�esz si� zalogowa�?<br /> Popro� o&nbsp;<a href='".BASEDIR."lostpassword.php' class='side'>nowe has�o</a>";
$locale['global_107'] = "Rejestracja";
$locale['global_108'] = "Zapomniane has�o";
// Member User Menu
$locale['global_120'] = "Edytuj profil";
$locale['global_121'] = "Prywatne wiadomo�ci";
$locale['global_122'] = "Lista u�ytkownik�w";
$locale['global_123'] = "Panel administratora";
$locale['global_124'] = "Wyloguj";
$locale['global_125'] = "%u";
$locale['global_126'] = " nieprzeczytana wiadomo��";
$locale['global_127'] = " nieprzeczytane wiadomo�ci";
$locale['global_128'] = " nades�any materia�";
$locale['global_129'] = " nades�ane materia�y";
// Poll
$locale['global_130'] = "Ankieta";
$locale['global_131'] = "Zag�osuj";
$locale['global_132'] = "Musisz zalogowa� si�, aby m�c zag�osowa�.";
$locale['global_133'] = "g�os";
$locale['global_134'] = "g�os�w";
$locale['global_135'] = "Og�em g�os�w: ";
$locale['global_136'] = "Rozpocz�to: ";
$locale['global_137'] = "Zako�czono: ";
$locale['global_138'] = "Archiwum ankiet";
$locale['global_139'] = "Wybierz ankiet� z&nbsp;listy:";
$locale['global_140'] = "Zobacz wyniki";
$locale['global_141'] = "Wyniki ankiety";
$locale['global_142'] = "Brak przeprowadzanych ankiet.";

//Captcha
$locale['global_150'] = "Kod potwierdzaj�cy:";
$locale['global_151'] = "Wpisz kod potwierdzaj�cy:";

// Footer Counter
$locale['global_170'] = "unikalna wizyta";
$locale['global_171'] = "unikalne wizyty";
$locale['global_172'] = "Wygenerowano w&nbsp;sekund: %s";
$locale['global_173'] = "zapyta� MySQL";
// Admin Navigation
$locale['global_180'] = "Powr�� do panelu administracyjnego";
$locale['global_181'] = "Powr�� do strony g��wnej";
$locale['global_182'] = "<strong>Uwaga:</strong> Podane has�o administratora jest nieprawid�owe lub puste.";
// Miscellaneous
$locale['global_190'] = "Aktywowano tryb serwisowy na serwerze.";
$locale['global_191'] = "Twoje IP jest zablokowane.";
$locale['global_192'] = "Min�a wa�no�� ciasteczka (cookie). Zaloguj si� ponownie.";
$locale['global_193'] = "Nie mo�na by�o ustawi� ciasteczka (cookie). Upewnij si�, �e masz w��czon� obs�ug� ciasteczek w przegl�darce, aby m�c zalogowa� si�.";
$locale['global_194'] = "Konto zosta�o zablokowane.";
$locale['global_195'] = "Konto nie jest aktywne.";
$locale['global_196'] = "Nieprawid�owa nazwa u�ytkownika lub has�o.";
$locale['global_197'] = "Prosz� czeka� na przekierowanie...<br /><br />
[ <a href='index.php'>Nie chc� czeka�</a> ]";
$locale['global_198'] = "<strong>Ostrze�enie:</strong> Wykryto plik setup.php. Prosz�, usu� go natychmiast.";
$locale['global_199'] = "<strong>Ostrze�enie:</strong> Nie ustawiono has�a administratora, <a href='".BASEDIR."edit_profile.php'>ustaw je</a> natychmiast.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Szukaj";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Przejd� do tre�ci";
// No themes found
$locale['global_300'] = "nie znaleziono sk�rki.";
$locale['global_301'] = "Nie mo�na wy�wietli� strony. Jest to spowodowane brakiem plik�w odpowiadaj�cych za wygl�d strony. Je�li jeste� administratorem strony, uruchom swojego klienta FTP i&nbsp;wgraj do katalogu <em>/themes</em> jak�kolwiek sk�rk� zaprojektowan� dla <em>PHP-Fusion v7</em>. Nast�pnie sprawd� w&nbsp;<em>G��wnych ustawieniach</em> w&nbsp;<em>Panelu administratora</em> oraz upewnij si�, �e wybrana tam sk�rka jest w&nbsp;Twoim katalogu <em>/themes</em>. Je�li tak nie jest, sprawd�, czy wgrana sk�rka ma tak� sam� nazw� (wliczaj�c w&nbsp;to wielko�� znak�w, wa�ne na serwerach uniksowych) jak ta wybrana w&nbsp;<em>G��wnych ustawieniach</em>.<br /><br />Je�li jeste� u�ytkownikiem tej strony, skontaktuj si� z&nbsp;administracj� strony poprzez wys�anie e-maila na adres ".hide_email($settings['siteemail'])." oraz poinformuj o&nbsp;istniej�cym problemie.";
$locale['global_302'] = "Wybrana przez Ciebie sk�rka nie istnieje lub jest niekompletna!";
// JavaScript Not Enabled
$locale['global_303'] = "<p>O&nbsp;nie! Ta strona potrzebuje w��czonej obs�ugi j�zyka <strong>JavaScript</strong>!</p><p>Twoja przegl�darka nie obs�uguje tego j�zyka lub ma wy��czon� jego obs�ug�. <strong>W��cz wykonywanie kodu JavaScript</strong> w swojej przegl�darce internetowej, aby skorzysta� ze wszystkich funkcji strony<br /> lub <strong>skorzystaj</strong> z&nbsp;programu obs�uguj�cego j�zyk JavaScript, np. <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Mozilla Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Apple Safari'>Apple Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Google Chrome</a> lub <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Windows Internet Explorer'>Windows Internet Explorer</a> w&nbsp;wersji wy�szej ni� 6.</p>";
// User Management
// Member status
$locale['global_400'] = "zawieszone";
$locale['global_401'] = "zablokowane";
$locale['global_402'] = "wy��czone";
$locale['global_403'] = "konto wy��czone";
$locale['global_404'] = "konto ukryte";
$locale['global_405'] = "ukryte";
$locale['global_406'] = "Konto zosta�o zbanowane z&nbsp;nast�puj�cych powod�w:";
$locale['global_407'] = "Konto jest zawieszone do ";
$locale['global_408'] = " z&nbsp;nast�puj�cych powod�w:";
$locale['global_409'] = "Konto zosta�o zablokowane ze wzgl�d�w bezpiecze�stwa.";
$locale['global_410'] = "Pow�d: ";
$locale['global_411'] = "Konto zosta�o zablokowane zp. bezczynno�ci";
$locale['global_412'] = "Konto zosta�o anonimizowane, prawdopodobnie z&nbsp;powodu bezczynno�ci";
// Banning due to flooding
$locale['global_440'] = "Automatyczne zbanowanie przez blokad� antyfloodow�";
$locale['global_441'] = "Twoje konto na ".$settings['sitename']." zosta�o zbanowane.";
$locale['global_442'] = "Witaj [USER_NAME]!\n
Z Twojego konta na ".$settings['sitename']." wys�ano zbyt wiele wiadomo�ci w kr�tkim czasie z nast�puj�cego IP: ".USER_IP.", w zwi�zku z czym zosta�o zablokowane. Powy�sze dzia�anie zosta�o podj�te w celu ochrony strony przed botami dodaj�cymi wiadomo�ci w kr�tkim odst�pie czasu.\n
Skontaktuj si� z administracj� strony wysy�aj�c e-mail na adres ".$settings['siteemail'].", �eby odblokowa� konto lub wyja�ni� zaistnia�� sytuacj�.\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";
// Lifting of suspension
$locale['global_450'] = "Automatyczne zdj�cie zawieszenia konta.";
$locale['global_451'] = "Zdj�cie zawieszenia konta na ".$settings['sitename'];
$locale['global_452'] = "Witaj USER_NAME!\n
Zawieszenie Twojego konta na ".$settings['siteurl']." zosta�o zdj�te. Zaloguj si� korzystaj�c z poni�szych danych:\n
Nazwa u�ytkownika: USER_NAME
Has�o: ukryte ze wzgl�d�w bezpiecze�stwa\n
Je�li nie pami�tasz has�a, zresetuj je korzystaj�c z poni�szego linka: LOST_PASSWORD\nZ pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";
$locale['global_453'] = "Witaj USER_NAME!\n
Zdj�to zawieszenie Twojego konta na ".$settings['siteurl'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";
$locale['global_454'] = "Reaktywowano konto na ".$settings['sitename'];
$locale['global_455'] = "Witaj USER_NAME!\n
Twoja ostatnia wizyta na ".$settings['siteurl']." reaktywowa�a Twoje konto, w zwi�zku z czym, przesta�o ono by� uznawane za bezczynne.\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";
// Function parsebytesize()
$locale['global_460'] = "Plik pusty";
$locale['global_461'] = "Bajt�w";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Trwa przekierowanie na adres %s, prosz� czeka�. Naci�nij, je�li Ci� nie przekierowa�o.";

// Captcha Locales
$locale['global_600'] = "Kod potwierdzaj�cy";
$locale['recaptcha'] = "pl";
$locale['recaptcha_l10n'] = "visual_challenge:'Graficzny kod potwierdzaj�cy', ";
$locale['recaptcha_l10n'] .= "audio_challenge:'D�wi�kowy kod potwierdzaj�cy', ";
$locale['recaptcha_l10n'] .= "refresh_btn:'Nowy test', ";
$locale['recaptcha_l10n'] .= "instructions_visual:'Wpisz dwa s�owa:', ";
$locale['recaptcha_l10n'] .= "instructions_context:'Wpisz s�owa w polu:', ";
$locale['recaptcha_l10n'] .= "instructions_audio:'Wpisz co s�yszysz:', ";
$locale['recaptcha_l10n'] .= "help_btn:'Pomoc (po angielsku)', ";
$locale['recaptcha_l10n'] .= "play_again:'Odtw�rz ponownie', ";
$locale['recaptcha_l10n'] .= "cant_hear_this:'Pobierz jako MP3', ";
$locale['recaptcha_l10n'] .= "incorrect_try_again:'Nieprawid�owy kod potwierdzaj�cy. Spr�buj ponownie.'";

//Miscellaneous
$locale['global_900'] = "Nie mo�na by�o przekonwertowa� z HEX na DEC";

/* My own patch, if you don't want it - comment lines below.
 * To moja w�asna �atka, je�li nie chcesz z niej korzysta� - zakomentuj poni�sze linie
 * Tomasz "jantom" Jankowski, Date: 21 04 2011 00:30 */
require_once INCLUDES."output_handling_include.php";
$locale['global_073c'] = " komentarze";
replace_in_output("2".$locale['global_073'],"2 ".$locale['global_073c']);
replace_in_output("3".$locale['global_073'],"3 ".$locale['global_073c']);
replace_in_output("4".$locale['global_073'],"4 ".$locale['global_073c']);
?>
