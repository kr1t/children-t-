<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $appends = [
        'expiry_date',
    ];

    public function getExpiryDateAttribute()
    {
        $time = explode('.', $this->rent_time);
        return Carbon::now()->addMonths(intval($time[1]))->addYears(intval($time[0]));
    }
}