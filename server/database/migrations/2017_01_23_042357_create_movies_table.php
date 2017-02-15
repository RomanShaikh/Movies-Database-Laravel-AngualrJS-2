<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('language_id')->unsigned();
            $table->string('title');
            $table->string('running_time');
            $table->date('release_date');
            $table->string('image_file');
            $table->text('movie_description');
            $table->timestamps();
            $table->softDeletes();
			$table->foreign('language_id')->references('id')->on('movie_language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}