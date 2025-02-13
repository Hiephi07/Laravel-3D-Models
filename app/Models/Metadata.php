<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;

    protected $fillable = [
        'birthday',
        'avatar',
        'about',
        'company',
        'address1',
        'address2',
        'city',
        'country',
        'province',
        'postal_code',
        'telephone',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
