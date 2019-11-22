<?php

use Illuminate\Database\Seeder;
use App\ProductAmount;

class ProductAmountSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAmount::insert([
            [
                'name' => 'สีชมพู',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => 'สีน้ำตาล',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => 'สีฟ้า',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 2
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 3
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 4
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 4
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 5
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 6
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 6
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 6
            ],
            [
                'name' => 'สีฟ้า',
                'amount' => 20,
                'product_id' => 6
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 7
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 8
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 9
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 9
            ],
            [
                'name' => 'สีฟ้า',
                'amount' => 20,
                'product_id' => 9
            ],
            [
                'name' => 'สีขาว',
                'amount' => 20,
                'product_id' => 10
            ],
            [
                'name' => 'สีครีม',
                'amount' => 20,
                'product_id' => 10
            ],
            [
                'name' => 'สีน้ำเงิน',
                'amount' => 20,
                'product_id' => 10
            ],
            [
                'name' => 'สีน้ำตาล',
                'amount' => 20,
                'product_id' => 11
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 12
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 12
            ],
            [
                'name' => 'สีน้ำเงิน',
                'amount' => 20,
                'product_id' => 12
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 13
            ],
            [
                'name' => 'สีฟ้า',
                'amount' => 20,
                'product_id' => 13
            ],
            [
                'name' => 'สีชมพู',
                'amount' => 20,
                'product_id' => 14
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 14
            ],
            [
                'name' => 'สีน้ำเงิน',
                'amount' => 20,
                'product_id' => 14
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 15
            ],

            /*
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 16
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 16
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 16
            ],
            [
                'name' => 'สีน้ำตาล',
                'amount' => 20,
                'product_id' => 16
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 17
            ],
            [
                'name' => 'สีฟ้า',
                'amount' => 20,
                'product_id' => 17
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 18
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 18
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 18
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 19
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 20
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 21
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 21
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 22
            ],
            [
                'name' => 'สีแดง',
                'amount' => 20,
                'product_id' => 22
            ],
            [
                'name' => 'สีครีม',
                'amount' => 20,
                'product_id' => 23
            ],
            [
                'name' => 'สีน้ำตาล',
                'amount' => 20,
                'product_id' => 23
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 24
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 24
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 25
            ],
            [
                'name' => 'สีดำ-แดง',
                'amount' => 20,
                'product_id' => 26
            ],
            [
                'name' => 'สีดำ-แดง',
                'amount' => 20,
                'product_id' => 27
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 28
            ],
            [
                'name' => 'สีน้ำตาล',
                'amount' => 20,
                'product_id' => 29
            ],
            [
                'name' => 'สีดำ',
                'amount' => 20,
                'product_id' => 30
            ],
            [
                'name' => 'สีเทา',
                'amount' => 20,
                'product_id' => 31
            ],
            */

            //ของเล่น
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 16
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 17
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 18
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 19
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 20
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 21
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 22
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 23
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 24
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 25
            ]
            ,
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 26
            ],


            //ตู้แช่นม
            [
                'name' => '3.5 คิว',
                'amount' => 20,
                'product_id' => 27
            ],
            [
                'name' => '5.3 คิว',
                'amount' => 20,
                'product_id' => 28
            ],
            [
                'name' => '7 คิว',
                'amount' => 20,
                'product_id' => 29
            ],


        ]);
    }
}