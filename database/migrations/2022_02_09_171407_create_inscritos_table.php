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
        Schema::create('inscritos', function (Blueprint $table) {
            //$table->increments('id')->integer('id', 11);
            $table->integer('id', 15);
            $table->string('nome', 45);
            $table->string('estado_civil', 25);
            $table->string('escolaridade', 25)->default('Nenhuma');
            $table->string('profissao', 45)->default('Nenhuma');
            $table->string('telefone', 45);
            $table->string('telefone_emergencia', 45);
            $table->date('data_nascimento');
            $table->string('naturalidade', 45);
            $table->string('cor', 10);
            $table->string('cpf', 11)->nullable();
            $table->string('documento_alternativo', 45)->nullable();
            $table->string('sexo', 10);
            //$table->unsignedInteger('nucleo_id');
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
        Schema::dropIfExists('inscritos');
    }
};
