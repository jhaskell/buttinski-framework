<?php

namespace GBS\EntityBundle\Document\FuelBay;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EntityBundle\Document\Item;

/**
 * @MongoDB\EmbeddedDocument
 */
class FuelType
{
    /**
     * @MongoDB\Int
     */
    protected $typeId;

    /**
     * @MongoDB\Int
     */
    protected $hourlyBurnRate;

    /**
     * @return int Hours until this fuel type is exhausted
     */
    public function getHoursRemaining()
    {
        if ($this->hourlyBurnRate === 0) {
            return INF;
        }

        return floor($this->quantity / $this->hourlyBurnRate);
    }

    /**
     * Set hourlyBurnRate
     *
     * @param int $hourlyBurnRate
     * @return self
     */
    public function setHourlyBurnRate($hourlyBurnRate)
    {
        $this->hourlyBurnRate = $hourlyBurnRate;
        return $this;
    }

    /**
     * Set typeId
     *
     * @param int $typeId
     * @return self
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * Get typeId
     *
     * @return int $typeId
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Get hourlyBurnRate
     *
     * @return int $hourlyBurnRate
     */
    public function getHourlyBurnRate()
    {
        return $this->hourlyBurnRate;
    }
}
