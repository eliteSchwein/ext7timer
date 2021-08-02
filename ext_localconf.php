<?php

use ThomasLudwig\Typo37timerExtension\Controller\ConfigurationController;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    ExtensionUtility::configurePlugin(
        'Typo37timerExtension',
        '7timerextensionplugin',
        [
            ConfigurationController::class => 'show'
        ],
        // non-cacheable actions
        [
            ConfigurationController::class => 'show'
        ]
    );

    // wizards
    ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    7timerextensionplugin {
                        iconIdentifier = typo3_7timer_extension-plugin-7timerextensionplugin
                        title = LLL:EXT:typo3_7timer_extension/Resources/Private/Language/locallang_db.xlf:tx_typo3_7timer_extension_7timerextensionplugin.name
                        description = LLL:EXT:typo3_7timer_extension/Resources/Private/Language/locallang_db.xlf:tx_typo3_7timer_extension_7timerextensionplugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = typo37timerextension_7timerextensionplugin
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
    $iconRegistry->registerIcon(
        'typo3_7timer_extension-plugin-7timerextensionplugin',
        SvgIconProvider::class,
        ['source' => 'EXT:typo3_7timer_extension/Resources/Public/Icons/user_plugin_7timerextensionplugin.svg']
    );

    ExtensionManagementUtility::addTypoScript(
        'tl_bath_configurator',
        'constants',
        "@import 'EXT:typo3_7timer_extension/Configuration/TypoScript/constants.typoscript'"
    );

    ExtensionManagementUtility::addTypoScript(
        'tl_bath_configurator',
        'setup',
        "@import 'EXT:typo3_7timer_extension/Configuration/TypoScript/setup.typoscript'"
    );
});
