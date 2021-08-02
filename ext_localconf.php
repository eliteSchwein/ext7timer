<?php

use ThomasLudwig\Typo37timerExtension\Controller\ConfigurationController;

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        '7timerExtension',
        '7timerplugin',
        [
            ConfigurationController::class => 'list'
        ],
        // non-cacheable actions
        [
            ConfigurationController::class => 'list'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    7timerextensionplugin {
                        iconIdentifier = 7timer_extension-plugin-7timerplugin
                        title = LLL:EXT:7timer_extension/Resources/Private/Language/locallang_db.xlf:tx_7timer_extension_7timerplugin.name
                        description = LLL:EXT:7timer_extension/Resources/Private/Language/locallang_db.xlf:tx_7timer_extension_7timerplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = 7timerextension_7timerplugin
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        '7timer_extension-plugin-7timerplugin',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:7timer_extension/Resources/Public/Icons/7timer_logo.gif']
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        '7timer_extension',
        'constants',
        "@import 'EXT:7timer_extension/Configuration/TypoScript/constants.typoscript'"
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        '7timer_extension',
        'setup',
        "@import 'EXT:7timer_extension/Configuration/TypoScript/setup.typoscript'"
    );
});
