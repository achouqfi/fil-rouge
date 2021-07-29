<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoHotel extends Model
{
    use HasFactory;
    protected $fillable=[
        "pathPhoto","riad_id"
    ];
    public function hotel(){
        return $this->belongsTo(Riad::class);
    }
}
