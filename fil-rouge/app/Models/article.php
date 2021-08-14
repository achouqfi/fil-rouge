<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    //relation article/commentaires
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //relation article/user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
