<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'email' => 'admin@childrent.com',
                'password' => bcrypt('123456'),
                'name' => 'admin',
                'role_id' => 2,
                'default_address_id' => null
            ],
            [
                'email' => 'tester@childrent.com',
                'password' => bcrypt('123456'),
                'name' => 'tester',
                'role_id' => 1,
                'default_address_id' => 1
            ]
        ]);
    }
}