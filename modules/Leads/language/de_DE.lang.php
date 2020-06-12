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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Die Datensatznummer muss angegeben werden, um diesen Datensatz löschen zu können.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Firma Beschreibung',
    'LBL_ACCOUNT_ID' => 'Firmen ID',
    'LBL_ACCOUNT_NAME' => 'Kontoname:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ALT_ADDRESS_CITY' => '2. Adresse Ort',
    'LBL_ALT_ADDRESS_COUNTRY' => '2. Adresse Land',
    'LBL_ALT_ADDRESS_POSTALCODE' => '2. Adresse Postleitzahl',
    'LBL_ALT_ADDRESS_STATE' => '2. Adresse Bundesland',
    'LBL_ALT_ADDRESS_STREET_2' => '2. Adresse Straße 2',
    'LBL_ALT_ADDRESS_STREET_3' => '2. Adresse Straße 3',
    'LBL_ALT_ADDRESS_STREET' => '2. Adresse Straße',
    'LBL_ALTERNATE_ADDRESS' => 'Weitere Adresse:',
    'LBL_ALT_ADDRESS' => 'Weitere Adresse:',
    'LBL_ANY_ADDRESS' => 'Beliebige Adresse:',
    'LBL_ANY_EMAIL' => 'Beliebige E-Mail:',
    'LBL_ANY_PHONE' => 'Beliebige Telefonnummer:',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesener Benutzer:',
    'LBL_BUSINESSCARD' => 'Interessent umwandeln',
    'LBL_CITY' => 'Stadt:',
    'LBL_CONTACT_ID' => 'Kontakt ID',
    'LBL_CONTACT_INFORMATION' => 'Überblick', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Name des Interessenten:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Interessent Verkaufschance:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Interessent:',
    'LBL_CONVERTED_ACCOUNT' => 'Umgewandelte Firma ',
    'LBL_CONVERTED_CONTACT' => 'Umgewandelter Kontakt:',
    'LBL_CONVERTED_OPP' => 'Umgewandelte Verkaufschance:',
    'LBL_CONVERTED' => 'Umgewandelt',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Interessent umwandeln',
    'LBL_CONVERTLEAD' => 'Interessent umwandeln',
    'LBL_CONVERTLEAD_WARNING' => 'Achtung: Der umzuwandelnde Status des Interessenten ist bereitsumgewandelt". Es besteht möglicherweise bereits ein Kontakt und/oder Firma aus diesem Interessent. Um den Interessent dennoch umzuwandeln, klicken Sie bitte auf Speichern. Wenn Sie diesen nicht umwandeln möchten, klicken Sie auf Abbrechen."',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mögliche Kontaktperson:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_NEW' => 'Neu erstellt(e)',
    'LBL_CREATED_ACCOUNT' => 'Ein neues Konto wurde erstellt',
    'LBL_CREATED_CALL' => 'Neuer Anruf angelegt',
    'LBL_CREATED_CONTACT' => 'Neuer Kontakt angelegt',
    'LBL_CREATED_MEETING' => 'Neue Besprechung erstellt',
    'LBL_CREATED_OPPORTUNITY' => 'Neue Verkaufschance erstellt',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Interessenten',
    'LBL_DEPARTMENT' => 'Abteilung:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DO_NOT_CALL' => 'Nicht anrufen:',
    'LBL_DUPLICATE' => 'Ähnliche Interessenten',
    'LBL_EMAIL_ADDRESS' => 'E-Mail Adresse:',
    'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
    'LBL_EXISTING_ACCOUNT' => 'Vorhandene Firma ausgewählt',
    'LBL_EXISTING_CONTACT' => 'Vorhandener Kontakt ausgewählt',
    'LBL_EXISTING_OPPORTUNITY' => 'Vorhandene Verkaufschance benutzt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Vorname:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_HOME_PHONE' => 'Telefon Privat:',
    'LBL_IMPORT_VCARD' => 'VCard importieren',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Erstellen Sie einen neuen Interessenten, indem Sie eine vCard von Ihrem Computer importieren.',
    'LBL_INVALID_EMAIL' => 'Ungültige E-Mail Adresse:',
    'LBL_INVITEE' => 'Direkt-Unterstellte',
    'LBL_LAST_NAME' => 'Nachname:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Beschreibung der Quelle:',
    'LBL_LEAD_SOURCE' => 'Quelle des Interessenten:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontoname',
    'LBL_LIST_CONTACT_NAME' => 'Name des Interessenten',
    'LBL_LIST_CONTACT_ROLE' => 'Rolle',
    'LBL_LIST_DATE_ENTERED' => 'Erstellt am:',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail',
    'LBL_LIST_FIRST_NAME' => 'Vorname',
    'LBL_LIST_FORM_TITLE' => 'Interessentenliste',
    'LBL_LIST_LAST_NAME' => 'Nachname',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Beschreibung der Interessentenquelle',
    'LBL_LIST_LEAD_SOURCE' => 'Quelle des Interessenten',
    'LBL_LIST_MY_LEADS' => 'Meine Interessenten',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Telefon Büro',
    'LBL_LIST_REFERED_BY' => 'Empfohlen von',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Stellenbezeichnung',
    'LBL_MOBILE_PHONE' => 'Telefon Mobil:',
    'LBL_MODULE_NAME' => 'Interessenten',
    'LBL_MODULE_TITLE' => 'Interessenten: Startseite',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Neuer Interessent',
    'LBL_OFFICE_PHONE' => 'Telefon Büro:',
    'LBL_OPP_NAME' => 'Name der Verkaufschance:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Verkaufschance Betrag:',
    'LBL_OPPORTUNITY_ID' => 'Verkaufschance ID',
    'LBL_OPPORTUNITY_NAME' => 'Name der Verkaufschance:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portalanwendung',
    'LBL_PORTAL_INFORMATION' => 'Portalinformation',
    'LBL_PORTAL_NAME' => 'Portalname:',
    'LBL_POSTAL_CODE' => 'Postleitzahl:',
    'LBL_STREET' => 'Straße',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Ort',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse PLZ',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Hauptadresse Straße 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Hauptadresse Straße 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Straße',
    'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
    'LBL_REFERED_BY' => 'Empfohlen von:',
    'LBL_REPORTS_TO_ID' => 'Berichtet an ID',
    'LBL_REPORTS_TO' => 'Berichtet an:',
    'LBL_SALUTATION' => 'Anrede',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_SEARCH_FORM_TITLE' => 'Interessenten suchen',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Markierte Interessenten auswählen',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Markierte Interessenten auswählen',
    'LBL_STATE' => 'Bundesland:',
    'LBL_STATUS_DESCRIPTION' => 'Status Beschreibung:',
    'LBL_STATUS' => 'Status',
    'LBL_TITLE' => 'Stellenbezeichnung:',
    'LNK_IMPORT_VCARD' => 'Interessent aus vCard erstellen',
    'LNK_LEAD_LIST' => 'Interessenten anzeigen',
    'LNK_NEW_ACCOUNT' => 'Konto erstellen',
    'LNK_NEW_APPOINTMENT' => 'Termin erstellen',
    'LNK_NEW_CONTACT' => 'Kontakt erstellen',
    'LNK_NEW_LEAD' => 'Neuer Interessent',
    'LNK_NEW_NOTE' => 'Hinweis erstellen',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_NEW_CASE' => 'Neuer Fall',
    'LNK_NEW_CALL' => 'Anruf protokollieren',
    'LNK_NEW_MEETING' => 'Besprechung planen',
    'LNK_NEW_OPPORTUNITY' => 'Verkaufschance erstellen',
    'LNK_SELECT_ACCOUNTS' => '<b>ODER</b> Firma auswählen',
    'LNK_SELECT_CONTACTS' => ' <b>ODER</b> Wählen Sie einen Kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
    'NTC_REMOVE_CONFIRMATION' => 'Möchten Sie diesen Interessenten wirklich aus diesem Fall löschen?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagnen',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesener Benutzer',
    'LBL_PROSPECT_LIST' => 'Zielkontakteliste',
    'LBL_CAMPAIGN_LEAD' => 'Kampagnen',
    'LBL_BIRTHDATE' => 'Geburtstag:',
    'LBL_ASSISTANT_PHONE' => 'Telefon Assistent(in)',
    'LBL_ASSISTANT' => 'Assistent(in)',
    'LBL_CREATED_USER' => 'Erstellter Benutzer',
    'LBL_MODIFIED_USER' => 'Geänderter Benutzer',
    'LBL_CAMPAIGNS' => 'Kampagnen',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Erforderlich',
    'LBL_CONVERT_SELECT' => 'Auswahl erlauben',
    'LBL_CONVERT_COPY' => 'Daten kopieren',
    'LBL_CONVERT_EDIT' => 'Bearbeiten',
    'LBL_CONVERT_DELETE' => 'Löschen',
    'LBL_CONVERT_ADD_MODULE' => 'Modul hinzufügen',
    'LBL_CREATE' => 'Erstellen',
    'LBL_SELECT' => '<b>ODER</b> Auswählen',
    'LBL_WEBSITE' => 'Webseite',
    'LNK_IMPORT_LEADS' => 'Interessenten importieren',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Das Modul, in dem ein neuer Satz erstellt werden soll.',
    'LBL_REQUIRED_TIP' => 'Benötigte Module müssen erstellt oder ausgewählt sein, bevor der Interessent konvertiert werden kann.',
    'LBL_COPY_TIP' => 'Wenn ausgewählt, werden Felder des Interessenten in Felder mit dem gleichen Namen im neu erstellten Datensatz kopiert.',
    'LBL_SELECTION_TIP' => 'Module mit einem verknüpften Kontaktfeld können ausgewählt werden, anstatt sie während des Konvertierungsprozesses zu erstellen.',
    'LBL_EDIT_TIP' => 'Ändern Sie die Konvertierungsmaske für dieses Modul.',
    'LBL_DELETE_TIP' => 'Entfernen Sie dieses Modul aus der Konvertierungsmaske.',

    'LBL_ACTIVITIES_MOVE' => 'Verschiebe Aktivitäten nach',
    'LBL_ACTIVITIES_COPY' => 'Kopiere Aktivitäten nach',
    'LBL_ACTIVITIES_MOVE_HELP' => "Wählen Sie den Datensatz aus, zu dem die Aktivitäten des Interessenten verschoben werden sollen. Aufgaben, Anrufe, Meetings, Notizen und E-Mails werden zu dem(n) gewählten Eintrag(en) verschoben.",
    'LBL_ACTIVITIES_COPY_HELP' => "Wählen Sie den Datensatz aus, zu dem die Aktivitäten des Interessenten kopiert werden sollen. Aufgaben, Anrufe, Meetings, Notizen und E-Mails werden zu dem(n) gewählten Eintrag(en) kopiert.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampagnen ID',
    'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Datum eingeben' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Lade' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Bearbeiten' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Veranstaltungen',
    'LBL_WWW' => 'WWW',
);