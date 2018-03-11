<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(Customer $customer)
    {
        $customers = Customer::get();
        $attributes = array_keys($customers[0]->toArray());

        return view('customers.index')->with(['dataset' => $customers, 'attributes' => $attributes, 'controller' => 'customers', 'key' => [$customer->getKeyName()]]);
    }

    public function show(Customer $customer)
    {
        return view('customers.show')->with(['record' => $customer]);
    }

    public function create(Customer $customer)
    {
        return view('customers.create')->with(['customer' => $customer, 'method' => 'POST', 'action' => 'customers/store']);
    }

    public function store(CustomerRequest $request)
    {
        Customer::create($request->all());
        return redirect('/customers/');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit')->with(['customer' => $customer, 'method' => 'PUT', 'action' => 'customers/' . $customer->Customer_Id . '/update']);
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect('/customers/');
    }

    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();
        }catch (\Exception $exception) {
            //TODO: Handle Primary key exception
        }

        return redirect('/customers/');
    }
}
