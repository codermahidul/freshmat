<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'b1icon',
        'b2icon',
        'b3icon',
        'b4icon',
        'b1title',
        'b2title',
        'b3title',
        'b4title',
        'b1text',
        'b2textOne',
        'b2textTwo',
        'b3textOne',
        'b3textTwo',
        'b4textOne',
        'b4textTwo',
        'b4textUrlOne',
'        b4textUrlTwo',
        'image',
        'googleMap',
    ];
}
