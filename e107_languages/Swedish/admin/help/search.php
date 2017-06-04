<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Search Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Sök Hjälp";
$text = "
	OM din MySQL server stöder det kan du växla till 
	MySQL:s sorteringsmetod som är snabbare än PHP:s sorteringsmetod. Se preferenser.
<br /><br />
	Om din webbplats använder ideografiska språk som kinesiska eller japanska måste du 
	använda PHP:s sorteringsmetod och inaktivera matchning av hela ord.

";
$ns->tablerender($caption, $text);
?>