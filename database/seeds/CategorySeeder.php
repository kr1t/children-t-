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
                'name' => 'รถเข็นเด็ก',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'stroller'
            ],
            //2
            [
                'name' => 'คาร์ซีท',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'car-seat'
            ],
            //3
            [
                'name' => 'ของเล่นเสริมพัฒนาการ',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'toy'
            ],
            // 4
            [
                'name' => 'ตู้แช่นม',
                'description' => '',
                'img_url' => 'https://source.unsplash.com/random',
                'slug' => 'freezer'
            ],
        ]);
    }
}