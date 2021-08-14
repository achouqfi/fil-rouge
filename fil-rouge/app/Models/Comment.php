<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //relation article/commentaires
    public function article(){
        return $this->belongsTo(Article::class);
    }

    //relation article/user
    public function user(){
        return $this->belongsTo(User::class);
    }


}
