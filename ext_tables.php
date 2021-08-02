<?php

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_typo37timerextension_domain_model_configuration', 'EXT:typo3_7timer_extension/Resources/Private/Language/locallang_csh_tx_typo37timerextension_domain_model_configuration.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_typo37timerextension_domain_model_configuration');
});
