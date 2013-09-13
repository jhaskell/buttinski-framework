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
}
