<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
              $table->id();
             $table->unsignedBigInteger('billingdetail_id');
              $table->foreign('billingdetail_id')->references('id')->on('billing_details');
              $table->unsignedBigInteger('product_id');
              $table->foreign('product_id')->references('id')->on('products');
              $table->string('item_name',255);
              $table->float('price');
              $table->float('total_Price');
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
        Schema::dropIfExists('orders');
    }
}
