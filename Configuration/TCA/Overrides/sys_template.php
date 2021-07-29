<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

ExtensionManagementUtility::addStaticFile('typo3_7timer_extension', 'Configuration/TypoScript', '7Timer Extension');
