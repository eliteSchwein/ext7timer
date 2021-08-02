<?php

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    $pluginSignature = '7timerextension_7timerplugin';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:typo3_7timer_extension/Configuration/FlexForms/Configuration.xml'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_7timerextension_domain_model_configuration', 'EXT:7timer_extension/Resources/Private/Language/locallang_csh_tx_7timerextension_domain_model_configuration.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_7timerextension_domain_model_configuration');
});
