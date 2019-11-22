<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PackageList extends Model
{
    protected $fillable = ['package_id', 'expiry_date', 'user_id'];
    protected $appends = ['expire'];

    public function getExpireAttribute()
    {
        $this->package;
        return Carbon::now() > $this->expiry_date;
    }

    public function lists()
    {
        return $this->hasMany('App\PackageListRentProduct');
    }
    public function package()
    {
        return $this->belongsTo('App\Package');
    }
}