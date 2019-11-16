<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public function type()
    // {
    //     return $this->belongsTo('App\CategoryType',  'category_type_id');
    // }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}