<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'price',
        'old_price',
        'image',
        'badge',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'price' => 'integer',
        'old_price' => 'integer',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
