<?php

declare(strict_types=1);

namespace ThomasLudwig\Typo3_7timerExtension\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * This file is part of the "7Timer Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Thomas Ludwig <admin@eliteschw31n.de>, -
 */

/**
 * Configuration
 */
class Configuration extends AbstractEntity
{

    /**
     * label
     *
     * @var string
     */
    protected $label = '';

    /**
     * lon
     *
     * @var float
     */
    protected $lon = 0.0;

    /**
     * lat
     *
     * @var float
     */
    protected $lat = 0.0;

    /**
     * Returns the label
     *
     * @return string $label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the label
     *
     * @param string $label
     * @return void
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * Returns the lon
     *
     * @return float $lon
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Sets the lon
     *
     * @param float $lon
     * @return void
     */
    public function setLon(float $lon)
    {
        $this->lon = $lon;
    }

    /**
     * Returns the lat
     *
     * @return float $lat
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Sets the lat
     *
     * @param float $lat
     * @return void
     */
    public function setLat(float $lat)
    {
        $this->lat = $lat;
    }
}
