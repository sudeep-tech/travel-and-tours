<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacakagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_title');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('hotel_details_id');
            $table->string('car_service');
            $table->string('pickup_time');
            $table->string('pickup_destination');
            $table->string('no_people');
            $table->string('breakfast');
            $table->string('lunch');
            $table->string('dinner');
            $table->string('pacakgae_discount')->nullable();
            $table->string('visit_localplace');
            $table->string('image')->nullable();
            $table->double('price');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('pacakages');
    }
}
