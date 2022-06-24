<?php declare(strict_types=1);

namespace Solid\Ocp\Violation;

class BusinessCustomer 
{
    public $type = 'Business';
    private $companyName;

    public function __construct($customer)
    {
        $this->companyName = $customer['companyName'];
    }

    public function getCompanyName() {
        return $this->companyName;
    }
}