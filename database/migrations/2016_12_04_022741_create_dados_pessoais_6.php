<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;


class CreateDadosPessoais6 extends Migration
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
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nome');
            $table->date('data_nasc')->default(Carbon::now());
            $table->string('sexo')->default("Nulo");
            $table->string('email')->unique();
            $table->string('email_secundario')->nullable();
            $table->string('observacoes',255)->nullable();
            $table->string('como_conheceu',100)->nullable();
            $table->bigInteger('celular');
            $table->bigInteger('residencial'); 
            $table->bigInteger('cep');
            $table->string('endereco',255);
            $table->bigInteger('num_endereco')->nullable();
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
