<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionals', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();

            //$table->increments('id')->integer('id', 11);
            $table->integer('id', 15);
            $table->string('cpf', 11)->unique();
            $table->string('nome', 45);
            $table->integer('tipo');
            $table->string('status', 20);
            $table->integer('nucleo_id');
            $table->foreign('nucleo_id')->references('id')->on('nucleos');
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
        Schema::dropIfExists('profissionals');
    }
};
