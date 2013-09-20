<?php

namespace GBS\DocumentBundle\Document\FuelBay;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class TowerStrontiumBay extends FuelBay
{
    /**
     * @var GBS\DocumentBundle\Document\Inventory\GenericInventory
     */
    protected $inventory;

    /**
     * @var GBS\DocumentBundle\Document\FuelBay\FuelType
     */
    protected $fuelTypes = array();

    public function __construct()
    {
        $this->fuelTypes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set inventory
     *
     * @param GBS\DocumentBundle\Document\Inventory\GenericInventory $inventory
     * @return self
     */
    public function setInventory(\GBS\DocumentBundle\Document\Inventory\GenericInventory $inventory)
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * Get inventory
     *
     * @return GBS\DocumentBundle\Document\Inventory\GenericInventory $inventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Add fuelType
     *
     * @param GBS\DocumentBundle\Document\FuelBay\FuelType $fuelType
     */
    public function addFuelType(\GBS\DocumentBundle\Document\FuelBay\FuelType $fuelType)
    {
        $this->fuelTypes[] = $fuelType;
    }

    /**
     * Remove fuelType
     *
     * @param GBS\DocumentBundle\Document\FuelBay\FuelType $fuelType
     */
    public function removeFuelType(\GBS\DocumentBundle\Document\FuelBay\FuelType $fuelType)
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
