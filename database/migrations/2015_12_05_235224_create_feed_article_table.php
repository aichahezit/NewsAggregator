<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_article', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('feedid')->unsigned();
            $table->foreign('feedid')->references('id')->on('feed');
            $table->string('title');
            $table->longText('description');
            $table->string('link');
            $table->string('guid');
            $table->timestamp('pub_date');
            $table->string('tag');
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
        Schema::drop('feed_article');
    }
}
