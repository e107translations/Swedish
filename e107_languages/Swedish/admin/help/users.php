<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Hantera användare";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Denna sida hjälper dig att skapa en användare, som omedelbart blir medlem på webbplatsen, och med i vilken användarklass som du bestämmer.<br /><br />
	Om du kryssar för 'Skicka bekräftelsemejl till användare med lösen' rutan, skickas inloggningsnamnet och lösen <b>i klartext</b>, så användaren måste byta
	sitt lösen vid mottagning.
	";
    break;

  case 'prune' :
	$text = "Massraderar oönskade användare från databasen. Det kan vara de som inte genomgick registreringen, eller 
	de vars mejl studsade. Alla foruminlägg, kommentarer etc blir kvar, men märks som 'Raderad användare'.
	";
	break;

  case 'unverified' :
	$text = "Visar de medlemmar som inte genomgick registreringen. Samma alternativ som den vanliga medlemslistan.";
    break;

  case 'options' :
	$text = "Ställer in olika alternativ som påverkar alla användare.<br /><br />
	<b>Tillåt uppladdning av avatar</b><br />
	Om aktiverad kan en användare ladda upp en egen avatar, som lagras på din server. Detta kan vara en säkerhetsrisk.<br /><br />
	<b>Tillåt uppladdning av foto</b><br />
	Om aktiverad kan en användare ladda upp ett eget foto, som lagras på din server. Detta kan vara en säkerhetsrisk.<br /><br />
	<b>Online användarspårning</b><br />
	Detta måste vara aktivt för att kunna spåra de mesta användaraktiviteterna, inckluderat antal medlemmar online. Det höjer påfrestningen på databasen signifikant.<br /><br />
	<b>Medlemsinformation</b><br />
	Bestämmer vilken användarklass som kan se medlemslistan.
	";
    break;

  default :
	$text = "Denna sida visar en lista på registrerade medlemmar. Du kan uppdatera deras inställningar, ge dem administratörsstatus och ställa in deras användarklass 
	bland annat.<br /><br />
	Ordningen kan ändras genom att klicka på kolumnhuvudet.<br />
	Vilka kolumner som ska visas genom att klicka på 'Ändra visningsalternativ', välj dina kolumner och, sedan klicka på 'Sök/Läs in på nytt'<br /><br />
	<b>Info</b><br />
	Visa denne användarens profil (kan också klicka på alias)<br /><br />
	<b>Ändra</b><br />
	Ändra inställningar för denne användare. <br /><br />
	<b>Bannlys/Återinsätt</b><br />
	Bestämmer om användaren kan komma åt sajten. <br /><br />
	<b>Aktivera</b><br />
	Detta aktiverar en användare som normalt hade reagerat på bekräftelsemejlet.<br /><br />
	<b>Skicka mejl på nytt</b><br />
	Skickar på nytt ut bekräftelsemejl till användaren.<br /><br />
	<b>Testa mejladress</b><br />
	Verifiera användarens mejladress (skickar inte ut ett mejl)<br /><br />
	<b>Ställ in klass</b><br />
	Ställ in användarklass för en användare<br /><br />
	<b>Radera</b><br />
	Raderar fullständigt en användare från medlemslistan (Alla foruminlägg, kommentarer etc blir kvar, men märks som 'Raderad användare')
	";
}


$ns -> tablerender($caption, $text);
unset($text);
