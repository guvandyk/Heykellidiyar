<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemcateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Itemcate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name_tm');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('image');
            $table->longText('description_tm');
            $table->longText('description_ru');
            $table->longText('description_en');
             $table->integer('status')->default(0)->comment('0:pasiv 1:aktiv');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('onumler');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Itemcate');
    }
}
