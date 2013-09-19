<?php

namespace GBS\EntityBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\EntityBundle\Document\Tower;

class TowerFixtures
{
    $tower = new $tower();
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
}

