<?php

namespace App\Repos;

use App\Models\Customers;


class CustomerRepo extends Repository
{

    protected $customer;

    public function __construct(
        Customer $customer
    ) {
        $this->customer = $customer;
    }

    public function create(array $params) : array
    {
        return $this->customer->crate($params);
    }
}
