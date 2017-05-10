@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Escolher Tipo de Usuário</div>

                <div class="panel-body">
                
                 
                  <h2>Selecione o Perfil do novo Usuário:</h2  >
                     <!-- <a class="btn btn-info" href="{{route('adiciona.paciente.index')}}">Detalhes</a>

                     <div class="row"> -->
                     <br>
  <div class="col-sm-3 col-md-4">
    <div class="thumbnail cartao">
    <div class="img-cartao">
    

      </div>
      <div class="caption">
        <h3 class="h3-cartao">Paciente</h3>

        <p class="p-cartao"><a href="{{route('adiciona.paciente.index')}}" class="btn btn-primary botao-card" role="button">Selecionar</a> 
      </div>
    </div>
  </div>

 
  <div class="col-sm-3 col-md-4">
    <div class="thumbnail cartao">
    <div class="img-cartao b">
    
      
      </div>
      <div class="caption">
        <h3 class="h3-cartao">Profissional da Saúde</h3>
        
        <p class="p-cartao"><a href="#" class="btn btn-primary botao-card" role="button">Selecionar</a> 
      </div>
    </div>
  </div>

 
  <div class="col-sm-3 col-md-4">
   <div class="thumbnail cartao">
    <div class="img-cartao c">
     
      
      </div>
      <div class="caption">
        <h3 class="h3-cartao">Administrador</h3>
        
        <p class="p-cartao"><a href="#" class="btn btn-primary botao-card" role="button">Selecionar</a> 
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection


