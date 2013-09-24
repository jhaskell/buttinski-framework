<?php

namespace GBS\EveAPIBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Character
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Int
     */
    protected $characterId;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\Int
     */
    protected $corporationId;

    /**
     * @MongoDB\String
     */
    protected $corporationName;

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
     * Set characterId
     *
     * @param int $characterId
     * @return self
     */
    public function setCharacterId($characterId)
    {
        $this->characterId = $characterId;
        return $this;
    }

    /**
     * Get characterId
     *
     * @return int $characterId
     */
    public function getCharacterId()
    {
        return $this->characterId;
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
     * Set corporationName
     *
     * @param string $corporationName
     * @return self
     */
    public function setCorporationName($corporationName)
    {
        $this->corporationName = $corporationName;
        return $this;
    }

    /**
     * Get corporationName
     *
     * @return string $corporationName
     */
    public function getCorporationName()
    {
        return $this->corporationName;
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
