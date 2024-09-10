<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'shortTitle',
        'description',
        'image',
        'quote',
        'listItemOne',
        'listItemTwo',
        'listItemThree',
        'listItemFour',
        'f1icon',
        'f1title',
        'f1description',
        'f2icon',
        'f2title',
        'f2description',
        'f3icon',
        'f3title',
        'f3description',
        'w1title',
        'w1description',
        'w2title',
        'w2description',
        'w3title',
        'w3description',
        'w4title',
        'w4description',
        'c1icon',
        'c1number',
        'c1text',
        'c2icon',
        'c2number',
        'c2text',
        'c3icon',
        'c3number',
        'c3text',
        'c4icon',
        'c4number',
        'c4text',
    ];
}
