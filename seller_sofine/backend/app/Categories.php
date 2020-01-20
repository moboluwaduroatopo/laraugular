<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{  
    protected $fillable = [
        'cat_name','cat_type'
    ];
    protected $table='Categories';
}
