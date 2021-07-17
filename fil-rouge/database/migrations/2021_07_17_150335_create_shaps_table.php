<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shaps', function (Blueprint $table) {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shaps');
    }
}
