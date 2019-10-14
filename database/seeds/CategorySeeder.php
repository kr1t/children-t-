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
        //หมวดหมู่แรก
        CategoryType::insert([
            // 1
            [
                'name' => 'เครื่องแต่งกาย',
                'description' => 'คำอธิบาย',
                'img_url' => '/images/categories/costume.png',
                'slug' => 'costume'
            ],
            // 2
            [
                'name' => 'ของเล่น',
                'description' => 'คำอธิบาย',
                'img_url' => '/images/categories/toy.png',
                'slug' => 'toys'
            ]
        ]);
        // หมวดหมู่ใน
        Category::insert([
            // 1
            [
                'name' => 'ชุดแฟนซี',
                'description' => 'คำอธิบาย',
                'img_url' => '/images/categories/fancy.png',
                'slug' => 'fancy',
                'category_type_id' => 1
            ],
            // 2
            [
                'name' => 'ชุดนักเรียน',
                'description' => 'คำอธิบาย',
                'img_url' => '/images/categories/student.png',
                'slug' => 'student',
                'category_type_id' => 1
            ],
        ]);
    }
}