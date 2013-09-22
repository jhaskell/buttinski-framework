<?php

namespace GBS\DocumentBundle\Tests\Document\FuelBay;

use GBS\DocumentBundle\Document\FuelBay\FuelBay;
use Phake;

class FuelBayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GBS\DocumentBundle\Document\FuelBay\FuelType
     * @Mock
     */
    protected $fuelType;

    protected $fuelBay;

    public function setUp()
    {
        Phake::initAnnotations($this);

        $this->fuelBay = new FuelBay();
    }

    /**
     * @covers GBS\DocumentBundle\Document\FuelBay\FuelBay::getHoursRemaining
     * @dataProvider getHoursRemainingProvider
     */
    public function testGetHoursRemaining($hours1, $hours2, $hours3, $expectedHoursRemaining)
    {
        Phake::when($this->fuelType)->getHoursRemaining()
            ->thenReturn($hours1)
            ->thenReturn($hours2)
            ->thenReturn($hours3);

        $this->fuelBay->addFuelType($this->fuelType);
        $this->fuelBay->addFuelType($this->fuelType);
        $this->fuelBay->addFuelType($this->fuelType);

        $this->assertEquals($expectedHoursRemaining, $this->fuelBay->getHoursRemaining(), 'Expected FuelBay to return the lowest "hoursRemaining" count available in its inventory');
    }

    public function getHoursRemainingProvider()
    {
        return array(
            array(12, 3, 6, 3),
            array(3, 6, 12, 3),
            array(12, 6, 3, 3),
        );
    }

    /**
     * @covers GBS\DocumentBundle\Document\FuelBay\FuelBay::getHoursRemaining
     */
    public function testGetHoursRemainingWithNoFuelTypesDefined()
    {
        $this->assertEquals(INF, $this->fuelBay->getHoursRemaining(), 'Expected infinity remaining hours returned when fuel bay has no fuel types defined');
    }
}
