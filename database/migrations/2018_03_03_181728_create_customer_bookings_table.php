<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_bookings', function (Blueprint $table) {
            $table->char('Trip_Booking_No', 6);
            $table->char('Customer_Id', 6);

            $table->primary(['Trip_Booking_No', 'Customer_Id'], 'Customer_Bookings_pk');
            $table->foreign('Trip_Booking_No', 'CB_Trip_Booking_fk')->references('Trip_Booking_No')->on('trip_bookings');
            $table->foreign('Customer_Id')->references('Customer_Id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_bookings');
    }
}