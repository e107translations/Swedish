<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Swedish Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/02/10 13:03:35
|
|        $Author: tubbis_2 $
+---------------------------------------------------------------+
*/
define("LWLAN_4", "Inga länkord definierade ännu");
define("LWLAN_5", "Ord");
define("LWLAN_6", "Länk");
define("LWLAN_7", "Aktiv?");
define("LWLAN_11", "Befintliga länkord");
define("LWLAN_18", "Är du säker på att du vill radera länkordet?");
define("LWLAN_20", "Länkordet påträffades inte");
define("LWLAN_21", "Ord att auto-länka (eller komma-separerad lista med ord)");
define("LWLAN_22", "Aktivera?");
define("LWLAN_23", "Länkord hanterare");
define("LWLAN_24", "Hantera ord");
define("LWLAN_26", "Områden där länkord ska användas");
define("LWLAN_27", "Detta är "kontexten" av den visade texten");
define("LWLAN_28", "Sidor där länkord inte ska användas");
define("LWLAN_29", "Samma format som en menys visningskontroll. En matchning per rad. Specificera en del av eller fullständig URL. Avsluta med '!' för en exakt matchning av slutet på en länk.");
define("LWLAN_31", "Lägg till/redigera länkord");
define("LWLAN_33", "Titelområden");
define("LWLAN_34", "Summering av post");
define("LWLAN_35", "Brödtext");
define("LWLAN_36", "Beskrivningar (länkar etc)");
define("LWLAN_40", "Användardefinierade titlar (dvs forum)");
define("LWLAN_41", "Användardefinierad brödtext (dvs forum)");
define("LWLAN_50", "Ballongtips");
define("LWLAN_51", "Inaktiverad");
define("LWLAN_52", "Endast länkord");
define("LWLAN_53", "Endast ballongtips");
define("LWLAN_54", "Länkord och ballongtips");
define("LWLAN_55", "Öppna länk i nytt fönster");
define("LWLAN_56", "Öppna i ny sida");
define("LWLAN_58", "Pref hook omvandlad till 0.8 format");
define("LWLAN_59", "Aktivera Ajaxfunktionalitet");
define("LWLAN_60", "LW ID");
define("LWLAN_62", "Ballongtips ID (LW ID)");
define("LWLAN_63", "Endast positiva heltal");
define("LWLAN_64", "Dölj länkar på nuvarande sida");
define("LWLAN_65", "Om förbockad döljer den klickbara länkar om dessa leder till nuvarande sida");
define("LAN_LW_HELP_00", "Länkord hjälp");
define("LAN_LW_HELP_01", "<b>Områden att aktivera</b><br /> många områden av text har en asocierad \"context\", och länkord i dessa områden kommer endast att visas i denna context.<br /><br /> <b>Inaktivera länkord</b><br /> Länkord kan inaktiveras på vissa sidor och sidor som följer samma mönster. För in dessa här (samma syntax som för menyer), ett mönster per rad. Om mönstret slutar med  \"!\", detta sammanfaller med \"end of query\", och är vanligtvis en exakt matchning. I annat fall matchar vilken URL som helst som innehåller strängen.<br /> Notera att länkord <i>aldrig</i> visas på adminsidorna.<br /><br /> <b>Aktivera Ajaxfunktionalitet</b><br /> Ballongtipsen kan använda ajax för att få info att visa. Detta kräver lite egen kodning.<br /><br /> <b>Dölj länk på nuvarande sida</b><br /> Vanligtvis är det onödigt att visa länkar till en sida man redan befinner sig på. Bocka för denna för att avstå,<br />");
define("LAN_LW_HELP_02", "Definiera orden som blir klickbara, eller vilka som ska visa text när musen vilar över dem, här<br /><br /> <b><u>Ord till länk</u></b><br /> Detta är skiftlägekänsligt. För flera ord som ska kopplas till samma länk  och ballongtips, separera med kommatecken (inga mellanslag)<br /><br /> <b><u>Länk</u></b><br /> Definiera en klickbar länk här.Om det är en extern länk, [i]måste[/i] den börja med  \"http://\". Om det är en intern länk kan de normala {e_XXX} konstanterna användas.<br /><br /> <b><u>Ballongtips</u></b><br /> Detta definierar texten som visas när användarens mus passerar över ordet.<br /><br /> <b><u>LW ID (Ballongtips ID)</u></b><br /><br /> Detta definierar en valfri numerisk ID som kan användas vid Ajax bearbetning. Om fältet lämnas tomt kommer numret i databasen att användas.<br /><br /> <b><u>Aktivera?</u></b><br /> Definierar vilka val som ska vara aktiva.");


?>