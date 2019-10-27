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
                'file_url' => '/images/toys/1-0.png',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/toys/1-1.png',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/toys/1-2.png',
                'product_id' => 1
            ],
            [
                'file_url' => '/images/toys/2-0.jpg',
                'product_id' => 2
            ],
            [
                'file_url' => '/images/toys/2-1.jpg',
                'product_id' => 2
            ],
            [
                'file_url' => '/images/toys/3.jpg',
                'product_id' => 3
            ],
            [
                'file_url' => '/images/toys/4-0.jpg',
                'product_id' => 4
            ],
            [
                'file_url' => '/images/toys/4-1.png',
                'product_id' => 4
            ],
            [
                'file_url' => '/images/toys/5.png',
                'product_id' => 5
            ],
            [
                'file_url' => '/images/toys/5-1.png',
                'product_id' => 5
            ],
            [
                'file_url' => '/images/toys/6.png',
                'product_id' => 6
            ],
            [
                'file_url' => '/images/toys/6-1.png',
                'product_id' => 6
            ],
            [
                'file_url' => '/images/toys/7-0.png',
                'product_id' => 7
            ],
            [
                'file_url' => '/images/toys/7-1.png',
                'product_id' => 7
            ],
            [
                'file_url' => '/images/toys/8.jpg',
                'product_id' => 8
            ],
            [
                'file_url' => '/images/toys/9.jpg',
                'product_id' => 9
            ],
            [
                'file_url' => '/images/toys/10.png',
                'product_id' => 10
            ],
            [
                'file_url' => '/images/toys/10-1.png',
                'product_id' => 10
            ],
            [
                'file_url' => '/images/toys/11-1.jpg',
                'product_id' => 11
            ],
            [
                'file_url' => '/images/toys/11-2.png',
                'product_id' => 11
            ]
        ]);
    }
}