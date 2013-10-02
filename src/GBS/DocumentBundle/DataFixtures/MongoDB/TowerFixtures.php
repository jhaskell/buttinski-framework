<?php

namespace GBS\DocumentBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\DocumentBundle\Document\Tower;
use GBS\DocumentBundle\Document\FuelBay\FuelType;
use GBS\DocumentBundle\Document\FuelBay\TowerFuelBay;
use GBS\DocumentBundle\Document\FuelBay\TowerStrontiumBay;

class TowerFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tower = new Tower();
        $tower->setItemId(123456789)
            ->setTypeId(20063)
            ->setLocationId(30000142) // Jita :V
            ->setMoonId(40009087) // Jita 4-4 :V
            ->setState(4)
            ->setStateTimestamp('0000-00-00 00:00:00')
            ->setOnlineTimestamp(date('Y:m:d H:i:s'))
            ->setStandingOwnerId(98057873) // [MY 5S]
            ->setUsageFlags(0)
            ->setDeployFlags(0)
            ->setAllowCorporationMembers(true)
            ->setAllowAllianceMembers(false)
            ->setCombatStandingsOwnerId(98057873) // [MY 5S]
            ->setCombatStandingsThreshold(10.0)
            ->setCombatSecurityStatusEnabled(false)
            ->setCombatSecurityStatusThreshold(0.00)
            ->setCombatOnAggression(true)
            ->setCombatOnWar(true)
            ->setFuelBay(new TowerFuelBay())
            ->setStrontiumBay(new TowerStrontiumBay());

        $fuelType = new FuelType();
        $fuelType->setItemId(123456987)
            ->setTypeId(4312)
            ->setTypeName('Gallente Fuel Block')
            ->setQuantity(5000)
            ->setHourlyBurnRate(20);

        $strontType = new FuelType();
        $strontType->setItemId(654789123)
            ->setTypeId(16275)
            ->setTypeName('Strontium Clathrates')
            ->setQuantity(10000)
            ->setHourlyBurnRate(200);


        $tower->getFuelBay()->addFuelType($fuelType);
        $tower->getStrontiumBay()->addFuelType($strontType);

        $manager->persist($tower);
        $manager->flush();

        $this->addReference('tower-reaction_simple', $tower);
    }

    public function getOrder()
    {
        return 10;
    }
}

