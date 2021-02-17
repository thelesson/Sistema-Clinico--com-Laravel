@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container">
    <div class="row">
<form enctype="multipart/form-data"      class="formulario-de-inclusao"   role="form" method="POST"  action="{{route('CriaExameMedico.index')}}">
{{ csrf_field() }}
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-success" style="
    margin-bottom: 22px;
    background-color: rgba(183, 204, 151, 0.71);
    border: 4px solid rgba(212, 227, 193, 0.54);
    border-radius: 4px;
    box-shadow: 0 2px 2px rgba(198, 217, 167, 0.72);
    ">
                <div class="panel-heading">Cadastro de  de <span style="color:green">´Exames Laboratoriais</span></div>

                <div class="panel-body">
                <div class="page-header">

  <h1 style="
    color: #4c6f14;
">Exames Laboratoriais <br><small style="
    padding-left: 17px!important;
    font-size: 40%!important;
    color: black;
"><i>Inclusão de exames laboratoriais, no sistema</i></small></h1>
</div>
  @if(Session::has('mensagem_sucesso_cadastro'))
                  <div class="alert alert-success">{{Session::get('mensagem_sucesso_cadastro')}}</div>
                  @endif
                  @if(Session::has('mensagem_sucesso_cadastro2'))
                  <div class="alert alert-danger">{{Session::get('mensagem_sucesso_cadastro2')}}</div>
                  @endif
                    <div class="form-group-col-md-12 " >
  <label class="col-md-12 control-label" for="nome_exame">Nome do Exame</label>  
  <div class="col-md-12 ">
  <input id="nome_exame" name="nome_exame" type="text" placeholder="Ex: Exame de Sangue" class="form-control input-md"    >
  
                
    
  </div>
  </div>
   <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
  <div class="form-group-col-md-12">
     <label class="col-md-12 control-label" for="avatar">Imagem Ilustrativa</label>
     <div class="col-md-12">
                      <input type="file" class="btn btn-default" name="avatar" value="">
                      </div>
                      
                       </div>
                       <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
                       <div class="form-group-col-md-12">
     <label class="col-md-12 control-label" for="avatarFundo">Plano de Fundo</label>
     <div class="col-md-12">
                      <input type="file" class="btn btn-default" name="avatarFundo" value="">
                      </div>
                      
                       </div>
   <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
  <div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="Desc_curta">Cor da ficha</label>
  <div class="col-md-12">
  <input type="color" name="favcolor" value="#ff0000">
    
  </div>
</div>
  <div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="Desc_curta">Descricao Curta</label>
  <div class="col-md-12">
  <input id="textinput" name="Desc_curta" type="text" placeholder="Ex: Exame de Sangue  " class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
  
  <div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="material_analisado">Material a ser Analisado</label>
  <div class="col-md-12">
  <input id="textinput" name="material_analisado" type="text" placeholder="Ex: Sangue extraído da veia do braço " class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
  
  <div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="tempo_medio_coleta">Tempo médio de coleta</label>
  <div class="col-md-12">
 
    <div class="input-group ">
    <input type="text" class="form-control" id="tempo_medio_coleta" aria-describedby="basic-addon3" name="tempo_medio_coleta">
  <span class="input-group-addon" id="tempo_medio_coleta">Minutos </span>
  
</div>
  </div>
</div>
 <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
<div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="finalidade">Finalidade do Exame:</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="finalidade" name="finalidade" rows="10"></textarea>
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
<div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="preparacao_previa">Preparacão Prévia:</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="preparacao_previa" name="preparacao_previa" rows="5"></textarea>
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
<div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="valores_normais_desc">Valores Normais Descrição:</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="valores_normais_desc" name="valores_normais_desc" rows="5"></textarea>
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
<div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="valores_normais_sign">Valores Normais Significa:</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="valores_normais_sign" name="valores_normais_sign" rows="3"></textarea>
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
  
  <div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="tempo_obter_resul">Tempo para obter resultado </label>
  <div class="col-md-12">
 
    <div class="input-group ">
    <input type="text" class="form-control" id="tempo_obter_resul" aria-describedby="basic-addon3" name="tempo_obter_resul">
  <span class="input-group-addon" id="tempo_obter_resul"> Ex: Imediatamente // Ex2: 30 minutos</span>
  
</div>
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
  
  <div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="nivel_confiabilidade">Nivel de Confiabilidade do exame</label>
  <div class="col-md-12">
  <input id="textinput" name="nivel_confiabilidade" type="text" placeholder="Ex: Preciso/Boa/requer exames complementares  " class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
<div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="medicamentos_alteram_result">Medicamentos que podem alterar resultado:</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="medicamentos_alteram_result" name="medicamentos_alteram_result" rows="2"></textarea>
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
 

<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
   <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
   <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
   <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
<div class="form-group-col-md-12">
<div class="col-md-10" style="float:right;">
                                <button id="botao-reset" name="botao-reset" type="reset" class="btn btn-danger">Limpar</button>
                              <button id="botao-salvar-adiciona" name="botao-salvar-adiciona" type="button" class="btn btn-secondary">Salvar e adicionar outro</button>
                              <button id="botao-salvar-continua" name="botao-salvar-continua" type="button" class="btn btn-secondary">Salvar e continuar editando</button>
                                  <button id="botao-salvar" name="botao-salvar" type="submit" class="btn btn-success">Salvar</button>
                              </div>
</div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
