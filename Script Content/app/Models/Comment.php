<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['status'];


    public function user(){
        return $this->belongsTo(User::class,'userId');
    }

    public function blogpost(){
        return $this->belongsTo(BlogPost::class);
    }

    public function replies(){
        return $this->hasMany(CommentsReply::class);
    }

}
