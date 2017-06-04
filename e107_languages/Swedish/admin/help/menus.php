<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2015 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if(!defined('e107_INIT')){ exit; }

if (!getperms("2")) 
{
	header("location:".e_BASE."index.php");
	exit;
}

if(!deftrue("e_DEBUG_MENUMANAGER"))
{
	return;
}


$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();

if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$sql->select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql->fetch())
			{
				$sql2 ->update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menyer återställda i databasen</b><br /><br />";
		}
}
else
{
	unset($text);
}

$text = "Menyhanteraren hjälper dig att arrangera var och i vilken ordning dina menyer visas i enlighet med ditt tema. 

[u]Vila[/u] över undermenyerna för att modifiera befintliga objekt. 

Om dina menyer inte uppdaterar som de skall, klicka på knappen uppdatera. 

[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('reset','Refresh','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('search')." indikerar att synbarhet för meny ändrats.
[/html]
";

$text = $tp->toHtml($text, true);
$ns->tablerender("Hjälp för menyhanteraren", $text);