<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHastagProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hastag_product', function (Blueprint $table) {
            $table->integer('pro_id')->unsigned();
            $table->string('hastag_product',50);

            $table->foreign('pro_id')->references('product_id')->on('products');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hastag_product');
    }
}
