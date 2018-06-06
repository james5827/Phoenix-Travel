<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_reviews', function (Blueprint $table) {
            $table->unsignedInteger('trip_id');
            $table->unsignedInteger('customer_id');
            $table->tinyInteger('rating');
            $table->string('general_feedback', 256);
            $table->string('likes', 256);
            $table->string('dislikes', 256);

            $table->primary(['trip_id', 'customer_id']);
            $table->foreign('trip_id', 'cr_trip_fk')->references('trip_id')->on('trips');
            $table->foreign('customer_id', 'cr_customer_fk')->references('customer_id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_reviews');
    }
}
