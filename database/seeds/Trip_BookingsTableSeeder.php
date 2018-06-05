<?php

use Illuminate\Database\Seeder;

class Trip_BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO trip_bookings VALUES('004564', 1, 1, '2016-08-15', 100);");
        DB::insert("INSERT INTO trip_bookings VALUES('007214', 2 , 3, '2016-05-27', 500);");
        DB::insert("INSERT INTO trip_bookings VALUES('008050', 3 , 2, '2016-11-01', 150);");
    }
}
