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
        $password1 = md5("password" . "fred.Smith@hit.com");
        $password2 = md5("password" . "bill.pitt@gail.com");
        $password3 = md5("password" . "james@mail.com");

        DB::insert("INSERT INTO customers(customer_id, first_name, middle_initial, last_name, street_no, street_name, suburb, postcode, email, password, phone, authcustomer)
                          VALUES(1, 'Fred', NULL, 'Smith', 500, 'Waverly Road', 'Chadstone', 3555, 'fred.Smith@hit.com','" . $password1 . "', NULL, true);");

        DB::insert("INSERT INTO customers(customer_id, first_name, middle_initial, last_name, street_no, street_name, suburb, postcode, email, password, phone, authcustomer)
                          VALUES(2, 'William', 'B', 'Pitt', 200, 'St. Kilda Road', 'St. Kilda', 3147, 'bill.pitt@gail.com', '" . $password2 . "', 0351806451, true);");

        DB::insert("INSERT INTO customers(customer_id, first_name, middle_initial, last_name, street_no, street_name, suburb, postcode, email, password, phone, authcustomer)
                          VALUES(3, 'James', 'O', 'Neal', 100, 'Cardinia Rd', 'Hallam', 3100, 'james@mail.com', '" . $password3 . "', 4234566451, true);");
    }
}
