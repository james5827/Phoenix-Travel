<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->char('Tour_no', 3);
            $table->string('Tour_Name', 70);
            $table->string('Description', 100);
            $table->float('Duration')->nullable();
            $table->string('Route_Map', 256)->nullable();

            $table->primary('Tour_No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
