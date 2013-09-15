<?php

namespace GBS\EveAPIBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
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
     * @MongoDB\String
     */
    protected $type;

    /**
     * @MongoDB\Date
     */
    protected $expiration;

    /**
     * @MongoDB\ReferenceMany(
     *     targetDocument="GBS\EntityBundle\Document\Tower",
     *     cascade="delete",
     *     simple="true",
     *     inversedBy="apiKey",
     *     strategy="set"
     * )
     */
    protected $towers;

    /**
     * @MongoDB\ReferenceMany(
     *     targetDocument="GBS\EveAPIBundle\Document\KeyAuthorization",
     *     simple="true",
     *     strategy="set",
     *     inversedBy="apiKey"
     * )
     */
    protected $keyAuthorizations;
}
