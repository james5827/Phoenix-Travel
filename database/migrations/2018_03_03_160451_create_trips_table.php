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
            $table->char('Trip_Id', 6);
            $table->char('Tour_No', 3);
            $table->char('Rego_No', 6);
            $table->date('Departure_Date');
            $table->integer('Max_Passengers');
            $table->decimal('Standard_Amount', 6, 2);

            $table->primary('Trip_Id', 'Trip_pk');
            $table->foreign('Tour_No', 'T_Tour_fk')->references('Tour_No')->on('tours');
            $table->foreign('Rego_No', 'T_Vehicle_fk')->references('Rego_No')->on('vehicles');
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
