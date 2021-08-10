<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riads', function (Blueprint $table) {
            $table->id();
            $table->string('hotelName');
            $table->string('hotelAdresse');
            $table->longText('hotelDescription');
            $table->string('photoPrincipal');
            $table->string('phone');
            //add phone number
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
        Schema::dropIfExists('riads');
    }
}
