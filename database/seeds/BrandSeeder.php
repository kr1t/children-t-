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
                'name' => 'Babyzen',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'babyzen'
            ],
             // 3
            [
                'name' => 'Baby Jogger ',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'baby-jogger '
            ],
             // 4
            [
                'name' => 'JOIE',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'joie'
            ],
             // 5
            [
                'name' => 'Chicco',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'chicco'
            ],
             // 6
            [
                'name' => 'Doona',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'doona'
            ],
             // 7
            [
                'name' => 'Graco',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'graco'
            ],
             // 8
            [
                'name' => 'Combi',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'combi'
            ],
             // 9
            [
                'name' => 'Aprica',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'aprica'
            ],
            // 10
            [
                'name' => 'Baby Monster ',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'baby-monster '
            ],
            // 11
            [
                'name' => 'BabyStyle ',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'babystyle '
            ],

            /*
            //คาร์ซีท
            // 12
            [
                'name' => 'Britax',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'britax'
            ],
            // 13
            [
                'name' => 'Prince & Princess',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'prince-and-princess'
            ],
            // 14
            [
                'name' => 'Maxi-Cosi Citi',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'maxi-cosi-citi'
            ],
            // 15
            [
                'name' => 'Ailebebe',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'ailebebe'
            ],
            
            */


            //ของเล่น
            //12
            [
                'name' => 'iPlay',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'iplay'
            ],
             // 13
            [
                'name' => 'Intex',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'intex'
            ],
             // 14
            [
                'name' => 'Lerado',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'lerado'
            ],
             // 15
            [
                'name' => 'Mother Garden',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'mother-garden'
            ],
             // 26
            [
                'name' => 'Thaiken',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'thaiken'
            ],
             // 17
            [
                'name' => 'GONA',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'gona'
            ],
             // 18
            [
                'name' => 'Konig Kids',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'konig-kids'
            ],


            //ตู้แช่นม
            //19
            [
                'name' => 'Sanden Intercool',
                'description' => ' ',
                'img_url' => ' ',
                'slug' => 'sanden-intercool'
            ],

            
            
        ]);
    }
}