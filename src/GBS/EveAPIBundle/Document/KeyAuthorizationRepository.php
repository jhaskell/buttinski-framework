<?php

namespace GBS\EveAPIBundle\Document;

use Doctrine\ODM\MongoDB\DocumentRepository;
use GBS\EveAPIBundle\Document\ApiKey;
use GBS\DocumentBundle\Document\User;

class KeyAuthorizationRepository extends DocumentRepository
{
    public function getOneByApiKeyAndUser(ApiKey $key, User $user)
    {
        return $this->createQueryBuilder()
            ->field('apiKey')->equals($key->getId())
            ->field('user')->equals($user->getId())
            ->getQuery()
            ->getSingleResult();
    }
}
