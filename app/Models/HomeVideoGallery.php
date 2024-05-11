<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeVideoGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'shortTitle',
        'offerText',
        'description',
        'link',
        'thumbnail1',
        'video1',
        'thumbnail2',
        'video2',
        'thumbnail3',
        'video3',
        'thumbnail4',
        'video4',
    ];
}
