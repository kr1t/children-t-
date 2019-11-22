<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::insert([
            // 1
            [
                'description' => 'รถเข็นเด็ก 1 เดือน',
                'price' => 2600,
                'rent_time' => 0.03,
                'amount_limit' => 1,
                'limit' => 1
            ],
            // 2
            [
                'description' => 'คาร์ซีท 1 เดือน',
                'price' => 2600,
                'rent_time' => 0.06,
                'amount_limit' => 1,
                'limit' => 1
            ]
        ]);
    }
}