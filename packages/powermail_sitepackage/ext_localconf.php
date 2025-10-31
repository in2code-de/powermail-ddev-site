<?php

/** @noinspection PhpFullyQualifiedNameUsageInspection */

declare(strict_types=1);

defined('TYPO3') or die('Access denied.');

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['powermail_sitepackage'] = 'EXT:powermail_sitepackage/Configuration/RTE/Default.yaml';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants('
  @import \'EXT:powermail_sitepackage/Configuration/TypoScript/constants.typoscript\'
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
  @import \'EXT:powermail_sitepackage/Configuration/TypoScript/setup.typoscript\'
');
