<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactarticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactarticle', function (Blueprint $table) {
            $table->id();
            $table->string('name_tm');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('email_tm');
            $table->string('email_ru');
            $table->string('email_en');
            $table->string('telefon_tm');
            $table->string('telefon_ru');
            $table->string('telefon_en');
            $table->string('tema_tm');
            $table->string('tema_ru');
            $table->string('tema_en');
            $table->string('servis_tm');
            $table->string('servis_ru');
            $table->string('servis_en');
            $table->string('habar_tm');
            $table->string('habar_ru');
            $table->string('habar_en');
            $table->string('button_tm');
            $table->string('button_ru');
            $table->string('button_en');
            
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
        Schema::dropIfExists('contactarticle');
    }
}
