<?php

namespace GBS\DocumentBundle\Tests\Document\FuelBay;

use GBS\DocumentBundle\Document\FuelBay\FuelType;
use Phake;

class FuelTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers GBS\DocumentBundle\Document\FuelBay\FuelType::getHoursRemaining
     */
    public function testGetHoursRemainingMath()
    {
        $fuel = new FuelType();
        $fuel->setQuantity(100)->setHourlyBurnRate(10);

        $this->assertEquals(10, $fuel->getHoursRemaining());
    }

    /**
     * @covers GBS\DocumentBundle\Document\FuelBay\FuelType::getHoursRemaining
     */
    public function testGetHoursRemainingNoDivisionByZero()
    {
        $fuel = new FuelType();
        $fuel->setQuantity(100)->setHourlyBurnRate(0);

        $this->assertEquals(INF, $fuel->getHoursRemaining(), 'Expected an hourly fuel burn rate of zero to return infinity'); 
    }
}
