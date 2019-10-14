<?php

use Illuminate\Database\Seeder;
use App\Purchase;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purchase::insert([
            [
                'status' => 1,
                'user_id' => 1,
                'address_id' => 1,
                'address_return_id' => 2,
            ]
        ]);
    }
}