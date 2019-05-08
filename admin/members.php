<?php
// Official SVN Trunk Rev: 1942
// Member Management Options
$locale['400'] = "Użytkownicy";
$locale['401'] = "Użytkownik";
$locale['402'] = "Dodaj nowego użytkownika";
$locale['403'] = "Typ użytkownika";
$locale['404'] = "Opcje";
$locale['405'] = "Zobacz konta";
$locale['406'] = "Edytuj";
$locale['407'] = "Aktywuj";
$locale['408'] = "Odblokuj";
$locale['409'] = "Zablokuj";
$locale['410'] = "Usuń";
$locale['411'] = "Nie ma kont użytkowników";
$locale['412'] = " rozpoczynających się na ";
$locale['413'] = " zawierających w swojej nazwie ";
$locale['414'] = "Pokaż wszystkich";
$locale['415'] = "Szukaj użytkowników:";
$locale['416'] = "Szukaj";
$locale['417'] = "Wybierz akcję";
$locale['418'] = "Anuluj";
$locale['419'] = "Przywróć";
// Ban/Unban/Delete Member
$locale['420'] = "Zablokowano konto użytkownika";
$locale['421'] = "Odblokowano konto użytkownika";
$locale['422'] = "Usunięto konto użytkownika";
$locale['423'] = "Na pewno chcesz usunąć konto tego użytkownika?";
$locale['424'] = "Aktywowano konto użytkownika";
$locale['425'] = "<h2>Uwaga!</h2><br />
Masz zamiar skasować użytkownika <strong>%s</strong> !<br />
Następująca zawartość <u>użytkownika</u> zostanie skasowana na tej stronie:<br />
- Artykuły<br />
- Newsy<br />
- Tematy na forum. Posty innych użytkowników w tych tamatach także zostaną skasowane, jak i ankiety i załączniki w tych tematach<br />
- Posty na forum<br />
- Załączniki na forum<br />
- Komentarze<br />
- Prywatne wiadomości wysłane, lub odebrane przez tego użytkownika.<br />
- Głosy w ankietach<br />
- Oceny<br />
Jeśli to nie jest np. spamer, zalecamy Zbanowanie, Zawieszenie, Wyłączenie lub Ukrycie użytkownika.<br />
<br />
Czy chcesz skasować tego użytkownika?<br />";
$locale['426'] = "Tak";
$locale['427'] = "Nie";
// Edit Member Details
$locale['430'] = "Edytuj profil";
$locale['431'] = "Zaktualizowano dane użytkownika";
$locale['432'] = "Powróć do zarządzania użytkownikami";
$locale['433'] = "Powróć do początku panelu administracyjnego";
$locale['434'] = "Nie można było zaktualizować danych użytkownika:";
// Extra Edit Member Details form options
$locale['440'] = "Zapisz zmiany";
// Update Profile Errors
$locale['450'] = "Nie masz praw do edycji danych głównego adminstratora.";
$locale['451'] = "Musisz podać nazwę użytkownika oraz e-mail.";
$locale['452'] = "Nazwa użytkownika zawiera nieobsługiwane znaki.";
$locale['453'] = "Niniejszy login (".(isset($_POST['user_name']) ? $_POST['user_name'] : "").") jest już w&nbsp;użyciu.";
$locale['454'] = "Podano nieprawidłowy adres e-mail.";
$locale['455'] = "Niniejszy adres e-mail (".(isset($_POST['user_email']) ? $_POST['user_email'] : "").") jest już w&nbsp;użyciu.";
$locale['456'] = "Nowe hasła użytkownika nie pasują do siebie.";
$locale['457'] = "Nieprawidłowe hasło użytkownika, proszę o&nbsp;korzystanie wyłącznie ze znaków alfanumerycznych.<br />Hasło musi zawierać minimum 6 znaków.";
$locale['458'] = "<strong>Ostrzeżenie:</strong> nieprzewidziane zachowanie skryptu.";
// View Member Profile
$locale['470'] = "Profil użytkownika";
$locale['472'] = "Statystyki";
$locale['473'] = "Grupy użytkownika";
// Add Member Errors
$locale['480'] = "Dodaj konto użytkownika";
$locale['481'] = "Konto użytkownika zostało utworzone.";
$locale['482'] = "Nie można było utworzyć konta użytkownika.";
// Suspension Log
$locale['510s'] = "Dziennik konta";
$locale['511s'] = "Brak informacji w dzienniku na temat tego konta użytkownika.";
$locale['512s'] = "Poprzednie ";
$locale['513'] = "Nr"; // as in number
$locale['514'] = "Data";
$locale['515'] = "Powód";
$locale['516'] = "Zawieszający";
$locale['517'] = "Akcje";
$locale['518'] = "Wróć do profilu konta";
$locale['519'] = "Dziennik konta ";
$locale['520'] = "Zdjęte: ";
$locale['521'] = "IP: ";
$locale['522'] = "Jeszcze nie włączone";
// User Management Errors
$locale['540'] = "Błąd";
$locale['541'] = "Błąd: Musisz wpisać powód zawieszenia!";
$locale['542'] = "Błąd: Musisz wpisać powód zablokowania zp. bezpieczeństwa!";
// User Management Admin
$locale['550'] = "Zawieszone konto: ";
$locale['551'] = "Czas trwania w&nbsp;dniach";
$locale['552'] = "Powód:";
$locale['553'] = "Zawieś";
$locale['554'] = "Brak informacji o&nbsp;zawieszeniach tego konta.";
$locale['555'] = "Jeśli uważasz, że dane konto powinno być zablokowane, naciśnij 'Zablokuj'";
$locale['556'] = "Zdejmij zawieszenie konta: ";
$locale['557'] = "Zdjęte zawieszenie konta";
$locale['558'] = "Zdejmij blokadę konta: ";
$locale['559'] = "Zdjęto blokadę konta ";
$locale['560'] = "Zdejmij blokadę konta zp. bezpieczeństwa: ";
$locale['561'] = "Zdejmij blokadę zp. bezpieczeństwa konta";
$locale['562'] = "Zablokowane: ";
$locale['563'] = "Zablokowane zp. bezpieczeństwa: ";
$locale['566'] = "Zdjęto blokadę";
$locale['568'] = "Nałożono blokadę konta zp. bezpieczeństwa";
$locale['569'] = "Zdjęto blokadę konta zp. bezpieczeństwa";
$locale['572'] = "Konto zawieszone";
$locale['573'] = "Zdjęto zawieszenie";
$locale['574'] = "Konto wyłaczone";
$locale['575'] = "Konto reaktywowane";
$locale['576'] = "Konto ukryte";
$locale['577'] = "Cofnięcie wyłączonia zp. bezczynności konta";
$locale['578'] = "Konto wyłączone zp. bezczynności i ukryte";
$locale['579'] = "Cofnięcie ukrycia konta";
$locale['580'] = "Wyłącz bezczynne konta";
$locale['581'] = "Masz ponad 50 bezczynnych kont. Musisz wykonać jeszcze <strong>%d</strong> raz(y) procedurę deaktywacji kont.";
$locale['582'] = "Reaktywuj";
$locale['583'] = "Włącz ponownie";
$locale['584'] = "Wybierz nowy status";
$locale['585'] = "To konto użytkownika zostało zablokowane z/p bezpieczeństwa! Czy na pewno chcesz je odblokować?";
$locale['585a'] = "Podaj powód, dla którego blokujesz lub odblokowujesz konto użytkownika ";

$locale['590'] = "Zawieś";
$locale['591'] = "Odwieś";
$locale['592'] = "zawieszasz";
$locale['593'] = "odwieszasz";
$locale['594'] = "Podaj powód, dla którego  ";
$locale['595'] = " konto użytkownika ";
$locale['596'] = "Czas trwania:";

$locale['600'] = "Blokada zp. bezpieczeństwa";
$locale['601'] = "blokowanie zp. bezpieczeństwa";
$locale['602'] = "Odblokuj ";
$locale['603'] = "odblokowywanie";
$locale['604'] = "Powód:";

// Deactivation System
$locale['610'] = "Istnieje <strong>%d</strong> kont(o), na które nie logowano się od ponad <strong>%d ".($settings['deactivation_period'] > 1 ? "dni" : "dzień")."</strong>, a&nbsp;które można oznaczyć jako bezczynne.<br />
Użytkownicy będą mieli <strong>%d ".($settings['deactivation_response'] > 1 ? "dni" : "dzień")."</strong> na zapobiegnięcie ich %s.";
$locale['611'] = "Pamiętaj, że część użytkowników mogła dodać do Twojej strony posty, komentarze, zdjęcia itp. Powyższe treści zostaną usunięte razem z&nbsp;kontami, jeśli w&nbspustawieniach systemu deaktywacji jako działanie wobec bezczynnych kont masz ustawione usuwanie kont.";
$locale['612'] = "konto";
$locale['613'] = "konta";
$locale['614'] = "Wyłącz";
$locale['615'] = "całkowitym usunięciu";
$locale['616'] = "ukryciu";
$locale['617'] = "Ostrzeżenie:";
$locale['618'] = "Zalecana jest zmiana ustawień systemu deaktywacji z&nbsp;usuwania kont na ich ukrycie. Uchroni to przed utratą danych!";
$locale['619'] = "Przejdź do odpowiedniej sekcji ustawień.";
$locale['620'] = "ukryj";
$locale['621'] = "Automatyczna blokada nieaktywnych kont.";
?>