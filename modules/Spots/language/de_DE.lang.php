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
    'LBL_SECURITYGROUPS' => 'Sicherheitsgruppen',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sicherheitsgruppen',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Erstellt am',
    'LBL_DATE_MODIFIED' => 'Geändert am',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'Name',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von Benutzer',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Bearbeiten',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_LIST_FORM_TITLE' => 'Pivot-Liste',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'Meine Pivot',
    'LNK_NEW_RECORD' => 'Pivot erstellen',
    'LNK_LIST' => 'Pivot anzeigen',
    'LBL_SEARCH_FORM_TITLE' => 'Pivot suchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'Neue Pivot',
    'LBL_CONFIG' => 'Konfiguration',
    'LBL_TYPE' => 'Auswertungsbereich',
    'LNK_SPOT_LIST' => 'Berichte ansehen',
    'LNK_SPOT_CREATE' => 'Bericht erstellen',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Konfiguration',

    'LBL_AN_UNSUPPORTED_DB' => 'Es tut uns leid, Suite Spots sind derzeit nur für MySQL und MS SQL verfügbar',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Name',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Firmen-Typ',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Branche',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Rechnungsadresse Land',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Zugewiesener Benutzer',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Quelle des Interessenten',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Kampagnenname',
    'LBL_AN_LEADS_YEAR' => 'Jahr',
    'LBL_AN_LEADS_QUARTER' => 'Quartal',
    'LBL_AN_LEADS_MONTH' => 'Monat',
    'LBL_AN_LEADS_WEEK' => 'Woche',
    'LBL_AN_LEADS_DAY' => 'Tag',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Kontoname',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Name der Verkaufschance ',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Zugewiesener Benutzer',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'VerkaufschancenTyp',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Quelle des Interessenten',
    'LBL_AN_SALES_AMOUNT' => 'Betrag',
    'LBL_AN_SALES_STAGE' => 'Verkaufsphase',
    'LBL_AN_SALES_PROBABILITY' => 'Wahrscheinlichkeit',
    'LBL_AN_SALES_DATE' => 'Verkaufsdatum',
    'LBL_AN_SALES_QUARTER' => 'Verkaufsquartal',
    'LBL_AN_SALES_MONTH' => 'Verkaufsmonat',
    'LBL_AN_SALES_WEEK' => 'Verkaufswoche',
    'LBL_AN_SALES_DAY' => 'Verkaufstag',
    'LBL_AN_SALES_YEAR' => 'Verkaufsjahr',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampagne',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Kontoname',
    'LBL_AN_SERVICE_STATE' => 'Bundesland',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Priorität',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Tag der Erstellung',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Woche der Erstellung',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Monat der Erstellung',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Quartal der Erstellung',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Jahr der Erstellung',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Kontaktname',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Zugewiesener Benutzer',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Typ',
    'LBL_AN_ACTIVITIES_NAME' => 'Name',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Zugewiesener Benutzer',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Typ',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Erwartete Kosten',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Erwarteter Umsatz',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Name der Verkaufschance ',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Betrag der Verkaufschance',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Verkaufsphase',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Verkaufschance zugew. Benutzer',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Kontoname',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Kampagnenname',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Aktivitätsdatum',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Aktivitätstyp',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Verknüpfter Typ',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Verknüpfte ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Name der Verkaufschance ',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Typ der Verkaufschance ',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Verkaufschancen nach Quelle',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Verkaufsphase',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Kontoname',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Kontaktname',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Elementname',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Elementtyp',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Produktkategorie',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Produkt Anzahl',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Produkt Listenpreis',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Produkt Verkaufspreis',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Produkt Einstandspreis',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Produkt Rabatt',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Zu verwendender Rabattbetrag',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Produkt Gesamt',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Gesamtbetrag',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Zugewiesener Benutzer',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Erstellt am',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Tag erstellt',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Woche erstellt',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Monat erstellt',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Quartal erstellt',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Jahr erstellt',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Fehler beim Ermitteln der Bezeichnung für den Pivot Unterbereich',

    //Added to allow for the UI of the pivot to be language agnostic - PR 5452
    'LBL_RENDERERS_TABLE' =>'Tabelle',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Tabelle Balkendiagramm',
    'LBL_RENDERERS_HEATMAP' =>'Heatmap',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Zeile Heatmap',
    'LBL_RENDERERS_COL_HEATMAP' =>'Spalte Heatmap',
    'LBL_RENDERERS_LINE_CHART' =>'Liniendiagramm',
    'LBL_RENDERERS_BAR_CHART' =>'Balkendiagramm',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Gestapelter Balken',
    'LBL_RENDERERS_AREA_CHART' =>'Flächendiagramm',
    'LBL_RENDERERS_SCATTER_CHART' =>'Scatter Chart',

    'LBL_AGGREGATORS_COUNT' => 'Zähler',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Zähle Einzelwerte',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'Liste eindeutiger Werte',
    'LBL_AGGREGATORS_SUM' => 'Summe',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Integer Summe',
    'LBL_AGGREGATORS_AVERAGE' => 'Durchschnitt',
    'LBL_AGGREGATORS_MINIMUM' => 'Minimum',
    'LBL_AGGREGATORS_MAXIMUM' => 'Maximum',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Gesamtsumme',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => 'Obergrenze 80 %',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => 'Untergrenze 80 %',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Teilergebnisse der Gesamtsumme',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Teilergebnisse der Zeilen',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Teilergebnisse der Spalten',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Teilanzahl des Gesamtergebnisses',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Teilanzahl der Zeilen',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Teilanzahl der Spalten',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'Beim rendern der PivotTabellen-Ergebnisse ist ein Fehler aufgetreten.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'Bei der Verarbeitung der Ergebnisse der Pivot-Tabelle ist ein Fehler aufgetreten.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'Beim rendern der PivotTabellen-Oberfläche ist ein Fehler aufgetreten.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'Alle auswählen',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Nichts auswählen',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(zu viele Ergebnisse)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Ergebnisse filtern',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Summen',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => 'durch',
    'LBL_LOCALE_STRINGS_OK' => 'OK',

    'LBL_ACTIVITIES_CALL'=>'Anruf',
    'LBL_ACTIVITIES_MEETING'=>'Termin',
    'LBL_ACTIVITIES_TASK'=>'Aufgabe',
);
