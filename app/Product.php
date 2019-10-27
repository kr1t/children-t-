<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $appends = ['range', 'img_url'];
    public function getRangeAttribute()
    {
        $from = explode('.', $this->from_age);
        $to = explode('.', $this->to_age);
        $from_year = $from[0] ? intval($from[0]) . 'ปี ' : '';
        $from_month = isset($from[1]) ? $from[1] ? intval($from[1]) . 'เดือน' : '' : '';
        $to_year = $to[0] ? intval($to[0]) . 'ปี ' : '';
        $to_month = isset($to[1]) ? $to[1] ? intval($to[1]) . 'เดือน' : '' : '';
        return $from_year . ' ' . $from_month . ' - ' . $to_year .  $to_month;
    }

    public function getImgUrlAttribute()
    {
        return $this->images[0]->file_url;
    }



    public function prices()
    {
        return $this->hasMany('App\ProductPrice');
    }

    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }
    public function price()
    {
        return $this->hasOne('App\ProductPrice');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}