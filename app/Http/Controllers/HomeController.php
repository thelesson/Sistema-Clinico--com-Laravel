<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {    
        
        return view('home');
    }
     public function consulta()

    {    
        
        return view('usuario.consulta.consulta');
    }
     public function exame()

    {    
        
        return view('usuario.exame.exame');
    }
     public function perfil()

    {    
        
          return view('usuario.perfil.perfil',array('user'=>Auth::user()));
    }
    public function perfilAtualiza(Request $request){


            if($request->hasFile('avatar')){
                $avatar=$request->file('avatar');
                $nome_arquivo=time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/imagens/avatar/' . $nome_arquivo));

                $user=Auth::user();
                $user->avatar = $nome_arquivo;
                $user->save();

            }
             return view('usuario.perfil.perfil',array('user'=>Auth::user()));

    }


  public function agenda()

    {    
        
        return view('usuario.atendimento.atendimento');
    }

   
}
