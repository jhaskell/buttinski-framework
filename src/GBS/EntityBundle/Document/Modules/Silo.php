<?php

namespace GBS\EntityBundle\Document\Modules;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EntityBundle\Document\Module;

/**
 * @MongoDB\Document
 */
class Silo extends Module
{
    /**
     * @MongoDB\EmbedOne(
     *     strategy="set",
     *     targetDocument="GBS\EntityBundle\Document\Item"
     * )
     */
    protected $contents;
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
     * Set contents
     *
     * @param GBS\EntityBundle\Document\Item $contents
     * @return self
     */
    public function setContents(\GBS\EntityBundle\Document\Item $contents)
    {
        $this->contents = $contents;
        return $this;
    }

    /**
     * Get contents
     *
     * @return GBS\EntityBundle\Document\Item $contents
     */
    public function getContents()
    {
        return $this->contents;
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
