<?php

namespace GBS\EntityBundle\Document\Modules;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EntityBundle\Document\Module;

/**
 * @MongoDB\Document
 */
class ShieldHardener extends Module
{
    /**
     * @MongoDB\Int
     */
    protected $resistEm;

    /**
     * @MongoDB\Int
     */
    protected $resistExplosive;

    /**
     * @MongoDB\Int
     */
    protected $resistThermal;

    /**
     * @MongoDB\Int
     */
    protected $resistKinetic;
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
     * Set resistEm
     *
     * @param int $resistEm
     * @return self
     */
    public function setResistEm($resistEm)
    {
        $this->resistEm = $resistEm;
        return $this;
    }

    /**
     * Get resistEm
     *
     * @return int $resistEm
     */
    public function getResistEm()
    {
        return $this->resistEm;
    }

    /**
     * Set resistExplosive
     *
     * @param int $resistExplosive
     * @return self
     */
    public function setResistExplosive($resistExplosive)
    {
        $this->resistExplosive = $resistExplosive;
        return $this;
    }

    /**
     * Get resistExplosive
     *
     * @return int $resistExplosive
     */
    public function getResistExplosive()
    {
        return $this->resistExplosive;
    }

    /**
     * Set resistThermal
     *
     * @param int $resistThermal
     * @return self
     */
    public function setResistThermal($resistThermal)
    {
        $this->resistThermal = $resistThermal;
        return $this;
    }

    /**
     * Get resistThermal
     *
     * @return int $resistThermal
     */
    public function getResistThermal()
    {
        return $this->resistThermal;
    }

    /**
     * Set resistKinetic
     *
     * @param int $resistKinetic
     * @return self
     */
    public function setResistKinetic($resistKinetic)
    {
        $this->resistKinetic = $resistKinetic;
        return $this;
    }

    /**
     * Get resistKinetic
     *
     * @return int $resistKinetic
     */
    public function getResistKinetic()
    {
        return $this->resistKinetic;
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
