<?php

namespace GBS\DocumentBundle\Document\FuelBay;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\Common\Collections\ArrayCollection;
use GBS\DocumentBundle\Document\Inventory\GenericInventory;

/**
 * @MongoDB\EmbeddedDocument
 */
class TowerFuelBay extends FuelBay
{
    /**
     * @var GBS\DocumentBundle\Document\Inventory\GenericInventory
     */
    protected $inventory;

    /**
     * @var GBS\DocumentBundle\Document\FuelBay\FuelType
     * @MongoDB\EmbedMany(
     *     targetDocument="GBS\DocumentBundle\Document\FuelBay\FuelType",
     *     strategy="set"
     * )
     */
    
    protected $fuelTypes = array();

    public function __construct()
    {
        $this->fuelTypes = new ArrayCollection();
        $this->inventory = new GenericInventory();
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
