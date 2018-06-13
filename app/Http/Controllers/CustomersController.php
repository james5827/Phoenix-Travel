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
        $stats = [
            'Total Bookings: ' => $customer->bookings->count(),
            'Total Reviews: ' => $customer->reviews->count()
        ];

        return view('customers.show')->with([
            'customer' => $customer,
            'bookings' => $customer->bookings,
            'reviews' => $customer->reviews,
            'stats' => $stats
        ]);
    }

    public function create(Customer $customer)
    {
        return view('customers.create')->with(['customer' => $customer, 'method' => 'POST', 'action' => 'customers/store']);
    }

    public function store(CustomerRequest $request)
    {
        $request_data = $request->all();
        $request_data['Password'] = md5($request_data['Password'] . $request['Email']);

        $request_data['AuthCustomer'] = $request_data['AuthCustomer'] === "true" ? true : false;

        Customer::create([
            'id' => $request_data['Customer_Id'],
            'first_name' => $request_data['First_Name'],
            'middle_initial' => $request_data['Middle_Initial'],
            'last_name' => $request_data['Last_Name'],
            'street_no' => $request_data['Street_No'],
            'street_name' => $request_data['Street_Name'],
            'suburb' => $request_data['Suburb'],
            'postcode' => $request_data['Postcode'],
            'email' => $request_data['Email'],
            'password' => $request_data['Password'],
            'phone' => $request_data['Phone'],
            'authcustomer' => $request_data['AuthCustomer'],

        ]);
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

    public function authorizeCustomer(Customer $customer){

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
