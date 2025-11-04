<?php
use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Request Vars for devlog
 */
class DevlogPost {

	/**
	 * @param string $content
	 * @param array $conf
	 * @return void
	 */
	public function log($content = '', $conf = array()) {
		$array = array (
			'time' => time(),
			'values' => $_REQUEST
		);
		\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($array, 'in2code: ' . __CLASS__ . ':' . __LINE__);
		GeneralUtility::devLog('DevlogPost', 'USER_INT', 1, $array);
	}
}
