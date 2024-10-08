<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'slug',
        'icon',
        'status',
    ];


    //Relationship
    public function product(){
        return $this->hasMany(Product::class,'categoryId');
    }

}
