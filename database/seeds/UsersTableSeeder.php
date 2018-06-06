<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Staff',
            'email' => 'Staff@staff.com',
            'password' => bcrypt('password'),
            'authorisation_level' => 'Staff'
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@admin.com',
            'password' => bcrypt('password'),
            'authorisation_level' => 'Admin'
        ]);
    }
}
