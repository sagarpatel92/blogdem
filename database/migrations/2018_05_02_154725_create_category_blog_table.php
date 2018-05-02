<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_blog', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('blog_id')->unsigned();
	        $table->foreign('blog_id')->references('id')->on('blogs');
            $table->integer('category_id')->unsigned();
	        $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('category_blog');
    }
}
