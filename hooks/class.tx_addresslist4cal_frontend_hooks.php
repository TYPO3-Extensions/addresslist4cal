<?php
/***************************************************************
* Copyright notice
*
* (c) 2013-2013 Michael Oehlhof <typo3@oehlhof.de>
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Class 'tx_addresslist4cal_frontend_hooks' for the 'addresslist4cal' extension.
 *
 * This class implements a hook for the frontend rendering in cal.
 *
 * @package TYPO3
 * @subpackage tx_addresslist4cal
 *
 * @author Michael Oehlhof <typo3@oehlhof.de>
 */
class tx_addresslist4cal_frontend_hooks {

	function postSearchForObjectMarker($thisCal, $template, &$sims, &$rems, $wrapped, $view) {
		$addressArray = t3lib_div::trimExplode(',', $thisCal->row['tx_addresslist4cal_addresses']);
		$addressTemplate = $thisCal->local_cObj->getSubpart($template, '###ADDRESSLIST4CAL_ADDRESS###');
		$content = '';
		foreach ($addressArray as $addressUid) {
			if (intval($addressUid) > 0) {
				// Read record from tt_address
				$where = 'uid=' . $addressUid;
				$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery('*', 'tt_address', $where);
				$row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res);
				# Get overload language record
				if ($GLOBALS['TSFE']->sys_language_content) {
					$row = $GLOBALS['TSFE']->sys_page->getRecordOverlay('tt_address',
						$row, $GLOBALS['TSFE']->sys_language_content,
						$GLOBALS['TSFE']->sys_language_contentOL, '');
				}

				// Fill marker array with data from tt_address record
				$markContentArray = array();
				foreach ($row as $key => $value) {
					$markContentArray['###' . strtoupper($key) . '###'] = $value;
				}

				// Replace marker with data from marker array
				$content .= $thisCal->local_cObj->substituteMarkerArray($addressTemplate, $markContentArray);

				$GLOBALS['TYPO3_DB']->sql_free_result($res);
			}
		}
		if ($content) {
			$sims['###ADDRESSLIST4CAL###'] = $content;
			$rems['###ADDRESSLIST4CAL_ADDRESS###'] = '';
		}
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/addresslist4cal/hooks/class.tx_addresslist4cal_frontend_hooks.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/addresslist4cal/hooks/class.tx_addresslist4cal_frontend_hooks.php']);
}
?>