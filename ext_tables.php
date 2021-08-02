<?php

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    $pluginSignature = 'ext7timer_plugin7timer';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:ext7timer/Configuration/FlexForms/Configuration.xml'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ext7timer_domain_model_configuration', 'EXT:ext7timer/Resources/Private/Language/locallang_csh_tx_ext7timer_domain_model_configuration.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ext7timer_domain_model_configuration');
});
