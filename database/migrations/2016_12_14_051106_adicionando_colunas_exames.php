<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionandoColunasExames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('exames', function (Blueprint $table) {
           $table->string('cor_de_fundo')->default("#3470a5");
           $table->string('avatar_fundo')->default("blur-01.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropColumn('cor_de_fundo');
      $table->dropColumn('avatar_fundo');
    }
}
