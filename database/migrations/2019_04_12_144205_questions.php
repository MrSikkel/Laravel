<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id_question');
            $table->unsignedBigInteger('id_ask');
           /* $table->foreign('id_ask')->references('id_ask')->on('asks');*/
            $table->unsignedBigInteger('id_test');
            $table->foreign('id_test')->references('id_test')->on('tests');
            $table->string('description_question');
            $table->integer('type_question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
