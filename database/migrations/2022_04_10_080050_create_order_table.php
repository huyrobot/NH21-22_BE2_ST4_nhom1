<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('yourCart_id')->unsigned();
            $table->string('coupon_code',50);
            $table->string('address',150);

            $table->foreign('user_id')->references('user_id')->on('account_user');
            $table->foreign('yourCart_id')->references('yourCart_id')->on('your_cart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
