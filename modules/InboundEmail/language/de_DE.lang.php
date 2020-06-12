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


    'LBL_RE' => 'AW:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Login oder Passwort stimmen nicht',
    'ERR_INI_ZLIB' => 'Konnte Zlib Komprimierung nicht temporär ausschalten.Test Einstellungen" könnte fehlschlagen."',
    'ERR_NO_IMAP' => 'Keine IMAP Bibliotheken gefunden. Bitte korrigieren, bevor Sie mit eingehenden E-Mails weiterarbeiten können.',
    'ERR_NO_OPTS_SAVED' => 'Für Ihr eingehendes E-Mail Konto wurden keine Optimums gespeichert. Bitte überprüfen Sie die Einstellungen.',
    'ERR_TEST_MAILBOX' => 'Überprüfen Sie bitte Ihre Einstellungen und versuchen Sie es erneut.',

    'LBL_ASSIGN_TO_USER' => 'Mit Benutzer verknüpfen',
    'LBL_AUTOREPLY' => 'Automatische Antwortvorlage',
    'LBL_AUTOREPLY_HELP' => 'Wählen Sie eine automatisierte Antwort, um dem Sender mitzuteilen, dass seine Nachricht empfangen wurde.',
    'LBL_BASIC' => 'E-Mail Konto Information',
    'LBL_CASE_MACRO' => 'Fall Makro',
    'LBL_CASE_MACRO_DESC' => 'Setzen Sie das Makro, das verwendet wird, um importierte E-Mails zu Fällen zuzuweisen.',
    'LBL_CASE_MACRO_DESC2' => 'Setzen Sie einen beliebigen Wert, aber behalten Sie das <b>"%1"</b>."',
    'LBL_CLOSE_POPUP' => 'abcdefg',
    'LBL_CREATE_TEMPLATE' => 'Neu',
    'LBL_DELETE_SEEN' => 'Gelesene E-Mails nach Import löschen',
    'LBL_EDIT_TEMPLATE' => 'Bearbeiten',
    'LBL_EMAIL_OPTIONS' => 'E-Mail Handhabungsoptionen',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Optionen für nicht zustellbare E-Mails',
    'LBL_FILTER_DOMAIN_DESC' => 'Geben Sie eine Domain an, die keine automatischen Antworten verschickt werden.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Auswählen, um alle eingehenden E-Mails als Datensätze in SuiteCRM zu importieren.',
    'LBL_FILTER_DOMAIN' => 'Keine automatische Antwort an diese Domain',
    'LBL_FIND_SSL_WARN' => '<br>Der SSL Test kann einige Zeit dauern. Bitte haben Sie etwas Geduld.<br>',
    'LBL_FROM_ADDR' => '"Von" Adresse"',
    'LBL_FROM_ADDR_DESC' => 'Die E-Mail Adresse hier könnte aufgrund von Beschränkungen des E-Mail Anbieters nicht in der "Von" Zeile der E-Mail erscheinen. In diesem Fall wird die E-Mail Adresse verwendet, die im ausgehenden Mail Server definiert wurde.',
    'LBL_FROM_NAME' => '"Von" Name',
    'LBL_GROUP_QUEUE' => 'An Gruppe zuweisen',
    'LBL_HOME' => 'Startseite',
    'LBL_LIST_MAILBOX_TYPE' => 'Postfach Nutzung',
    'LBL_LIST_NAME' => 'Name:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Typ',
    'LBL_LIST_SERVER_URL' => 'Mail-Server',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Benutzername',
    'LBL_MAILBOX_DEFAULT' => 'POSTEINGANG',
    'LBL_MAILBOX_SSL' => 'Verwende SSL',
    'LBL_MAILBOX_TYPE' => 'Mögliche Aktionen',
    'LBL_DISTRIBUTION_METHOD' => 'Verteilermethode',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Automatische Antwortvorlage für neuen Fall',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Erstellen Sie eine automatische Antwort, um den Sender zu informieren, dass ein Fall erstellt wurde. Diese E-Mail enthält die Fallnummer in der Betreffzeile, wie sie oben im Makro definiert wurde. Diese Antwort wird allerdings nur einmal pro Fall versendet.',
    'LBL_MAILBOX' => 'Überwachter Ordner',
    'LBL_TRASH_FOLDER' => 'Papierkorb Ordner',
    'LBL_SENT_FOLDER' => 'Gesendete Objekte',
    'LBL_SELECT' => 'Auswählen',
    'LBL_MARK_READ_NO' => 'E-Mails werden nach dem Import als gelöscht markiert',
    'LBL_MARK_READ_YES' => 'Verbleibende E-Mail auf dem Server nach Import"',
    'LBL_MARK_READ' => 'Nachrichten auf Server lassen',
    'LBL_MAX_AUTO_REPLIES' => 'Anzahl der automatischen Antworten',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Setzen Sie die Maximalanzahl automatischer Antworten für eine eindeutige E-Mail Adresse innerhalb von 24 Stunden.',
    'LBL_PERSONAL_MODULE_NAME' => 'Persönliches E-Mail Konto',
    'LBL_CREATE_CASE' => 'Fall aus E-Mail erstellen',
    'LBL_CREATE_CASE_HELP' => 'Auswählen, um automatisch Fälle aus eingehenden E-Mails in SuiteCRM zu erstellen.',
    'LBL_MODULE_NAME' => 'Gruppen E-Mail Konto',
    'LBL_BOUNCE_MODULE_NAME' => 'Postfach für nicht zustellbare E-Mails',
    'LBL_MODULE_TITLE' => 'Eingehende E-Mail',
    'LBL_NAME' => 'Name',
    'LBL_NONE' => 'Kein(e)',
    'LBL_ONLY_SINCE_NO' => 'Nein. Prüfe alle E-Mails auf dem Mailserver.',
    'LBL_ONLY_SINCE_YES' => 'Ja.',
    'LBL_PASSWORD' => 'Passwort',
    'LBL_POP3_SUCCESS' => 'Ihre POP3 Test Verbindung war erfolgreich.',
    'LBL_POPUP_TITLE' => 'Testeinstellungen',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Abonnierte(n) Ordner auswählen',
    'LBL_SELECT_TRASH_FOLDERS' => 'Papierkorb Ordner auswählen',
    'LBL_SELECT_SENT_FOLDERS' => 'Ordner für gesendete Objekte auswählen',
    'LBL_DELETED_FOLDERS_LIST' => 'Folgende(r) Ordner %s existieren nicht oder wurden gelöscht',
    'LBL_PORT' => 'Mail-Server-Port',
    'LBL_REPLY_TO_NAME' => '"Antwort an" Name"',
    'LBL_REPLY_TO_ADDR' => '"Antwort an" Adresse"',
    'LBL_SAME_AS_ABOVE' => 'Verwenden aus Name/Adresse',
    'LBL_SERVER_OPTIONS' => 'Erweiterte Einstellungen',
    'LBL_SERVER_TYPE' => 'Mail Server Protokoll',
    'LBL_SERVER_URL' => 'Mail Server Adresse',
    'LBL_SSL_DESC' => 'Wenn Ihr Mail Server SSL Verbindungen unterstützt, werden beim Import der E-Mails SSL Verbindungen erzwungen.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Das gewählte Team hat Zugriff auf das Konto',
    'LBL_SSL' => 'Verwende SSL',
    'LBL_STATUS' => 'Status',
    'LBL_SYSTEM_DEFAULT' => 'Systemvorgabe',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Testeinstellungen',
    'LBL_TEST_SUCCESSFUL' => 'Verbindung erfolgreich hergestellt.',
    'LBL_TEST_WAIT_MESSAGE' => 'Einen Moment bitte...',
    'LBL_WARN_IMAP_TITLE' => 'Eingehende E-Mails deaktiviert',
    'LBL_WARN_IMAP' => 'Warnungen:',
    'LBL_WARN_NO_IMAP' => 'Eingehende E-Mail <b>kann nicht</b> funktionieren, ohne dass die IMAP c-client libraries im  PHP module integriert/aktiviert wurden. Bitte kontaktieren Sie den Administrator zur Lösung dieses Problems.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Neues Gruppen E-Mail Konto',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'NeuesNicht zustellbar" Konto"',
    'LNK_LIST_MAILBOXES' => 'Alle E-Mail Konten',
    'LNK_LIST_SCHEDULER' => 'Geplante Aufgaben',
    'LNK_SEED_QUEUES' => 'Warteschlangen der Teams',
    'LBL_GROUPFOLDER_ID' => 'Gruppenordner ID',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Benutzern erlauben, denVon" Namen / E-Mail Adresse als die Antworte an" Adresse zu verwenden?"',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Wenn diese Option ausgewählt wurde, dann erscheint für berechtigte Benutzer beim Verfassen einer E-Mail derVon" Name und dieVon" E-Mail Adresse des Gruppenkontos als Option imVon" Feld."',
    'LBL_STATUS_ACTIVE' => 'Aktiv',
    'LBL_STATUS_INACTIVE' => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'Privat',
    'LBL_IS_GROUP' => 'Gruppe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Automatisches Importieren von E-Mails',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Warnung: Sie verändern Ihre automatischen Importeinstellungen. Dies kann zu Datenverlust führen.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Warnung: Auto Import muss aktiviert sein, wenn Fälle automatisch erstellt werden sollen.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Entwürfe',
    'LBL_LIST_TITLE_MY_INBOX' => 'Posteingang',
    'LBL_LIST_TITLE_MY_SENT' => 'Gesendete E-Mail',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archivierte E-Mails',
    'LNK_MY_DRAFTS' => 'Entwürfe',
    'LNK_MY_INBOX' => 'E-Mail',
    'LNK_VIEW_MY_INBOX' => 'Email ansehen',
    'LNK_QUICK_REPLY' => 'Antwort',
    'LNK_SENT_EMAIL_LIST' => 'Postausgang',
    'LBL_EDIT_LAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Geändert von',
    'LBL_SERVICE' => 'Dienstleistung',
    'LBL_STORED_OPTIONS' => 'Gespeicherte Optionen',
    'LBL_GROUP_ID' => 'Gruppen ID',
    'LBL_REPLY_ASSIGNING_BEHAVIOR' => 'Antworten zuweisen auf', // PR 6009
    'LBL_REPLY_ASSIGNING_BEHAVIOR_HELP' => 'Wenn eine eingehende E-Mail eine Antwort auf eine E-Mail von SuiteCRM ist, wem wird die Antwort zugeordnet:<br><br><b>Nichts tun:</b> Standardverhalten. E-Mail wird niemandem zugewiesen.<br><br><b>Antwort an E-Mail-Inhaber:</b> E-Mail wird an den Inhaber der beantworteten E-Mail zugewiesen, oder dem Inhaber der zuletzt von SuiteCRM gesendeten E-Mail.<br><br><b>Assoziierter Inhaber des Falls:</b> E-Mail wird an den Inhaber des Assoziierten Falls der beantworteten E-Mail zugewiesen, oder dem Inhaber der zuletzt von SuiteCRM gesendeten E-Mail.', // PR 6009

    'LBL_CREATE_CONTACT' => 'Kontakt aus E-Mail erstellen', // PR 5721
    'LBL_CREATE_CONTACT_HELP' => 'Auswählen, um in SuiteCRM automatisch einen neuen Kontakt aus eingehenden E-Mails zu erstellen.', // PR 5721
    'LBL_CONTACT_DEFAULT_LANGUAGE' => 'Standard Sprache des Kontakts', // PR 5721
    'LBL_FILL_CONTACT_NAME' => 'Geben Sie den Namen des Kontakts ein', // PR 5721 - Escaped required
    'LBL_FILL_CONTACT_NAME_HELP' => 'Auswählen, um automatisch Vor- und Nachname in einen neu erstellten Kontakt aus eingehenden E-Mails zu übernehmen.', // PR 5721
    'LBL_CONTACT_DEFAULT_SOURCE' => 'Ursprung des Neuen Kontakts', // PR 5721
    'LBL_NEW_CASE_STATUS' => 'Status für den erstellten Fall', // PR 5721
    'LBL_NEW_CASE_PRIORITY' => 'Priorität für den erstellten Fall', // PR 5721
    'LBL_NEW_CASE_TYPE' => 'Typ für den erstellten Fall', // PR 5721
);