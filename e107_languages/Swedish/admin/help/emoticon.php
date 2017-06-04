<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|     $Swedish translation: hanssons.de $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Med uttryckssymboler aktiverade kommer koden för uttryckssymboler att ersättas av deras motsvarande uttryckssymbol (ikon) i allt innehåll på din webbplats förutom i rubriker, där skrivs koden ut i klartext.<br /><br />Ladda upp nya symboler till e107_images/emotes/default eller skapa en ny mapp under emotes.<br /><br /> Undvik specialtecken i filnamnen; du kan i vissa fall inte infoga en bild som har specialtecken på webbplatsen men det går bra att använda specialtecken i symbolens kod.<br /><br /> Varken filnamnet eller symbolens kod får innehålla mellanslag (mellanslag används för att separera två koder som båda används för en och samma symbol).<br /><br />Om du genererar en XML-fil för ett paket kan (om du distribuerar paketet) paketet användas direkt på en annan webbplats utan att koderna behöver skrivas in manuellt igen.";

$ns -> tablerender("Uttryckssymbolshjälp", $text);
?>
