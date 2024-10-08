<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'accountMode',
        'countryName',
        'currencyName',
        'currencyRatePerUSD',
        'paypalClientId',
        'paypalClientSecret',
        'image',
    ];
}
