<?php

namespace GBS\EntityBundle\Document\FuelBay;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EntityBundle\Document\Item;

/**
 * @MongoDB\EmbeddedDocument
 */
class FuelType extends Item
{
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
     * Get hourlyBurnRate
     *
     * @return int $hourlyBurnRate
     */
    public function getHourlyBurnRate()
    {
        return $this->hourlyBurnRate;
    }
    /**
     * @var int $itemId
     */
    protected $itemId;

    /**
     * @var int $typeId
     */
    protected $typeId;

    /**
     * @var string $typeName
     */
    protected $typeName;

    /**
     * @var int $quantity
     */
    protected $quantity;


    /**
     * Set itemId
     *
     * @param int $itemId
     * @return self
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return int $itemId
     */
    public function getItemId()
    {
        return $this->itemId;
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
     * Set typeName
     *
     * @param string $typeName
     * @return self
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * Get typeName
     *
     * @return string $typeName
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set quantity
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
