<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('category');            
            $table->string('color');            
            $table->string('rocker');            
            $table->string('typeOfWave');            
            $table->string('lenght');            
            $table->string('width');            
            $table->string('thickness');            
            $table->string('MoreDetails');
            $table->foreignId('users_id')->constrained();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('ships');
    }
}
