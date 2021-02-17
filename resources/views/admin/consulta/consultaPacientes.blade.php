@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
<form enctype="multipart/form-data"      class="formulario-de-inclusao"   role="form" method="GET"  action="{{route('consultaPacientet.index',$id)}}">
  {{ csrf_field() }}
            <div class="panel panel-default">
            <ol class="breadcrumb panel-heading">
                      <li><a href="{{route('consulta.usuario.index')}}">Usuários</a></li>
                      <li><a href="{{route('adiciona.usuario.index')}}">Perfil de Usuário</a></li>
                      <li><a href="{{route('adiciona.paciente.index')}}">Paciente</a></li>
                       
                      <li class="active">Consulta</li>
                   </ol>
                <div class="panel-heading">Prontuário do Paciente</div>

                <div class="panel-body">
                 @if(Session::has('mensagem_sucesso_cadastro'))
                  <div class="alert alert-success">{{Session::get('mensagem_sucesso_cadastro')}}</div>
                  @endif
                  @if(Session::has('mensagem_sucesso_cadastro2'))
                  <div class="alert alert-danger">{{Session::get('mensagem_sucesso_cadastro2')}}</div>
                  @endif
               <input id="pacienteId" type="hidden" disabled class="form-control" name="pacienteId" value ="{{$id}}" >
                 <div class="form-group form-usuario col-md-12">
       		 <img src="/imagens/avatar/{{$avatar}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px;">
           <input id="pacienteAvatar" type="hidden" disabled class="form-control" name="pacienteAvatar" value ="{{$avatar}}" >
       		 <div class="col-md-6">
      
       		  <h2>{{$name}}</h2>
<input id="pacienteN" type="hidden" disabled class="form-control" name="pacienteN" value ="{{$name}}" >
       		  </div>
                    <div class="col-md-5">
                     <h5 style="margin-top:0px;">Idade:<b>25 anos, 4 meses</b></h5>

                     </div>
                     <div class="col-md-4">
                      <h5 style="margin-top:0px;float:right;">Atendimento:<b>{{$contador}}</b></h5>
                     </div>
                     <div class="col-md-4">
                 	<h5 style="margin-top:0px;">Primeira Consulta em :<b>{{$criado_em}}</b></h5>
                  <input id="pacienteCriadoem" type="hidden" disabled class="form-control" name="pacienteCriadoem" value ="{{$criado_em}}" >
                 	</div>
                 	<div class="col-md-5"> <h5 style="margin-top:0px;float:right">Faltas:<b>0</b></h5></div>
                 	<div class="col-md-5"> <h5 style="margin-top:0px;">Convenios:<b>{{$convenio}}</b></h5></div>
                  <input id="pacienteConvenio" type="hidden" disabled class="form-control" name="pacienteConvenio" value ="{{$convenio}}" >
       		 </div>
       		<div class="form-group form-usuario col-md-12" style="
    margin-bottom: 0px!important;">
       		 <div class="col-md-2" style="
    padding-right: 0px;
    padding-left: 0px;
    margin-left: 58px;
"></div>
       		 		<div class="col-md-4" style="
    padding-right: 0px;
    padding-left: 0px;
">
       		 			<div class="relogio-atendimeto" style="
    color: #e5e5e5;
    text-align: center;
    font-size: xx-large;
    background-color: #eee;
    "><span class="fa fa-clock-o" aria-hidden="true" style="
    float: left;
    padding-left: 6px;
    font-size: -webkit-xxx-large;
"></span>00:00:00</div>
					</div>

       		 </div>
       		 <div class="form-group form-usuario col-md-12">
       		 <div class="col-md-2" style="
    padding-right: 0px;
    padding-left: 0px;
    margin-left: 58px;
"></div>
       		 		<div class="col-md-4" style="
    padding-right: 0px;
    padding-left: 0px;
">

       		 			<a class="btn btn-primary botao-card" role="button" data-toggle="modal" data-target=".bs-example-modal-lg" style="
    width: 100%;
    font-size: x-large;
"><i class="fa fa-play" aria-hidden="true" style="
    float: left;
    font-size: xx-large;
"></i>Iniciar Atendimento</a>
    
					</div>

       		 </div>
       		 
       		 

                 


                  
                    
                    
                  
                    
                  </div>
                </div>
            </div>
        </div>






<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="    padding-left: 185px!important;
    background-color: rgba(8, 9, 10, 0.33); ">
  <div class="modal-dialog modal-lg" style="
    width: 1100px;
    padding-left: 115px;
" role="document">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Escolher Tipo de Usuário</div>

                <div class="panel-body">
                
                 
                  <h2>Selecione ficha do prontuário</h2  >
                     <!-- <a class="btn btn-info" href="{{route('adiciona.paciente.index')}}">Detalhes</a>

                     <div class="row"> -->
                     <br>
 	  <div class="col-sm-3 col-md-4">
        <div class="thumbnail cartao " style="    height: 420px !important;
          margin-top: 0px !important;
          padding-top: 4px !important;
          background-color: rgb(255, 255, 255)!important;
          border-bottom-right-radius: 0px !important; 
          border-top-right-radius: 0px !important; 
          border-top-left-radius: 0px !important; 
          border-bottom-left-radius: 0px !important; ">
       <div class="img-cartao anamnese">
    

      </div>
      <div class="caption">
        <h3 class="h3-cartao">Ficha Médica</h3>

        <p class="p-cartao">

<button id="botao-salvar-acesso" name="botao-anamnese" type="submit" class="btn btn-success p-cartao">Salvar</button>
        <a href="{{ route('anamnese.index') }}" class="btn btn-primary botao-card" name="botao-anamnese" role="button">Selecionar</a> </p><!--{{route('anamnese.index')}}-->
      </div>
     </div>
     </div>

 
     <div class="col-sm-3 col-md-4">
     <div class="thumbnail cartao "  style="    height: 420px !important;
       margin-top: 0px !important;
       padding-top: 4px !important;
       background-color: rgb(255, 255, 255)!important;
       border-bottom-right-radius: 0px !important; 
        border-top-right-radius: 0px !important; 
       border-top-left-radius: 0px !important; 
       border-bottom-left-radius: 0px !important; ">
      <div class="img-cartao exame-fisico">
    
      
      </div>
      <div class="caption">
        <h3 class="h3-cartao">Consultar Histórico</h3>
        
        <p class="p-cartao"><a href="#" class="btn btn-primary botao-card"  name="botao-exame-fisico" role="submit">Selecionar</a> 
      </div>
     </div>
     </div>

 
        <div class="col-sm-3 col-md-4">
      <div class="thumbnail cartao " style="    height: 420px !important;
      margin-top: 0px !important;
      padding-top: 4px !important;
     background-color: rgb(255, 255, 255)!important;
     border-bottom-right-radius: 0px !important; 
     border-top-right-radius: 0px !important; 
     border-top-left-radius: 0px !important; 
     border-bottom-left-radius: 0px !important; ">
     <div class="img-cartao hipotese-diagnostica">
     
      
      </div>
      <div class="caption">
        <h3 class="h3-cartao">Evolução Médica</h3>
        
        <p class="p-cartao"><a href="#" class="btn btn-primary botao-card" name="botao-hipotese" role="submit">Selecionar</a> 
      </div>
     </div>
     </div>
     </div>
                </div>
            </div>
    </div>
    </div>
  </div>




</form>



    </div>

@endsection
