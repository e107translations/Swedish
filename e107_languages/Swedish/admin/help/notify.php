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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/notify.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Rapporter skickar e-postrapporter när e107-händelser uppstår.<br /><br />
Till exempel, om du sätter 'IP blockering för flödning av webbplatsen' till klassen 'Admin' så kommer alla administratörer att få ett meddelande via e-post när webbplatsen blir flödad.<br /><br />
Du kan också, som ett annat exempel, sätta 'Nyhetsartikel postad av admin' till användarklass 'Medlemmar' och alla dina medlemmar kommer att få ett 
meddelande skickat till sig när du postar en nyhet på webbplatsen.<br /><br />
Om du vill att rapporterna skall skickas till en alternativ e-postadress - välj då alternativet 'E-post' och ange mejladressen i fältet avsett för detta..";

$ns -> tablerender("Hjälp för Rapporter", $text);
