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
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {

        $total_pacientes = User::where(['tipo' => "Paciente"])->count();
        $total_admin = Admin::where(['tipo' => "Administrador"])->count();

        $total_usuarios = $total_pacientes+$total_admin+10;
    	return view('admin.index',compact('total_pacientes','total_admin','total_usuarios'));
    }
    public function login()
    {
    	return view('auth.login-admin');

    }
    public function postLogin(Request $request)
    {
        $validator = validator($request->all(),[
             
            'email' => 'required|email|max:255|',
            'password' => 'required|min:5|',

            ]);
        if($validator->fails()){
            return redirect('admin/login')
            ->withErrors($validator)
            ->withInput();

        }
        $credenciais = ['email' =>$request->get('email'),'password'=>$request->get('password')];
    	if ( auth()->guard('admin')->attempt($credenciais)){
                return redirect('/admin');

        }else{
                return redirect('/admin/login')
                      ->withErrors(['errors'=>'Login Inválido!'])
                      ->withInput();
        }
    }


    public function logout()
    {

        auth()->guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function resetarSenhaAdmin(){

        return view('auth.passwords.email-admin');
    }
    public function AllresetarSenhaAdmin(){

        return view('auth.passwords.reset-admin');
    }

    public function listaUsuario(){
        $usuarios = \App\User::paginate(100);

        $usuario_tipo_adm="Administrador";
         $usuario_tipo_user="Paciente";
        $admins =\App\Admin::paginate(5);
        if(Auth::guard('admin')->user()){
            $tipo="Administrador";
        }
        elseif(Auth::guard('user')->user()){
            $tipo="Usuario";
        }
        else{
            $tipo="Médico";
        }
        $conta= 0;
        //dd($usuarios);
            return view('admin.admin-usuarios.consulta-usuario',compact('usuarios','admins','conta',
                'usuario_tipo_adm','usuario_tipo_user'));

    }

    public function AdicionaUsuario(){


        for ($i = 0; $i < 2; $i++)
  {
    $uid = hexdec(uniqid());
    $matriculaFull = $uid;
    
    $matricula=str_limit($matriculaFull,30);

  }

        return view('admin.admin-usuarios.adiciona-usuario',compact('matricula'));

    }
    public function AdicionaPaciente(){

        for ($i = 0; $i < 2; $i++)
  {
    $uid = hexdec(uniqid());
    $matriculaFull = $uid;
    
    $matricula=str_limit($matriculaFull,30);

  }

        return view('admin.admin-usuarios.form-adiciona-paciente.adiciona-paciente',compact('matricula'));
    }


public function deletarUsuarios($id){
$verificaUser= \App\User::all();
$verificarAdmin= \App\Admin::all();
$comparaAdmin = \App\Admin::find($id);
$comparaUser = \App\User::find($id);
$t=$id;
foreach ($verificaUser as $col_tipo_user){ 
   $testeUser=$col_tipo_user->tipo;
}
foreach ($verificarAdmin as $col_tipo_admin){ 
   $testeAdmin=$col_tipo_admin->tipo;
}
 if($comparaUser->tipo==="Paciente"){
            
           User::find($id)->delete();
            if(!User::find($id)){
                \Session::flash('mensagem_sucesso_delete_user','Usuário Deletado com Sucesso');
       return redirect('/admin/consulta/usuario');
          
            }
            else{
                \Session::flash('mensagem_erro_delete_userx','Opps...Algo deu errado! Sua requisição não foi processada');
       return redirect('/admin/consulta/usuario');
           
            }

        }


    elseif($comparaAdmin->tipo=="Administrador"){

           Admin::find($id)->delete();
            if(!Admin::find($id)){
                \Session::flash('mensagem_sucesso_delete_admin','Administrador Deletado com Sucesso');
       return redirect('/admin/consulta/usuario');
           
            }
            else{
                \Session::flash('mensagem_erro_delete_admin','Opps...Algo deu errado! Sua requisição não foi processada');
       return redirect('/admin/consulta/usuario');
           
            }
        }
       
        else{
            \Session::flash('mensagem_erro_delete_user',$t);
       return redirect('/admin/consulta/usuario');
        }
}

// protected function validator(array $data)
//     {
//          $data=$request->all();
// return Validator::make($data, [
//             'name' => 'required|max:255',
//             'email' => 'required|email|max:255|unique:users',
//             'password' => 'required|min:6|confirmed',
//         ]);

//     }
//Criar paciente
    public function postCriaPaciente(Request $request){

 $data=$request->all();
 
 
 $validator = validator($request->all(),[
             
          'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nascimento'=>'required',
            'radio'=>'required',
            'celular'=>'required|min:5|max:50',
            'residencial'=>'required|min:5|max:50',
            'cep'=>'required',
            'endereco'=>'required',
            'bairro'=>'required',
            'estado-select'=>'required',
            'cidade-select'=>'required',

            ]);
        if($validator->fails()){
            \Session::flash('mensagem_sucesso_cadastro2','Ops...há algo de errado! Verifique se os campos obrigatórios foram inseridos corretamente.');
            return redirect('/admin/adicionar/usuario/paciente')
            ->withInput()
            ->withErrors($validator);

            
             
       
        }

            else{

             $uid = hexdec(uniqid());
             $matriculaFull = $uid;
    
             $matricula=str_limit($matriculaFull,30);
             $matriculaNova=substr_replace($matricula, '', 0,-10);
             $matriculaFinal=substr_replace($matriculaNova,'',6);
            $tipo_perfil="Paciente";

 
           if($request->hasFile('avatar')){
                $avatar=$request->file('avatar');
                $nome_arquivo=time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/imagens/avatar/' . $nome_arquivo));

             
           }
           else{

            $nome_arquivo="default.jpg";
           }

         $test=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'matriculaPaciente' => $matriculaFinal,
            'avatar' =>$nome_arquivo,
            'tipo' => $tipo_perfil,

             ])
                ->pacientes()
                    ->create([

                        'tipo' => $tipo_perfil,

                            ]);
                    Paciente::find($test->id)


->convenios()
                         ->create([]);

  Paciente::find($test->id)
                ->dadosPessoais()
                  ->create([
                        'nome' => $data['name'],
                       'data_nasc' =>  date('Y-m-d H:i:s', strtotime($data['nascimento'])),
                      // 'data_nasc' => Carbon\Carbon::createFromFormat($format, $input),
                      //'data_nasc' => Carbon::createFromFormat('Y-m-d H:i:s',$data['nascimento'])->format('Y-m-d'),
                        
                        'sexo' => $data['radio'],
                        'email' => $data['email'],
                        'email_secundario' => $data['emailcx'],
                        'observacoes' => $data['seletor-conheceu-obs'],
                        'como_conheceu' => $data['tipoq'],
                        'celular' => $data['celular'],
                        'residencial' => $data['residencial'],
                        'cep' => $data['cep'],
                        'endereco' => $data['endereco'],
                        'num_endereco' => $data['endereco-num'],
                        'comp_endereco' => $data['complemento'],
                        'bairro' => $data['bairro'],
                        'estado' => $data['estado-select'],
                        'cidade' => $data['cidade-select'],
                    ]);

                     
Paciente::find($test->id)
                  ->dadosComplementare()                                                    
                     ->create([
                        'naturalidade' => $data['naturalidade'],
                        'nacionalidade' => $data['nacionalidade-select'],
                        'cor' => $data['cor-select'],
                        'estado_civil' => $data['estado-civil-select'],
                        'cpf' => $data['cpf'],
                        'rg' => $data['rg'],
                        'escolaridade' => $data['escolaridade_paciente'],
                        'profissao' => $data['profissao_paciente'],

                        ]);

 //$user = User::find($test->id);
//$t=$test->id;


        \Session::flash('mensagem_sucesso_cadastro','Paciente adicionado com sucesso!');
        if($_SERVER['REQUEST_METHOD']=='POST'){

if(isset($_POST['botao-salvar-acesso-modal'])){
  
$t=\App\User::all() -> last();
//$t=\App\User::find($id);
    
//return redirect('admin/adicionar/usuario/paciente/consulta');
 return redirect()->route('consulta.index');
//return view('admin.consulta.consulta',array('t'=>User::all() -> last()));
           

}
else{
    return redirect('/admin/adicionar/usuario/paciente');
     
          
}
}
       

    }
}

    public function Adminperfil()

    {    
        
        return view('usuario.perfil.perfil-admin',array('user'=>Auth::user()));
    }

    public function AdminAtualizaperfil(Request $request){

            if($request->hasFile('avatar')){
                $avatar=$request->file('avatar');
                $nome_arquivo=time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/imagens/avatar/' . $nome_arquivo));

                $user=Auth::user();
                $user->avatar = $nome_arquivo;
                $user->save();

            }
             return view('usuario.perfil.perfil-admin',array('user'=>Auth::user()));

    }

    public function consulta()
    {
       
  //$t=\App\User::find($id);
   $t=\App\User::all() -> last();
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
    return redirect()->route('anamnese.index');

   }
   else{
       return view('admin.consulta.consulta',array('t'=>$t,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,
        'convenio'=>$convenio,'id'=>$id,'contador'=>$contador));
}
}
    }   

    public function redirecionaAtendimento(){


 $t=\App\User::all() -> last();
     $name=$t->name;
     $avatar=$t->avatar;
   
     $criado_em=$t->created_at; 
     $id=$t->id;

$criado_em=strftime('%d/%m/%Y');
         $convenio =$t->pacientes->convenios->convenio;
         $profissao=$t->pacientes->dados_complementares->profissao;
         $escolaridade=$t->pacientes->dados_complementares->escolaridade;

         if($_SERVER['REQUEST_METHOD']=='GET'){

if(isset($_POST['botao-anamnese'])){
        return view('usuario.prontuario.anamnese.anamnese',array('t'=>$t,'name'=>$name,'avatar'=>$avatar,'criado_em'=>$criado_em,
        'convenio'=>$convenio,'id'=>$id,'profissao'=>$profissao,'escolaridade'=>$escolaridade));

   }
   else{
      return redirect()->route('anamnese.index');
}
}
}
}
