<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->integer('category_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('news_id')->unsigned()->index();
            $table->string('author');
            $table->text('body');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('news_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('news_id')->unsigned()->index();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_tags');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('news');
    }
}
