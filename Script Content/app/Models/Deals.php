<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{
    use HasFactory;
    protected $fillable = [
        'shortTitle',
        'offerText',
        'description',
        'link',
        'date',
        'backgroundImg',
    ];
}
