<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('first_name', 35);
            $table->char('middle_initial', 1)->nullable();
            $table->string('last_name', 35);
            $table->smallInteger('street_no');
            $table->string('street_name', 50);
            $table->string('suburb', 35);
            $table->integer('postcode');
            $table->string('email',150)->unique();
            $table->string("password", 32);
            $table->string('phone', 10)->nullable();
            $table->boolean('authcustomer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
