<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMediaImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_media_id',
        'image_url',
    ];
}
