<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Consulta;
use App\Anamnese;
use App\Paciente;
use App\DadosComplementare;
use Carbon\Carbon;

class PacienteController extends Controller
{
   

   public function lista(){


   	 $usuario = \App\User::paginate(10);
$paciente = \App\Paciente::all();
   	 $conta = 0;
   	  
   	return view('admin.admin-usuarios.pacientes.listaPaciente',array('usuario'=>$usuario,'conta'=>$conta,'paciente'=>$paciente));
   	   }


   	   public function deletarPacientes($id){





            
           User::find($id)->delete();
            if(!User::find($id)){
                \Session::flash('mensagem_sucesso_delete_user','Usuário Deletado com Sucesso');
       return redirect('/admin/paciente');
          
            }
            else{
                \Session::flash('mensagem_erro_delete_userx','Opps...Algo deu errado! Sua requisição não foi processada');
       return redirect('/admin/paciente');
           
            }

        }


        public function consultaPaciente($id){
   $t=\App\User::find($id);
     $name=$t->name;
     $avatar=$t->avatar;
   
     $criado_em=$t->created_at; 
     $id=$t->id;

$criado_em=strftime('%d/%m/%Y');
         $convenio =$t->pacientes->convenios->convenio;
        $contador=0;
        // $id_test=0;
     
     //  return redirect()->route('consulta2.index',$t);
        if($_SERVER['REQUEST_METHOD']=='GET'){

if(isset($_GET['botao-anamnese'])){
       // return view('admin.index',array('t'=>$t,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,
     //  'convenio'=>$convenio,'id'=>$id));
    return redirect()->route('anamnese.index');

   }
   else{
       return view('admin.consulta.consultaPacientes',array('t'=>$t,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,
        'convenio'=>$convenio,'id'=>$id,'contador'=>$contador));
}
}

        }


    public function consulta($id)
    {
       
  $t=\App\User::find($id);
  // $t=\App\User::all() -> last();
   //$t=\App\User::find($id);
     $name=$t->name;
     $avatar=$t->avatar;
   
     $criado_em=$t->created_at; 
     $id=$t->id;

$criado_em=strftime('%d/%m/%Y');
         $convenio =$t->pacientes->convenios->convenio;
        $contador=0;
        // $id_test=0;
     
     //  return redirect()->route('consulta2.index',$t);
        if($_SERVER['REQUEST_METHOD']=='GET'){

if(isset($_GET['botao-anamnese'])){
       // return view('admin.index',array('t'=>$t,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,
     //  'convenio'=>$convenio,'id'=>$id));
    return redirect()->route('anamnesePaciente.index',$id);

   }
   else{
       return view('admin.consulta.consultaPacientes',array('t'=>$t,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,
        'convenio'=>$convenio,'id'=>$id,'contador'=>$contador));
}
}
    }   

   public function anamnese($id){

 //$t=\App\User::all() -> last();
 $t=\App\User::find($id);
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

      return view('usuario.prontuario.anamnese.anamnesepaciente',array('t'=>$t,'id'=>$id,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,'profissao'=>$profissao,'convenio'=>$convenio,'escolaridade'=>$escolaridade,'idade'=>$idade2,'nascimento'=>$nascimentoData,'matricula'=>$matricula,'contador'=>$contador));//


    }

        public function detalhesPaciente($id){

        	 $t=\App\User::find($id);
        	  $name=$t->name;
     $avatar=$t->avatar;
      $matricula=$t->matriculaPaciente;

        $criado_em=$t->created_at; 
     $id=$t->id;

$criado_em=strftime('%d/%m/%Y');
         
       //  $profissao=$t->pacientes->dados_complementares->profissao;
       //  $escolaridade=$t->pacientes->dados_complementares->escolaridade;




     $dados_comp = $t->pacientes->DadosComplementare;
    $conv=$t->pacientes->convenios;
    $dados_pess=$t->pacientes->DadosPessoais;
        $convenio =$conv->convenio;
        $sexo = $dados_pess->sexo;
    
         $profissao=$dados_comp->profissao;
         $escolaridade=$dados_comp->escolaridade;
  
         	$nascimentoData=$dados_pess->data_nasc->format('d-m-Y');
         	$nascimentoIdade=$dados_pess->data_nasc;
         	$idade=$dados_pess->data_nasc;
         	  $idade = $nascimentoIdade->diff(Carbon::now())->format('%y Anos, %m Meses e %d dias');
       $como_conheceu =$dados_pess->como_conheceu;
     $observacoes = $dados_pess->observacoes;
     $celular=$dados_pess->celular;
     $residencial=$dados_pess->residencial;
     $cep=$dados_pess->cep;
     $endereco=$dados_pess->endereco;
     $num_endereco=$dados_pess->num_endereco;
     $comp_endereco=$dados_pess->comp_endereco;
     $bairro=$dados_pess->bairro;
     $estado=$dados_pess->estado;
     $cidade=$dados_pess->cidade;

     $naturalidade= $dados_comp->naturalidade;
     $nacionalidade= $dados_comp->nacionalidade;
     $cor= $dados_comp->cor;
     $estado_civil= $dados_comp->estado_civil;
     $cpf= $dados_comp->cpf;
     $rg= $dados_comp->rg;
    $escolaridade= $dados_comp->escolaridade;
     $profissao= $dados_comp->profissao;
        	return view('admin.admin-usuarios.pacientes.perfilGenerico',array('usuario'=>$t,'name'=>$name,'avatar'=>$avatar,'matricula'=>$matricula,'criado_em'=>$criado_em,'profissao'=>$profissao,'convenio'=>$convenio,'escolaridade'=>$escolaridade,'idade'=>$idade,'nascimento'=>$nascimentoData,'sexo'=>$sexo,'como_conheceu'=>$como_conheceu,'observacoes'=>$observacoes,'celular'=>$celular,'residencial'=>$residencial,'cep'=>$cep,'endereco'=>$endereco,'num_endereco'=>$num_endereco,'comp_endereco'=>$comp_endereco,'bairro'=>$bairro,'estado'=>$estado,'cidade'=>$cidade,'naturalidade'=>$naturalidade,'nacionalidade'=>$nacionalidade,'cor'=>$cor,'estado_civil'=>$estado_civil,'cpf'=>$cpf,'rg'=>$rg,));

        }
 public function detalhesAdmin($id){

        	 $t=\App\Admin::find($id);
        	  $name=$t->name;
     $avatar=$t->avatar;
      $matricula="Administrador";
  
     
        	return view('admin.admin-usuarios.pacientes.perfilGenericoadmin',array('usuario'=>$t,'name'=>$name,'avatar'=>$avatar,'matricula'=>$matricula));

        }


   
}
