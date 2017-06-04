<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Swedish Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/09/11 22:17:18
|
|        $Author: Admin $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Hantera webbplatsURL:er");
define("LAN_EURL_NAME_CONFIG", "Profiler");
define("LAN_EURL_NAME_ALIASES", "Aliases");
define("LAN_EURL_NAME_SETTINGS", "Allmänna inställningar");
define("LAN_EURL_NAME_HELP", "Hjälp");
define("LAN_EURL_EMPTY", "Listan är tom");
define("LAN_EURL_LEGEND_CONFIG", "Välj URL-profil per webbplatsarea");
define("LAN_EURL_LEGEND_ALIASES", "Konfigurera BasURL alias per URL-profile");
define("LAN_EURL_DEFAULT", "Förvald");
define("LAN_EURL_PROFILE", "Profil");
define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Profil är inte tillgänglig");
define("LAN_EURL_LOCATION", "Profilens lokalisering");
define("LAN_EURL_LOCATION_NONE", "Konfigurationsfilen är inte tillgänglig");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias vid förvalt språk");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Förvalt värde är");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias vid");
define("LAN_EURL_FORM_HELP_EXAMPLE", "BasURL");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias "%1\$s" kan inte sparas - Det finns redan en systemURL-profil med detta namn. Välj ett annat aliasvärde för din systemURL-profil "%2\$s"");
define("LAN_EURL_SURL_UPD", "  SEF URL:er uppdaterades.");
define("LAN_EURL_SURL_NUPD", "  SEF URL:er uppdaterades INTE.");
define("LAN_EURL_SETTINGS_PATHINFO", "Ta bort filnamn från URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Associera Root namnhållare");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Välj vilken del av webbplatsen som kopplas till din BasURL. Exempelvis: Ner News är din Root namnhållare
http://dinsida.com/News-Item-Titeln associeras med news (objektets sida kommer att fungera)");
define("LAN_EURL_SETTINGS_REDIRECT", "Styr om till systemets Hittades inte sida");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Om satt till FALSE, Hittades inte sidan kommer skapas direkt (utan att webbläsaren styrs om)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatiserad SEF strängs skapelsetyp");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Välj hur SEF sträng kommer sättas ihop när den skapas automatisktfrån en Titel (dvs i nyheter, egna sidor, etc)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Bara säkra upp det");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "Bindestrecka-till-gemener");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Bindestrecka-till-Camel-Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Bindestrecka-utan-skiftlägeÄNDRING");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "understrecka_till_gemener");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Understrecka_till_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Understrecka_utan_skiftlägeÄNDRING");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "plus+separator+till+gemener");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus+separator+till+Camel+Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus+separator+utan+skiftlägeÄNDRING");
define("LAN_EURL_MODREWR_DESCR", "Tar bort inledande script filnamn(index.php/) från dina URL:er. Du behöver mod_write installerad och igång på din server. (Apache Web Server) Efter att du har aktiverat detta behöver du gå till din rootmapp och byta namn på htaccess.txt till htaccess och modifiera <em>"RewriteBase"</em> direktivet om så behövs.");
define("LAN_EURL_MENU", "WebbplatsURL:er");
define("LAN_EURL_MENU_CONFIG", "Konfigurationer");
define("LAN_EURL_MENU_ALIASES", "Profil alias");
define("LAN_EURL_MENU_SETTINGS", "Inställningar");
define("LAN_EURL_MENU_HELP", "Hjälp");
define("LAN_EURL_MENU_PROFILES", "Profiler");
define("LAN_EURL_UC", "Under uppbyggnad");
define("LAN_EURL_CORE_MAIN", "Webbplatsen Root namnhållare - Alias används inte");
define("LAN_EURL_FRIENDLY", "Förenklad");
define("LAN_EURL_LEGACY", "Bakåtkompatibla direkta URL:er");
define("LAN_EURL_REWRITE_LABEL", "Förenklade URL:er");
define("LAN_EURL_REWRITE_DESCR", "Sökmotor- och användarvänliga URL:er");
define("LAN_EURL_CORE_NEWS", "Nyheter");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Fullständiga förenklade URL:er (ingen prestanda men mest användarvänliga)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Förenklade URL:er utan ID (prestandasänkande men mer användarvänliga)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Visar på manuell länktolkning och sammansättning");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Förenklade URL:er med ID (prestandahöjande)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Visar på automatisk länktolkning och sammansättning baserad på fördefinierade routeregler");
define("LAN_EURL_CORE_USER", "Användare");
define("LAN_EURL_USER_REWRITE_LABEL", "Förenklade URL:er");
define("LAN_EURL_USER_REWRITE_DESCR", "Sökmotor- och användarvänliga URL:er");
define("LAN_EURL_CORE_PAGE", "Egna sidor");
define("LAN_EURL_PAGE_SEF_LABEL", "Förenklade URL:er med ID (prestandahöjande)");
define("LAN_EURL_PAGE_SEF_DESCR", "Sökmotor- och användarvänliga URL:er");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Förenklade URL:er utan ID (prestandasänkande men mer användarvänliga)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Sökmotor- och användarvänliga URL:er");
define("LAN_EURL_CORE_SEARCH", "Sök");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Förvald sök-URL");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Bakåtkompatibel direkt-URL");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Förenklad URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "System");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Förvalda system URL:er");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URL:er för sidor typ Hittades inte, åtkomst nekad etc");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Förenklade system URL:er");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URL:er för sidor typ Hittades inte, åtkomst nekad etc");
define("LAN_EURL_CORE_INDEX", "Förstasidan");
define("LAN_EURL_CORE_INDEX_INFO", "Förstasidan kan inte ha ett alias");
define("LAN_EURL_REBUILD", "Skapa på nytt");
define("LAN_EURL_REGULAR_EXPRESSION", "Reguljära uttryck");
define("LAN_EURL_KEY", "Key");


?>