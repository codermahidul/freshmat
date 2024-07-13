<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'shortDescription',
        'description',
        'regularPrice',
        'selePrice',
        'unitType',
        'categoryId',
        'thumbnail',
        'sku',
        'status',
    ];


    //Relationship
    public function productcategories(){
        return $this->belongsTo(ProductCategory::class,'categoryId');
    }

    public function productgallery(){
        return $this->hasMany(ProductGallery::class,'productId');
    }

    public function wishlists(){
        return $this->belongsToMany(Wishlist::class,'productId');
    }

    public function invoiceProducts(){
        return $this->hasMany(InvoicesProducts::class,'productId');
    }


    public function reviews(){
        return $this->hasMany(Reviews::class, 'userId');
    }

}
