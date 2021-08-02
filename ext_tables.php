<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    ExtensionManagementUtility::addLLrefForTCAdescr('tx_typo37timer_extension_domain_model_configuration', 'EXT:typo37timer_extension/Resources/Private/Language/locallang_csh_tx_typo37timerextension_domain_model_configuration.xlf');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_typo37timer_extension_domain_model_configuration');
});
