<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            //bigIncrements: actúa como autoincrementable integer
            $table->bigIncrements('id');
            //bigInteger: actúa como integer
            $table->bigInteger('publisher_id') -> unsigned();
            $table->bigInteger('property_id') -> unsigned();
            //string: Texto normal
            $table->string('title');
            //timestamps: para creaciones y actualizaciones
            $table->timestamps();
            //foreign: para referenciar claves foráneas
            $table->foreign('publisher_id') -> references('id') -> on('users');
            $table->foreign('property_id') -> references('id') -> on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
