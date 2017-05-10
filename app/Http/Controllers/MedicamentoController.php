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

class MedicamentoController extends Controller
{
    //
    public function listaMedicamento(){

    	return view('admin.medicamentos.consulta-medicamentos');
    }
}
