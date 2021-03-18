<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hotelbooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hotelbooking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('room_type');
            $table->string('contact_name');
            $table->string('mobile_phone');
            $table->string('card_name');
            $table->string('email_address');
            $table->string('confirm_email');
            $table->string('price');
            $table->string('booking');
            $table->string('arrival_time');
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
        Schema::dropIfExists('hotelbooking');
    }
}


   