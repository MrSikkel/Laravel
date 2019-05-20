<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Passports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->bigIncrements('id_passport');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('familiya',25);
            $table->string('name',25);
            $table->string('otchestvo',25);
            $table->integer('pol');
            $table->integer('series');
            $table->integer('number')->unique();
            $table->string('by_whom',100);
            $table->date('date_of_issue');
            $table->string('department_code',6);
            $table->string('address',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passports');
    }
}
