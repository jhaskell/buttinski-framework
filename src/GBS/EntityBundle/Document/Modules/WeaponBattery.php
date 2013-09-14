<?php

namespace GBS\EntityBundle\Document\Modules;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EntityBundle\Document\Module;

/**
 * @MongoDB\Document
 */
class WeaponBattery extends Module
{
    /**
     * @MongoDB\EmbedOne(
     *     strategy="set",
     *     targetDocument="GBS\EntityBundle\Document\Inventory\GenericInventory"
     * )
     */
    protected $ammunition;
    /**
     * @var $id
     */
    protected $id;

    /**
     * @var int $itemId
     */
    protected $itemId;

    /**
     * @var int $typeId
     */
    protected $typeId;

    /**
     * @var int $locationId
     */
    protected $locationId;


    /**
     * Set ammunition
     *
     * @param GBS\EntityBundle\Document\Inventory\GenericInventory $ammunition
     * @return self
     */
    public function setAmmunition(\GBS\EntityBundle\Document\Inventory\GenericInventory $ammunition)
    {
        $this->ammunition = $ammunition;
        return $this;
    }

    /**
     * Get ammunition
     *
     * @return GBS\EntityBundle\Document\Inventory\GenericInventory $ammunition
     */
    public function getAmmunition()
    {
        return $this->ammunition;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

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
     * Set locationId
     *
     * @param int $locationId
     * @return self
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
        return $this;
    }

    /**
     * Get locationId
     *
     * @return int $locationId
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
}
