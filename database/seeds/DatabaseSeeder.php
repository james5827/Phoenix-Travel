<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VehiclesTableSeeder::class);
        $this->call(ToursTableSeeder::class);
        $this->call(TripsTableSeeder::class);
        $this->call(IternerariesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
