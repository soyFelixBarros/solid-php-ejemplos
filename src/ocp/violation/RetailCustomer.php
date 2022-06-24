<?php declare(strict_types=1);

namespace Solid\Ocp\Violation;

class RetailCustomer 
{
    public $type = 'Retail';
    private $firstName;
    private $lastName;

    public function __construct($customer)
    {
        $this->firstName = $customer['firstName'];
        $this->lastName = $customer['lastName'];
    }

    public function getFirstName() 
    {
        return $this->firstName;
    }

    public function getLastName() 
    {
        return $this->lastName;
    }
}
