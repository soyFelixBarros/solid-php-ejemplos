<?php declare(strict_types=1);

use Solid\Srp\Violation\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /**
     * @test Si el objeto Order es instanciable.
     */
    public function testInstanceOfOrder()
    {
        $order = new Order();
        $this->assertInstanceOf("\\Solid\\Srp\\Violation\\Order", $order);
    }

    /**
     * @test Si el objeto Order tiene un método calculatePrice.
     */
    public function testMethodExistsCalculatePrice()
    {
        $order = new Order();
        $this->assertTrue(
            method_exists($order, 'calculatePrice'), 
            'Class does not have method calculatePrice'
        );
    }

    /**
     * @test Si el objeto Order tiene un método generatePdf.
     */
    public function testMethodExistsGeneratePdf()
    {
        $order = new Order();
        $this->assertTrue(
            method_exists($order, 'generatePdf'), 
            'Class does not have method generatePdf'
        );
    }

    /**
     * @test Si el objeto Order tiene un método getOrderFromDatabase.
     */
    public function testMethodExistsGetOrderFromDatabase()
    {
        $order = new Order();
        $this->assertTrue(
            method_exists($order, 'getOrderFromDatabase'), 
            'Class does not have method getOrderFromDatabase'
        );
    }
}