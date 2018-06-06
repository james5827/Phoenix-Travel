<?php

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO trips (trip_Id, tour_no, rego_no, departure_date, max_passengers, standard_amount) VALUES(1,1, 'EIU112', '2016-05-15', 62, 1000);");
        DB::insert("INSERT INTO trips (trip_Id, tour_no, rego_no, departure_date, max_passengers, standard_amount) VALUES(2, 2, 'EIU112', '2016-06-23', 62,2000)");
        DB::insert("INSERT INTO trips (trip_Id, Tour_No, rego_no, departure_date, max_passengers, standard_amount) VALUES(3,2, 'JDO682', '2016-12-04', 3, 900);");
        DB::insert("INSERT INTO trips (trip_Id, Tour_No, rego_no, departure_date, max_passengers, standard_amount) VALUES(4, 3, 'TPO652', '2016-10-20', 51, 1200);");
    }
}
