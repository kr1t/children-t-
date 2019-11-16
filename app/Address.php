<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $appends = [
        'default',
    ];

    protected $fillable = [
        'information', 'subdistrict',
        'district', 'province', 'zipcode', 'mobile_number'
    ];

    public function getDefaultAttribute()
    {
        return request()->user()->default_address_id == $this->id ? true : false;
    }
}