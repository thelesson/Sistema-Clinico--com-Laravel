<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            $table->increments('id');
           
            $table->timestamps();
             $table->string('nome_exame');
              $table->string('sub_titulo')->nullable();
               $table->string('material_analisado')->default("Não Informado");
                $table->float('tempo_coleta_material');
                 $table->string('finalidade')->default("Não Informado");
                  $table->string('preparacao_previa')->default("Não Informado");
                   $table->string('valores_normais_descr')->default("Não Informado");
                    $table->string('valores_anormais_sign')->default("Não Informado");
                     $table->integer('prazo_resultado');
                     $table->string('nivel_confiabilidade')->default("Não Informado");
                      $table->string('descricao_exame')->default("Não Informado");
                       $table->string('med_alter_result')->default("Não Informado");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('exames');
    }
}
