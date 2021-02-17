<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Paciente extends Model
{
    //
    //
     use Notifiable;


    public function dadosUsers(){
    	return $this->belongsTo('App\User');
    }

     public function dadosPessoais(){
        return $this->hasOne('App\DadosPessoais');
    }

      public function dadosComplementare(){
        return $this->hasOne('App\DadosComplementare');
    }

     public function convenios(){
        return $this->hasOne('App\Convenio');
    }
     public function prontuario(){
        return $this->hasOne('App\Prontuario');
    }


    protected $fillable = ['tipo',];
}
