<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|     $Swedish translation: hanssons.de $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Ladda upp nedladdningsfiler till mappen ".e_FILE." <b>downloads</b>, skärmdumpar eller liknande till mappen ".e_FILE." <b>downloadimages</b> och miniatyrbilder till mappen ".e_FILE." <b>downloadthumbs</b>.
<br /><br />
För att kunna skapa en nedladdning behöver du först ha skapat en huvudkategori samt en <b>underkategori</b> till den huvudkategorin. Du kommer då att kunna göra nedladdningen tillgänglig i underkategorin.";
$ns -> tablerender("Nedladdningshjälp", $text);

?>
