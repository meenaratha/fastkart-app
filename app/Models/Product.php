<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_description',
        'original_price',
        'discount_price',
        'weight',
        'brand',
        'product_code',
        'product_type',
        'stock',
        'offer',
        'meta_tag',
        'productimage',
        'product_thumbnail',
        'discount_percentage',
        'product_short_descriptionus',
        'store_info',
        'status',
        'user_id',


    ];
}
