<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id_message');
            $table->unsignedBigInteger('id_user_sender');
            $table->foreign('id_user_sender')->references('id_user')->on('users');
            $table->unsignedBigInteger('id_user_recipient');
            $table->foreign('id_user_recipient')->references('id_user')->on('users');
            $table->text('message');
            $table->integer('link_type');
            $table->dateTime('date_send');
            $table->dateTime('date_read');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
