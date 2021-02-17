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
                       <li><a href="{{route('consulta.index',300)}}">Consulta</a></li>
                      <li class="active">Adicionar Anamnese</li>
                   </ol>
                <div class="panel-heading"><h4>Ficha de Anamnese</h4></div>
<hr>
              <div class="panel-body">
                @if(Session::has('mensagem_sucesso_cadastro'))
                  <div class="alert alert-success">{{Session::get('mensagem_sucesso_cadastro')}}</div>
                  @endif
                  @if(Session::has('mensagem_sucesso_cadastro2'))
                  <div class="alert alert-danger">{{Session::get('mensagem_sucesso_cadastro2')}}</div>
                  @endif
                  <hr>
               <form class="formulario-de-inclusao" role="form" method="POST" action="{{route('prontuarioPaciente.index')}}">

                         {{ csrf_field() }}
                           <input id="id-paciente" type="hidden" class="form-control" name="id-paciente" value="{{$id}}">
                             
                <div class="form-group form-usuario col-md-12">
     <div class="col-md-3">
           <img src="/imagens/avatar/{{$avatar}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px;"></div>
           <div class="col-md-9">
         
            <h2>{{$name}} <small>Matricula: {{$matricula}}</small></h2>
           
            </div>
                    <div class="col-md-5">
                     <h5 style="margin-top:0px;">Idade:<b>{{$idade}}</b></h5>
                       <h5 style="margin-top:0px;">Nascimento:<b>{{$nascimento}}</b></h5>
                     </div>
                      <div class="col-md-5">
                     <h5 style="margin-top:0px;">Profissão:<b>{{$profissao}}</b></h5>

                     </div>
                     <div class="col-md-4">
                      <h5 style="margin-top:0px;float:right;">Atendimento:<b>0</b></h5>
                     </div>
                     <div class="col-md-4">
                  <h5 style="margin-top:0px;">Primeira Consulta em :<b>{{$criado_em}}</b></h5>
                  </div>
                  <div class="col-md-5"> <h5 style="margin-top:0px;float:right">Faltas:<b>0</b></h5></div>
                  <div class="col-md-12" style="
    /* float: right; */
"> <h5 style="margin-top:0px;float: right;">Convenios:<b>{{$convenio}}</b></h5></div>
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
       		 			<div class="relogio-atendimeto"   style="
    color: #0c1379;
    text-align: center;
    font-size: xx-large;
    background-color: #eee;
    "><span class="fa fa-clock-o" aria-hidden="true" style="
    float: left;
    padding-left: 6px;
    font-size: -webkit-xxx-large;
"></span><span id="cronometro">00:00:00</span>
<input type="hidden" id="cronometro2" name="cronometro_input" value="00:0:00"></div>
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

       		 		<input id="botonReiniciar"  type="button"  class="btn btn-danger botao-carx"   data-toggle="modal" data-target=".bs-example-modal-sm" style="
    width: 100%;
    /* font-size: x-large; */
" value="Finalizar Atendimento"><i class=" fa fa-stop-circle-o" aria-hidden="true" style="
    float: left;
    font-size: x-large;
    color: aqua!important;
"></i>
    
					</div>

          <script type="text/javascript">
   var inicioConteo,
    idTimeout,
    cronometro = document.querySelector('#cronometro'),
    cronometro2= document.querySelector('#cronometro2'),
    botonReiniciar = document.querySelector('#botonReiniciar');

    function zeroIzq(n){
        return n.toString().replace(/^(\d)$/,'0$1');
    }

    function formatoSegundos(s){
        return zeroIzq(Math.floor(s / 3600))+':'+zeroIzq(Math.floor(s%3600 / 60))+':'+zeroIzq(Math.floor((s%3600)%60));
    }

    function actualizar(){
        var dif = Date.now() - inicioConteo;
        dif = Math.round(dif / 1000);
        cronometro.innerHTML = formatoSegundos(dif);
        cronometro2.innerHTML = formatoSegundos(dif);
        idTimeout = setTimeout(actualizar,1000);
    }

    function iniciar(){
        clearTimeout(idTimeout);
        inicioConteo = Date.now();
        actualizar();
    }

    botonReiniciar.onload = function(){
        iniciar();
    }

    iniciar();
</script>
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
       		     <div class="form-group form-usuario col-md-12">
           <div class="col-md-2" style="
    padding-right: 0px;
    padding-left: 0px;
    margin-left: 0px;
    margin-right: 120px;
"></div>
              <div class="col-md-4" style="
    padding-right: 0px;
    padding-left: 0px;
    margin-right: 90px;
"><a class="btn btn-primary botao-card" role="button" data-toggle="modal" data-target=".bs-example-modal-lg" style="
    width: 100%;
    font-size: x-large;
"><i class="fa fa-folder-open" aria-hidden="true" style="
    float: left;
    font-size: xx-large;
                                                  "></i>Fichas Adicionais</a>

              </div>

         
<div class="col-md-3" style="
    padding-right: 0px;
    padding-left: 0px;
">

              </div>
           
  </div>    
                <hr>
                <div class="form-group form-usuario col-md-12">
                <div class="row">
    <div class="col-md-12">
            <div class="panel with-nav-tabs panel-success">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1success" data-toggle="tab" style="
    width: 270px;
    text-align: center;
">ANAMNESE</a></li>
                            <li><a href="#tab2success" data-toggle="tab" style="
    width: 218px;
    text-align: center;
">EXAME FISICO</a></li>
                            <li><a href="#tab3success" data-toggle="tab" style="
    width: 218px!important;
    text-align: center;
">HIPOTESE DIAGNOSTICA</a></li>
                             <li><a href="#tab4success" data-toggle="tab" style="text-align:center;">IMAGENS E ANEXOS</a></li>
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
                             
                

                           <div class="form-group  {{ $errors->has('Anamnese-queixa-principal') ? ' has-error' : '' }}form-usuario col-md-12">
                         <label for="anamnese-queixa-principal" class="col-md-4 control-label">Queixa Principal</label>

                              <div class="col-md-6">
                                 <input id="anamnese-queixa-principal" type="text" class="form-control" name="anamnese-queixa-principal" value="{{ old('anamnese-queixa-principal') }}">
                                 @if ($errors->has('anamnese-queixa-principal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anamnese-queixa-principal') }}</strong>
                                    </span>
                                @endif
                
                             </div>
                           </div>
                           <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>
                            <div class="form-group  {{ $errors->has('anamnese-historia') ? ' has-error' : '' }} form-usuario col-md-12">
                         <label for="anamnese-historia" class="col-md-4 control-label">Resumo/Historia</label>

                              <div class="col-md-6">
                               
                                 <textarea class="form-control" rows="10" id="anamnese-historia" name="anamnese-historia" >{{ old('anamnese-historia') }}</textarea>
                                   @if ($errors->has('anamnese-historia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anamnese-historia') }}</strong>
                                    </span>
                                @endif
                
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
                             </div></div>


                               <div class="form-group form-usuario col-md-12">
                       

                              <div class="col-md-12">
                               
                                
                           <a href="#tab2success" data-toggle="tab" role="button" class="btn btn-success" style="    float: right;
    padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 0px;
    text-align: center;"><i class="fa fa-angle-double-right" aria-hidden="true" style="
 
    /* float: left; */
    font-size: large;
    padding-bottom: 0px;
    margin-bottom: 0px;
                           "></i>Avançar para Exame Fisico</a>
                             </div>
</div>
                           </div>
                     <!--fim area do tab01-->     
                        <div class="tab-pane fade" id="tab2success">


                       <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              <h1>Exame Fisico</h1>
                              </div>
                              
                              <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label>
                              </div>

                                 <div class="form-group form-usuario col-md-12">

                     <div class="col-md-6">
                        <label class="control-label col-sm-4">Peso(em kg):</label>
                       <input type="number" min="0" max="120" id="txtPeso" class="form-control">
          </div>
<div class="col-md-6">
        <label class="control-label col-sm-6">Altura(em metros):</label>
          
           <input type="number" id="txtTalla" class="form-control">
         
          </div>

                           </div>
                            <div class="form-group form-usuario col-md-12">
                            <div class="col-md-6">
                              <label class="control-label col-sm-8">Frequência respiratória (x min):</label>
                             <input type="number" min="0" max="120" id="txtFrecuenciaCar" class="form-control">
                            </div>
         <div class="col-md-6">
          <label class="control-label col-sm-8">Frequencia Cárdiaca (x min):</label>
          
           <input type="number" id="txtFrecuenciaRes" class="form-control">
          </div>
                            </div>
                            <div class="form-group form-usuario col-md-12">
                              <div class="col-md-6">
                              <label class="control-label col-sm-8">Pressão Arterial:&nbsp;&nbsp;&nbsp;&nbsp;Sistólica</label>
          
           <input type="number" min="0" max="120" id="txtSistolica" class="form-control">
          </div>
          <div class="col-md-6">
          <label class="control-label col-sm-8">Diastólica</label>
         
            <input type="number" id="txtDiastolica" class="form-control">
          </div>
          <div class="col-md-6">
          <label class="control-label col-sm-8">Media</label>
          
           <input type="number" id="txtMedia" class="form-control">
          </div>
                            </div>
                            
                            <div class="form-group form-usuario col-md-12">
                              <div class="col-md-6">
                               <label class="control-label col-sm-6">Estado Geral:</label>
          <div class="col-md-6">
            <input type="radio" name="estadoGeneral" id="rbtEstGral" value="0">BOm<br>
            <input type="radio" name="estadoGeneral" id="rbtEstGral" value="1">Regular<br>
            <input type="radio" name="estadoGeneral" id="rbtEstGral" value="2">Insuficiente<br>
            </div>
         </div>
        <div class="col-md-6">
      <label class="control-label col-sm-6">Dificultade Respiratoria:</label>
          <div class="col-md-6">
            <input type="radio" id="DifRespiratoria" name="difcultarRes" value="0">Não<br>
            <input type="radio" id="DifRespiratoria" name="difcultarRes" value="1">Sim<br>
            </div>
          </div>
                            </div>
<div class="form-group form-usuario col-md-12">
                         <label for="observocoes-exercicio" class="col-md-4 control-label">Observações</label>

                              <div class="col-md-12">
                               
                                 <textarea class="form-control" rows="15" id="observacoes-exercicio" name="observacoes-exercicio"></textarea>
                             </div>
                           </div>
                            <div class="form-group form-usuario col-md-12">

                       </div>

                            <div class="form-group form-usuario col-md-12">
                       

                              <div class="col-md-6">
                               
                                
                              <a href="#tab1success" data-toggle="tab" role="button" class="btn btn-warning" style="float:left;
                               padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 0px;
    text-align: center;">
    <i class="fa fa-angle-double-left" aria-hidden="true" style="
      font-size: large;
    padding-bottom: 0px;
    margin-bottom: 0px;
                                                  "></i>Retrocer para Anamnese</a>
                             </div>
                              <div class="col-md-6">
                               
                                
                              <a href="#tab3success" data-toggle="tab" role="button" class="btn btn-success" style="    float: right;
    padding-top: 0px;
    padding-bottom: 0px;
    margin-top: 0px;
    text-align: center;"><i class="fa fa-angle-double-right" aria-hidden="true" style="
 
    /* float: left; */
    font-size: large;
    padding-bottom: 0px;
    margin-bottom: 0px;
                           "></i>Avançar pra Hipotese Diagnóstica</a>
                             </div>
</div>
                              </div>
                          
  

                        
                        <div class="tab-pane fade" id="tab3success">
                          
 <div class="form-group form-usuario col-md-12">
                         <label for="diagnostico" class="col-md-4 control-label">Diagnóstico</label>

                              <div class="col-md-12">
                               
                                
                                 <input id="diagnostico" type="text" class="form-control" name="diagnostico" placeholder="Inserir tags de diagnosticos separados por virgula. Ex: Alergia, gripe">
                             </div>
                             </div>
<div class="form-group form-usuario col-md-12">
                         <label for="observocoes-diagnostico" class="col-md-4 control-label">Observações</label>

                              <div class="col-md-12">
                               
                                 <textarea class="form-control" rows="15" id="observacoes-diagnostico" name="observacoes-diagnostico"></textarea>
                             </div>
                           </div>

                        </div>
                        <div class="tab-pane fade" id="tab4success">
                       <div class="page-header">
  <h1>Exporte sua consulta<small> Gere arquivos em PDF's pronto para impressão</small></h1>
</div>   

 
<!-- CHANGE THE ACTION TO THE PHP SCRIPT THAT WILL PROCESS THE FILE VIA AJAX -->
<div class="form-group form-usuario col-md-12">
<form id="file-upload-form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <input id="file-upload" type="file" name="fileUpload" />
  <label for="file-upload" id="file-drag">
  Selecione o arquivo para upload
    <br />OU
    <br />Arraste e solte dentro da caixa
    
    <br /><br /><span id="file-upload-btn" class="buttonD">Adicionar arquivo</span>
  </label>
  
  <progress  id="file-progress" value="100">
    <span>100</span>%
  </progress>
  
  <output for="file-upload" id="messages"></output>
</form>

<?php
$fn = (isset($_SERVER['HTTP_X_FILE_NAME']) ? $_SERVER['HTTP_X_FILE_NAME'] : false);
$targetDir = 'tmp/';

if ($fn) {
            if (isFileValid($fn)) {
              // AJAX call
              file_put_contents(
                $targetDir . $fn,
                file_get_contents('php://input')
              );
              removeFile($fn);
            }
}

function removeFile($file) {
  unlink($targetDir . $file);
}
?>
                        </div>
                        </div>
                        <script type="text/javascript">
                          (function() {
  function Init() {
    var fileSelect = document.getElementById('file-upload'),
      fileDrag = document.getElementById('file-drag'),
      submitButton = document.getElementById('submit-button');

    fileSelect.addEventListener('change', fileSelectHandler, false);

    // Is XHR2 available?
    var xhr = new XMLHttpRequest();
    if (xhr.upload) {
      // File Drop
      fileDrag.addEventListener('dragover', fileDragHover, false);
      fileDrag.addEventListener('dragleave', fileDragHover, false);
      fileDrag.addEventListener('drop', fileSelectHandler, false);
    }
  }

  function fileDragHover(e) {
    var fileDrag = document.getElementById('file-drag');

    e.stopPropagation();
    e.preventDefault();
    
    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
  }

  function fileSelectHandler(e) {
    // Fetch FileList object
    var files = e.target.files || e.dataTransfer.files;

    // Cancel event and hover styling
    fileDragHover(e);

    // Process all File objects
    for (var i = 0, f; f = files[i]; i++) {
      parseFile(f);
      uploadFile(f);
    }
  }

  function output(msg) {
    var m = document.getElementById('messages');
    m.innerHTML = msg;
  }

  function parseFile(file) {
    output(
      '<ul>'
      + '<li>Nome do Arquivo: <strong>' + encodeURI(file.name) + '</strong></li>'
      + '<li>Tipo: <strong>' + file.type + '</strong></li>'
      + '<li>Tamanho: <strong>' + (file.size / (1024 * 1024)).toFixed(2) + ' MB</strong></li>'
      + '</ul>'
    );
  }

  function setProgressMaxValue(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.max = e.total;
    }
  }

  function updateFileProgress(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.value = e.loaded;
    }
  }

  function uploadFile(file) {

    var xhr = new XMLHttpRequest(),
      fileInput = document.getElementById('class-roster-file'),
      pBar = document.getElementById('file-progress'),
      fileSizeLimit = 1024; // In MB
    if (xhr.upload) {
      // Check if file is less than x MB
      if (file.size <= fileSizeLimit * 1024 * 1024) {
        // Progress bar
        pBar.style.display = 'inline';
        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
        xhr.upload.addEventListener('progress', updateFileProgress, false);

        // File received / failed
        xhr.onreadystatechange = function(e) {
          if (xhr.readyState == 4) {
            // Everything is good!
            
            // progress.className = (xhr.status == 200 ? "success" : "failure");
            // document.location.reload(true);
          }
        };

        // Start upload
        xhr.open('POST', document.getElementById('file-upload-form').action, true);
        xhr.setRequestHeader('X-File-Name', file.name);
        xhr.setRequestHeader('X-File-Size', file.size);
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.send(file);
      } else {
        output('Por favor, insira um arquivo menor (< ' + fileSizeLimit + ' MB).');
      }
    }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
})();
                        </script>
                        <div class="tab-pane fade" id="tab5success">Success 5</div>
                  </div>
                </div>
            </div>
        </div>
            </div>
              
                        <!--Area do modal-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="background-color: rgba(8, 9, 10, 0.329412); display: none;">
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
                
                 
                  <h2>Selecione ficha do prontuário</h2>
                     <!-- <a class="btn btn-info" href="http://localhost:8000/admin/adicionar/usuario/paciente">Detalhes</a>

                     <div class="row"> -->
                     <br>
    <div class="col-sm-3 col-md-4">
        <div class="thumbnail cartao " style="
          height: 420px !important;
          margin-top: 0px !important;
          padding-top: 4px !important;
          background-color: rgba(110, 148, 91, 0.49)!important;
          border-bottom-right-radius: 0px !important;
          border-top-right-radius: 0px !important;
          border-top-left-radius: 0px !important;
          border-bottom-left-radius: 0px !important;
          ">
       <div class="img-cartao anamnese">
    

      </div>
      <div class="caption">
        <h3 class="h3-cartao">Prontuário do Paciente</h3>

        <p class="p-cartao" style="
    display: table-caption;
    /* margin: 0 auto; */
">

<button id="botao-salvar-acesso" name="botao-anamnese" type="submit" class="btn btn-success p-cartao" style="
    width: 226px;
    padding-left: 17px;
    border-radius: 110px;
    font-size: inherit;
    padding-left: 50px;
    padding-right: 50px;
    background-color: rgb(151, 175, 112);
    margin-left: 16px;
">Ir</button>
<button type="button" class="btn btn-secondary"" disabled="" style="
    margin-left: 17px;
">Ficha Atual</button>
       </p><!--http://localhost:8000/admin/adicionar/usuario/paciente/consulta/anamnese-->
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
      <div class="img-cartao exame-fisico">
    
      
      </div>
      <div class="caption">
        <h3 class="h3-cartao">Atestado Médico</h3>
        
        <p class="p-cartao"><a href="#" class="btn btn-primary botao-card" name="botao-exame-fisico" role="submit">Selecionar</a> 
      </p></div>
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
        <h3 class="h3-cartao">Solicitar Exame</h3>
        
        <p class="p-cartao"><a href="#" class="btn btn-primary botao-card" name="botao-hipotese" role="submit">Selecionar</a> 
      </p></div>
     </div>
     </div>
     </div>
                </div>
            </div>
    </div>
    </div>
  </div>








    </div>
                             <!--Fim Area-->       
                             <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Atenção</h4>
      </div>
      <div class="modal-body">
        <p>Antes de proseguir é nescessário cadastrar paciente. Deseja Continuar?…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        <button id="botao-salva-prontuario" name="botao-salva-prontuario" type="submit" class="btn btn-success">Salvar</button>

         
      </div>
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