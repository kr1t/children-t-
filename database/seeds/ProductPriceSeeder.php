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

        //รถเข็นเด็ก
        for ($i = 0; $i < 15; $i++) {
            ProductPrice::insert([
                //  range : เดือน.วัน   12.00 = 1 ปี
                [
                    'description' => '7 วัน',
                    'price' => 900,
                    'product_id' => $i + 1,
                    'range' => 00.07

                ],
                [
                    'description' => '15 วัน',
                    'price' => 1400,
                    'product_id' => $i + 1,
                    'range' => 00.15
                ],
                [
                    'description' => '30 วัน',
                    'price' => 1900,
                    'product_id' => $i + 1,
                    'range' => 01.00
                ],
                [
                    'description' => '90 วัน',
                    'price' => 2400,
                    'product_id' => $i + 1,
                    'range' => 03.00
                ]
            ]);
        }

        //ของเล่น
        for ($i = 15; $i < 26; $i++) {
            ProductPrice::insert([
                //  range : เดือน.วัน   12.00 = 1 ปี
                [
                    'description' => '30 วัน',
                    'price' => 1900,
                    'product_id' => $i + 1,
                    'range' => 00.30
                ]
            ]);
        }


        //ตู้แช่นม
        ProductPrice::insert([
            //  range : เดือน.วัน   12.00 = 1 ปี
            [
                'description' => '6 เดือน',
                'price' => 2900,
                'product_id' => 27,
                'range' => 06.00
            ],
            [
                'description' => '9 เดือน',
                'price' => 3900,
                'product_id' => 27,
                'range' => 09.00
            ],
            [
                'description' => '12 เดือน',
                'price' => 4400,
                'product_id' => 27,
                'range' => 12.00
            ],
            //28
            [
                'description' => '6 เดือน',
                'price' => 3900,
                'product_id' => 28,
                'range' => 06.00
            ],
            [
                'description' => '9 เดือน',
                'price' => 4900,
                'product_id' => 28,
                'range' => 09.00
            ],
            [
                'description' => '12 เดือน',
                'price' => 5400,
                'product_id' => 28,
                'range' => 12.00
            ],
            //29
            [
                'description' => '6 เดือน',
                'price' => 4900,
                'product_id' => 29,
                'range' => 06.00
            ],
            [
                'description' => '9 เดือน',
                'price' => 5900,
                'product_id' => 29,
                'range' => 09.00
            ],
            [
                'description' => '12 เดือน',
                'price' => 6400,
                'product_id' => 29,
                'range' => 12.00
            ],
        ]);
    }
}