<?php

namespace GBS\DocumentBundle\Document\Inventory;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class GenericInventory implements \Iterator
{
    /**
     * @MongoDB\EmbedMany(
     *     strategy="set",
     *     targetDocument="GBS\DocumentBundle\Document\Item"
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
     * @param GBS\DocumentBundle\Document\Item $item
     */
    public function addItem(\GBS\DocumentBundle\Document\Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * Remove item
     *
     * @param GBS\DocumentBundle\Document\Item $item
     */
    public function removeItem(\GBS\DocumentBundle\Document\Item $item)
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

    public function rewind()
    {
        return reset($this->items);
    }

    public function current()
    {
        return current($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function next()
    {
        return next($this->items);
    }

    public function valid()
    {
        return key($this->items) !== null;
    }
}
