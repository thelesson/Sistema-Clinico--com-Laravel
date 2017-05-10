<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Convenio extends Model
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
     public function dadosCPacientes(){
    	return $this->belongsTo('App\Paciente');
    }

}
