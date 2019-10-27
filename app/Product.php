<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $appends = ['range'];
    public function getRangeAttribute()
    {
        $from = explode('.', $this->from_age);
        $to = explode('.', $this->to_age);
        $from_year = $from[0] ? intval($from[0]) . 'ปี ' : '';
        $from_month = $from[1] ? intval($from[1]) . 'เดือน' : '';
        $to_year = $to[0] ? intval($to[0]) . 'ปี ' : '';
        $to_month = $to[1] ? intval($to[1]) . 'เดือน' : '';
        return $from_year . ' ' . $from_month . ' - ' . $to_year .  $to_month;
    }
    public function prices()
    {
        return $this->hasMany('App\ProductPrice');
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