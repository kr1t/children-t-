<?php

use Illuminate\Database\Seeder;
use App\PurchaseDetail;

class PurchaseDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseDetail::insert([
            [
                'purchase_id' => 1,
                'product_id' => 1,
                'amount' => 10,
                'product_amount_id' => 1,
                'product_price_id' => 1,
                'price_all' => 4000
            ],
            [
                'purchase_id' => 1,
                'product_id' => 2,
                'amount' => 10,
                'product_amount_id' => 2,
                'product_price_id' => 1,
                'price_all' => 2300
            ]
        ]);
    }
}