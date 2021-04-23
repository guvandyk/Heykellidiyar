<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->Biginteger('phone');
            $table->string('email');
            $table->string('fax');
            $table->string('adres');
            $table->string('adres_ru');
             $table->string('adres_en');
            $table->string('adres_koce');
            $table->string('adres_koce_ru');
            $table->string('adres_koce_en');
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
        Schema::dropIfExists('contacts');
    }
}
