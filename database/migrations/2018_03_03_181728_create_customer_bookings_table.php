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
            $table->unsignedInteger('Trip_Booking_No');
            $table->unsignedInteger('Customer_Id');
            $table->boolean('Accepted_Invite');

            $table->primary(['Trip_Booking_No', 'Customer_Id'], 'Customer_Bookings_pk');
            $table->foreign('Trip_Booking_No', 'CB_Trip_Booking_fk')
                ->references('Trip_Booking_No')
                ->on('trip_bookings')
                ->onDelete('cascade');

            $table->foreign('Customer_Id')
                ->references('Customer_Id')
                ->on('customers')
                ->onDelete('cascade');
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
