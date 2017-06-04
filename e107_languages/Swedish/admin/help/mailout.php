<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
	  $text = 'Skicka mejl med begränsningar från en plugin';
	  break;
	case 'debug' :
	  $text = 'Endast för utvecklare. Används inte';
	  break;
	case 'saved' :
	  $text = 'Välj en utskicksmall att använda. Radera de mallar som inte används';
	  break;
	case 'pending' :
		$text = 'Lista på utskick som är släppta och deras status. Mejlutskickshanteraren kommer att ta hand om dessa med hänsyn till 
		tidigaste och senaste utskicksdatum som är satta';
		break;
	case 'held' :
		$text = 'Lista på mejl som är klara för utskick men ännu inte släppta';
		break;
	case 'sent' :
	  $text = 'Lista på utförda utskick. Här kan du se resultatet.<br />';
	  break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
	  $text = 'Skapa ett mejl, ge det en passande rubrik, och välj mottagare. Du kan spara allt som en mall för senare användning eller skicka omedelbart.<br />';
	  $text .= 'Mejl adresser kan läggas till av pluginer (typ Nyhetsbrev), och dubletter tas bort innan mejlet går iväg<br />';
	  $text .= 'Valfri bifogning väljs i listan över giltiga nedladdningar.<br />';
	  $text .= 'Mejl kan skickas som klartext (mest användbar och minst risk att klassas som spam), eller HTML (ett alternativ i klartext skapas automatiskt). Tema stilen
				kan läggas till mejlet. Du kan även använda en förinställd mall.';
	  break;
	case 'recipients' :
		$text = 'Visar alla mottagare eller möjliga mottagare, tillsammans med befintlig status';
		break;
	case 'prefs' :
	  $text = '<b>Konfigurera utskicksalternativ.</b><br />
	  Ett testmejl skickas med nuvarande inställningar. Om du har problem med att mejl studsar, pröva att skicka ett testmejl till: <i>check-auth@verifier.port25.com</i> för att vara säker på att din servers MX inställningar är korrekta. Se till att din webbplatsmejl är korrekt innan du gör detta.<br /><br />';
	  $text .= '<b>Mejlmetod</b><br />
	  Använd SMTP om det går. Inställningar beror på din värds\'s mejlserver.<br /><br />';
	  $text .= '<b>Förvalt mejl format</b><br />
	  Mejl kan skickas antingen som klartext eller i HTML format. Den senare ser snyggare ut men är mer benägen att filtreras av olika
	  säkerhetsåtgärder. Om du väljer HTML läggs en klartext kopia till.<br /><br />';
	  $text .= '<b>Massutskick kontroller</b><br />
	  Värdena du ställer in här beror på din server, och på antalet mejl du skickar; du kan ställa alla värden till noll så att
	  mejlkön töms nästan direkt. Det vanligaste är att skicka under 500 mejl per timme.<br /><br />';
	  $text .= '<b>Studsande mejl</b><br />
	  Du kan specificera en mejladress som mottagare av studsande mejl. Om du har fullständig kontroll över din server, kan du specificera
	  ett eget schemalagt auto-bearbetande skript; detta tar emot studsande mejl direkt och uppdaterar statusen,annars kan du använda en mejladress,
	  som kan kontrolleras med ett tidsintervall (använd schemaläggaren), eller manuellt via menyn för användarinställningar. Normalt är detta ett standard
	  POP3-kont; använd endast TLS om det krävs av din värd<br /><br />';
	  $text .= '<b>Mejladresskällor</b><br />
	  Om du har övriga mejlrelaterade pluginer, kan du välja vilka av dem som kan lägga till adresser till listan.<br /><br />';
	  $text .= '<b>Loggning</b><br />
	  Loggningsalternativet skapar en textfil i systemmappen. Denna måste raderas med jämna mellanrum. The \'Endast loggning
	  \' alternativet låter dig se vilka som skulle få mejlet om det skickades. The \'med fel\' alternativet misslyckas var
	  sunde mejl, primärt för tester';
	  break;
	 case 'maint' :
		$text = 'Underhållsfunktioner för mejldatabasen';
		break;
	default :
	  $text = 'Odukumenterat val';
  }

$ns->tablerender('Hjälp för Mejl', $text);
