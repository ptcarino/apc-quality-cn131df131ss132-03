<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_bulletins', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->timestamp('time_posted');
            $table->timestamps();
            $table->integer('rros_id')->unsigned();
            $table->foreign('rros_id')->references('id')->on('rros');
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
        Schema::drop('info_bulletins');
    }
}
