<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Product extends Model
{
    use HasFactory;


    protected $casts = [
        'price' => 'float',
        'images' => 'json'
    ];

    function getPriceAttribute($value){
        return Number::currency($value,'PKR');
    }
}
