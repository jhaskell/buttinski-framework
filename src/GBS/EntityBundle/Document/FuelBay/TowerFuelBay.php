<?php

namespace GBS\EntityBundle\Document\FuelBay;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class TowerFuelBay extends FuelBay
{
    /**
     * @var GBS\EntityBundle\Document\Inventory\GenericInventory
     */
    protected $inventory;

    /**
     * @var GBS\EntityBundle\Document\FuelBay\FuelType
     */
    protected $fuelTypes = array();

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
