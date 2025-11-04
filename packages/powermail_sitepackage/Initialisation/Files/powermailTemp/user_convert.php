<?php

/**
 * Class user_convert
 */
class user_convert {

	/**
	 * @param string $content
	 * @param array $configuration
	 * @return string
	 */
	public function main($content = '', $configuration = array()) {
		$pluginVariables = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('tx_powermail_pi1');
		$value = $pluginVariables['field'][$configuration['markerName']];
		return strtotime($value);
	}
}