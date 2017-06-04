<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|     $Swedish translation: hanssons.de $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Skapa egna sidor och menyer med ditt eget innehåll.<br /><br /><b>Bilder</b><br />För egna sidor och menyer kan du ladda upp bilder (dessa hamnar i katalogen e107_images/custom).<br /><br /><b>Sidbrytningar</b><br />Du kan dela upp egna sidor i stycken/avsnitt/kapitel med hjälp av sidbrytningar; använd BB-koden [newpage] för autonumrerad sida eller [newpage=Rubrik] för rubricerad sida.<br /><br /><b>Lösenordsskydd</b><br />Lösenordsskydda sidan för att begränsa tillgången till utvalda läsare.<br /><br /><b>Betygssättning</b><br />Låt läsare betygssätta sidan. Observera att ett betyg gäller hela sidan med alla dess kapitel / avdelningar; det går inte att betygssätta en enskild del av en egen sida.<br /><br /><b>Kommentarer</b><br />Låt läsare kommentera sidan. Observera att en kommentar gäller hela sidan med alla dess kapitel / avdelningar; det går inte att kommentera en enskild del av en egen sida.<br /><br /><b>Användarklasser</b><br />Begränsa åtkomst till en specificerad användarklass.</br><br /><b>Webbplatslänk</b><br />Skapa en namngiven länk under webbplatslänkar.<br /><br /><b>Menynamn</b><br />Varje meny måste ha ett unikt namn. Namnet listas på Admin > Menyer där du aktiverar menyn i valfri menyarea. Menyrubriken kan däremot lämnas tom.<br /><br /><b>Lista sidor om ingen sida valts</b><br />Om du väljer <b>På</b> här kommer alla egna sidor listas på sidan page.php, väljer du <b>Av</b> visas ett meddelande om att sidolistning är inaktiverat.";

$ns -> tablerender(CUSLAN_11, $text);

?>
