<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
      public $table = "anamneses";
      public function dadosConsulta(){
    	return $this->belongsTo('App\Consulta');
    }

     protected $fillable = [
        'queixa_principal', 'historia','problemas_renais', 'problemas_arti_reum','problemas_respiratorios','problemas-gastricos','alergias','hepatite','gravidez','diabetes','problemas_cicatrizacao',
        'uso_medicamentos',
    ];	


}
