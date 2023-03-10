<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','keyword','category_id','content','images','price','discount','alias','stock'];
    protected $casts = [
        'price' => 'integer'
    ];
}
