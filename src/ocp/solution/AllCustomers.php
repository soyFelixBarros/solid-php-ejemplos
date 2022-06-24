<?php declare(strict_types=1);

namespace Solid\Ocp\Solution;

class AllCustomers 
{
    public function show($customers) 
    {
        foreach ($customers as $customer) {
            echo $customer->getName();
        }
    }
}