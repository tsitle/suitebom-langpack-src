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
    'LBL_MODULE_NAME' => 'Zielkontakte',
    'LBL_MODULE_ID' => 'Zielkontakte',
    'LBL_INVITEE' => 'Direkt-Unterstellte',
    'LBL_MODULE_TITLE' => 'Zielkontakte: Startseite',
    'LBL_SEARCH_FORM_TITLE' => 'Zielkontakte suchen',
    'LBL_LIST_FORM_TITLE' => 'Kontaktliste',
    'LBL_NEW_FORM_TITLE' => 'Neuer Zielkontakt',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Nachname',
    'LBL_LIST_TITLE' => 'Stellenbezeichnung',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Vorname',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesen an:',
    'LBL_CAMPAIGN_ID' => 'Kampagnen ID',
    'LBL_EXISTING_ACCOUNT' => 'Bestehende Firma wurde gewählt',
    'LBL_CREATED_ACCOUNT' => 'Ein neues Konto wurde erstellt',
    'LBL_CREATED_CALL' => 'Neuer Anruf angelegt',
    'LBL_CREATED_MEETING' => 'Neue Besprechung erstellt',
    'LBL_NAME' => 'Name:',
    'LBL_PROSPECT_INFORMATION' => 'Übersicht', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MORE_INFORMATION' => 'Mehr Informationen',
    'LBL_FIRST_NAME' => 'Vorname:',
    'LBL_OFFICE_PHONE' => 'Telefon Büro:',
    'LBL_ANY_PHONE' => 'Anderes Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Nachname:',
    'LBL_MOBILE_PHONE' => 'Mobiltelefon:',
    'LBL_HOME_PHONE' => 'Festnetztelefon:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Straße:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Stadt:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse Postleitzahl:',
    'LBL_ALT_ADDRESS_STREET' => 'Zweite Adresse Straße:',
    'LBL_ALT_ADDRESS_CITY' => 'Zweite Adresse Stadt:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Zweite Adresse Land:',
    'LBL_ALT_ADDRESS_STATE' => '2. Adresse Bundesland:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '2. Adresse PLZ:',
    'LBL_TITLE' => 'Stellenbezeichnung:',
    'LBL_DEPARTMENT' => 'Abteilung:',
    'LBL_BIRTHDATE' => 'Geburtstag:',
    'LBL_EMAIL_ADDRESS' => 'E-Mail Adresse:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Verkaufschance Name',
    'LBL_ANY_EMAIL' => 'Beliebige E-Mail:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefonnr. Assistent:',
    'LBL_DO_NOT_CALL' => 'Nicht anrufen:',
    'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
    'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
    'LBL_ALTERNATE_ADDRESS' => 'Weitere Adresse:',
    'LBL_ANY_ADDRESS' => 'Beliebige Adresse:',
    'LBL_CITY' => 'Stadt:',
    'LBL_STATE' => 'Bundesland:',
    'LBL_POSTAL_CODE' => 'Postleitzahl:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_OPP_NAME' => 'Name der Verkaufschance:',
    'LBL_IMPORT_VCARD' => 'VCard importieren',
    'LBL_IMPORT_VCARDTEXT' => 'Durch Import einer vCard aus Ihrem Dateisystem neuen Kontakt automatisch anlegen.',
    'LBL_DUPLICATE' => 'Mögliche doppelte Zielkontakte',
    'MSG_SHOW_DUPLICATES' => 'Der Zielkontakt-Datensatz, den Sie gerade erstellen, könnte ein Dubikat eines bereits bestehenden Zielkontaktes sein. Zielkontakte mit ähnlichen Namen sind unten aufgeführt.<br>Drücken Sie auf Zielkontakt erstellen, um fortzusetzen oder wählen Sie einen existierenden Zielkontakt aus den unten angeführten',
    'MSG_DUPLICATE' => 'Der Zielkontakt, den Sie gerade erstellen, könnte ein Dublikat eines bereits bestehenden Zielkontakts sein. Zielkontakte mit ähnlichen Namen / E-Mail Adressen sind unten aufgeführt.<br>Drücken Sie auf Speichern, um fortzufahren oder auf Abbrechen, um zum Modul zurückzukehren, ohne den Zielkontakt zu speichern.',
    'LNK_IMPORT_VCARD' => 'vCard importieren',
    'LNK_NEW_ACCOUNT' => 'Konto erstellen',
    'LNK_NEW_OPPORTUNITY' => 'Verkaufschance erstellen',
    'LNK_NEW_CASE' => 'Fall erstellen',
    'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage',
    'LNK_NEW_CALL' => 'Anruf protokollieren',
    'LNK_NEW_EMAIL' => 'E-Mail archivieren',
    'LNK_NEW_MEETING' => 'Besprechung planen',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_NEW_APPOINTMENT' => 'Termin erstellen',
    'LNK_IMPORT_PROSPECTS' => 'Zielkontakte importieren',
    'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
    'NTC_REMOVE_CONFIRMATION' => 'Möchten Sie diesen Kontakt wirklich von diesem Fall entfernen?',
    'ERR_DELETE_RECORD' => 'Um einen Kontakt zu löschen, muss eine Datensatznummer angegeben werden.',
    'LBL_SALUTATION' => 'Anrede',
    'LBL_CREATED_OPPORTUNITY' => 'Neue Verkaufschance erstellt',
    'LNK_SELECT_ACCOUNT' => "Firma auswählen",
    'LNK_NEW_PROSPECT' => 'Zielkontakt erstellen',
    'LNK_PROSPECT_LIST' => 'Zielkontakte anzeigen',
    'LNK_NEW_CAMPAIGN' => 'Neue Kampagne',
    'LNK_CAMPAIGN_LIST' => 'Kampagnen',
    'LNK_NEW_PROSPECT_LIST' => 'Zielkontaktliste erstellen',
    'LNK_PROSPECT_LIST_LIST' => 'Zielkontaktlisten',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Markierte Zielkontakte auswählen',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Markierte Zielkontakte auswählen',
    'LBL_INVALID_EMAIL' => 'Ungültige E-Mail Adresse:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Zielkontakte',
    'LBL_PROSPECT_LIST' => 'Zielkontaktliste',
    'LBL_CONVERT_BUTTON_TITLE' => 'Zielkontakt konvertieren',
    'LBL_CONVERT_BUTTON_LABEL' => 'Zielkontakt konvertieren',
    'LNK_NEW_CONTACT' => 'Neuer Kontakt',
    'LBL_CREATED_CONTACT' => "Neuer Kontakt angelegt",
    'LBL_CAMPAIGNS' => 'Kampagnen',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagnen Log',
    'LBL_TRACKER_KEY' => 'Tracker-Schlüssel',
    'LBL_LEAD_ID' => 'Interessenten ID',
    'LBL_CONVERTED_LEAD' => 'Konvertierter Interessent',
    'LBL_ACCOUNT_NAME' => 'Kontoname',
    'LBL_EDIT_ACCOUNT_NAME' => 'Kontoname:',
    'LBL_CREATED_USER' => 'Erstellter Benutzer',
    'LBL_MODIFIED_USER' => 'Geänderter Benutzer',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Veranstaltungen',
);
