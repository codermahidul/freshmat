<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function post(){
        return $this->hasMany(BlogPost::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function commentReplies(){
        return $this->hasMany(CommentsReply::class);
    }

    public function wishlits(){
        return $this->hasMany(Wishlist::class);
    }

    public function userProfile(){
        return $this->hasOne(UserProfile::class, 'userId');
    }

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }

    public function reviews(){
        return $this->hasMany(Reviews::class, 'userId');
    }

}
