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
     *
     * @MongoDB\EmbedMany(
     *     strategy="set",
     *     targetDocument="GBS\EveAPIBundle\Document\Character"
     * )
     *
     */
    protected $characters = array();
}

