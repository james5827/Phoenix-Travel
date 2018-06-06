<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('trip_id');
            $table->unsignedInteger('tour_no');
            $table->char('rego_no', 6);
            $table->date('departure_date');
            $table->integer('max_passengers');
            $table->decimal('standard_amount', 6, 2);

            $table->foreign('tour_no', 't_tour_fk')->references('tour_no')->on('tours');
            $table->foreign('rego_no', 't_vehicle_fk')->references('rego_no')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
