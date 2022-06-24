<?php declare(strict_types=1);

namespace Solid\Ocp\Solution;

use Solid\Ocp\Solution\ICustomer;

class RetailCustomer implements ICustomer
{
    private $firstName;
    private $lastName;

    public function __construct($customer)
    { 
        $this->firstName = $customer['firstName'];
        $this->lastName = $customer['lastName'];
    }

    public function getName()
    {
        return $this->firstName.' '.$this->lastName;
    }
}