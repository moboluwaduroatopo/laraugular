<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopdetails extends Model
{
    protected $fillable = [
        'shop_id','product_name','price','file'
    ];
}
