<?php

use Illuminate\Database\Seeder;

class IternerariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO itineraries (tour_no, Day_No, Hotel_Booking_No, Activities, Meals) VALUES(3, 001, 123,  'Guided tour around the CBD', 'Lunch on Lygon Street');");
        DB::insert("INSERT INTO itineraries (tour_no, Day_No, Hotel_Booking_No, Activities, Meals) VALUES(2, 001, 456, 'Wine tasting at Pizzini''s', 'Lunch at Pizzini''s');");
    }
}
