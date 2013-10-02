<?php

namespace GBS\EveAPIBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\EveAPIBundle\Document\Key\CorporationKey;
use GBS\EveAPIBundle\Document\Key\CharacterKey;
use GBS\EveAPIBundle\Document\Key\AccountKey;
use GBS\DocumentBundle\Document\Corporation;
use GBS\DocumentBundle\Document\Character;

class ApiKeysFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $corpKey = new CorpKey();
        $charKey = new CharacterKey();
        $accountKey = new AccountKey();

        $corpKey
            ->setApiKeyId(12345)
            ->setApiVCode('deadbeef')
            ->setAccessMask(67108863)
            ->setExpiration(null);
            
        $charKey
            ->setApiKeyId(54321)
            ->setApiVCode('beefcritter')
            ->setAccessMask(268435455)
            ->setExpiration(null);

        $accountKey
            ->setApiKeyId(67890)
            ->setApiVCode('beefdinner')
            ->setAccessMask(268435455)
            ->setExpiration(null);
    }
}


