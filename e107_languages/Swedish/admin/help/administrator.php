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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/administrator.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Sajtadministratörer Hjälp";
$text = "Använd denna sida för att redigera eller radera sajtadministratörer. Administratören kommer enbart att ha tillgång till de funktioner som är markerade. <br /><br />
För att skapa en ny administratör, gå till användarinställningar och uppgradera en befintlig användare till adminstatus.";
$ns -> tablerender($caption, $text);
