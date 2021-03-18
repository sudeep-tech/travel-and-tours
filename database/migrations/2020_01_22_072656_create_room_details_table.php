<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_no');
            $table->string('room_type');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('hotel_details_id');
            $table->string('free_wifi');
            $table->enum('attach_bathroom',['yes','no']);
            $table->enum('smoking_policy',['yes','no']);
            $table->enum('bed_option',['single','double','triple']);
            $table->enum('Tv',['yes','no']);
            $table->enum('Bathtub',['yes','no']);
            $table->enum('Floor_level',['first','second','third','fourth','fifth','sixth','seventh']);
            $table->string('room_service');
            $table->string('aircondition');
            $table->string('image');
            $table->enum('valcony',['yes','no']);
            $table->enum('status',['active','inactive']);
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
        Schema::dropIfExists('room_details');
    }
}
