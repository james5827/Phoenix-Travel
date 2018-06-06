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
            $table->unsignedInteger('tour_no');
            $table->tinyInteger('day_no');
            $table->char('hotel_booking_no', 6);
            $table->string('activities', 150)->nullable();
            $table->string('meals', 150)->nullable();

            $table->primary(['tour_no', 'day_no'], 'itinerary_pk');
            $table->foreign('tour_no', 'i_tour_fk')->references('tour_no')->on('tours');
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
