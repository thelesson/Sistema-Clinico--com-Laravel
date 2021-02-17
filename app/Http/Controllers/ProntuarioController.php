<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Admin;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Redirect;
use Image;
use Carbon\Carbon;
use App\Paciente;
use App\dadosComplementare;
use App\Prontuario;
use App\Consulta;

class ProntuarioController extends Controller
{
     public function CriaProntuario(Request $request){

 $data=$request->all();
 
  
    $id=User::find($data['id-paciente']);
   
//area para recarrgar dados do ultimo user
//$t=\App\User::all() -> last();
      $t=User::find($data['id-paciente']);
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
          $idade2 = $nascimentoIdade->diff(Carbon::now())->format('%y Anos, %m Meses e %d dias');
       $matricula=$t->matriculaPaciente;
    //fim
 $contador = 1;
 $validator = validator($request->all(),[
         
          'anamnese-queixa-principal' => 'required|max:255',
            'anamnese-historia' => 'required|max:255',
            

            ]);
        if($validator->fails()){
            \Session::flash('mensagem_sucesso_cadastro2','Ops...há algo de errado! Verifique se os campos obrigatórios foram inseridos corretamente.');
            return redirect('/admin/adicionar/usuario/paciente/consulta/anamnese')
            ->withErrors($validator)
            ->withInput();

            
             
       
        }

            else{

             
    
          $test=Consulta::create([

          'contador'=>1,
            ])
          ->anamnese()
                        ->create([
            'queixa-principal' => $data['anamnese-queixa-principal'],
            'historia' => $data['anamnese-historia'],
            'problemas_renais' => $data['anamnese-problema-renal'],
            'problemas_arti_reum' => $data['anamnese-articular-reumatismo'],
            'problemas_cardiacos' =>$data['anamnese-cardiaco'],
            'problemas-gastricos' =>$data['anamnese-gastrico'],
            'problemas_respiratorios' =>$data['anamnese-respiratorio'],
            'alergias' =>$data['anamnese-alergia'],
            

             ]);
                               
 
  

 //$id2 = User::find($test->id);
//$t=$test->id;
$id2=300;

      $mensagem=  \Session::flash('mensagem_sucesso_cadastro','Prontuario incluido com sucesso!');
      // return redirect('/admin/adicionar/usuario/paciente/consulta/{id}')->with('id', $id); 
       return view('admin.consulta.consulta',array('t'=>$t,'contador'=>$contador,'id'=>$id,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,'profissao'=>$profissao,'convenio'=>$convenio,'escolaridade'=>$escolaridade,'idade'=>$idade2,'nascimento'=>$nascimentoData,'matricula'=>$matricula,'mensagem_sucesso_cadastro'=>$mensagem));

    }
}


public function CriaProntuarioPaciente(Request $request){

 $data=$request->all();
 
  
    $id=User::find($data['id-paciente']);
   
//area para recarrgar dados do ultimo user
//$t=\App\User::all() -> last();
      $t=User::find($data['id-paciente']);
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
          $idade2 = $nascimentoIdade->diff(Carbon::now())->format('%y Anos, %m Meses e %d dias');
       $matricula=$t->matriculaPaciente;
    //fim
 $contador = 1;
 $validator = validator($request->all(),[
         
          'anamnese-queixa-principal' => 'required|max:255',
            'anamnese-historia' => 'required|max:255',
            

            ]);
        if($validator->fails()){
            \Session::flash('mensagem_sucesso_cadastro2','Ops...há algo de errado! Verifique se os campos obrigatórios foram inseridos corretamente.');
            //return redirect('/admin/adicionar/usuario/paciente/consulta/anamnesepaciente')
          return redirect()->route('anamnesePaciente.index',$id)
            ->withErrors($validator)
            ->withInput();

            
             
       
        }

            else{

             
    
          $test=Consulta::create([

          'contador'=>1,
            ])
          ->anamnese()
                        ->create([
            'queixa-principal' => $data['anamnese-queixa-principal'],
            'historia' => $data['anamnese-historia'],
            'problemas_renais' => $data['anamnese-problema-renal'],
            'problemas_arti_reum' => $data['anamnese-articular-reumatismo'],
            'problemas_cardiacos' =>$data['anamnese-cardiaco'],
            'problemas-gastricos' =>$data['anamnese-gastrico'],
            'problemas_respiratorios' =>$data['anamnese-respiratorio'],
            'alergias' =>$data['anamnese-alergia'],
            

             ]);
                               
 
  

 //$id2 = User::find($test->id);
//$t=$test->id;
$id2=300;

      $mensagem=  \Session::flash('mensagem_sucesso_cadastro','Prontuario incluido com sucesso!');
      // return redirect('/admin/adicionar/usuario/paciente/consulta/{id}')->with('id', $id); 
       return view('admin.consulta.consultaPacientes',array('t'=>$t,'contador'=>$contador,'id'=>$id,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,'profissao'=>$profissao,'convenio'=>$convenio,'escolaridade'=>$escolaridade,'idade'=>$idade2,'nascimento'=>$nascimentoData,'matricula'=>$matricula,'mensagem_sucesso_cadastro'=>$mensagem));

    }
}
}
