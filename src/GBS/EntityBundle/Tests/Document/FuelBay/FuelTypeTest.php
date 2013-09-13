<?php

namespace GBS\EntityBundle\Tests\Document\FuelBay;

use GBS\EntityBundle\Document\FuelBay\FuelType;
use Phake;

class FuelTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetHoursRemainingMath()
    {
        $fuel = new FuelType();

        $fuel->setQuantity(100)->setHourlyBurnRate(10);

        $this->assertEquals(10, $fuel->getHoursRemaining());
    }

    public function testGetHoursRemainingNoDivisionByZero()
    {
        $fuel = new FuelType();

        $fuel->setQuantity(100)->setHourlyBurnRate(0);

        $this->assertEquals(INF, $fuel->getHoursRemaining(), 'Expected an hourly fuel burn rate of zero to return infinity'); 
    }
}
