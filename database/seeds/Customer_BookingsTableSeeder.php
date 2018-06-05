<?php

use Illuminate\Database\Seeder;

class Customer_BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO customer_bookings VALUES (7214, 1, true)");
        DB::insert("INSERT INTO customer_bookings VALUES (7214, 3, false)");
    }
}
