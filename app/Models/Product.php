<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'type_model',
        'description',
        'price',
        'category_id',
        'license',
        'status'
    ];

    public function productMedia() {
        return $this->hasOne(ProductMedia::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
