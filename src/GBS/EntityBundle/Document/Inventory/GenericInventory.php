<?php

namespace GBS\EntityBundle\Document\Inventory;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class GenericInventory
{
    /**
     * @MongoDB\EmbedMany(
     *     strategy="set",
     *     targetDocument="GBS\EntityBundle\Document\Item"
     * )
     */
    protected $items = array();

    /**
     * @MongoDB\Float
     */
    protected $capacityUsed;

    /**
     * @MongoDB\Float
     */
    protected $capacityTotal;

    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add item
     *
     * @param GBS\EntityBundle\Document\Item $item
     */
    public function addItem(\GBS\EntityBundle\Document\Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * Remove item
     *
     * @param GBS\EntityBundle\Document\Item $item
     */
    public function removeItem(\GBS\EntityBundle\Document\Item $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return Doctrine\Common\Collections\Collection $items
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set capacityUsed
     *
     * @param float $capacityUsed
     * @return self
     */
    public function setCapacityUsed($capacityUsed)
    {
        $this->capacityUsed = $capacityUsed;
        return $this;
    }

    /**
     * Get capacityUsed
     *
     * @return float $capacityUsed
     */
    public function getCapacityUsed()
    {
        return $this->capacityUsed;
    }

    /**
     * Set capacityTotal
     *
     * @param float $capacityTotal
     * @return self
     */
    public function setCapacityTotal($capacityTotal)
    {
        $this->capacityTotal = $capacityTotal;
        return $this;
    }

    /**
     * Get capacityTotal
     *
     * @return float $capacityTotal
     */
    public function getCapacityTotal()
    {
        return $this->capacityTotal;
    }
}
