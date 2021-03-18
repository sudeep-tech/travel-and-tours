<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HotelServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hotel_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('hotel_details_id');
            $table->unsignedInteger('user_id');
            $table->string('meal');
            $table->string('reception');
            $table->string('free_wifi');
            $table->enum('meeting_or_banquet_facilities',['yes','no']);
            $table->enum('smoking_policy',['yes','no']);
            $table->enum('bed_option',['single','double','triple']);
            $table->enum('massage',['yes','no']);
            $table->enum('garden',['yes','no']);
            $table->enum('bar',['first','second','third','fourth','fifth','sixth','seventh']);
            $table->string('resturant');
            $table->string('shopping');
            $table->string('laundary');
            $table->string('airport_pickup');
            $table->string('carpark');
            $table->string('lift');
            $table->string('swimming_pool');
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
        //
    }
}
