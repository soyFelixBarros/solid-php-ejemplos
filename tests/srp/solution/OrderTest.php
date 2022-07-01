<?php declare(strict_types=1);

namespace Solid\Tests\Srp\Solution;

use Solid\Srp\Solution\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /**
     * @test Si el objeto Order es instanciable.
     */
    public function testInstanceOfOrder()
    {
        $order = new Order();
        $this->assertInstanceOf("\\Solid\\Srp\\Solution\\Order", $order);
    }
}