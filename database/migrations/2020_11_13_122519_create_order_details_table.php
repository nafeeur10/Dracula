<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('pen_id');
            $table->unsignedBigInteger('eraser_id');
            $table->unsignedBigInteger('diary_id');

            $table->foreign('buyer_id')->references('id')->on('buyers');
            $table->foreign('pen_id')->references('id')->on('pens');
            $table->foreign('eraser_id')->references('id')->on('erasers');
            $table->foreign('diary_id')->references('id')->on('diaries');
            $table->integer('total');
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
        Schema::dropIfExists('order_details');
    }
}
