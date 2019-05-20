<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DateAndTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_and_time', function (Blueprint $table) {
            $table->bigIncrements('id_dt');
            $table->unsignedBigInteger('id_m_class');
            $table->foreign('id_m_class')->references('id_m_class')->on('master_class');
            $table->dateTime('date of event');
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
        Schema::dropIfExists('date_and_time');
    }
}
