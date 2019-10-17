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
                'description' => '3 เดือน',
                'price' => 1500,
                'rent_time' => 0.03,
                'amount_limit' => 1,
                'limit' => 3
            ],
            // 2
            [
                'description' => '6 เดือน',
                'price' => 4000,
                'rent_time' => 0.06,
                'amount_limit' => 1,
                'limit' => 6
            ]
        ]);
    }
}