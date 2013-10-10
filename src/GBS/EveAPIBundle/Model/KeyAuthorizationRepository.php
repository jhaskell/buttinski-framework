<?php

namespace GBS\EveAPIBundle\Model;

use Doctrine\ODM\MongoDB\DocumentRepository;
use GBS\DocumentBundle\Document\User;

class KeyAuthorizationRepository extends DocumentRepository
{
    public function getOneByIdAndUser($id, User $user)
    {
        return $this->findOneBy(array('id' => $id, 'user' => $user->getId()));
    }
}
