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
        Schema::create('enderecos', function (Blueprint $table) {
           // $table->increments('id');
            //$table->timestamps();
            //$table->increments('id')->integer('id', 11);
            $table->integer('id', 15);
            $table->string('cep', 8);
            $table->string('rua', 45);
            $table->string('numero', 25);
            $table->string('complemento', 45);
            $table->string('bairro', 45);
            $table->integer('inscrito_id');
            $table->foreign('inscrito_id')->references('id')->on('inscritos');
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
        Schema::dropIfExists('enderecos');
    }
};
