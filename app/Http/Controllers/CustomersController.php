<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(Customer $c)
    {
        $customers = Customer::get();
        $attributes = array_keys($customers[0]->toArray());

        return view('customers.index')->with(['dataset' => $customers, 'attributes' => $attributes, 'controller' => 'customers', 'key' => [$c->getKeyName()]]);
    }

    public function show(Customer $customer)
    {

    }

    public function create(Customer $customer)
    {
        return view('customers.create')->with(['customer' => $customer, 'method' => 'POST', 'action' => 'customers/store']);
    }

    public function store(CustomerRequest $request)
    {

    }


    public function edit(Customer $customer)
    {
        return view('customers.edit')->with(['customer' => $customer, 'method' => 'POST', 'action' => 'customers/store']);
    }

    public function update(CustomerRequest $request)
    {

    }
}
