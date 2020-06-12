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
    'LBL_LIST_FORM_TITLE' => 'Liste der ausgehenden E-Mail-Konten',
    'LBL_MODULE_NAME' => 'Ausgehende E-Mail-Konten',
    'LBL_MODULE_TITLE' => 'Ausgehende E-Mail-Konten',
    'LBL_HOMEPAGE_TITLE' => 'Meine ausgehenden E-Mail-Konten',
    'LNK_NEW_RECORD' => 'Ausgehende E-Mail-Konten erstellen',
    'LNK_LIST' => 'Ausgehende e-Mail-Konten ansehen',
    'LBL_SEARCH_FORM_TITLE' => 'Ausgehende E-Mail-Konten suchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'Neue ausgehende E-Mail-Konten',
    'LBL_USERNAME' => 'Benutzername',
    'LBL_PASSWORD' => 'Kennwort',
    'LBL_SMTP_SERVERNAME' => 'SMTP-Server-Hostname',
    'LBL_SMTP_AUTH' => 'SMTP-Auth',
    'LBL_SMTP_PORT' => 'SMTP Port',
    'LBL_SMTP_PROTOCOL' => 'SMTP-Protokoll',
    'LBL_EDITVIEW_PANEL1' => 'Account Einstellungen',
    'LBL_CHANGE_PASSWORD' => 'Kennwort ändern',
    'LBL_SEND_TEST_EMAIL' => 'Test E-Mail senden',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Der Administrator hat den Systen SMTP Server noch nicht konfiguriert. Es kann keine Test E-Mail versendet werden.',
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

    'LBL_TYPE' => 'Typ',
    'LBL_MAIL_SENDTYPE' => 'E-Mail sende Art',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Absendername',
    'LBL_SMTP_FROM_ADDR' => 'Absenderadresse',
);
