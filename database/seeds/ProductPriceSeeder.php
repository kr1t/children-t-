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
        for ($i = 0; $i < 31; $i++) {
            ProductPrice::insert([
                //  range : เดือน.วัน   12.00 = 1 ปี
                [
                    'description' => '4 วัน',
                    'price' => 500,
                    'product_id' => $i + 1,
                    'range' => 00.04
                ],
                [
                    'description' => '7 วัน',
                    'price' => 1000,
                    'product_id' => $i + 1,
                    'range' => 00.07

                ],
                [
                    'description' => '15 วัน',
                    'price' => 1500,
                    'product_id' => $i + 1,
                    'range' => 00.15
                ],
                [
                    'description' => '1 เดือน',
                    'price' => 2000,
                    'product_id' => $i + 1,
                    'range' => 01.00
                ],
                [
                    'description' => '3 เดือน',
                    'price' => 2500,
                    'product_id' => $i + 1,
                    'range' => 03.00
                ],
                [
                    'description' => '6 เดือน',
                    'price' => 2700,
                    'product_id' => $i + 1,
                    'range' => 06.00
                ],
                [
                    'description' => '1 ปี',
                    'price' => 3000,
                    'product_id' => $i + 1,
                    'range' => 12.00
                ]
            ]);
        }
    }
}