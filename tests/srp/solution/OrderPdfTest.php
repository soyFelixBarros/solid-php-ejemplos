<?php declare(strict_types=1);

namespace Solid\Tests\Srp\Solution;

use Solid\Srp\Solution\OrderPdf;
use PHPUnit\Framework\TestCase;

class OrderPdfTest extends TestCase
{
    /**
     * @test Si el objeto OrderPdf es instanciable.
     */
    public function testInstanceOfOrderPdf()
    {
        $orderPdf = new OrderPdf();
        $this->assertInstanceOf("\\Solid\\Srp\\Solution\\OrderPdf", $orderPdf);
    }

    /**
     * @test Si el objeto OrderPdf tiene un método generate.
     */
    public function testMethodExistsGenerate()
    {
        $orderPdf = new OrderPdf();
        $this->assertTrue(
            method_exists( $orderPdf, 'generate'), 
            'Class does not have method generate'
        );
    }
}