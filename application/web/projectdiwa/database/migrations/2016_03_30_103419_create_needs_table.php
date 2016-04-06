<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food');
            $table->integer('water');
            $table->integer('medicine');
            $table->integer('clothing');
            $table->integer('sleeping_bag');
            $table->timestamps();
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
        Schema::drop('needs');
    }
}
