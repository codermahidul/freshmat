<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mollie extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'countryName',
        'currencyName',
        'currencyRatePerUSD',
        'mollieKey',
        'image',
    ];
}
