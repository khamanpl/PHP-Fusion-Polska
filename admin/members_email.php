<?php
// Official SVN Trunk Rev: 1732
$locale['email_create_subject'] = "Utworzono konto na ";
$locale['email_create_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta�o utworzone.\n
Teraz mo�esz zalogowa� si�, korzystaj�c z poni�szych informacji:\n
nazwa u�ytkownika: [USER_NAME]\n
has�o: [PASSWORD]\n\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";

$locale['email_activate_subject'] = "Aktywowano konto na ";
$locale['email_activate_message'] = "Witaj [USER_NAME]!\n
Twoje konto na  ".$settings['sitename']." zosta�o aktywowane.\n
Teraz mo�esz zalogowa� si� przy u�yciu swojej nazwy u�ytkownika i has�a.\n
Wszystkiego dobrego\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reaktywacja konta na ".$settings['sitename'];
$locale['email_deactivate_message'] = "Witaj [USER_NAME]!\n
Min�o ".$settings['deactivation_period']." dni od Twojego ostatniego zalogowania si� na ".$settings['sitename'].". Twoje konto zosta�o uznane za bezczynne. Dane z nim zwi�zane pozosta�y niezmienione.\n
Aby reaktywowa� konto, naci�nij na poni�szy link:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";

$locale['email_ban_subject'] = "Twoje konto na ".$settings['sitename']." zosta�o zablokowane";
$locale['email_ban_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta�o zablokowane przez ".$userdata['user_name']." z nast�puj�cych powod�w:\n
[REASON].\n
Je�li potrzebujesz szczeg�owych informacji dotycz�cych blokady konta, skontaktuj si� z administracj� strony wysy�aj�c e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";

$locale['email_secban_subject'] = "Twoje konto na ".$settings['sitename']." zosta�o zablokowane";
$locale['email_secban_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta�o zablokowane przez ".$userdata['user_name'].", poniewa� podj�te przez Ciebie dzia�ania stanowi�y zagro�enie dla strony i jej u�ytkownik�w.\n
Je�li potrzebujesz szczeg�owych informacji dotycz�cych blokady konta, skontaktuj si� z administracj� strony wysy�aj�c e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�.";

$locale['email_suspend_subject'] = "Twoje konto na ".$settings['sitename']."zosta�o zawieszone";
$locale['email_suspend_message'] = "Witaj [USER_NAME]!\n
Twoje konto na ".$settings['sitename']." zosta�o zawieszona przez ".$userdata['user_name']." do [DATE] (wg czasu strony) z nast�puj�cych powod�w:\n
[REASON].\n
Je�li potrzebujesz szczeg�owych informacji dotycz�cych zawieszenia konta, skontaktuj si� z administracj� strony wysy�aj�c e-mail na adres ".$settings['siteemail'].".\n
Z pozdrowieniami\n\n
".$settings['siteusername']."\n\n
------\n
Niniejsza wiadomo�� zosta�a wys�ana automatycznie. Nie odpowiadaj na ni�."
?>
