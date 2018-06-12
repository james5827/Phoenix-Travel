<?php

use Illuminate\Database\Seeder;

class Customer_ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO customer_reviews VALUES(1, 1, 5, 'Excellent trip, I will be booking with you guys again next year!', 'The whole trip was very reasonably priced.', 'None!')");
        DB::insert("INSERT INTO customer_reviews VALUES(3, 3, 3, 'It was okay, not as good as Kontiki', 'Staff were nice', 'The food was rubbish')");
        DB::insert("INSERT INTO customer_reviews VALUES(4, 2, 4, 'Better than the last one', 'Staff were nice like last time and the food was better', 'The tour bus was too noisy')");
    }
}
