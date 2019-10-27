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
                'name' => 'No Brand',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'no-brand'
            ],
             // 2
            [
                'name' => 'iPlay',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'iplay'
            ],
             // 3
            [
                'name' => 'Intex',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'intex'
            ],
             // 4
            [
                'name' => 'Lerado',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'lerado'
            ],
             // 5
            [
                'name' => 'Mother Garden',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'mother-garden'
            ],
             // 6
            [
                'name' => 'Thaiken',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'thaiken'
            ],
             // 7
            [
                'name' => 'GONA',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'gona'
            ],
             // 8
            [
                'name' => 'Konig Kids',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'konig-kids'
            ],
             // 9
            [
                'name' => '',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => ''
            ],

            
            
        ]);
    }
}