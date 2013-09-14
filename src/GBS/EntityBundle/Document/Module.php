<?php

namespace GBS\EntityBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EntityBundle\Document\Modules;

/**
 * @MongoDB\Document
 * @MongoDB\MappedSuperclass
 * @MongoDB\InheritanceType("SINGLE_COLLECTION")
 * @MongoDB\DiscriminatorField(fieldName="module_type")
 * @MongoDB\DiscriminatorMap({
 *     "ewar_battery"       = "GBS\EntityBundle\Document\Modules\EwarBattery",
 *     "weapon_battery"     = "GBS\EntityBundle\Document\Modules\WeaponBattery",
 *     "assembly_array"     = "GBS\EntityBundle\Document\Modules\AssemblyArray",
 *     "hangar_array"       = "GBS\EntityBundle\Document\Modules\HangarArray",
 *     "cyno_beacon"        = "GBS\EntityBundle\Document\Modules\CynoBeacon",
 *     "cyno_jammer"        = "GBS\EntityBundle\Document\Modules\CynoJammer",
 *     "jump_bridge"        = "GBS\EntityBundle\Document\Modules\JumpBridge",
 *     "mobile_lab"         = "GBS\EntityBundle\Document\Modules\MobileLab",
 *     "moon_harvester"     = "GBS\EntityBundle\Document\Modules\MoonHarvester",
 *     "reactor"            = "GBS\EntityBundle\Document\Modules\Reactor",
 *     "refining_array"     = "GBS\EntityBundle\Document\Modules\RefiningArray",
 *     "shield_hardener"    = "GBS\EntityBundle\Document\Modules\ShieldHardener",
 *     "ship_maintenance"   = "GBS\EntityBundle\Document\Modules\ShipMaintenanceArray",
 *     "silo"               = "GBS\EntityBundle\Document\Modules\Silo",
 *     "unknown"            = "GBS\EntityBundle\Document\Modules\UnknownModule"
 * })
 */
class Module
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\Int
     */
    protected $itemId;

    /**
     * @MongoDB\Int
     */
    protected $typeId;

    /**
     * @MongoDB\Int
     */
    protected $locationId;


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
