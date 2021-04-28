<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table  = 'tbl_product';

    protected $fillable = ['product_name', 'price', 'image'];
}
