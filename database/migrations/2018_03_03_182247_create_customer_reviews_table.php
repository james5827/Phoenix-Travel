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
            $table->char('Trip_Id', 6);
            $table->char('Customer_Id', 6);
            $table->tinyInteger('Rating');
            $table->string('General_Feedback', 256);
            $table->string('Likes', 256);
            $table->string('Dislikes', 256);

            $table->primary(['Trip_Id', 'Customer_Id']);
            $table->foreign('Trip_Id', 'CR_Trip_fk')->references('Trip_Id')->on('trips');
            $table->foreign('Customer_Id', 'CR_Customer_fk')->references('Customer_Id')->on('customers');
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
