<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosComplentares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('dados_complementares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
             $table->string('naturalidade')->default("Não Informado");   
             $table->string('nacionalidade')->default("Brasileira"); 
             $table->string('cor')->default("Não Informado"); 
             $table->string('estado_civil')->default("Não Informado"); 
            $table->bigInteger('cpf'); 
            $table->bigInteger('rg'); 
            $table->string('escolaridade')->default("Não Informado");
            $table->string('profissao')->default("Não Informado");




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
        Schema::dropIfExists('dados_complementares');
    }
}
