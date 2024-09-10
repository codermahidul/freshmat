<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'footerLogo',
        'favicon',
        'topbar',
        'flstatus',
        'fbAppId',
        'fbSecretKey',
        'fbRedirectUrl',
        'glstatus',
        'glClientId',
        'glSecretKey',
        'glRedirectUrl',
        'fbPixelStatus',
        'fbAppIdPixel',
        'glanalyticStatus',
        'analiticTrackingId',
        'glrecaptchaStatus',
        'captchaSiteKey',
        'captchaSecretKey',
    ];
}
