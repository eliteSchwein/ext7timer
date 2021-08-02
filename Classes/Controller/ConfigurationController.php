<?php

declare(strict_types=1);

namespace ThomasLudwig\7timerExtension\Controller;


use ThomasLudwig\Typo37timerExtension\Domain\Repository\ConfigurationRepository;
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
     * @var ConfigurationRepository
     */
    protected $configurationRepository = null;

    /**
     * @param ConfigurationRepository $configurationRepository
     */
    public function injectConfigurationRepository(ConfigurationRepository $configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    /**
     * action list
     *
     * @param \ThomasLudwig\7timerExtension\Domain\Model\Configuration $configuration
     * @return string|object|null|void
     */
    public function listAction()
    {
        $configuration = $this->configurationRepository->fetchAll();
        $this->view->assign('configuration', $configuration);
    }
}
