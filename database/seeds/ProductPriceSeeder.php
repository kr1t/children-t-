<?php

use Illuminate\Database\Seeder;
use App\ProductPrice;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductPrice::insert([
            [
                'description' => '1 เดือน',
                'price' => 1000,
                'product_id' => 1,
                'range' => 0.01
            ],
            [
                'description' => '3 เดือน',
                'price' => 2500,
                'product_id' => 1,
                'range' => 0.03

            ],
            [
                'description' => '1 ปี',
                'price' => 10000,
                'product_id' => 1,
                'range' => 1.00
            ]
        ]);
    }
}