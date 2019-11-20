<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $appends = [
        'expiry_date', 'expiry_date_format'
    ];

    public function getExpiryDateAttribute()
    {
        $time = explode('.', $this->rent_time);
        return Carbon::now()->addMonths(intval($time[1]))->addYears(intval($time[0]));
    }
    public function getExpiryDateFormatAttribute()
    {
        return $this->expiry_date->format('d-m-Y');
    }
}