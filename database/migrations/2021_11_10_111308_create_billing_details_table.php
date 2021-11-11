<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_details', function (Blueprint $table) {
              $table->id();
              $table->unsignedBigInteger('user_id');
              $table->foreign('user_id')->references('id')->on('users');
              $table->string('first_name',255);
              $table->string('last_name',255);
              $table->string('email')->unique();
              $table->integer('phone_number');
              $table->string('company_name',255);
              $table->string('country',255);
              $table->longText('address_line1');
              $table->longText('address_line2');
              $table->string('district',255);
              $table->string('city',255);
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing_details');
    }
}
