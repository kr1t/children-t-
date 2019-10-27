<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_amounts(){
        return $this->hasMany('App\ProductAmount');
    }
    public function product_amount(){
        return $this->hasOne('App\ProductAmount');
    }
    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function ab($a,$b){
        return $a*$b;
    }
}
