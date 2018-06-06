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
            $table->char('rego_no', 6);
            $table->string('vin', 20);
            $table->string('make', 20);
            $table->string('model', 20);
            $table->integer('year');
            $table->smallInteger('capacity');
            $table->string('fuel_type', 8)->nullable();
            $table->string('equipment', 100)->nullable();
            $table->char('license_required', 2);

            $table->primary('rego_no', 'vehicle_pk');
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
