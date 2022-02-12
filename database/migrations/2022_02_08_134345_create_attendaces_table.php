<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendaces', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('user_id');
              $table->foreign('user_id')->references('id')->on('users');
              $table->string('status');
              $table->integer('leave_Request');
              $table->integer('leave_Approval');
              $table->timestamp('date-Time')->useCurrent = true;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendaces');
    }
}
