<?php

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Typo3_7timerExtension',
        '7timerextensionplugin',
        [
            ThomasLudwig\Typo3_7timerExtension\Controller\ConfigurationController::class => 'show'
        ],
        // non-cacheable actions
        [
            ThomasLudwig\Typo3_7timerExtension\Controller\ConfigurationController::class => 'show'
        ]
    );

    // wizards
    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    7timerextensionplugin {
                        iconIdentifier = typo3_7timer_extension-plugin-7timerextensionplugin
                        title = LLL:EXT:typo3_7timer_extension/Resources/Private/Language/locallang_db.xlf:tx_typo3_7timer_extension_7timerextensionplugin.name
                        description = LLL:EXT:typo3_7timer_extension/Resources/Private/Language/locallang_db.xlf:tx_typo3_7timer_extension_7timerextensionplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = typo3_7timerextension_7timerextensionplugin
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'typo3_7timer_extension-plugin-7timerextensionplugin',
        TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:typo3_7timer_extension/Resources/Public/Icons/user_plugin_7timerextensionplugin.svg']
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'typo3_7timer_extension',
        'constants',
        "@import 'EXT:typo3_7timer_extension/Configuration/TypoScript/constants.typoscript'"
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'typo3_7timer_extension',
        'setup',
        "@import 'EXT:typo3_7timer_extension/Configuration/TypoScript/setup.typoscript'"
    );
});
