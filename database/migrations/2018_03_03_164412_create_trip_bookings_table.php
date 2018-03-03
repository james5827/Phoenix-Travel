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
            $table->char('Trip_Booking_No', 6);
            $table->char('Trip_Id', 6);
            $table->char('Primary_Customer', 6);
            $table->date('Booking_Date')->nullable();
            $table->decimal('Deposit_Amount', 6,2)->nullable();

            $table->primary('Trip_Booking_No', 'Trip_Booking_pk');
            $table->foreign('Trip_Id', 'TB_Trip_fk')->references('Trip_Id')->on('trips');
            $table->foreign('Primary_Customer', 'TB_Customer_fk')->references('Customer_Id')->on('customers');
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
