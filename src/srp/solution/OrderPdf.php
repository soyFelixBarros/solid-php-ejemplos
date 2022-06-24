<?php declare(strict_types=1);

namespace Solid\Srp\Solution;

use Solid\Srp\Solution\OrderPdfLayout;

class OrderPdf 
{
    public function generate() 
    {
        /* Código que genera un PDF */
        $pdfLayout = new OrderPdfLayout($this);
    }
}