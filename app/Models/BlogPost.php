<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'categoryId',
        'title',
        'description',
        'slug',
        'thumbnail',
        'react',
        'seoTitle',
        'seoDescription',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function blogcategory(){
        return $this->belongsTo(BlogCategory::class);
    }

}
