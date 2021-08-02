<?php

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Typo37timerExtension',
        '7timerextensionplugin',
        [
            ThomasLudwig\Typo37timerExtension\Controller\ConfigurationController::class => 'show'
        ],
        // non-cacheable actions
        [
            ThomasLudwig\Typo37timerExtension\Controller\ConfigurationController::class => 'show'
        ]
    );

    // wizards
    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    7timerextensionplugin {
                        iconIdentifier = typo37timer_extension-plugin-7timerextensionplugin
                        title = LLL:EXT:typo37timer_extension/Resources/Private/Language/locallang_db.xlf:tx_typo37timer_extension_7timerextensionplugin.name
                        description = LLL:EXT:typo37timer_extension/Resources/Private/Language/locallang_db.xlf:tx_typo37timer_extension_7timerextensionplugin.description
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
        'typo37timer_extension-plugin-7timerextensionplugin',
        TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:typo37timer_extension/Resources/Public/Icons/user_plugin_7timerextensionplugin.svg']
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'typo37timer_extension',
        'constants',
        "@import 'EXT:typo37timer_extension/Configuration/TypoScript/constants.typoscript'"
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'typo37timer_extension',
        'setup',
        "@import 'EXT:typo37timer_extension/Configuration/TypoScript/setup.typoscript'"
    );
});
