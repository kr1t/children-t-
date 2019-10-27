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
                'name' => '',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 2
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 3
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 4
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 5
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 6
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 7
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 8
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 9
            ],
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 10
            ]
            ,
            [
                'name' => '',
                'amount' => 20,
                'product_id' => 11
            ]
        ]);
    }
}