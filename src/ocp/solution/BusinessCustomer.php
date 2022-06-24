<?php declare(strict_types=1);

namespace Solid\Ocp\Solution;

use Solid\Ocp\Solution\ICustomer;

class BusinessCustomer implements ICustomer
{
    private $companyName;

    public function __construct($customer)
    {
        $this->companyName = $customer['companyName'];
    }

    public function getName() 
    {
        return $this->companyName;
    }
}