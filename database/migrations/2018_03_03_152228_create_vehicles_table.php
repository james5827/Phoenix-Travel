<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->char('Rego_No', 6);
            $table->string('VIN', 20);
            $table->string('Make', 20);
            $table->string('Model', 20);
            $table->integer('Year');
            $table->smallInteger('Capacity');
            $table->string('Fuel_Type', 8)->nullable();
            $table->string('Equipment', 100)->nullable();
            $table->char('License_Required', 2);

            $table->primary('Rego_No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
