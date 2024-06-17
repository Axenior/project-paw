<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    
    public function carts(){
        return $this->belongsToMany(User::class, 'carts');
    }

    public function purchases(){
        return $this->belongsToMany(User::class, 'purchases');
    }
}
