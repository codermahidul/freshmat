<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'image2',
        'shortTitle',
        'offerText',
        'description',
        'appleLink',
        'playLink',
    ];
}
