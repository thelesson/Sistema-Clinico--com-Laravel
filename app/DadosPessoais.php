<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DadosPessoais extends Model
{
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
     public function dadosPacientes(){
    	return $this->belongsTo('App\Paciente');
    }

    


protected $dates = ['data_nasc'];

    protected $fillable = [
        'nome', 'data_nasc','email', 'sexo','celular','residencial','cep','endereco','bairro','estado','cidade',
        'email_secundario','observacoes','como_conheceu','num_endereco','comp_endereco',
    ];	

 

protected $dateFormat = 'Y-m-d H:i:s';
   

}
