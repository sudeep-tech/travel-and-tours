<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelbookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('hotel_details_id');
            $table->unsignedInteger('user_id');
            $table->longText('destination');
            $table->string('check-in date');
            $table->string('check-out date');
            $table->string('adult');
            $table->string('children');
            $table->string('room');
            $table->string('age');
            $table->enum('status',['active','inactive'])->default('inactive'); 
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
        Schema::dropIfExists('hotelbookings');
    }
}
