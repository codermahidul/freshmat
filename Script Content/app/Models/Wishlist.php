<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsTo(Product::class,'productId');
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
