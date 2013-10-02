<?php

namespace GBS\DocumentBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\DocumentBundle\Document\Modules;

/**
 * @MongoDB\Document
 * @MongoDB\MappedSuperclass
 * @MongoDB\InheritanceType("SINGLE_COLLECTION")
 * @MongoDB\DiscriminatorField(fieldName="module_type")
 * @MongoDB\DiscriminatorMap({
 *     "ewar_battery"       = "GBS\DocumentBundle\Document\Modules\EwarBattery",
 *     "weapon_battery"     = "GBS\DocumentBundle\Document\Modules\WeaponBattery",
 *     "assembly_array"     = "GBS\DocumentBundle\Document\Modules\AssemblyArray",
 *     "hangar_array"       = "GBS\DocumentBundle\Document\Modules\HangarArray",
 *     "cyno_beacon"        = "GBS\DocumentBundle\Document\Modules\CynoBeacon",
 *     "cyno_jammer"        = "GBS\DocumentBundle\Document\Modules\CynoJammer",
 *     "jump_bridge"        = "GBS\DocumentBundle\Document\Modules\JumpBridge",
 *     "mobile_lab"         = "GBS\DocumentBundle\Document\Modules\MobileLab",
 *     "moon_harvester"     = "GBS\DocumentBundle\Document\Modules\MoonHarvester",
 *     "reactor"            = "GBS\DocumentBundle\Document\Modules\Reactor",
 *     "refining_array"     = "GBS\DocumentBundle\Document\Modules\RefiningArray",
 *     "shield_hardener"    = "GBS\DocumentBundle\Document\Modules\ShieldHardener",
 *     "ship_maintenance"   = "GBS\DocumentBundle\Document\Modules\ShipMaintenanceArray",
 *     "silo"               = "GBS\DocumentBundle\Document\Modules\Silo",
 *     "unknown"            = "GBS\DocumentBundle\Document\Modules\UnknownModule"
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
