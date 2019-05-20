<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_pages', function (Blueprint $table) {
            $table->bigIncrements('id_page');
            $table->unsignedBigInteger('author');
            $table->foreign('author')->references('id_user')->on('users');
            $table->string('header',25);
            $table->text('description');
            $table->string('content');
            $table->dateTime('date_published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_pages');
    }
}
