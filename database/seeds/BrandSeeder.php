<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Brand::insert([
            // 1
            [
                'name' => 'ไม่มีหมวดหมู่',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'no-brand'
            ],
            // 2
            [
                'name' => 'DC',
                'description' => 'DC',
                'img_url' => '/images/brands/dc.png',
                'slug' => 'dc'
            ]
        ]);
    }
}