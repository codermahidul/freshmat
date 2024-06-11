<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['status','payment'];

    public function invoiceProducts(){
        return $this->hasMany(InvoicesProducts::class,'invoiceId');
    }

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }
}
