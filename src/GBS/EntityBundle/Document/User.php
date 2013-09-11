<?php

namespace GBS\EntityBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use FOS\UserBundle\Document\User as BaseUser;

class User extends BaseUser
{
    protected $id;
}
