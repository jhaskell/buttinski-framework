<?php

namespace GBS\EntityBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\EntityBundle\Document\Tower;
use GBS\EntityBundle\Document\FuelBay\FuelType;
use GBS\EntityBundle\Document\Item;

class TowerFixtures
{
    $tower = new Tower();
    $fuelBay = new FuelBay();

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
        ->setTypeId(4312)
        ->setHourlyBurnRate(20);

    $fuel = new Item()
        ->setItemId(123456987)
        ->setTypeId(4312)
        ->setTypeName('Gallente Fuel Block')
        ->setQuantity(5000);

    $strontType = new FuelType()
        ->setTypeId(16275)
        ->setHourlyBurnRate(200);

    $stront = new Item()
        ->setItemId(312456789)
        ->setTypeId(16275)
        ->setTypeName('Strontium Clathrates')
        ->setQuantity(10000);

    $tower->getFuelBay()
        ->addFuelType($fuelType)
        ->getInventory()
            ->addItem($fuel);

    $tower->getStrontiumBay()
        ->addFuelType($strontType)
        ->getInventory()
            ->addItem($stront);

}

