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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/userclass2.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Användarklass Hjälp";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Ställer in de användarklasser en medlem tillhör från start. 
	Om verifikation är aktiverad kan detta ställas in antingen när användaren registrerar sig eller bekräftat sin registrering.<br /><br />
	  Och kom ihåg att om du använder hierarkiska användarklasser, tillhör en medlem automatiskt de klasser som är lägre i rangordning";
	break;
  case 'options' :
	$text = "Inställningsalternativet låter dig skapa och ta bort den förinställda klasshierarkin. Du kan se effekten genom att titta på användarträdet.<br />
	Detta förstör inte övrig klassinformation, och du kan modifiera eller ta bort din hierarki senare.<br /><br />
	Du bör endast vara tvungen att återuppbygga din hierarki om databasen blir korrupt";
	break;
  case 'membs' :
    $text = "Finns nu under användare i adminpanelen";
	break;
  case 'debug' :
	$text = "För endast avancerade användare - visar hierarkin av klasser, plus de tilldelade klasser och klasser som de första 20 medlemmarna har tillgång till.<br />.
Numret framför klassnamnet är dess unika ID (referensnummer). Klassen 'Alla' har 0 (noll)som ID. e107 använder dessa ID för att hänvisa till klasser. <br />
Efter klassnamnet visas klassens synlighet och redigerbarhet - [syn: 253, redigera: 27] till exempel. Detta innebär att klassen kommer att vara synlig i de flesta moduler endast om den aktuella användaren är medlem i klass 253,
och användaren kan redigera sin klasstillhörighet endast om de är medlem i klass 27. <br />
Slutligen, efter '=', är en lista över alla klasser antingen över eller under varje klass i trädet, plus ID i den klassen. en användare som är således en medlem av en särskild klass kommer
vara medlem i alla klasser i den här listan. <br /> <br />
För att underlätta förståelsen, visas klasstillhörighet för de första 20 medlemmarna. Den första posten på varje rad visar de klasser som användaren är medlem av. De
andra posten listar alla klasser där användaren blir medlem när arv träder i kraft. Den tredje posten visar vilka medlemklasser de kan redigera";
	break;
  case 'test' :
  case 'special' :
    $text = "Använd inte detta!! För utvecklare endast!!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Du kan skapa klasser, eller redigera befintliga klasser från denna sida. <br />
         Detta är användbart för att begränsa användarna till vissa delar av webbplatsen. Till exempel kan du skapa en klass som heter TEST,
sedan skapa ett forum som endast tillåter användare i TEST klassen för att komma åt det. <br /> <br />
Klassnamnet visas i rullgardinslistor och liknande; på vissa ställen visas en mer detaljerad beskrivning. <br /> <br />
Ikonen för klassen kan visas på olika ställen på platsen, om en sådan har definierats. <br /> <br />
För att tillåta användare att avgöra om de kan vara medlem i en klass, tillåta dem att hantera den. Om du ställer in 'ingen' här, kan bara administratörer
hantera medlemskap i klassen <br /> <br />
'Synlighet'-fältet gör att du kan dölja klassen från de flesta medlemmar -. Gäller för några av listrutorna och kryssrutorna <br /> <br />
Med 'Klassförälder' kan du ställa in en hierarki av klasser. Om 'top' i hierarkin är klasserna'Alla / Publik' eller 'medlem',har
klasser lägre ner i hierarkin samma rättigheter som deras moderklass, och de klassernas 'förälder, och så vidare. Om 'top' i hierarkin är
klassen 'No One / ingen' klass, då ackumuleras rättigheterna i motsatt riktning - en klass ackumuleras alla rättigheter från en klass <b> under </ b> dem i
trädet. Det resulterande trädet visas på den nedre delen av sidan; Du kan expandera och dölja grenar genom att klicka på '+'' och '-'' rutor.";
	break;
  case 'display' :
  default :
	$text = "Du kan ändra klasser och även radera befintliga klasser från denna sida.";
}
e107::getRender() -> tablerender($caption, $text);
