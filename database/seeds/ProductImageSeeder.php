<?php

use Illuminate\Database\Seeder;
use App\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::insert([
            [
                'file_url' => '/images/product/1.png',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/product/2.png',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/product/3.png',
                'product_id' => 1
            ]
        ]);
    }
}