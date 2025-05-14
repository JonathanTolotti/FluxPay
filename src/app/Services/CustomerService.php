<?php 
namespace App\Services;

use App\Models\Customer;

class CustomerService
{
    /**
     * Cria um novo cliente no sistema.
     *
     * @param array $data
     * @return \App\Models\Customer
     */
    public function createCustomer(array $data)
    {
        return Customer::create($data);
    }
}
