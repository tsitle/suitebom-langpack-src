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
    'LBL_NAME' => 'Titel',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von Benutzer',
    'ERR_DELETE_RECORD' => 'Um dieses Konto zu löschen, muss eine Datensatznummer angegeben werden.',
    'LBL_ACCOUNT_NAME' => 'Titel',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ANNUAL_REVENUE' => 'Jahresumsatz:',
    'LBL_ANY_ADDRESS' => 'Beliebige Adresse:',
    'LBL_ANY_EMAIL' => 'Beliebige E-Mail Adresse:',
    'LBL_ANY_PHONE' => 'Beliebige Telefonnummer:',
    'LBL_RATING' => 'Bewertung',
    'LBL_ASSIGNED_USER' => 'Benutzer',
    'LBL_BILLING_ADDRESS_CITY' => 'Rechnungsadresse Stadt:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Rechnungsadresse Land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Rechnungsadresse Postleitzahl:',
    'LBL_BILLING_ADDRESS_STATE' => 'Rechnungsadresse Bundesland:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rechnungsadresse Straße 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rechnungsadresse Straße 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rechnungsadresse Straße 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Rechnungsadresse Straße:',
    'LBL_BILLING_ADDRESS' => 'Rechnungsadresse::',
    'LBL_ACCOUNT_INFORMATION' => 'Überblick',
    'LBL_CITY' => 'Stadt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Konten',
    'LBL_DUPLICATE' => 'Möglicher doppelter Firmeneintrag',
    'LBL_EMAIL' => 'E-Mail-Adresse:',
    'LBL_EMPLOYEES' => 'Mitarbeiter:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Branche:',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontoname',
    'LBL_LIST_CITY' => 'Stadt',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail Adresse',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Bundesland',
    'LBL_MEMBER_OF' => 'Mitglied von:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Mitglieder',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail Adresse:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_OWNERSHIP' => 'Eigentümer:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Mutterfirma',
    'LBL_PHONE_ALT' => 'Zweite Telefonnummer:',
    'LBL_PHONE_FAX' => 'Telefon/Fax:',
    'LBL_PHONE_OFFICE' => 'Telefon Büro:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Postleitzahl:',
    'LBL_SAVE_ACCOUNT' => 'Firma speichern',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Versandadresse Stadt:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Versandadresse Land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Versandadresse PLZ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Versandadresse Bundesland:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Versandadresse Straße 2:',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Versandadresse Straße 3:',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Versandadresse Straße 4:',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Versandadresse Straße:',
    'LBL_SHIPPING_ADDRESS' => 'Versandadresse:',
    'LBL_STATE' => 'Bundesland:',
    'LBL_TICKER_SYMBOL' => 'Börsenkürzel:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Webseite:',
    'LNK_ACCOUNT_LIST' => 'Konten',
    'LNK_NEW_ACCOUNT' => 'Konto erstellen',
    'MSG_DUPLICATE' => 'Die Erstellung dieser Firma wird möglicherweise ein Duplikat erstellen. Sie können entweder eine Firma aus der nachstehenden Liste auswählen oder auf Speichern klicken, um mit der Erstellung der neuen Firma mit den bereits eingetragenen Daten fortzufahren.',
    'MSG_SHOW_DUPLICATES' => 'Die Erstellung dieser Firma wird möglicherweise ein Duplikat erstellen. Sie können entweder auf Speichern klicken, um mit der Erstellung der neuen Firma mit den bereits eingetragenen Daten fortzufahren, oder auf Abbrechen klicken.',
    'NTC_DELETE_CONFIRMATION' => 'Wollen Sie diesen Eintrag wirklich löschen?',
    'LBL_LIST_FORM_TITLE' => 'Rechnungsliste',
    'LBL_MODULE_NAME' => 'Rechnungen',
    'LBL_MODULE_TITLE' => 'Rechnungen: Startseite',
    'LBL_HOMEPAGE_TITLE' => 'Meine Rechnungen',
    'LNK_NEW_RECORD' => 'Rechnung erstellen',
    'LNK_LIST' => 'Rechnungen anzeigen',
    'LBL_SEARCH_FORM_TITLE' => 'Rechnungen suchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf anzeigen',
    'LBL_NEW_FORM_TITLE' => 'Neue Rechnung',
    'LBL_TERMS_C' => 'Konditionen',
    'LBL_APPROVAL_ISSUE' => 'Genehmigungsprobleme',
    'LBL_APPROVAL_STATUS' => 'Status für die Genehmigung',
    'LBL_BILLING_ACCOUNT' => 'Konto',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Gültig bis',
    'LBL_INVOICE_NUMBER' => 'Rechnungsnummer',
    'LBL_OPPORTUNITY' => 'Name der Verkaufschance',
    'LBL_TEMPLATE_DDOWN_C' => 'Rechnungsvorlagen',
    'LBL_STAGE' => 'Angebotsphase',
    'LBL_TERM' => 'Zahlungskonditionen',
    'LBL_SUBTOTAL_AMOUNT' => 'Zwischensumme',
    'LBL_DISCOUNT_AMOUNT' => 'Rabatt',
    'LBL_TAX_AMOUNT' => 'Steuer',
    'LBL_SHIPPING_AMOUNT' => 'Versand',
    'LBL_TOTAL_AMT' => 'Gesamt',
    'VALUE' => 'Titel',
    'LBL_EMAIL_ADDRESSES' => 'E-Mail Adressen',
    'LBL_LINE_ITEMS' => 'Posten',
    'LBL_GRAND_TOTAL' => 'Endsumme',
    'LBL_QUOTE_NUMBER' => 'Angebotsnummer',
    'LBL_QUOTE_DATE' => 'Angebotsdatum',
    'LBL_INVOICE_DATE' => 'Rechnungsdatum',
    'LBL_DUE_DATE' => 'Fälligkeitsdatum',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Rechnungsstatus',
    'LBL_PRODUCT_QUANITY' => 'Menge',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Teilenummer',
    'LBL_PRODUCT_NOTE' => 'Notiz',
    'LBL_PRODUCT_DESCRIPTION' => 'Beschreibung',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Rabatt',
    'LBL_UNIT_PRICE' => 'Verkaufspreis',
    'LBL_TOTAL_PRICE' => 'Gesamt',
    'LBL_VAT' => 'Steuer', //VAT
    'LBL_VAT_AMT' => 'MwSt.-Betrag', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Produktzeile hinzufügen',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Verkaufspreis',
    'LBL_SERVICE_DISCOUNT' => 'Rabatt',
    'LBL_ADD_SERVICE_LINE' => 'Servicezeile hinzufügen',
    'LBL_REMOVE_PRODUCT_LINE' => 'Entfernen',
    'LBL_PRINT_AS_PDF' => 'Als PDF drucken',
    'LBL_EMAIL_INVOICE' => 'Rechnung per E-Mail versenden',
    'LBL_LIST_NUM' => 'Nr.',
    'LBL_PDF_NAME' => 'Rechnung',
    'LBL_EMAIL_NAME' => 'Rechnung für',
    'LBL_NO_TEMPLATE' => 'FEHLER\nKeine Vorlage gefunden. Sollten Sie noch keine Rechnungsvorlage erstellt haben, gehen Sie zu den PDF Vorlagemodulen.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Zwischensumme + Steuer',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF per E-Mail versenden',
    'LBL_ADD_GROUP' => 'Gruppe hinzufügen',
    'LBL_DELETE_GROUP' => 'Gruppe löschen',
    'LBL_GROUP_NAME' => 'Gruppenname',
    'LBL_GROUP_TOTAL' => 'Gesamtsumme',
    'LBL_SHIPPING_TAX' => 'Versandsteuer',
    'LBL_SHIPPING_TAX_AMT' => 'Versandsteuer',
    'LBL_IMPORT_LINE_ITEMS' => 'Zeilenelemente importieren',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Zwischensumme (Währung)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabatt (Währung)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Steuer (Währung)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Versand (Währung)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Gesamt (Währung)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Versandsteuer (Standardwährung)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Gesamtsumme (Währung)',
    'LBL_INVOICE_TO' => 'Rechnung an',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Einzelposten-Gruppen',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produkt-Angebote',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Angebote : Rechnungen',
);