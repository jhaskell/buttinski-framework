<?php

namespace GBS\EntityBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EntityBundle\Document\Inventory\TowerFuelBay;
use GBS\EntityBundle\Document\Inventory\TowerStrontiumBay;

/**
 * @MongoDB\Document
 */
class Tower
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
     * @MongoDB\Int
     */
    protected $moonId;

    /**
     * @MongoDB\Int
     */
    protected $state;

    /**
     * @MongoDB\Date
     */
    protected $stateTimestamp;

    /**
     * @MongoDB\Date
     */
    protected $onlineTimestamp;

    /**
     * @MongoDB\Int
     */
    protected $standingOwnerId;

    /**
     * @MongoDB\Int
     */
    protected $apiKeyId;

    /**
     * @MongoDB\Int
     */
    protected $usageFlags;

    /**
     * @MongoDB\Int
     */
    protected $deployFlags;

    /**
     * @MongoDB\Boolean
     */
    protected $allowCorporationMembers;

    /**
     * @MongoDB\Boolean
     */
    protected $allowAllianceMembers;

    /**
     * @MongoDB\Int
     */
    protected $combatStandingsOwnerId;

    /**
     * @MongoDB\Int
     */
    protected $combatStandingsThreshold;

    /**
     * @MongoDB\Boolean
     */
    protected $combatSecurityStatusEnabled;

    /**
     * @MongoDB\Int
     */
    protected $combatSecurityStatusThreshold;

    /**
     * @MongoDB\Boolean
     */
    protected $combatOnAggression;

    /**
     * @MongoDB\Boolean
     */
    protected $combatOnWar;

    /**
     * @MongoDB\EmbedOne(
     *     targetDocument="GBS\EntityBundle\Document\FuelBay\TowerFuelBay"
     * )
     */
    protected $fuelBay;

    /**
     * @MongoDB\EmbedOne(
     *     targetDocument="GBS\EntityBundle\Document\FuelBay\TowerFuelBay"
     * )
     */
    protected $strontiumBay;

    /**
     * @MongoDB\ReferenceMany(
     *     strategy="set",
     *     cascade="all",
     *     simple="true",
     *     targetDocument="GBS\EntityBundle\Document\Module"
     * )
     */
    protected $modules;

    /**
     * @MongoDB\ReferenceOne(
     *     targetDocument="GBS\EveAPIBundle\Document\ApiKey",
     *     simple="true",
     *     mappedBy="towers"
     * )
     */
    protected $apiKey;

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

    /**
     * Set moonId
     *
     * @param int $moonId
     * @return self
     */
    public function setMoonId($moonId)
    {
        $this->moonId = $moonId;
        return $this;
    }

    /**
     * Get moonId
     *
     * @return int $moonId
     */
    public function getMoonId()
    {
        return $this->moonId;
    }

    /**
     * Set state
     *
     * @param int $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return int $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set stateTimestamp
     *
     * @param date $stateTimestamp
     * @return self
     */
    public function setStateTimestamp($stateTimestamp)
    {
        $this->stateTimestamp = $stateTimestamp;
        return $this;
    }

    /**
     * Get stateTimestamp
     *
     * @return date $stateTimestamp
     */
    public function getStateTimestamp()
    {
        return $this->stateTimestamp;
    }

    /**
     * Set onlineTimestamp
     *
     * @param date $onlineTimestamp
     * @return self
     */
    public function setOnlineTimestamp($onlineTimestamp)
    {
        $this->onlineTimestamp = $onlineTimestamp;
        return $this;
    }

    /**
     * Get onlineTimestamp
     *
     * @return date $onlineTimestamp
     */
    public function getOnlineTimestamp()
    {
        return $this->onlineTimestamp;
    }

    /**
     * Set standingOwnerId
     *
     * @param int $standingOwnerId
     * @return self
     */
    public function setStandingOwnerId($standingOwnerId)
    {
        $this->standingOwnerId = $standingOwnerId;
        return $this;
    }

    /**
     * Get standingOwnerId
     *
     * @return int $standingOwnerId
     */
    public function getStandingOwnerId()
    {
        return $this->standingOwnerId;
    }

    /**
     * Set apiKeyId
     *
     * @param int $apiKeyId
     * @return self
     */
    public function setApiKeyId($apiKeyId)
    {
        $this->apiKeyId = $apiKeyId;
        return $this;
    }

    /**
     * Get apiKeyId
     *
     * @return int $apiKeyId
     */
    public function getApiKeyId()
    {
        return $this->apiKeyId;
    }

    /**
     * Set usageFlags
     *
     * @param int $usageFlags
     * @return self
     */
    public function setUsageFlags($usageFlags)
    {
        $this->usageFlags = $usageFlags;
        return $this;
    }

    /**
     * Get usageFlags
     *
     * @return int $usageFlags
     */
    public function getUsageFlags()
    {
        return $this->usageFlags;
    }

    /**
     * Set deployFlags
     *
     * @param int $deployFlags
     * @return self
     */
    public function setDeployFlags($deployFlags)
    {
        $this->deployFlags = $deployFlags;
        return $this;
    }

    /**
     * Get deployFlags
     *
     * @return int $deployFlags
     */
    public function getDeployFlags()
    {
        return $this->deployFlags;
    }

    /**
     * Set allowCorporationMembers
     *
     * @param boolean $allowCorporationMembers
     * @return self
     */
    public function setAllowCorporationMembers($allowCorporationMembers)
    {
        $this->allowCorporationMembers = $allowCorporationMembers;
        return $this;
    }

    /**
     * Get allowCorporationMembers
     *
     * @return boolean $allowCorporationMembers
     */
    public function getAllowCorporationMembers()
    {
        return $this->allowCorporationMembers;
    }

    /**
     * Set allowAllianceMembers
     *
     * @param boolean $allowAllianceMembers
     * @return self
     */
    public function setAllowAllianceMembers($allowAllianceMembers)
    {
        $this->allowAllianceMembers = $allowAllianceMembers;
        return $this;
    }

    /**
     * Get allowAllianceMembers
     *
     * @return boolean $allowAllianceMembers
     */
    public function getAllowAllianceMembers()
    {
        return $this->allowAllianceMembers;
    }

    /**
     * Set combatStandingsOwnerId
     *
     * @param int $combatStandingsOwnerId
     * @return self
     */
    public function setCombatStandingsOwnerId($combatStandingsOwnerId)
    {
        $this->combatStandingsOwnerId = $combatStandingsOwnerId;
        return $this;
    }

    /**
     * Get combatStandingsOwnerId
     *
     * @return int $combatStandingsOwnerId
     */
    public function getCombatStandingsOwnerId()
    {
        return $this->combatStandingsOwnerId;
    }

    /**
     * Set combatStandingsThreshold
     *
     * @param int $combatStandingsThreshold
     * @return self
     */
    public function setCombatStandingsThreshold($combatStandingsThreshold)
    {
        $this->combatStandingsThreshold = $combatStandingsThreshold;
        return $this;
    }

    /**
     * Get combatStandingsThreshold
     *
     * @return int $combatStandingsThreshold
     */
    public function getCombatStandingsThreshold()
    {
        return $this->combatStandingsThreshold;
    }

    /**
     * Set combatSecurityStatusEnabled
     *
     * @param boolean $combatSecurityStatusEnabled
     * @return self
     */
    public function setCombatSecurityStatusEnabled($combatSecurityStatusEnabled)
    {
        $this->combatSecurityStatusEnabled = $combatSecurityStatusEnabled;
        return $this;
    }

    /**
     * Get combatSecurityStatusEnabled
     *
     * @return boolean $combatSecurityStatusEnabled
     */
    public function getCombatSecurityStatusEnabled()
    {
        return $this->combatSecurityStatusEnabled;
    }

    /**
     * Set combatSecurityStatusThreshold
     *
     * @param int $combatSecurityStatusThreshold
     * @return self
     */
    public function setCombatSecurityStatusThreshold($combatSecurityStatusThreshold)
    {
        $this->combatSecurityStatusThreshold = $combatSecurityStatusThreshold;
        return $this;
    }

    /**
     * Get combatSecurityStatusThreshold
     *
     * @return int $combatSecurityStatusThreshold
     */
    public function getCombatSecurityStatusThreshold()
    {
        return $this->combatSecurityStatusThreshold;
    }

    /**
     * Set combatOnAggression
     *
     * @param boolean $combatOnAggression
     * @return self
     */
    public function setCombatOnAggression($combatOnAggression)
    {
        $this->combatOnAggression = $combatOnAggression;
        return $this;
    }

    /**
     * Get combatOnAggression
     *
     * @return boolean $combatOnAggression
     */
    public function getCombatOnAggression()
    {
        return $this->combatOnAggression;
    }

    /**
     * Set combatOnWar
     *
     * @param boolean $combatOnWar
     * @return self
     */
    public function setCombatOnWar($combatOnWar)
    {
        $this->combatOnWar = $combatOnWar;
        return $this;
    }

    /**
     * Get combatOnWar
     *
     * @return boolean $combatOnWar
     */
    public function getCombatOnWar()
    {
        return $this->combatOnWar;
    }

    /**
     * Set fuelBay
     *
     * @param GBS\EntityBundle\Document\FuelBay\TowerFuelBay $fuelBay
     * @return self
     */
    public function setFuelBay(\GBS\EntityBundle\Document\FuelBay\TowerFuelBay $fuelBay)
    {
        $this->fuelBay = $fuelBay;
        return $this;
    }

    /**
     * Get fuelBay
     *
     * @return GBS\EntityBundle\Document\FuelBay\TowerFuelBay $fuelBay
     */
    public function getFuelBay()
    {
        return $this->fuelBay;
    }

    /**
     * Set strontiumBay
     *
     * @param GBS\EntityBundle\Document\FuelBay\TowerFuelBay $strontiumBay
     * @return self
     */
    public function setStrontiumBay(\GBS\EntityBundle\Document\FuelBay\TowerFuelBay $strontiumBay)
    {
        $this->strontiumBay = $strontiumBay;
        return $this;
    }

    /**
     * Get strontiumBay
     *
     * @return GBS\EntityBundle\Document\FuelBay\TowerFuelBay $strontiumBay
     */
    public function getStrontiumBay()
    {
        return $this->strontiumBay;
    }
    public function __construct()
    {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add module
     *
     * @param GBS\EntityBundle\Document\Module $module
     */
    public function addModule(\GBS\EntityBundle\Document\Module $module)
    {
        $this->modules[] = $module;
    }

    /**
     * Remove module
     *
     * @param GBS\EntityBundle\Document\Module $module
     */
    public function removeModule(\GBS\EntityBundle\Document\Module $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return Doctrine\Common\Collections\Collection $modules
     */
    public function getModules()
    {
        return $this->modules;
    }
}
