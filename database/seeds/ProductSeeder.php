<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            //1
            [
                'name' => 'ชุดแมว',
                'description' => 'คำอธิบาย',
                'img_url' => '/images/product/1.png',
                'from_age' => 00.03,
                'to_age' => 01.06,
                'deposit' => 1000,
                'youtube_url' => 'https://www.youtube.com/watch?v=eZuvIW5E4T0',
                'category_id' => 1,
                'brand_id' => 1
            ]
        ]);
    }
}