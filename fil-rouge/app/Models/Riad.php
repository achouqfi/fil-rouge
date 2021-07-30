<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riad extends Model
{
    use HasFactory;

    public function photos(){
        return $this->hasMany(PhotoHotel::class);
    }

    public function chambres(){
        return $this->hasMany(Chambre::class);
    }
}
