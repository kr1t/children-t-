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
                'name' => 'size M',
                'amount' => 20,
                'product_id' => 1
            ],
            [
                'name' => 'size M',
                'amount' => 14,
                'product_id' => 1
            ]
        ]);
    }
}