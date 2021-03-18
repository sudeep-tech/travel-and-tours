<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('hotel_details', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedInteger('user_id');
        $table->string('property_name');
        $table->string('district');
        $table->string('property_address');
        $table->string('language_spoken');
        $table->string('description');
        $table->string('no_of_floors');
        $table->string('phone_num'); 
        $table->string('image');   
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
        Schema::dropIfExists('hotel_details');
    }
}
