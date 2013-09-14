<?php

namespace GBS\EntityBundle\Document\FuelBay;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 * @MongoDB\MappedSuperclass
 * @MongoDB\InheritanceType("SINGLE_COLLECTION")
 * @MongoDB\DiscriminatorField(fieldName="fuel_bay_type")
 * @MongoDB\DiscriminatorMap({
 *     "tower_fuel"="GBS\EntityBundle\Document\FuelBay\TowerFuelBay",
 *     "tower_stront"="GBS\EntityBundle\Document\FuelBay\TowerStrontiumBay",
 * })
 */
class FuelBay
{
    /**
     * @MongoDB\EmbedOne(
     *     targetDocument="GBS\EntityBundle\Document\Inventory\GenericInventory",
     *     strategy="set"
     * )
     */
    protected $inventory;

    /**
     * @MongoDB\EmbedMany(
     *     targetDocument="GBS\EntityBundle\Document\FuelBay\FuelType",
     *     strategy="set"
     * )
     */
    protected $fuelTypes = array();

    public function getHoursRemaining()
    {
        $leastHoursRemaining = INF;

        foreach ($this->fuelTypes as $fuel) {
            $hoursRemaining = $fuel->getHoursRemaining();

            if ($hoursRemaining < $leastHoursRemaining) {
                $leastHoursRemaining = $hoursRemaining;
            }
        }

        return $leastHoursRemaining;
    }

    public function __construct()
    {
        $this->fuelTypes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set inventory
     *
     * @param GBS\EntityBundle\Document\Inventory\GenericInventory $inventory
     * @return self
     */
    public function setInventory(\GBS\EntityBundle\Document\Inventory\GenericInventory $inventory)
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * Get inventory
     *
     * @return GBS\EntityBundle\Document\Inventory\GenericInventory $inventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Add fuelType
     *
     * @param GBS\EntityBundle\Document\FuelBay\FuelType $fuelType
     */
    public function addFuelType(\GBS\EntityBundle\Document\FuelBay\FuelType $fuelType)
    {
        $this->fuelTypes[] = $fuelType;
    }

    /**
     * Remove fuelType
     *
     * @param GBS\EntityBundle\Document\FuelBay\FuelType $fuelType
     */
    public function removeFuelType(\GBS\EntityBundle\Document\FuelBay\FuelType $fuelType)
    {
        $this->fuelTypes->removeElement($fuelType);
    }

    /**
     * Get fuelTypes
     *
     * @return Doctrine\Common\Collections\Collection $fuelTypes
     */
    public function getFuelTypes()
    {
        return $this->fuelTypes;
    }
}
