<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id',  'product_amount_id', 'product_price_id', 'amount'];



    public function price()
    {
        return $this->belongsTo('App\ProductPrice', 'product_price_id', 'id');
    }

    public function amount()
    {
        return $this->belongsTo('App\ProductAmount');
    }
}