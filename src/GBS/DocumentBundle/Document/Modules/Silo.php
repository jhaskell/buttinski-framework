<?php

namespace GBS\DocumentBundle\Document\Modules;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\DocumentBundle\Document\Module;

/**
 * @MongoDB\Document
 */
class Silo extends Module
{
    /**
     * @MongoDB\EmbedOne(
     *     strategy="set",
     *     targetDocument="GBS\DocumentBundle\Document\Item"
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
     * Set contents
     *
     * @param GBS\DocumentBundle\Document\Item $contents
     * @return self
     */
    public function setContents(\GBS\DocumentBundle\Document\Item $contents)
    {
        $this->contents = $contents;
        return $this;
    }

    /**
     * Get contents
     *
     * @return GBS\DocumentBundle\Document\Item $contents
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
}
