<?php

declare(strict_types=1);

namespace ThomasLudwig\Ext7timer\Controller;

use ThomasLudwig\ext7timer\Domain\Repository\ConfigurationRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
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
class TimerController extends ActionController
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
     * @return string|object|null|void
     */
    public function listAction()
    {
        $configurationRepo = $this->configurationRepository->findAll();
        $configuration = $this->getCoords($this->settings, $configurationRepo);
        $this->view->assign('default_configuration', $configuration);
        $this->view->assign('configurations', $configurationRepo);
    }

    private function getCoords($settings, $repo) {
        if(empty($settings)) {
            return $repo->getFirst();
        }
        foreach ($repo as $key => $value) {
            if($value->getUid() == $settings['coords']) {
                return $value;
            }
        }
        return null;
    }
}
