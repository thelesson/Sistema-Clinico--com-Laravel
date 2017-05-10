<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DadosComplementare extends Model
{
    //
    //
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // public function dadosUsers(){
    // 	return $this->belongsTo('App\User');
    // }

     public function dadosPacientesC(){
    	return $this->belongsTo('App\Paciente');
    }

    protected $fillable = [
        'naturalidade', 'nacionalidade','cor', 'estado_civil','cpf','rg','escolaridade','profissao',
    ];	
}
