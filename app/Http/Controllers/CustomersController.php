<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::get();
        $c = new Customer;
        $attributes = array_keys($customers[0]->toArray());

        return view('customer.index')->with(['dataset' => $customers, 'attributes' => $attributes, 'controller' => 'customers', 'key' => $c->getKeyName()]);
    }
}
