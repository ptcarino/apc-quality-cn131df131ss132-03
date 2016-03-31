<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historic_records', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('title', 45);
            $table->text('content');
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
        Schema::drop('historic_records');
    }
}
