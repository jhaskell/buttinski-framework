<?php

namespace GBS\DocumentBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\DocumentBundle\Document\Tower;
use GBS\DocumentBundle\Document\FuelBay\FuelType;

class TowerFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tower = new Tower();

        $tower->setItemId(123456789);
        $tower->setTypeId(20063);
        $tower->setLocationId(30000142); // Jita :V
        $tower->setMoonId(40009087); // Jita 4-4 :V
        $tower->setState(4);
        $tower->setStateTimestamp('0000-00-00 00:00:00');
        $tower->setOnlineTimestamp(date('Y:m:d H:i:s'));
        $tower->setStandingOwnerId(98057873); // [MY 5S]
        $tower->setUsageFlags(0);
        $tower->setDeployFlags(0);
        $tower->setAllowCorporationMembers(true);
        $tower->setAllowAllianceMembers(false);
        $tower->setCombatStandingsOwnerId(98057873); // [MY 5S]
        $tower->setCombatStandingsThreshold(10.0);
        $tower->setCombatSecurityStatusEnabled(false);
        $tower->setCombatSecurityStatusThreshold(0.00);
        $tower->setCombatOnAggression(true);
        $tower->setCombatOnWar(true);

        $fuelType = new FuelType()
            ->setItemId(123456987)
            ->setTypeId(4312)
            ->setTypeName('Gallente Fuel Block')
            ->setQuantity(5000)
            ->setHourlyBurnRate(20);

        $strontType = new FuelType()
            ->setItemId(654789123)
            ->setTypeId(16275)
            ->setTypeName('Strontium Clathrates')
            ->setQuantity(10000)
            ->setHourlyBurnRate(200);

        $tower->getFuelBay()->addFuelType($fuelType);
        $tower->getStrontiumBay()->addFuelType($strontType);

        $manager->persist($tower);
        $manager->flush();
    }
}

