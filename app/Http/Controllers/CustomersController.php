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
        return view('customers.show')->with(['record' => $customer, 'controller' => 'customers']);
    }

    public function create(Customer $customer)
    {
        return view('customers.create')->with(['customer' => $customer, 'method' => 'POST', 'action' => 'customers/store']);
    }

    public function store(CustomerRequest $request)
    {
        $request_data = $request->all();
        $request_data['Password'] = md5($request_data['Password'] . $request['Email']);

        Customer::create($request_data);
        return redirect('/customers/');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit')->with(['customer' => $customer, 'method' => 'PUT', 'action' => 'customers/' . $customer->customer_id . '/update']);
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $request_data = $request->all();
        $request_data['Password'] = md5($request_data['Password'] . $request['Email']);

        $customer->update($request_data);
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
