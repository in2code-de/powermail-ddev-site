<?php

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\ArrayUtility;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandlerErrors'] = E_WARNING | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = E_WARNING | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern']  = 'localhost|powermail-ddev-site.ddev.site';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['solr']['sites'][1]['domains'][]  = 'powermail-ddev-site.ddev.site';

// Temporary fix:
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_sendmail_command'] = '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025 -bs';

