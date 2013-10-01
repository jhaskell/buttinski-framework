<?php

namespace GBS\EveAPIBundle\Document\Key;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use GBS\EveAPIBundle\Document\ApiKey;

/**
 * @MongoDB\Document
 */
class AccountKey extends ApiKey
{
    /**
     * @MongoDB\EmbedMany(
     *     strategy="set",
     *     targetDocument="GBS\DocumentBundle\Document\Character"
     * )
     *
     */
    protected $characters = array();
    /**
     * @var $id
     */
    protected $id;

    /**
     * @var int $apiKeyId
     */
    protected $apiKeyId;

    /**
     * @var string $apiVCode
     */
    protected $apiVCode;

    /**
     * @var int $accessMask
     */
    protected $accessMask;

    /**
     * @var date $expiration
     */
    protected $expiration;

    /**
     * @var GBS\EveAPIBundle\Document\KeyAuthorization
     */
    protected $keyAuthorizations = array();

    public function __construct()
    {
        $this->characters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->keyAuthorizations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add character
     *
     * @param GBS\EveAPIBundle\Document\Character $character
     */
    public function addCharacter(\GBS\EveAPIBundle\Document\Character $character)
    {
        $this->characters[] = $character;
    }

    /**
     * Remove character
     *
     * @param GBS\EveAPIBundle\Document\Character $character
     */
    public function removeCharacter(\GBS\EveAPIBundle\Document\Character $character)
    {
        $this->characters->removeElement($character);
    }

    /**
     * Get characters
     *
     * @return Doctrine\Common\Collections\Collection $characters
     */
    public function getCharacters()
    {
        return $this->characters;
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
     * Set apiVCode
     *
     * @param string $apiVCode
     * @return self
     */
    public function setApiVCode($apiVCode)
    {
        $this->apiVCode = $apiVCode;
        return $this;
    }

    /**
     * Get apiVCode
     *
     * @return string $apiVCode
     */
    public function getApiVCode()
    {
        return $this->apiVCode;
    }

    /**
     * Set accessMask
     *
     * @param int $accessMask
     * @return self
     */
    public function setAccessMask($accessMask)
    {
        $this->accessMask = $accessMask;
        return $this;
    }

    /**
     * Get accessMask
     *
     * @return int $accessMask
     */
    public function getAccessMask()
    {
        return $this->accessMask;
    }

    /**
     * Set expiration
     *
     * @param date $expiration
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * Get expiration
     *
     * @return date $expiration
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Add keyAuthorization
     *
     * @param GBS\EveAPIBundle\Document\KeyAuthorization $keyAuthorization
     */
    public function addKeyAuthorization(\GBS\EveAPIBundle\Document\KeyAuthorization $keyAuthorization)
    {
        $this->keyAuthorizations[] = $keyAuthorization;
    }

    /**
     * Remove keyAuthorization
     *
     * @param GBS\EveAPIBundle\Document\KeyAuthorization $keyAuthorization
     */
    public function removeKeyAuthorization(\GBS\EveAPIBundle\Document\KeyAuthorization $keyAuthorization)
    {
        $this->keyAuthorizations->removeElement($keyAuthorization);
    }

    /**
     * Get keyAuthorizations
     *
     * @return Doctrine\Common\Collections\Collection $keyAuthorizations
     */
    public function getKeyAuthorizations()
    {
        return $this->keyAuthorizations;
    }
}
