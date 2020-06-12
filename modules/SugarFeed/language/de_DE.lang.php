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
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesene Benutzer-ID',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Erstellungsdatum',
    'LBL_DATE_MODIFIED' => 'Änderungsdatum',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'Name',
    'LBL_SAVING' => 'Speichern…',
    'LBL_SAVED' => 'Gespeichert',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von Benutzer',
    'LBL_LIST_FORM_TITLE' => 'Feed Liste',
    'LBL_MODULE_NAME' => 'Aktivitätsmonitor',
    'LBL_MODULE_TITLE' => 'Aktivitätsmonitor',
    'LBL_DASHLET_DISABLED' => 'Warnung: Das Feed System ist deaktiviert, bis zur Aktivierung werden keine neuen Feed Einträge veröffentlicht',
    'LBL_RECORDS_DELETED' => 'Alle bisherigen Feed Einträge wurden entfernt, wenn das Feed System aktiviert wird, werden neue Einträge automatisch generiert.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Wollen Sie wirklich alle Feed Einträge löschen?',
    'LBL_FLUSH_RECORDS' => 'Feed Einträge löschen',
    'LBL_ENABLE_FEED' => 'Mein Aktivitätsmonitor Dashlet aktivieren',
    'LBL_ENABLE_MODULE_LIST' => 'Feeds aktivieren für',
    'LBL_HOMEPAGE_TITLE' => 'Mein Aktivitätsmonitor',
    'LNK_NEW_RECORD' => 'Feed erstellen',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Feed durchsuchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'Neuer Newsfeed',
    'LBL_ALL' => 'Alle',
    'LBL_USER_FEED' => 'Benutzer Feed',
    'LBL_ENABLE_USER_FEED' => 'Benutzer Feed aktivieren',
    'LBL_TO' => 'Sichtbar für Team',
    'LBL_IS' => 'ist',
    'LBL_DONE' => 'Fertig',
    'LBL_TITLE' => 'Titel',
    'LBL_ROWS' => 'Zeilen',
    'LBL_CATEGORIES' => 'Module',
    'LBL_TIME_LAST_WEEK' => 'Letzte Woche',
    'LBL_TIME_WEEKS' => 'Wochen',
    'LBL_TIME_DAY' => 'Tag', // PR 6080
    'LBL_TIME_DAYS' => 'Tage',
    'LBL_TIME_YESTERDAY' => 'Gestern',
    'LBL_TIME_HOURS' => 'Stunden',
    'LBL_TIME_HOUR' => 'Stunden',
    'LBL_TIME_MINUTES' => 'Minuten',
    'LBL_TIME_MINUTE' => 'Minute',
    'LBL_TIME_SECONDS' => 'Sekunden',
    'LBL_TIME_SECOND' => 'Sekunde',
    'LBL_TIME_AND' => 'und',
    'LBL_TIME_AGO' => 'zuvor',
// Activity stream
    'CREATED_CONTACT' => 'hat einen <b>NEUEN</b> {0} erstellt',
    'CREATED_OPPORTUNITY' => 'hat eine <b>NEUE</b> {0} erstellt',
    'CREATED_CASE' => 'hat einen <b>NEUEN</b> {0} erstellt',
    'CREATED_LEAD' => 'hat einen <b>NEUEN</b> {0} erstellt',
    'FOR' => 'für', // Activity stream for cases
    'FOR_AMOUNT' => 'für Betrag', // Activity stream for opportunity
    'CLOSED_CASE' => 'einen {0} <b>GESCHLOSSEN</b> ',
    'CONVERTED_LEAD' => 'einen {0} <b>KONVERTIERT</b> ',
    'WON_OPPORTUNITY' => 'einen {0} <b>GEWONNEN</b> ',
    'WITH' => 'mit',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Bild',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Auswählen',
    'LBL_POST' => 'Veröffentlichen',
    'LBL_AUTHENTICATE' => 'Verbinden mit',
    'LBL_AUTHENTICATION_PENDING' => 'Nicht alle externen Konten, die Sie ausgewählt haben wurden authentifiziert. Klicken Sie auf  \\"Abbrechen\\", um zum Fenster mit den Optionen für die externe Authentifizierung zurückzukehren, oder klicken Sie aufOK", um ohne Authentifizierung fortzufahren."',
    'LBL_ADVANCED_SEARCH' => 'Erweiterter Filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Mehr Optionen anzeigen',
    'LBL_HIDE_OPTIONS' => 'Optionen verbergen',
    'LBL_VIEW' => 'Ansicht',
    'LBL_POST_TITLE' => 'Status Update zeigen für',
    'LBL_URL_LINK_TITLE' => 'URL Link der benutzt werden soll',
);
