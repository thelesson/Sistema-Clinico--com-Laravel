<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicoController extends Controller
{
    
    public function cadastroServicoMedico(){

    	return view('admin.servicos-medicos.servicosmedicos');
    }
}
