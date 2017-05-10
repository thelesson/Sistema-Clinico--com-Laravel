<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
use App\Exame;

class ExamesController extends Controller
{
    //
      public function cadastroServicoMedico(){
return view('admin.admin-usuarios.exames-medico.examesmedico');

      }

      public function homeExame(){

      	return view('admin.admin-usuarios.exames-medico.exame-home');
      }

      public function criaServicoMedico(Request $request){

      	$data=$request->all();
      	 $validator = validator($request->all(),[
             
          'nome_exame' => 'required|max:255',
            'Desc_curta' => 'required',
            'material_analisado' => 'required',
            'tempo_medio_coleta'=>'required',
            'finalidade'=>'required',
            'preparacao_previa'=>'required',
            'tempo_obter_resul'=>'required',
           

            ]);
        if($validator->fails()){
            \Session::flash('mensagem_sucesso_cadastro2','Ops...há algo de errado! Verifique se os campos obrigatórios foram inseridos corretamente.');
            return redirect('/admin/exames/cadastro')
            ->withInput()
            ->withErrors($validator);

            
             
       
        }
          else{

            
           

 
           if($request->hasFile('avatar')){
                $avatar=$request->file('avatar');
                $nome_arquivo=time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/imagens/misc/' . $nome_arquivo));

             
           }
           else{

            $nome_arquivo="exame_coracao.jpg";
           }


           if($request->hasFile('avatarFundo')){
                $avatar2=$request->file('avatarFundo');
                $nome_arquivo2=time() . '.' . $avatar2->getClientOriginalExtension();
                Image::make($avatar2)->resize(300, 300)->save( public_path('/imagens/misc/' . $nome_arquivo2));

             
           }
           else{

            $nome_arquivo2="blur-01.jpg";
           }

         $test=\App\Exame::create([
            'nome_exame' => $data['nome_exame'],
            'sub_titulo' => $data['Desc_curta'],
            'material_analisado' => $data['material_analisado'],
            'tempo_coleta_material' =>$data['tempo_medio_coleta'],
            'finalidade' => $data['finalidade'],
            'preparacao_previa' => $data['preparacao_previa'],
            'valores_normais_descr' => $data['valores_normais_desc'],
            'valores_anormais_sign' => $data['valores_normais_sign'],
			'prazo_resultado' => $data['tempo_obter_resul'],
			'nivel_confiabilidade' => $data['nivel_confiabilidade'],
			'med_alter_result' =>$data['medicamentos_alteram_result'],
			'cor_de_fundo'=>$data['favcolor'],
			'avatar_fundo'=>$nome_arquivo2,
			'avatar'=> $nome_arquivo,
             ]);

 $usuarios = \App\Exame::paginate(10);
         \Session::flash('mensagem_sucesso_cadastro','Exame adicionado com sucesso!');
          //return redirect('/exames')->with($test);
          return view('admin.admin-usuarios.exames-medico.examesmedico',compact('usuarios'));
      }
}

public function listaExame(){

	$usuarios = \App\Exame::paginate(12);
	return view('usuario.exame.exame',compact('usuarios'));
}

public function listaExameAdmin(){

$usuarios = \App\Exame::paginate(10);
$conta=0;
	return view('admin.admin-usuarios.exames-medico.listaExame',compact('usuarios','conta'));

}



public function DeleteExameAdmin($id){


$usuarios= \App\Exame::find($id);

 //Exame::find($id)->delete();

if (!is_null($usuarios)) {
    $usuarios->delete();
}
 if(!Exame::find($id)){
                \Session::flash('mensagem_sucesso_delete_user','Exame  Deletado com Sucesso');
       return redirect('/admin/exames/home/lista');
          
            }
            else{
                \Session::flash('mensagem_erro_delete_userx','Opps...Algo deu errado! Sua requisição não foi processada');
       return redirect('/admin/exames/home/lista');
           
            }


}

}
