<?php

namespace GBS\DocumentBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\DocumentBundle\Document\Corporation;

class CorporationFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $corp = new Corporation();

        $corp->setCorporationId(98057873)
            ->setName('GBS Logistics and Fives Support')
            ->setTicker('MY 5S')
            ->setAllianceId(1354830081)
            ->setAllianceName('Goonswarm Federation');

        $manager->persist($corp);
        $manager->flush();

        $this->addReference('corporation', $corp);
    }

    public function getOrder()
    {
        return 40;
    }
}

