<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class H3Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'description',
        'link',
        'backgroundImg',
        'video',
    ];
}
