<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id_profile');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('familiya',25);
            $table->string('name',25);
            $table->integer('pol');
            $table->string('otchestvo',25);
            $table->string('phone_number',12);
            $table->date('date_of_birth');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
