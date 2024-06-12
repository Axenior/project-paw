<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'image',
        'path',
        'description',
        'warranty',
        'memory',
        'price',
        'discount',
    ];

    public function carts(){
        return $this->belongsToMany(User::class, 'carts');
    }

    public function purchases(){
        return $this->belongsToMany(User::class, 'purchases');
    }
}
