<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Erweitert',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 Währungscode',
    'DEFAULT_CURRENCY_NAME' => 'Währungsname',
    'DEFAULT_CURRENCY_SYMBOL' => 'Währungssymbol',
    'DEFAULT_DATE_FORMAT' => 'Standardformat Datum',
    'DEFAULT_DECIMAL_SEP' => 'Dezimaltrennzeichen',
    'DEFAULT_LANGUAGE' => 'Standardsprache',
    'DEFAULT_SYSTEM_SETTINGS' => 'Benutzeroberfläche',
    'DEFAULT_THEME' => 'Standarddesign',
    'DEFAULT_TIME_FORMAT' => 'Standardformat Zeit',
    'DISPLAY_RESPONSE_TIME' => 'Antwortzeiten des Servers anzeigen',
    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Benutzern erlauben, die Reiter (Tabs) zu verbergen',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Systemeinstellungen',
    'LBL_LOGVIEW' => 'Protokoll anzeigen',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Authentifizierung verwenden?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Passwort:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Benutzername:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Spezifizierung',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wählen Sie Ihren E-Mail Anbieter:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Passwort:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Passwort:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-Mail Adresse:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Passwort:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Benutzername:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Benutzern erlauben, dieses Konto für ausgehende E-Mails zu verwenden:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Wenn diese Option gewählt wurde, können alle Benutzer E-Mails über dieses für Systembenachrichtigungen eingerichtete Konto senden. Wenn nicht ausgewählt, können Benutzer trotzdem E-Mails über ihre selbst konfigurierten Mail Server versenden.',
    'LBL_MAILMERGE' => 'Serienbrief',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimales Intervall für automatische Dashlet Aktualisierung',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Das ist der kleinste Wert, den Sie wählen können, um Dashlets automatisch zu aktualisieren. Wenn dieser auf "Nie" gesetzt wird, dann ist die automatische Aktualisierung ausgeschaltet."',
    'LBL_MODULE_FAVICON' => 'Modulsymbole als Favicon anzeigen',
    'LBL_MODULE_FAVICON_HELP' => 'Wenn Sie sich in einem Modul befinden, das ein Symbol hat, dann soll dieses Symbol anstelle des allgemeinen SuiteCRM Symbols (favicon) im Browser Reiter angezeigt werden',
    'LBL_MODULE_NAME' => 'Systemeinstellungen',
    'LBL_MODULE_ID' => 'Konfiguration',
    'LBL_MODULE_TITLE' => 'Benutzeroberfläche',
    'LBL_NOTIFY_FROMADDRESS' => '"Von" Adresse:',
    'LBL_NOTIFY_SUBJECT' => 'E-Mail Betreff:',
    'LBL_PROXY_AUTH' => 'Zugangsinformationen?',
    'LBL_PROXY_HOST' => 'Proxy-Host',
    'LBL_PROXY_ON_DESC' => 'Proxy Server Adresse und Authentifizierungseinstellungen konfigurieren',
    'LBL_PROXY_ON' => 'Proxy Server verwenden',
    'LBL_PROXY_PASSWORD' => 'Passwort',
    'LBL_PROXY_PORT' => 'Anschluss',
    'LBL_PROXY_TITLE' => 'Proxy Einstellungen',
    'LBL_PROXY_USERNAME' => 'Benutzername',
    'LBL_RESTORE_BUTTON_LABEL' => 'Wiederherstellen',
    'LBL_SYSTEM_SETTINGS' => 'Systemeinstellungen',
    'LBL_USE_REAL_NAMES' => 'Vollständige Namen anzeigen',
    'LBL_USE_REAL_NAMES_DESC' => 'Den vollen Namen in den "zugewiesen an" Feldern anzeigen und nicht den Benutzernamen."',
    'LBL_DISALBE_CONVERT_LEAD' => 'Aktion Interessent umwandeln" für bereits umgewandelte Interessenten deaktivieren"',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Wenn ein Interessent bereits umgewandelt wurde, dann entfernt diese Option die Schaltfläche Interessent umwandeln"."',
    'LBL_ENABLE_ACTION_MENU' => 'Aktionen innerhalb von Menüs darstellen',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Auswählen, um Detailansicht und Subpanel Aktionen in einem Auswahlmenü darzustellen. Wenn nicht ausgewählt, werden diese als separate Schaltflächen dargestellt.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Erlauben Sie die Inline-Bearbeitung in der Listenansicht',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Auswählen um die Inline-Bearbeitung für Felder in der Listenansicht zu ermöglichen. Ansonsten ist eine Bearbeitung in der Listenansicht nicht möglich.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Erlauben Sie die Inline-Bearbeitung in der Detailansicht',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Auswählen um die Inline-Bearbeitung für Felder in der Detailansicht zu ermöglichen. Andernfalls ist eine Bearbeitung in der Detailansicht nicht möglich.',
    'LBL_HIDE_SUBPANELS' => 'Zugeklappte Subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listenansicht Anzahl Einträge pro Seite',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanels Anzahl Einträge pro Seite',
    'LOG_MEMORY_USAGE' => 'Speicherverbrauch aufzeichnen',
    'LOG_SLOW_QUERIES' => 'Langsame Abfragen aufzeichnen',
    'CURRENT_LOGO' => 'Aktuelles Logo:',
    'CURRENT_LOGO_HELP' => 'Dieses Logo wird in der Mitte des Anmeldebildschirms der SuiteCRM Anwendung angezeigt.',
    'NEW_LOGO' => 'Logo auswählen:',
    'NEW_LOGO_HELP' => 'Das Bildformat kann entweder .jpg oder .png sein. Die maximale Höhe ist 170px, die maximale Breite beträgt 450px. Ein größeres Bild wird auf eine dieser Dimensionen skaliert.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Das Bildformat kann entweder .jpg oder .png sein. Die maximale Höhe ist 170px, die maximale Breite beträgt 450px. Ein größeres Bild wird auf eine dieser Dimensionen skaliert.',
    'SLOW_QUERY_TIME_MSEC' => 'Grenzwert (in msec) damit eine Abfrage als langsam gilt',
    'STACK_TRACE_ERRORS' => 'Zeige stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maximale Dateigröße beim Hochladen',
    'VERIFY_CLIENT_IP' => 'Benutzer IP Adresse validieren',
    'LOCK_HOMEPAGE' => 'Anpassung des Layouts der Startseite durch Benutzer verhindern',
    'LOCK_SUBPANELS' => 'Anpassung der Subpanel Layouts durch Benutzer verhindern',
    'MAX_DASHLETS' => 'Maximale Anzahl der Dashlets auf der SuiteCRM Startseite',
    'SYSTEM_NAME' => 'Systemname:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'Das ist der Name, der in der Titelzeile (im Reiter) Ihres Browsers angezeigt wird.',
    'LBL_LDAP_TITLE' => 'LDAP Authentifizierung Support',
    'LBL_LDAP_ENABLE' => 'LDAP aktiveren',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Nummer:',
    'LBL_LDAP_ADMIN_USER' => 'Benutzername:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Dient zur Suche nach dem LDAP-Benutzer. Dies muss möglicherweise umfassend qualifiziert werden.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Passwort:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentifizierung:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Eine Verbindung zum LDAP-Server aufbauen mit spezifischen Benutzeranmeldeinformationen. Verbindet anonym, wenn keine angegeben werden.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Benutzer automatisch erstellen:',
    'LBL_LDAP_USER_DN' => 'Benutzer-DN:',
    'LBL_LDAP_GROUP_DN' => 'Gruppen DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Beispiel: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Benutzerfilter für:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppenmitgliedschaft:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Benutzer müssen Mitglied einer bestimmten Gruppe sein',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Benutzerattribut:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Die eindeutige Personen-ID, die benutzt wird, um die Gruppenmitgliedschaft festzustellen. Beispiel: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Das Gruppenattribut, das benutzt wird, um es mit dem Benutzerattribut zu vergleichen. Beispiel: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Gruppenattribut:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Zusätzliche Filterparameter die angewendet werden, um Benutzer zu authentifizieren - z.B..<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribut:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribut:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Beispiele für die Anbindung von LDAP-Benutzern: [<b>AD:</b>&nbsp;UserPrincipalName] [<b>OpenLDAP:</b>&nbsp;dn] [<b>Mac OS&nbsp;&nbsp;X:</b>&nbsp;Uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Beispiele für die Suche nach LDAP-Benutzern:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Beispiel: ldap.example.com oder ldaps://ldap.example.com für SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Beispiel: <em>389 oder 636 für SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Gruppenname:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Beispiel <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Beispiel: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Falls kein authentifizierter Benutzer existiert wird dieser erstellt.',
    'LBL_LDAP_ENC_KEY' => 'Kodierungsschlüssel:',
    'DEVELOPER_MODE' => 'Entwicklermodus',

    'SHOW_DOWNLOADS_TAB' => 'Herunterladen Reiter anzeigen',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Bei Auswahl wird die Registerkarte "Download" in den Benutzereinstellungen erscheinen und Benutzern den Zugang zu SuiteCRM-Plug-ins und anderen verfügbaren Dateien ermöglichen',
    'LBL_LDAP_ENC_KEY_DESC' => 'Für SOAP Authentifizierung bei Benutzung von LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Die php_mcrypt muss in der php.ini aktiviert sein.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Die OpenSSL-Erweiterung muss in der php.ini-Datei aktiviert werden.',
    'LBL_ALL' => 'Alle',
    'LBL_MARK_POINT' => 'Markierungspunkt',
    'LBL_NEXT_' => 'Weiter>>',
    'LBL_REFRESH_FROM_MARK' => 'Ab Markierung aktualisieren',
    'LBL_SEARCH' => 'Suche:',
    'LBL_REG_EXP' => 'REG Exp:',
    'LBL_IGNORE_SELF' => 'Ignoriere Eigene:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markieren von wo aus die Protokollierung gestartet wird',
    'LBL_DISPLAYING_LOG' => 'Protokoll anzeigen',
    'LBL_YOUR_PROCESS_ID' => 'Ihre Prozess ID',
    'LBL_YOUR_IP_ADDRESS' => 'Ihre IP-Adresse ist.',
    'LBL_IT_WILL_BE_IGNORED' => ' Es wird ignoriert',
    'LBL_LOG_NOT_CHANGED' => 'Das Protokoll wurde nicht geändert',
    'LBL_ALERT_JPG_IMAGE' => 'Das Dateiformat für das Bild muss JPEG sein. Laden Sie eine neue Datei mit der Endung .jpg hoch.',
    'LBL_ALERT_TYPE_IMAGE' => 'Das Dateiformat für das Bild muss JPEG oder PNG sein. Laden Sie eine neue Datei mit der Endung .jpg oder .png hoch.',
    'LBL_ALERT_SIZE_RATIO' => 'Das Seitenverhältnis des Bildes sollte zwischen 1:1 und 10:1 sein. Das Bild wird skaliert.',
    'ERR_ALERT_FILE_UPLOAD' => 'Fehler während des Hochladens des Bildes.',
    'LBL_LOGGER' => 'Einstellungen für Fehlerprotokoll',
    'LBL_LOGGER_FILENAME' => 'Name der Protokolldatei',
    'LBL_LOGGER_FILE_EXTENSION' => 'Erweiterung',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximale Protokollgröße',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standardformat Datum',
    'LBL_LOGGER_LOG_LEVEL' => 'Log Stufe',
    'LBL_LEAD_CONV_OPTION' => 'Option zum Umwandeln des Interessenten',
    'LEAD_CONV_OPT_HELP' => "<b>Kopieren</b> - Erstellt Kopien aller mit dem Interessenten verbundenen Aktivitäten und weist diese den neuen Datensätzen zu, welche während der Umwandlung ausgewählt wurden. Dabei wird für jeden der ausgewählten Einträge eine Kopie erstellt.<br><br><b>Verschieben</b> - Verschiebt alle mit dem Interessenten verbundenen Aktivitäten zu den neuen Datensätzen, welche während der Umwandlung ausgewählt wurden.<br><br><b>Nichts tun</b> - Die Aktivitäten werden nicht angetastet und verbleiben beim Interessenten.",
    'LBL_CONFIG_AJAX' => 'AJAX Benutzeroberfläche konfigurieren',
    'LBL_CONFIG_AJAX_DESC' => 'Aktivieren oder deaktivieren Sie die AJAX Benutzeroberfläche für bestimmte Module',
    'LBL_LOGGER_MAX_LOGS' => 'Maximale Protokollanzahl (vor Übertrag)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Nach dem Dateinamen anhängen',
    'LBL_VCAL_PERIOD' => 'vCal Aktualisierungszeitraum:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximale Zeilenanzahl:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Geben Sie an, wie viele Zeilen in Importdateien erlaubt sind.<br>Wenn die Zeilenanzahl in einer Importdatei diesen Wert überschreitet, wird der Benutzer gewarnt.<br>Wenn keine Anzahl eingetragen ist, dann gibt es keine Beschränkung.',
    'vCAL_HELP' => 'Mit dieser Einstellung bestimmen Sie die Anzahl der Monate ab dem heutigen Datum, für welche die Frei/Belegt-Information für Anrufe und Meetings veröffentlicht werden sollen.<BR>Um die Veröffentlichung zu unterbinden, geben Sie "0" ein. Minimum ist 1 Monat, Maximum sind 12 Monate.',
    'LBL_PDFMODULE_NAME' => 'PDF-Einstellungen',
    'SUITEPDF_BASIC_SETTINGS' => 'Dokumenteigenschaften',
    'SUITEPDF_ADVANCED_SETTINGS' => 'Erweiterte Einstellungen',
    'SUITEPDF_LOGO_SETTINGS' => 'Bilder',

    'PDF_AUTHOR' => 'Autor',
    'PDF_AUTHOR_INFO' => 'Der Autor erscheint in den Dokumenteigenschaften.',

    'PDF_HEADER_LOGO' => 'Für PDF Angebote',
    'PDF_HEADER_LOGO_INFO' => 'Dieses Bild wird im Standardbriefkopf von PDF Dokumenten gedruckt.',

    'PDF_NEW_HEADER_LOGO' => 'Wählen Sie ein neues Bild für Angebote aus',
    'PDF_NEW_HEADER_LOGO_INFO' => 'Das Dateiformat kann entweder .jpg oder .png sein (nur .jpg für EZPDF).<BR>Die empfohlene Größe ist 867x60 px.',

    'PDF_SMALL_HEADER_LOGO' => 'Für PDF-Berichte',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Dieses Bild erscheint im Standard-Header von PDF-Berichten.<br>Dieses Bild erscheint außerdem in der oberen linken Ecke Ihrer SuiteCRM Applikation.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Wählen Sie ein neues Bild für Berichte aus',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Das Dateiformat kann entweder .jpg oder .png sein (nur .jpf für EZPDF).<BR>Die empfohlene Größe ist 212x40 px.',

    'PDF_FILENAME' => 'Standard-Dateiname',
    'PDF_FILENAME_INFO' => 'Standard Dateiname für erstellte PDF Dateien',

    'PDF_TITLE' => 'Titel',
    'PDF_TITLE_INFO' => 'Der Titel erscheint in den Dokumenteigenschaften.',

    'PDF_SUBJECT' => 'Betreff',
    'PDF_SUBJECT_INFO' => 'Der Betreff erscheint in den Dokumenteigenschaften.',

    'PDF_KEYWORDS' => 'Schlüsselwort(e)',
    'PDF_KEYWORDS_INFO' => 'Verbinden Sie Schlüssel- oder Schlagworte mit dem Dokument - gewöhnlich in der Form "Schlüsselwort1 Schlüsselwort2..."',

    'PDF_COMPRESSION' => 'Komprimierung',
    'PDF_COMPRESSION_INFO' => 'Schaltet die Seitenkompression ein oder aus <br>Wenn sie eingeschaltet ist, dann wird jede Seite intern komprimiert. Dies führt zu einer Größenverringerung um ca. den Faktor 2.',

    'PDF_JPEG_QUALITY' => 'JPEG Qualität (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Setzt die Standard JPEG Kompressionsqualität (1-100)',

    'PDF_PDF_VERSION' => 'PDF-Version',
    'PDF_PDF_VERSION_INFO' => 'PDF Version einstellen (PDF Referenz prüfen für gültige Werte).',

    'PDF_PROTECTION' => 'Dokumentschutz',
    'PDF_PROTECTION_INFO' => 'Den Dokumentschutz einstellen<br>- Kopieren: Kopieren von Text und Bildern in die Zwischenablage<br>- Drucken: Das Dokument drucken<br>- Ändern: Das Dokument ändern (außer Anmerkungen und Formulare)<br>- Anm.-Form.: Anmerkungen und Formulare hinzufügen<br>Hinweis: Der Schutz gegen Modifikationen ist für Leute, die das volle Acrobat Produkt benutzen.',

    'PDF_USER_PASSWORD' => 'Benutzerpasswort',
    'PDF_USER_PASSWORD_INFO' => 'Wenn Sie kein Passwort vergeben kann das Dokument ganz normal geöffnet werden. <br>Wenn Sie eines vergeben, dann fragt der PDF Viewer vor dem Öffnen danach <br>Das Master Passwort (wenn unterschiedlich vom Benutzer Passwort) gibt vollen Zugang.',

    'PDF_OWNER_PASSWORD' => 'Eigentümerpasswort',
    'PDF_OWNER_PASSWORD_INFO' => 'Wenn Sie kein Passwort vergeben, kann das Dokument ganz normal geöffnet werden. <br>Wenn Sie eines vergeben, dann fragt der PDF Viewer vor dem Öffnen danach <br>Das Master Passwort (wenn unterschiedlich vom Benutzer Passwort) gibt vollen Zugang.',

    'PDF_ACL_ACCESS' => 'Zugangskontrolle',
    'PDF_ACL_ACCESS_INFO' => 'Standard Zugangskontrolle für die PDF Erstellung',

    'K_CELL_HEIGHT_RATIO' => 'Zellenhöhenverhältnis',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Wenn die Höhe einer Zelle kleiner ist als (Höhe der Schriftart x Zellen Höhenverhältnis) dann wird (Höhe der Schriftart x Zellen Höhenverhältnis) als Zellenhöhe verwendet.<br>(Höhe der Schriftart x Zellen Höhenverhältnis) wird auch verwendet, wenn keine Zellenhöhe festgelegt wurde.',

    'K_SMALL_RATIO' => 'Faktor für kleine Schriftart',
    'K_SMALL_RATIO_INFO' => 'Verkleinerungsfaktor für kleine Schriftart',

    'PDF_IMAGE_SCALE_RATIO' => 'Bildskalierungsverhältnis',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Das verwendete Bildverhältnis zur Skalierung',

    'PDF_UNIT' => 'Einheit',
    'PDF_UNIT_INFO' => 'Maßeinheit für Dokumente',
    'PDF_GD_WARNING' => 'Sie haben die GD Bibliothek für PHP nicht installiert. Ohne diese können nur JPEG Logos in PDF Dokumenten dargestellt werden.',
    'ERR_EZPDF_DISABLE' => 'Achtung: Die EZPDF Klasse wurde in der config Tabelle deaktiviert und ist als PDF Klasse gesetzt. Bitte Speichern" Sie dieses Formular um TCPDF als PDF Klasse zu verwenden und zu einem stabilen Status zurückzukehren."',
    'LBL_IMG_RESIZED' => "(Größe für Anzeige angepasst)",


    'LBL_FONTMANAGER_BUTTON' => 'PDF-Schriftartenverwaltung',
    'LBL_FONTMANAGER_TITLE' => 'PDF-Schriftartenverwaltung',
    'LBL_FONT_BOLD' => 'Fett',
    'LBL_FONT_ITALIC' => 'Kursiv',
    'LBL_FONT_BOLDITALIC' => 'Fett/Kursiv',
    'LBL_FONT_REGULAR' => 'Standard',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Kern',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Name',
    'LBL_FONT_LIST_FILENAME' => 'Dateinamen',
    'LBL_FONT_LIST_TYPE' => 'Typ',
    'LBL_FONT_LIST_STYLE' => 'Formatvorlage',
    'LBL_FONT_LIST_STYLE_INFO' => 'Stil Schriftart',
    'LBL_FONT_LIST_ENC' => 'Kodierung',
    'LBL_FONT_LIST_EMBEDDED' => 'Eingebettet',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Markieren, um die Schriftart in die PDF Datei einzubetten',
    'LBL_FONT_LIST_CIDINFO' => 'CID-Informationen',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Für Beispiele und weitere Hilfe: www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Schriftartgröße (KB)',
    'LBL_ADD_FONT' => 'Schriftart hinzufügen',
    'LBL_BACK' => 'Zurück',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Sind Sie sicher, dass Sie diese Schriftart löschen wollen?',

    'LBL_ADDFONT_TITLE' => 'Eine PDF-Schriftart hinzufügen',
    'LBL_PDF_ENCODING_TABLE' => 'Kodierungstabelle',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Name der Kodierungstabelle.<br>Diese Option wird für TrueType Unicode, OpenType Unicode und symbolic Fonts ignoriert.<br>Die Kodierung definiert die Verbindung zwischen einem Code (von 0 bis 255) und einem Buchstaben, der in der Schriftart enthalten ist.<br>Die ersten 128 sind fix und korrespondieren mit ASCII.',
    'LBL_PDF_FONT_FILE' => 'Schriftartdatei',
    'LBL_PDF_FONT_FILE_INFO' => '.ttf oder .otf oder .pfb Datei',
    'LBL_PDF_METRIC_FILE' => 'Metrikdatei',
    'LBL_PDF_METRIC_FILE_INFO' => '.afm oder .ufm Datei',
    'LBL_ADD_FONT_BUTTON' => 'Hinzufügen',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Diese Datei hat keine gute Dateierweiterung.',

    'ERR_MISSING_CIDINFO' => 'Das Feld CID Information darf nicht leer sein.',
    'LBL_ADDFONTRESULT_TITLE' => 'Ergebnis des Hinzufügens von Schriftarten',
    'LBL_STATUS_FONT_SUCCESS' => 'Erfolg: Die Schriftart SuiteCRM hinzugefügt worden.',
    'LBL_STATUS_FONT_ERROR' => 'FEHLER: Die Schriftart wurde nicht hinzugefügt. Bitte sehen Sie sich das Protokoll unten an.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Fehler beim Hochladen der Schriftarten- oder der Metrikdatei.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Ihre Szenarien',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Keine Verfahren wurden konfiguriert',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Wählen Sie ein geeignetes Verfahren für Ihre Installation.  Diese Optionen können geändert werden nach der Installation.',

    'LBL_WIZARD_TITLE' => 'Admin-Assistent',
    'LBL_WIZARD_WELCOME_TAB' => 'Willkommen',
    'LBL_WIZARD_WELCOME_TITLE' => 'Willkommen bei SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klicken Sie auf <b>nächste</b> um Marke, zu lokalisieren und zu SuiteCRM jetzt konfigurieren. Wenn Sie SuiteCRM später konfigurieren möchten, klicken Sie auf <b>überspringen</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Weiter >',
    'LBL_WIZARD_BACK_BUTTON' => '< Zurück',
    'LBL_WIZARD_SKIP_BUTTON' => 'Überspringen',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortfahren',
    'LBL_WIZARD_FINISH_TITLE' => 'Basis-Systemkonfiguration ist abgeschlossen',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Geben Sie den Namen und das Logo Ihrer Organisation ein, um SuiteCRM zu individualisieren',
    'LBL_WIZARD_LOCALE_DESC' => 'Basierend auf Ihrer geografischen Lage können Sie hier festlegen, wie Daten in SuiteCRM angezeigt werden sollen. Die hier festgelegten Einstellungen werden zum Standard, allerdings können sie von Benutzern individuell geändert werden.',
    'LBL_WIZARD_SMTP_DESC' => 'Geben Sie das E-Mail Konto an, das verwendet wird, um Zuweisungen und neue Passwörter zu versenden. Benutzer erhalten dann die betreffenden E-Mails von diesem Konto.',
    'LBL_LOADING' => 'Lade...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Löschen' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Willkommen' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'E-Mails des verknüpften Kontakts im Subpanel Verlauf der Module anzeigen',

    // Google auth PR 6146
    'LBL_GOOGLE_AUTH_TITLE' => 'Google-Authentifizierung',
    'LBL_GOOGLE_AUTH_JSON' => 'JSON-Datei',
    'LBL_GOOGLE_AUTH_JSON_HELP' => 'Laden Sie die von der Google Developers Console heruntergeladene JSON-Datei hoch.',

);