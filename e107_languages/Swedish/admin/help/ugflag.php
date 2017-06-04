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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/ugflag.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Om du uppgraderar e107 eller bara behöver att din webbplats är offline för ett tag kryssa bara för underhållsrutan och dina besökare kommer att omdirigeras till en sida som förklarar att webbplatsen är stängd för underhåll. När du är klar avmarkerar du rutan för att återgå till det normala.";

$ns -> tablerender("Underhåll", $text);
