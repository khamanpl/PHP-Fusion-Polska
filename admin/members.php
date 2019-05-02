<?php
// Official SVN Trunk Rev: 1943
// Member Management Options
$locale['400'] = "U�ytkownicy";
$locale['401'] = "U�ytkownik";
$locale['402'] = "Dodaj nowego u�ytkownika";
$locale['403'] = "Typ u�ytkownika";
$locale['404'] = "Opcje";
$locale['405'] = "Zobacz konta";
$locale['406'] = "Edytuj";
$locale['407'] = "Aktywuj";
$locale['408'] = "Odblokuj";
$locale['409'] = "Zablokuj";
$locale['410'] = "Usu�";
$locale['411'] = "Nie ma kont u�ytkownik�w";
$locale['412'] = " rozpoczynaj�cych si� na ";
$locale['413'] = " zawieraj�cych w swojej nazwie ";
$locale['414'] = "Poka� wszystkich";
$locale['415'] = "Szukaj u�ytkownik�w:";
$locale['416'] = "Szukaj";
$locale['417'] = "Wybierz akcj�";
$locale['418'] = "Anuluj";
$locale['419'] = "Przywr��";
// Ban/Unban/Delete Member
$locale['420'] = "Zablokowano konto u�ytkownika";
$locale['421'] = "Odblokowano konto u�ytkownika";
$locale['422'] = "Usuni�to konto u�ytkownika";
$locale['423'] = "Na pewno chcesz usun�� konto tego u�ytkownika?";
$locale['424'] = "Aktywowano konto u�ytkownika";
$locale['425'] = "<h2>Uwaga!</h2><br />
Masz zamiar skasowa� u�ytkownika <strong>%s</strong> !<br />
Nast�puj�ca zawarto�� <u>u�ytkownika</u> zostanie skasowana na tej stronie:<br />
- Artyku�y<br />
- Newsy<br />
- Tematy na forum. Posty innych u�ytkownik�w w tych tamatach tak�e zostan� skasowane, jak i ankiety i za��czniki w tych tematach<br />
- Posty na forum<br />
- Za��czniki na forum<br />
- Komentarze<br />
- Prywatne wiadomo�ci wys�ane, lub odebrane przez tego u�ytkownika.<br />
- G�osy w ankietach<br />
- Oceny<br />
Je�li to nie jest np. spamer, zalecamy Zbanowanie, Zawieszenie, Wy��czenie lub Ukrycie u�ytkownika.<br />
<br />
Czy chcesz skasowa� tego u�ytkownika?<br />";
$locale['426'] = "Tak";
$locale['427'] = "Nie";
// Edit Member Details
$locale['430'] = "Edytuj profil";
$locale['431'] = "Zaktualizowano dane u�ytkownika";
$locale['432'] = "Powr�� do zarz�dzania u�ytkownikami";
$locale['433'] = "Powr�� do pocz�tku panelu administracyjnego";
$locale['434'] = "Nie mo�na by�o zaktualizowa� danych u�ytkownika:";
// Extra Edit Member Details form options
$locale['440'] = "Zapisz zmiany";
// Update Profile Errors
$locale['450'] = "Nie masz praw do edycji danych g��wnego adminstratora.";
$locale['451'] = "Musisz poda� nazw� u�ytkownika oraz e-mail.";
$locale['452'] = "Nazwa u�ytkownika zawiera nieobs�ugiwane znaki.";
$locale['453'] = "Niniejszy login (".(isset($_POST['user_name']) ? $_POST['user_name'] : "").") jest ju� w&nbsp;u�yciu.";
$locale['454'] = "Podano nieprawid�owy adres e-mail.";
$locale['455'] = "Niniejszy adres e-mail (".(isset($_POST['user_email']) ? $_POST['user_email'] : "").") jest ju� w&nbsp;u�yciu.";
$locale['456'] = "Nowe has�a u�ytkownika nie pasuj� do siebie.";
$locale['457'] = "Nieprawid�owe has�o u�ytkownika, prosz� o&nbsp;korzystanie wy��cznie ze znak�w alfanumerycznych.<br />Has�o musi zawiera� minimum 6 znak�w.";
$locale['458'] = "<strong>Ostrze�enie:</strong> nieprzewidziane zachowanie skryptu.";
// View Member Profile
$locale['470'] = "Profil u�ytkownika";
$locale['472'] = "Statystyki";
$locale['473'] = "Grupy u�ytkownika";
// Add Member Errors
$locale['480'] = "Dodaj konto u�ytkownika";
$locale['481'] = "Konto u�ytkownika zosta�o utworzone.";
$locale['482'] = "Nie mo�na by�o utworzy� konta u�ytkownika.";
// Suspension Log
$locale['510s'] = "Dziennik konta";
$locale['511s'] = "Brak informacji w dzienniku na temat tego konta u�ytkownika.";
$locale['512s'] = "Poprzednie ";
$locale['513'] = "Nr"; // as in number
$locale['514'] = "Data";
$locale['515'] = "Pow�d";
$locale['516'] = "Zawieszaj�cy";
$locale['517'] = "Akcje";
$locale['518'] = "Wr�� do profilu konta";
$locale['519'] = "Dziennik konta ";
$locale['520'] = "Zdj�te: ";
$locale['521'] = "IP: ";
$locale['522'] = "Jeszcze nie w��czone";
// User Management Errors
$locale['540'] = "B��d";
$locale['541'] = "B��d: Musisz wpisa� pow�d zawieszenia!";
$locale['542'] = "B��d: Musisz wpisa� pow�d zablokowania zp. bezpiecze�stwa!";
// User Management Admin
$locale['550'] = "Zawieszone konto: ";
$locale['551'] = "Czas trwania w&nbsp;dniach";
$locale['552'] = "Pow�d:";
$locale['553'] = "Zawie�";
$locale['554'] = "Brak informacji o&nbsp;zawieszeniach tego konta.";
$locale['555'] = "Je�li uwa�asz, �e dane konto powinno by� zablokowane, naci�nij 'Zablokuj'";
$locale['556'] = "Zdejmij zawieszenie konta: ";
$locale['557'] = "Zdj�te zawieszenie konta";
$locale['558'] = "Zdejmij blokad� konta: ";
$locale['559'] = "Zdj�to blokad� konta ";
$locale['560'] = "Zdejmij blokad� konta zp. bezpiecze�stwa: ";
$locale['561'] = "Zdejmij blokad� zp. bezpiecze�stwa konta";
$locale['562'] = "Zablokowane: ";
$locale['563'] = "Zablokowane zp. bezpiecze�stwa: ";
$locale['566'] = "Zdj�to blokad�";
$locale['568'] = "Na�o�ono blokad� konta zp. bezpiecze�stwa";
$locale['569'] = "Zdj�to blokad� konta zp. bezpiecze�stwa";
$locale['572'] = "Konto zawieszone";
$locale['573'] = "Zdj�to zawieszenie";
$locale['574'] = "Konto wy�aczone";
$locale['575'] = "Konto reaktywowane";
$locale['576'] = "Konto ukryte";
$locale['577'] = "Cofni�cie wy��czonia zp. bezczynno�ci konta";
$locale['578'] = "Konto wy��czone zp. bezczynno�ci i ukryte";
$locale['579'] = "Cofni�cie ukrycia konta";
$locale['580'] = "Wy��cz bezczynne konta";
$locale['581'] = "Masz ponad 50 bezczynnych kont. Musisz wykona� jeszcze <strong>%d</strong> raz(y) procedur� deaktywacji kont.";
$locale['582'] = "Reaktywuj";
$locale['583'] = "W��cz ponownie";
$locale['584'] = "Wybierz nowy status";
$locale['585'] = "To konto u�ytkownika zosta�o zablokowane z/p bezpiecze�stwa! Czy na pewno chcesz je odblokowa�?";
$locale['585a'] = "Podaj pow�d, dla kt�rego blokujesz lub odblokowujesz konto u�ytkownika ";

$locale['590'] = "Zawie�";
$locale['591'] = "Odwie�";
$locale['592'] = "zawieszasz";
$locale['593'] = "odwieszasz";
$locale['594'] = "Podaj pow�d, dla kt�rego  ";
$locale['595'] = " konto u�ytkownika ";
$locale['596'] = "Czas trwania:";

$locale['600'] = "Blokada zp. bezpiecze�stwa";
$locale['601'] = "blokowanie zp. bezpiecze�stwa";
$locale['602'] = "Odblokuj ";
$locale['603'] = "odblokowywanie";
$locale['604'] = "Pow�d:";

// Deactivation System
$locale['610'] = "Istnieje <strong>%d</strong> kont(o), na kt�re nie logowano si� od ponad <strong>%d ".($settings['deactivation_period'] > 1 ? "dni" : "dzie�")."</strong>, a&nbsp;kt�re mo�na oznaczy� jako bezczynne.<br />
U�ytkownicy b�d� mieli <strong>%d ".($settings['deactivation_response'] > 1 ? "dni" : "dzie�")."</strong> na zapobiegni�cie ich %s.";
$locale['611'] = "Pami�taj, �e cz�� u�ytkownik�w mog�a doda� do Twojej strony posty, komentarze, zdj�cia itp. Powy�sze tre�ci zostan� usuni�te razem z&nbsp;kontami, je�li w&nbspustawieniach systemu deaktywacji jako dzia�anie wobec bezczynnych kont masz ustawione usuwanie kont.";
$locale['612'] = "konto";
$locale['613'] = "konta";
$locale['614'] = "Wy��cz";
$locale['615'] = "ca�kowitym usuni�ciu";
$locale['616'] = "ukryciu";
$locale['617'] = "Ostrze�enie:";
$locale['618'] = "Zalecana jest zmiana ustawie� systemu deaktywacji z&nbsp;usuwania kont na ich ukrycie. Uchroni to przed utrat� danych!";
$locale['619'] = "Przejd� do odpowiedniej sekcji ustawie�.";
$locale['620'] = "ukryj";
$locale['621'] = "Automatyczna blokada nieaktywnych kont.";
?>