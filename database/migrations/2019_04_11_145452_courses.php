<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id_course');
            $table->unsignedBigInteger('id_handbook');
            $table->foreign('id_handbook')->references('id_handbook')->on('handbook_courses');
            $table->unsignedBigInteger('author');
            $table->foreign('author')->references('id_user')->on('users');
            $table->float('sum');
            $table->integer('count_place');
            $table->dateTime('date_begin');
            $table->dateTime('date_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
