<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PageAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_attachments', function (Blueprint $table) {
            $table->bigIncrements('id_page_att');
            $table->unsignedBigInteger('id_page');
            $table->foreign('id_page')->references('id_page')->on('info_pages');
            $table->unsignedBigInteger('id_att');
            $table->foreign('id_att')->references('id_att')->on('attachments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_attachments');
    }
}
