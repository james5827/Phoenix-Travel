<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO customers(Customer_Id, first_name, middle_initial, last_name, Street_No, street_name, suburb, postcode, email, phone, AuthCustomer) VALUES(1, 'Fred', NULL, 'Smith', 500, 'Waverly Road', 'Chadstone', 3555, 'fred.Smith@hit.com', NULL, 1);");
        DB::insert("INSERT INTO customers(Customer_Id, first_name, middle_initial, last_name, Street_No, street_name, suburb, postcode, email, phone, AuthCustomer) VALUES(2, 'William', 'B', 'Pitt', 200, 'St. Kilda Road', 'St. Kilda', 3147, 'bill.pitt@gail.com', 0351806451, 1);");
    }
}
