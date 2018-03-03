<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itineraries', function (Blueprint $table) {
            $table->char('Tour_No', 3);
            $table->tinyInteger('Day_No');
            $table->char('Hotel_Booking_No', 6);
            $table->string('Activities', 150)->nullable();
            $table->string('Meals', 150)->nullable();

            $table->primary(['Tour_No', 'Day_No'], 'Itinerary_pk');
            $table->foreign('Tour_No', 'I_Tour_fk')->references('Tour_No')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itineraries');
    }
}
