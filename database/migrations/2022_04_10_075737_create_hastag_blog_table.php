<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHastagBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hastag_blog', function (Blueprint $table) {
            $table->integer('blog_id')->unsigned();
            $table->string('hastag_blog',30)->unique();

            $table->foreign('blog_id')->references('blog_id')->on('blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hastag_blog');
    }
}
