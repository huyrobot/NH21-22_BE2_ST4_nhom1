<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListYourCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_your_cart', function (Blueprint $table) {
            $table->integer('yourCard_id')->unsigned();
            $table->integer('Product_id')->unsigned();
            $table->integer('quantity_product');

            $table->foreign('yourCard_id')->references('yourCard_id')->on('your_cart');
            $table->foreign('product_id')->references('product_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_your_cart');
    }
}
