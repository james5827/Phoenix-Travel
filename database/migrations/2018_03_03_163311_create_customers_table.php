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
            $table->increments('Customer_Id');
            $table->string('First_Name', 35);
            $table->char('Middle_Initial', 1)->nullable();
            $table->string('Last_Name', 35);
            $table->smallInteger('Street_No');
            $table->string('Street_Name', 50);
            $table->string('Suburb', 35);
            $table->integer('Postcode');
            $table->string('Email',150)->unique();
            $table->string("Password", 500);
            $table->string('Phone', 10)->nullable();
            $table->boolean('AuthCustomer');
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
