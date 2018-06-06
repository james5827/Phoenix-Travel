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
            $table->unsignedInteger('trip_booking_no');
            $table->unsignedInteger('customer_id');
            $table->boolean('accepted_invite');

            $table->primary(['trip_booking_no', 'customer_id'], 'customer_bookings_pk');
            $table->foreign('trip_booking_no', 'cb_trip_booking_fk')
                ->references('trip_booking_no')
                ->on('trip_bookings')
                ->onDelete('cascade');

            $table->foreign('customer_id')
                ->references('customer_id')
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
