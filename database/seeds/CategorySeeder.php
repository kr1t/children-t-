<?php

use Illuminate\Database\Seeder;
use App\CategoryType;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // หมวดหมู่
        Category::insert([
            // 1
            [
                'name' => 'ของเล่นเสริมพัฒนาการ',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'toy'
            ],
            // 2
            [
                'name' => 'รถเข็นเด็ก',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'stroller'
            ],
            // 3
            [
                'name' => 'ตู้แช่นม',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'freezer'
            ],
            [
                'name' => 'เครื่องแต่งกาย',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'costume'
            ],
            [
                'name' => 'คอกกั้นเด็ก',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'child-barrier'
            ],
            [
                'name' => 'คาร์ซีท',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'car-seat'
            ]
        ]);
    }
}