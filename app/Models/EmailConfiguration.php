<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailConfiguration extends Model
{
    use HasFactory;
    protected $fillable = [
        'mailHost',
        'email',
        'smtpUserName',
        'smtpPassword',
        'mailPort',
        'mailEncryption',
    ];
}
