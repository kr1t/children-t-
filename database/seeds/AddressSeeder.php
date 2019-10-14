<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::insert([
            [
                'information' => '42 xxxx tambol 12',
                'amphoe_id' => 1,
                'mobile_number' => '0900000000',
                'user_id' => 1
            ],
            [
                'information' => '55 xxxx tambol 12',
                'amphoe_id' => 1,
                'mobile_number' => '0800000001',
                'user_id' => 1
            ]
        ]);
    }
}