<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnumlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onumler', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name_tm');
            $table->string('name_ru');
            $table->string('name_en');
            $table->longText('description_tm');
            $table->longText('description_ru');
            $table->longText('description_en');
            $table->string('image');
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
        Schema::dropIfExists('onumler');
    }
}
