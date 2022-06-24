<?php declare(strict_types=1);

namespace Solid\Ocp\Violation;

class AllCustomers 
{
    public function show($customers) {
        foreach ($customers as $customer) {
            switch ($customer->type) {
                case 'Business':
                    echo $customer->getFirstName().' '.$customer->getLastName();
                    break;
                case 'Retail':
                    echo $customer->getCompanyName();
                    break;
            }
        }
    }
}