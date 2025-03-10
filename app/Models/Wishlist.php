<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    // Các thuộc tính có thể được gán đại trà
    protected $fillable = ['user_id', 'product_id'];

    // Mối quan hệ với bảng users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mối quan hệ với bảng products
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
