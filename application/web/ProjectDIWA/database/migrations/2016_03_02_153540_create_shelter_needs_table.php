<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelterNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelterneeds', function (Blueprint $table) {
            $table->increments('id');
            $table->text('remarks');
            $table->text('notes');
            $table->string('needs');
            $table->timestamps('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shelterneeds');
    }
}
