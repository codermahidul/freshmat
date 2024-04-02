<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsReply extends Model
{
    use HasFactory;
    protected $fillable = ['reply'];

    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
