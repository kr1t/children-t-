<?php

use Illuminate\Database\Seeder;
use App\PackageList;
use App\PackageListRentProduct;

class PackageListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PackageList::insert([
            // 1
            [
                'user_id' => 2,
                'package_id' => 2,
                'expiry_date' => '2020-03-31 00:00:00'
            ],
            [
                'user_id' => 2,
                'package_id' => 2,
                'expiry_date' => '2017-03-31 00:00:00'
            ]
        ]);

        PackageListRentProduct::insert([
            [
                'package_list_id' => 1,
                'product_id' => 1,
                'product_amount_id' => 1,
                'amount' => 4,
                'swapped_at' => '2019-10-14 00:00:00'
            ]
        ]);
    }
}