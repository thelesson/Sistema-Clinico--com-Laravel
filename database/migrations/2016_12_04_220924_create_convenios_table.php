<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('convenio')->default("Paciente não conveniado");    
            $table->string('plano_convenio')->default("Paciente sem plano conveniado"); 
            $table->integer('carteirinha')->default("0000000");  
            $table->date('data_nasc')->default(Carbon::now()); 
            $table->string('acomodacao')->default("Sem acomodacao"); 
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
        Schema::dropIfExists('convenios');
    }
}
