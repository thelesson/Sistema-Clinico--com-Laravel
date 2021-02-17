<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnamnese2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('anamneses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prontuario_id')->unsigned();
            $table->foreign('prontuario_id')->references('id')->on('prontuarios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
           
            $table->timestamps();
             $table->string('queixa_principal')->default("Não Informado");
              $table->string('historia')->default("Não Informado");
               $table->string('problemas_renais')->default("Não Informado");
                $table->string('problemas_arti_reum')->default("Não Informado");
                 $table->string('problemas_respiratorios')->default("Não Informado");
                  $table->string('problemas-gastricos')->default("Não Informado");
                   $table->string('alergias')->default("Não Informado");
                   $table->enum('hepatite',array('nao', 'sim'));
                    $table->enum('gravidez',array('nao', 'sim'));
                     $table->enum('diabetes',array('nao', 'sim'));
                      $table->enum('problemas_cicatrizacao',array('nao', 'sim'));
                       $table->string('uso_medicamentos')->default("Não Informado");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('anamneses');
    }
}
