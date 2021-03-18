<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelpackages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('Title');
            $table->string('service_level');
            $table->string('age_requirement');
            $table->string('num_people');
            $table->string('travel_period');
            $table->string('travel_style');
            $table->string('guide');
            $table->string('price');
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
        Schema::dropIfExists('travelpackages');
    }
}
