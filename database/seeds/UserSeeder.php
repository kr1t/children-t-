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
                'mobile_number'=>'09000000000',
                'role_id' => 2,
                'default_address_id' => null
            ],
            [
                'email' => 'tester@childrent.com',
                'password' => bcrypt('123456'),
                'mobile_number'=>'09000000001',
                'name' => 'tester',
                'role_id' => 1,
                'default_address_id' => 1
            ],

            [
                'email' => 'tabc@hotmail.com',
                'password' => bcrypt('123456'),
                'mobile_number'=>'09000000601',
                'name' => 'tesfter',
                'role_id' => 1,
                'default_address_id' => null
            ]
        ]);
    }
}