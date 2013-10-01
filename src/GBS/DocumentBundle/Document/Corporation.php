<?php

namespace GBS\DocumentBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Corporation
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Int
     */
    protected $corporationId;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $ticker;

    /**
     * @MongoDB\Int
     */
    protected $allianceId;

    /**
     * @MongoDB\String
     */
    protected $allianceName;

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
     * Set corporationId
     *
     * @param int $corporationId
     * @return self
     */
    public function setCorporationId($corporationId)
    {
        $this->corporationId = $corporationId;
        return $this;
    }

    /**
     * Get corporationId
     *
     * @return int $corporationId
     */
    public function getCorporationId()
    {
        return $this->corporationId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ticker
     *
     * @param string $ticker
     * @return self
     */
    public function setTicker($ticker)
    {
        $this->ticker = $ticker;
        return $this;
    }

    /**
     * Get ticker
     *
     * @return string $ticker
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * Set allianceId
     *
     * @param int $allianceId
     * @return self
     */
    public function setAllianceId($allianceId)
    {
        $this->allianceId = $allianceId;
        return $this;
    }

    /**
     * Get allianceId
     *
     * @return int $allianceId
     */
    public function getAllianceId()
    {
        return $this->allianceId;
    }

    /**
     * Set allianceName
     *
     * @param string $allianceName
     * @return self
     */
    public function setAllianceName($allianceName)
    {
        $this->allianceName = $allianceName;
        return $this;
    }

    /**
     * Get allianceName
     *
     * @return string $allianceName
     */
    public function getAllianceName()
    {
        return $this->allianceName;
    }
}
