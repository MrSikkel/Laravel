<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id_contract');
            $table->unsignedBigInteger('id_card');
            $table->foreign('id_card')->references('id_card')->on('Organization_card');
            $table->unsignedBigInteger('id_passport');
            $table->foreign('id_passport')->references('id_passport')->on('passports');
            $table->unsignedBigInteger('id_receipt');
            $table->foreign('id_receipt')->references('id_receipt')->on('receipts');
            $table->dateTime('date_conclusion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
