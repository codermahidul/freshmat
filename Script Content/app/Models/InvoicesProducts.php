<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicesProducts extends Model
{
    use HasFactory;


    public function product(){
        return $this->belongsTo(Product::class,'productId');
    }

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
