<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    //relation chambre/hotel
    public function hotel(){
        return $this->belongsTo(Riad::class);
    }
}
