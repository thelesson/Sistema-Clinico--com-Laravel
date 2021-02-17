<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DadosPessoaisNumero2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
         Schema::create('dados_pessoais', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nome');
            $table->date('data_nasc');
            $table->string('sexo');
            $table->string('email')->unique();
            $table->string('email_secundario')->nullable();
            $table->string('observacoes',255)->nullable();
            $table->string('como_conheceu',100)->nullable();
            $table->integer('celular');
            $table->integer('residencial'); 
            $table->integer('cep');
            $table->string('endereco',255);
            $table->integer('num_endereco')->nullable();
            $table->string('comp_endereco',100)->nullable();
            $table->string('cidade',100);
            $table->string('estado',100);
            $table->string('bairro',100);
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
         Schema::drop('dados_pessoais');
    }
}