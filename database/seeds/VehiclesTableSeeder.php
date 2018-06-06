<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO vehicles(rego_no, vin, make, model, Year, capacity, fuel_type, equipment, license_required) VALUES('JDO682', '90JERN34F9DF3450F', 'Holden', 'Commodore', 2008, 5, 'Petrol', NULL, 'C');");
        DB::insert("INSERT INTO vehicles(rego_no, vin, make, model, Year, capacity, fuel_type, equipment, license_required) VALUES('AKJ424', '8Y2340JDSNKL9HGS9', 'BCI', 'Fleetmaster 55', 2010, 87, 'Diesel', 'Fire extinguisher, 5 tents, 3 kayaks', 'MR');");
        DB::insert("INSERT INTO vehicles(rego_no, vin, make, model, Year, capacity, fuel_type, equipment, license_required) VALUES('EIU112', 'SPG4VLEHSDZ98U454', 'Scania', 'K230UB', 2007, 64, 'Diesel', NULL, 'MR');");
        DB::insert("INSERT INTO vehicles(rego_no, vin, make, model, Year, capacity, fuel_type, equipment, license_required) VALUES('TPO652', '90S8U449S8G9K5N8L', 'Scania', 'K320UB', 2010, 53, 'Diesel', NULL, 'HR');");
        DB::insert("INSERT INTO vehicles(rego_no, vin, make, model, Year, capacity, fuel_type, equipment, license_required) VALUES('MCN687', 'T3NF8S0D99l9FK6V5', 'BCI', 'Proma', 2011, 35, 'Diesel', 'Fire extinguisher', 'LR');");
    }
}
