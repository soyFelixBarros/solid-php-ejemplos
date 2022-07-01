<?php declare(strict_types=1);

namespace Solid\Tests\Srp\Solution;

use Solid\Srp\Solution\OrderDataMapper;
use PHPUnit\Framework\TestCase;

class OrderDataMapperTest extends TestCase
{
    /**
     * @test Si el objeto OrderDataMapper es instanciable.
     */
    public function testInstanceOfOrderDataMapper()
    {
        $orderDataMapper = new OrderDataMapper();
        $this->assertInstanceOf("\\Solid\\Srp\\Solution\\OrderDataMapper", $orderDataMapper);
    }

    /**
     * @test Si el objeto OrderDataMapper tiene un método getFromId.
     */
    public function testMethodExistsGetFromId()
    {
        $orderDataMapper = new OrderDataMapper();
        $this->assertTrue(
            method_exists($orderDataMapper, 'getFromId'), 
            'Class does not have method getFromId'
        );
    }
}