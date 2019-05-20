<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asks', function (Blueprint $table) {
            $table->bigIncrements('id_ask');
            $table->unsignedBigInteger('id_question');
            $table->foreign('id_question')->references('id_question')->on('questions');
            $table->string('ask',50);
        });
		Schema::table('questions', function(Blueprint $table)
		{
		  $table->foreign('id_ask')->references('id_ask')->on('asks');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asks');
    }
}
