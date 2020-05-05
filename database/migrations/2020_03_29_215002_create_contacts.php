<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            //id, interested_id, publication_id
            //bigIncrements: actúa como autoincrementable integer
            $table->bigIncrements('id');
            //bigInteger: actúa como integer
            $table->bigInteger('interested_id') -> unsigned();
            $table->bigInteger('publication_id') -> unsigned();
            //timestamps: para creaciones y actualizaciones
            $table->timestamps();
            //foreign: para referenciar claves foráneas
            $table->foreign('interested_id') -> references('id') -> on('users');
            $table->foreign('publication_id') -> references('id') -> on('publications');
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
