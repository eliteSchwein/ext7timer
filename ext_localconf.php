<?php

use ThomasLudwig\Ext7Timer\Controller\TimerController;

defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Ext7Timer',
        'plugin7timer',
        [
            TimerController::class => 'list'
        ],
        // non-cacheable actions
        [
            TimerController::class => 'list'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    plugin7timer {
                        iconIdentifier = ext7timer-plugin-plugin7timer
                        title = LLL:EXT:ext7timer/Resources/Private/Language/locallang_db.xlf:tx_ext7timer_plugin7timer.name
                        description = LLL:EXT:ext7timer/Resources/Private/Language/locallang_db.xlf:tx_ext7timer_plugin7timer.description
                        tt_content_defValues {
                            CType = list
                            list_type = ext7timer_plugin7timer
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'ext7timer-plugin-plugin7timer-OFF',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:ext7timer/Resources/Public/Icons/7timer_logo.gif']
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'ext7timer',
        'constants',
        "@import 'EXT:ext7timer/Configuration/TypoScript/constants.typoscript'"
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'ext7timer',
        'setup',
        "@import 'EXT:ext7timer/Configuration/TypoScript/setup.typoscript'"
    );
});
