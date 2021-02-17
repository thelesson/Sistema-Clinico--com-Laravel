<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    
    public function dadosProntuarioPacientes(){
    	return $this->belongsTo('App\Paciente');
    }

     public function anamnese(){
        return $this->hasOne('App\Anamnese');
    }


}
