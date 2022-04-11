<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('picture_Product',150);
            $table->string('name_Product',100);
            $table->integer('price_Product');
            $table->string('size_Product',5);
            $table->string('color_Product',10);
            $table->string('weight_Product',10);
            $table->string('dimensisons_Product',50);
            $table->string('materials_Product',30);
            $table->text('description_Product')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
