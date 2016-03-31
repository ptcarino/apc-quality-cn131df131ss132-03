<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
            $table->integer('accounts_id')->unsigned();
            $table->foreign('accounts_id')->references('id')->on('accounts');
            $table->integer('cities_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on('cities');
            $table->integer('provinces_id')->unsigned();
            $table->foreign('provinces_id')->references('id')->on('provinces');
            $table->integer('regions_id')->unsigned();
            $table->foreign('regions_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rros');
    }
}
