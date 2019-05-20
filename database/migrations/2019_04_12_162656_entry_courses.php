<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntryCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_courses', function (Blueprint $table) {
            $table->bigIncrements('id_entry');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->unsignedBigInteger('id_contract');
            $table->foreign('id_contract')->references('id_contract')->on('contracts');
            $table->unsignedBigInteger('id_course');
            $table->foreign('id_course')->references('id_course')->on('courses');
            $table->string('status',15);
            $table->dateTime('date_entry');
            $table->dateTime('date_enrollment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entry_courses');
    }
}
