<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageListRentProduct extends Model
{
    protected $fillable = ['package_list_id', 'product_id', 'product_amount_id', 'swapped_at', 'amount'];
}