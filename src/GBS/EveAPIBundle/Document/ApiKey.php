<?php

namespace GBS\EveAPIBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 * @MongoDB\MappedSuperclass
 * @MongoDB\DiscriminatorField(fieldName="type")
 * @MongoDB\DiscriminatorMap({
 *     "Account"     = "GBS\EveAPIBundle\Document\Key\AccountKey",
 *     "Character"   = "GBS\EveAPIBundle\Document\Key\CharacterKey",
 *     "Corporation" = "GBS\EveAPIBundle\Document\Key\CorporationKey"
 * })
 */
class ApiKey
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\Int
     */
    protected $apiKeyId;

    /**
     * @MongoDB\String
     */
    protected $apiVCode;

    /**
     * @MongoDB\Int
     */
    protected $accessMask;
    
    /**
     * @MongoDB\Date
     */
    protected $expiration;

    /**
     * @MongoDB\ReferenceMany(
     *     targetDocument="GBS\EveAPIBundle\Document\KeyAuthorization",
     *     simple="true",
     *     strategy="set",
     *     inversedBy="apiKey"
     * )
     */
    protected $keyAuthorizations;

    public function __construct()
    {
        $this->keyAuthorizations = new \Doctrine\Common\Collections\ArrayCollection();
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
