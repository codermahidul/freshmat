<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'review',
        'rating',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'productId');
    }
}
