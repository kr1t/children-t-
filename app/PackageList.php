<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageList extends Model
{
    protected $fillable = ['package_id', 'expiry_date', 'user_id'];
}