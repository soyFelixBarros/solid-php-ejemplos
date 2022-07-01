<?php declare(strict_types=1);

namespace Solid\Tests\Srp\Solution;

use Solid\Srp\Solution\OrderPdfLayout;
use Solid\Srp\Solution\OrderPdf;
use PHPUnit\Framework\TestCase;

class OrderPdfLayoutTest extends TestCase
{
    /**
     * @test Si el objeto OrderPdfLayout es instanciable.
     */
    public function testInstanceOfOrderPdfLayout()
    {
        $orderPdfLayout = new OrderPdfLayout(new OrderPdf);
        $this->assertInstanceOf("\\Solid\\Srp\\Solution\\OrderPdfLayout", $orderPdfLayout);
    }
}