<?php

use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO tours(Tour_no ,Tour_Name, Description, Duration, Route_Map) VALUES(1, 'Twelve Apostles Drive', 'A drive along the Great Ocean Road to the Twelve Apostles', 28, NULL);");
        DB::insert("INSERT INTO tours(Tour_no, Tour_Name, Description, Duration, Route_Map) VALUES(2, 'Northeast Wineries Tour', 'A tour to various wineries in North East Victoria', 32, NULL);");
        DB::insert("INSERT INTO tours(Tour_no, Tour_Name, Description, Duration, Route_Map) VALUES(3, 'Melbourne Sightseeing', 'A drive along the Great Ocean Road to the Twelve Apostles', 3.5, 'C:\Documents\Route_Maps\Melbourne_Sightseeing.png');");
      }
}
