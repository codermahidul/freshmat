<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stripe extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'countryName',
        'currencyName',
        'currencyRatePerUSD',
        'stripeClientId',
        'stripeSecretKey',
        'image',
    ];
}
