<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
     public function anamnese(){
        return $this->hasOne('App\Anamnese');
    }

     protected $fillable = [
        'contador', 
    ];	
}
