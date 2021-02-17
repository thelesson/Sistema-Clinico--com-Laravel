@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
            <ol class="breadcrumb panel-heading">
                      <li><a href="{{route('consulta.usuario.index')}}">Usuários</a></li>
                      <li><a href="{{route('adiciona.usuario.index')}}">Perfil de Usuário</a></li>
                      <li><a href="{{route('adiciona.paciente.index')}}">Paciente</a></li>
                       <li><a href="{{route('consulta.index')}}">Consulta</a></li>
                      <li class="active">Adicionar Anamnese</li>
                   </ol>
                <div class="panel-heading"><h4>Ficha de Anamnese</h4></div>
<hr>
              <div class="panel-body">
               
                 <div class="form-group form-usuario col-md-12">
       		 <img src="/imagens/avatar/{{$avatar}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px;">
       		 <div class="col-md-6">
         
       		  <h2>2 </h2>
           
       		  </div>
                    <div class="col-md-5">
                     <h5 style="margin-top:0px;">Idade:<b>25 anos, 4 meses</b></h5>

                     </div>
                     <div class="col-md-4">
                      <h5 style="margin-top:0px;float:right;">Atendimento:<b>0</b></h5>
                     </div>
                     <div class="col-md-4">
                 	<h5 style="margin-top:0px;">Primeira Consulta em :<b>02/11/2016</b></h5>
                 	</div>
                 	<div class="col-md-5"> <h5 style="margin-top:0px;float:right">Faltas:<b>0</b></h5></div>
                 	<div class="col-md-5"> <h5 style="margin-top:0px;">Convenios:<b>Particular</b></h5></div>
       		 </div>
       		<div class="form-group form-usuario col-md-12" style="
    margin-bottom: 0px!important;">
       		 <div class="col-md-2" style="
    padding-right: 0px;
    padding-left: 0px;
    margin-left: 120px;
"></div>
       		 		<div class="col-md-4" style="
    padding-right: 0px;
    padding-left: 0px;
">
       		 			<div class="relogio-atendimeto" style="
    color: #0c1379;
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
    margin-left: 0px;
    margin-right: 120px;
"><a href="http://localhost:8000/admin/adicionar/usuario/paciente" class="btn btn-warning botao-carx" role="button" style="
    width: 100%;
    /* font-size: x-large; */
"><i class="fa fa-angle-double-left" aria-hidden="true" style="
    float: left;
    font-size: x-large;
"></i>Retroceder</a></div>
       		 		<div class="col-md-4" style="
    padding-right: 0px;
    padding-left: 0px;
    margin-right: 90px;
">

       		 			<a href="http://localhost:8000/admin/adicionar/usuario/paciente" class="btn btn-danger botao-carx" role="button" style="
    width: 100%;
    /* font-size: x-large; */
"><i class=" fa fa-stop-circle-o" aria-hidden="true" style="
    float: left;
    font-size: x-large;
    color: aqua!important;
"></i>Finalizar Atendimento</a>
    
					</div>

<div class="col-md-3" style="
    padding-right: 0px;
    padding-left: 0px;
">

       		 			<a href="http://localhost:8000/admin/adicionar/usuario/paciente" class="btn btn-success botao-carx" role="button" style="
    width: 100%;
    /* font-size: x-large; */
"><i class="fa fa-medkit" aria-hidden="true" style="
    float: left;
    font-size: x-large;
"></i>Prescrever Medicamento</a>
    
					</div>
       		 </div>
       		   <form class="formulario-de-inclusao" role="form" method="POST" action="http://localhost:8000/admin/adicionar/usuario">
             <input type="hidden" name="_token" value="CQGTKW1PwmEuZjauiowvq1fVKwm1j9N1BibyVR95">
                <hr>
              <div class="row">
    <div class="col-md-12">
            <div class="panel with-nav-tabs panel-success">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1success" data-toggle="tab">Success 1</a></li>
                            <li><a href="#tab2success" data-toggle="tab">Success 2</a></li>
                            <li><a href="#tab3success" data-toggle="tab">Success 3</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4success" data-toggle="tab">Success 4</a></li>
                                    <li><a href="#tab5success" data-toggle="tab">Success 5</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1success">
  <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>
                              <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>
                              <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>
                             
                              <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label">
<?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data_extenso =strftime('%A, %d de %B de %Y', strtotime('today'));
?>

                              <hr><?php echo ucfirst($data_extenso); ?><hr></label>
                                 
                              </div>
                             
                  
                          

                           <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-queixa-principal" class="col-md-4 control-label">Queixa Principal</label>

                              <div class="col-md-6">
                                 <input id="anamnese-queixa-principal" type="text" class="form-control" name="anamnese-queixa-principal">
                             </div>
                           </div>
                           <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                            <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-historia" class="col-md-4 control-label">Resumo/Historia</label>

                              <div class="col-md-6">
                               
                                 <textarea class="form-control" rows="10" id="anamnese-historia" name="anamnese-historia"></textarea>
                             </div>
                           </div>
                           <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                            <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-problema-renal" class="col-md-4 control-label">Problemas Renais</label>

                              <div class="col-md-6">
                               
                                
                                 <input id="anamnese-problema-renal" type="text" class="form-control" name="anamnese-problema-renal">
                             </div>
                           </div>
                            <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                           <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-articular-reumatismo" class="col-md-4 control-label">Problema Articular e Reumatismo</label>

                              <div class="col-md-6">
                               
                                
                                 <input id="anamnese-problema-articular-reumatismo" type="text" class="form-control" name="anamnese-articular-reumatismo">
                             </div>
                           </div>
                           <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                           <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-cardiaco" class="col-md-4 control-label">Problemas Cardíacos</label>

                              <div class="col-md-6">
                               
                                
                                 <input id="anamnese-cardiaco" type="text" class="form-control" name="anamnese-cardiaco">
                             </div>
                           </div>
                           <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                            <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-respiratorio" class="col-md-4 control-label">Problemas Respiratório</label>

                              <div class="col-md-6">
                               
                                
                                 <input id="anamnese-respiratorio" type="text" class="form-control" name="anamnese-respiratorio">
                             </div>
                           </div>
                           <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                            <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-gastrico" class="col-md-4 control-label">Problemas Gástrico</label>

                              <div class="col-md-6">
                               
                                
                                 <input id="anamnese-gastrico" type="text" class="form-control" name="anamnese-gastrico">
                             </div>
                           </div>
                            <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                           <div class="form-group form-usuario col-md-12">
                         <label for="anamnese-alergia" class="col-md-4 control-label">Alergias</label>

                              <div class="col-md-6">
                               
                                
                                 <input id="anamnese-alergia" type="text" class="form-control" name="anamnese-alergia">
                             </div>
                           </div>

</div>
                        <div class="tab-pane fade" id="tab2success">Success 2</div>
                        <div class="tab-pane fade" id="tab3success">Success 3</div>
                        <div class="tab-pane fade" id="tab4success">Success 4</div>
                        <div class="tab-pane fade" id="tab5success">Success 5</div>
                    </div>
                </div>
            </div>
              
                         </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection