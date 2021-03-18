<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketbookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('current_address');
            $table->string('country');
            $table->string('leaving_from');
            $table->string('telephone');
            $table->string('mobile_no');

            $table->string('from');
            $table->string('where');
            $table->string('checkin_date');
            $table->string('checkout__date');
            

            
          $table->enum('airport_pickup',['yes','no']);
            $table->enum('airlines',['buddha air','saurya ir','shri air','yeti air','tara air','himalayan air','summit air']);
            $table->string('flight_num');
            $table->string('flight_time');

            
            $table->string('adult');
            $table->string('children');
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
        Schema::dropIfExists('ticketbookings');
    }
}
