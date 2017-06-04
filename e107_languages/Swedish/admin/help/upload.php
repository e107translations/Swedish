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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/upload.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "De filtyper och maximal filstorlek som kan laddas upp bestäms av användarklass . Det här alternativet genererar en fil som heter ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES."
som måste kopieras eller flyttas till katalogen ".e_ADMIN_ABS." och byta namn till ".e_READ_FILETYPES." innan den träder i kraft. <br />
En definition per klass är tillåten. <br />
Observera att dessa definitioner gäller för hela webbplatsen, även om publika uppladdningar är inaktiverad.";
    break;
  case 'options' :
    $text = "Det fullständiga publika uppladdningssystemet kan inaktiveras här. <br />
Plattfils lagring är i allmänhet lämpligt (annars är den maximala filstorleken är begränsad till 500KB). <br />
Den maximala filstorleken åsidosätter alla definitionerna i filetypes.xml. <br />
Publika uppladdningar kan begränsas till en viss användarklass , men dessa inställningar gäller även till andra delar av webbplatsen där uppladdningar tillåts, såsom
nyheter och formulär.";
	break;
  case 'view' :
  default :
	$text = "Denna sida listar alla inskickade uppladdningar. Du kan välja att ta bort dem, överföra dem till nedladdningar, eller skicka dem till nyheter";
}
$ns -> tablerender("Publika uppladningar Hjälp", $text);
