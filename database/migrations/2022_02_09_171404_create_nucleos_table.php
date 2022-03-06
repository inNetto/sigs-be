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
        Schema::create('nucleos', function (Blueprint $table) {
        //$table->increments('id')->integer('id', 11);
        //$table->timestamps();

        //$table->increments('id')->integer('id', 11);
        $table->integer('id', 15);
        $table->integer('numero');
        $table->string('nome', 45)->unique();
        $table->string('bairro', 45);
        $table->string('localizacao', 45);
        $table->string('zona', 10);
        $table->string('ap', 3);
        $table->string('status', 25);
        $table->string('observacao', 50);
        $table->integer('dono_id')->default('1');
        $table->foreign('dono_id')->references('id')->on('donos');
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
        Schema::dropIfExists('nucleos');
    }
};
