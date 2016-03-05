<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('markers', function (Blueprint $table) {
            $table->increments('id');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('type');
            $table->timestamps('posted_at');
            $table->integer('citizens_id')->unsigned();
            $table->foreign('citizens_id')->references('id')->on('citizens');
            $table->integer('shelters_id')->unsigned();
            $table->foreign('shelters_id')->references('id')->on('shelters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
