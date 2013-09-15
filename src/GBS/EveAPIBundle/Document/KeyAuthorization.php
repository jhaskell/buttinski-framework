<?php

namespace GBS\EveAPIBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class KeyAuthorization
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(
     *     targetDocument="GBS\EntityBundle\Document\User",
     *     simple="true"
     * )
     */
    protected $user;

    /**
     * @MongoDB\ReferenceOne(
     *     targetDocument="GBS\EveAPIBundle\Document\ApiKey",
     *     simple="true"
     * )
     */
    protected $apiKey;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\Boolean
     */
    protected $enabled;

    /**
     * @MongoDB\Date
     */
    protected $created;

    /**
     * @MongoDB\Date
     */
    protected $updated;

}
