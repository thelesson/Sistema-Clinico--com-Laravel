<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Http\Requests;

class Consulta extends Controller
{
    
    public function anamnese(){

 $t=\App\User::all() -> last();
// $t=\App\User::find($id);
     $name=$t->name;
     $avatar=$t->avatar;
    
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
 $criado_em=  $t->created_at->format('d-m-Y');
     
                      
 
        $dados_comp = $t->pacientes->DadosComplementare;
    $conv=$t->pacientes->convenios;
    $dados_pess=$t->pacientes->DadosPessoais;
        $convenio =$conv->convenio;
        
    
         $profissao=$dados_comp->profissao;
         $escolaridade=$dados_comp->escolaridade;
  
         	$nascimentoData=$dados_pess->data_nasc->format('d-m-Y');
         	$nascimentoIdade=$dados_pess->data_nasc;
         	$idade=$dados_pess->data_nasc;
        
       $matricula=$t->matriculaPaciente;
$contador = 0;
        $idade2 = $nascimentoIdade->diff(Carbon::now())->format('%y Anos, %m Meses e %d dias');
  $id=$t->id;

    	return view('usuario.prontuario.anamnese.anamnese',array('t'=>$t,'id'=>$id,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,'profissao'=>$profissao,'convenio'=>$convenio,'escolaridade'=>$escolaridade,'idade'=>$idade2,'nascimento'=>$nascimentoData,'matricula'=>$matricula,'contador'=>$contador));//


    }

  
}