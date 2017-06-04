<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|     $Swedish translation: hanssons.de $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Bannlysa användare från din webbplats";
$text = "Från denna sida kan du bannlysa användare från din webbplats.<br />
Antingen anger du en fullständig IP-adress eller så använder du jokertecken för att ange ett område av IP-adresser. Du kan också ange en e-postadress för att hindra att någon registrerar sig som medlem på webbplatsen.<br /><br />
<b>Bannlysa via IP-adress</b><br />
Anger du IP-adressen 123.123.123.123 kommer det att hindra en användare med den adressen att besöka din webbplats.<br />
Anger du istället 123.123.123.* kommer det att hindra att någon inom adressområdet 123.123.123.0 till och med 123.123.123.255 besöker 
webbplatsen.(Observera att det skall finnas exakt fyra grupper av siffror eller asterisker)<br /><br />
<b>Bannlysa via e-postadress</b><br />
Om du anger adressen foo@bar.com kan en användare inte registrera sig som medlem på din webbplats.<br />
Anger du istället e-postadressen *@bar.com kommer ingen med den adressuffixen att kunna registrera sig som medlem på din webbplats.<br /><br />
<b>Bannlysa via användarnamn</b><br />
Det görs via administrationen under användare.";
$ns -> tablerender($caption, $text);

?>
