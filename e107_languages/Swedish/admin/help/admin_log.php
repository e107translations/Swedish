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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/admin_log.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Systemloggar Hjälp";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Data filters</b><br />
  Du kan specificera filter som begränsar mängden data som ska visas. Dessa sparas i en cookie tills du loggar ut.<br />
  Start- och sluttid/datum filter måste aktiveras via deras respektive kryssrutor.<br />
  Övriga filter är aktiva när det finns ett värde i deras ruta.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Denna sidan visar en utvald användares aktivitet på webbplatsen.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Denna sida konfigurerar olika alternativ för systemloggarna.<br /><br />
  <b>Allmänna inställningar</b><br />
  Hur många rader som loggen ska visa.<br /><br />
  <b>Adminlogg</b><br />
  Denna logg beåller händelser tills de uttryckligen raderas; använd detta alternativ för att radera gammal data.<br /><br />
  <b>User Audit Log</b><br />
  Denna logg spårar användaraktivitet. För registrerade användare, endast de i en viss användarklass spåras - du kan antingen ställa in den på medlemmar för att välja alla, eller skapa en helt ny för loggning. Du väljer sedan vilka typer av aktiviteter som ska loggas.<br />
  Registreringshändelser kan spåras separat.<br /><br />
  <b>Löpande logg</b><br />
  Denna logg används för att spåra onormala händelser, hjälpa till med avlusning etc. Den kan inaktiveras. Händelser tas automatiskt bort efter inställt antal dagar.
  ";
  break;
case 'rolllog' :
  $text = "Den löpande loggen visar olika onormala händelser som annars inte skulle loggas. Den kan också användas för avlusning och övervakning.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Denna sida visar användarnas nedladdningar.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Denna sida visar användarnas kommentarer, där du kan välja på användar-ID, typ och datum. Oönskade kommentarer kan raderas.";
  break;
case 'detailed' :
  $text = "Huvudsystemets logg visar exakta tidsangivelser (om servern stöder detta), och på denna sida kan du inspektera poster
	som inträffar under en väldigt snäv tidsrymd. Poster från adminloggen, bevakningsloggen och den löpande loggen är ihopbakade, så du kan se den precisa 
	sambandet mellan händelser.";
  break;
case 'adminlog' :
default :
  $text = "Denna sida visar admins aktivitet.<br /><br />
  (För närvarande, läggs ytterligare loggningar till koden, så listan är inte fullständig.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
?>