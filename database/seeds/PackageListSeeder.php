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
                'package_id' => 3,
                'expiry_date' => '2020-03-31 00:00:00'
            ]
        ]);

        PackageListRentProduct::insert([
            [
                'package_list_id' => 1,
                'package_list_id' => 2,
                'amount' => 1,
                'swapped_at' => null
            ]
        ]);
    }
}