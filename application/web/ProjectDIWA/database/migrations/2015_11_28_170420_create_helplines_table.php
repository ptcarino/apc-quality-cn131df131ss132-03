<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helplines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telnumber');
            $table->string('name');
            $table->timestamps();
            $table->integer('citizens_id')->unsigned();
            $table->foreign('citizens_id')->references('id')->on('citizens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('helplines');
    }
}
