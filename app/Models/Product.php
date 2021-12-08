<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'products_id';
    protected $fillable =[
        'product_title',
        'product_description',
        'product_price',
        'product_amount',
        'product_categories_id',
    ];
}
