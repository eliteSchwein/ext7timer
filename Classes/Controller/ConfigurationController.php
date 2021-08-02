<?php

declare(strict_types=1);

namespace ThomasLudwig\Typo37timerExtension\Controller;


use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * This file is part of the "7Timer Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Thomas Ludwig <admin@eliteschw31n.de>, -
 */

/**
 * ConfigurationController
 */
class ConfigurationController extends ActionController
{

    /**
     * configurationRepository
     *
     * @var \ThomasLudwig\Typo37timerExtension\Domain\Repository\ConfigurationRepository
     */
    protected $configurationRepository = null;

    /**
     * @param \ThomasLudwig\Typo37timerExtension\Domain\Repository\ConfigurationRepository $configurationRepository
     */
    public function injectConfigurationRepository(\ThomasLudwig\Typo37timerExtension\Domain\Repository\ConfigurationRepository $configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    /**
     * action show
     *
     * @param \ThomasLudwig\Typo37timerExtension\Domain\Model\Configuration $configuration
     * @return string|object|null|void
     */
    public function showAction(\ThomasLudwig\Typo37timerExtension\Domain\Model\Configuration $configuration)
    {
        $this->view->assign('configuration', $configuration);
    }
}
