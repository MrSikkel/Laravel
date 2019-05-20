<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrganizationCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Organization_card', function (Blueprint $table) {
            $table->bigIncrements('id_card');
            $table->string('name',50)->unique();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->integer('inn')->unique();
            $table->integer('personal_account_number')->unique();
            $table->string('type_account');
            $table->string('bank_account_details')->unique();
            $table->integer('ogrn')->unique();
            $table->dateTime('date_ogrn');
            $table->integer('okpo')->unique();
            $table->integer('okato')->unique();
            $table->integer('oktmo')->unique();
            $table->integer('okogu')->unique();
            $table->integer('okfs')->unique();
            $table->integer('okopf')->unique();
            $table->integer('okved')->unique();
            $table->string('city_code',10)->unique();
            $table->string('fax',20);
            $table->string('director',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Organization_card');
    }
}
