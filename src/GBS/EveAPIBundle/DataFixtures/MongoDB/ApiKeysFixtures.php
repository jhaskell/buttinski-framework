<?php

namespace GBS\EveAPIBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\EveAPIBundle\Document\Key\CorporationKey;
use GBS\EveAPIBundle\Document\Key\CharacterKey;
use GBS\EveAPIBundle\Document\Key\AccountKey;
use GBS\EveAPIBundle\Document\KeyAuthorization;
use GBS\DocumentBundle\Document\Corporation;
use GBS\DocumentBundle\Document\Character;

class ApiKeysFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $corpKey = new CorporationKey();

        // Not gonna bother with character keys for now
        //$charKey = new CharacterKey();
        //$accountKey = new AccountKey();

        $user = $this->getReference('user');
        $corp = $this->getReference('corporation');

        $corpKey
            ->setApiKeyId(12345)
            ->setApiVCode('deadbeef')
            ->setAccessMask(67108863)
            ->setExpiration(null)
            ->setCorporation($corp);
            
        $corpKey->addTower($this->getReference('tower-reaction_simple'));

        /*
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
         */

        $keyAuth = new KeyAuthorization();
        $keyAuth->setUser($user)
            ->setApiKey($corpKey)
            ->setName('gbs key')
            ->setEnabled(true)
            ->setCreated(new \DateTime())
            ->setUpdated(new \DateTime());

        $manager->persist($corpKey);
        //$manager->persist($charKey);
        //$manager->persist($accountKey);
        $manager->persist($keyAuth);

        $manager->flush();
    }

    public function getOrder()
    {
        return 50;
    }
}

