<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_bookings', function (Blueprint $table) {
            $table->increments('trip_booking_no');
            $table->unsignedInteger('trip_id');
            $table->unsignedInteger('primary_customer');
            $table->date('booking_date')->nullable();
            $table->decimal('deposit_amount', 6,2)->nullable();

            $table->foreign('trip_id', 'tb_trip_fk')->references('trip_id')->on('trips');
            $table->foreign('primary_customer', 'tb_customer_fk')->references('customer_id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_bookings');
    }
}
