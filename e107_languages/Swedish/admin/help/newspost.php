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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/newspost.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Hjälp för nyhetsartiklar";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
	$text = "<b>Allmänt</b><br />
Ingressen kommer att visas på huvudsidan, resten av nyhetsartikeln kan läsas genom att klicka på 'Läs mer'.
<br />
<br />
<b>Visa endast rubrik</b>
<br />
Aktivera detta för att endast visa rubriken på förstasidan, med en klickbar länk till hela nyhetsartikeln.
<br /><br />
<b>Aktivering</b>
<br />
If you set a start and/or end date your news item will only be displayed between these dates.
";
	break;
  case 'cat' :
	$text = "Du kan dela upp dina nyhetsartiklar i olika kategorier, och tillåta besökare att endast visa en enskild kategoris nyhetsartiklar. <br /><br />Upload your news icon images into either ".e_THEME."-yourtheme-/images/ or themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Ställ in olika nyhetsrelaterade alternativ<br /><br />
	<b>Nyhetskategorikolumner</b><br />
	Kräver att detta stöds av temat<br /><br />
	<b>Nyhetsartiklar att visa per sida</b><br />
	För nyheters huvudsida visas i förkortat format.<br /><br />
	<b>Nyhetsartklar att visa i arkivet</b><br />
	Ställer in antalet nyhetsartiklar som visas som endast rubriker på varje nyhetssida (räknas in i den förgående totalen).<br /><br />
	<b>Aktivera html-redigering</b><br />
	Kräver att de som är tillåtna att publicera nyheter också får posta HTML-kod.
	';
	break;
  case 'list' :
  default :
	$text = 'Lista över alla nyhetsobjekt. För att ändra eller radera, klicka på en av ikonerna i \'options\' kolumnen. För att visa objektet, klicka
		på rubriken.';
}
$ns -> tablerender($caption, $text);
