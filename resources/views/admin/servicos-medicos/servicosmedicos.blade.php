@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container">
    <div class="row">
<form>
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-success" style="
    margin-bottom: 22px;
    background-color: rgba(183, 204, 151, 0.71);
    border: 4px solid rgba(212, 227, 193, 0.54);
    border-radius: 4px;
    box-shadow: 0 2px 2px rgba(198, 217, 167, 0.72);
    ">
                <div class="panel-heading">Cadastro de  de <span style="color:green">´Serviços Médicos</span></div>

                <div class="panel-body">
                <div class="page-header">

  <h1 style="
    color: #4c6f14;
">Serviços Médicos <br><small style="
    padding-left: 17px!important;
    font-size: 40%!important;
    color: black;
"><i>Inclua serviços médicos que a clinica oferece, listando os médicos que farão parte da equipe médica</i></small></h1>
</div>
                    <div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="textinput">Nome do Serviço</label>  
  <div class="col-md-12">
  <input id="textinput" name="textinput" type="text" placeholder="Ex: Cardiologia" class="form-control input-md" required="">
  
    
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
  <label class="col-md-12 control-label" for="selectbasic_tipoatv">Tipo da Atividade</label>
  <div class="col-md-12">
  <input id="textinput" name="textinputDesc_curta" type="text" placeholder="Ex: " class="form-control input-md" required="">
    
  </div>
</div>
 <div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
<div class="form-group-col-md-12">
  <label class="col-md-12 control-label" for="textarea_desc">Justificativa</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="textarea_desc" name="textarea_desc" rows="10"></textarea>
  </div>
</div>
<div class="form-group-col-md-12">
   	<span style="
    visibility: hidden;
">s</span>
   </div>
   <div class="cor-equipe" style="
    background-color: rgba(151, 175, 112, 0.49);;
    height: 83px;
    overflow: hidden;
    height: auto;
    padding-top: 20px;
    border-bottom-width: 10px;
    padding-bottom: 20px;
">
<div class="form-group-col-md-12">
<label class="col-md-12 control-label" for="textarea_desc">Esquipe Médica</label>
 <div class="col-md-3">  
<button class="btn btn-success add_field_button">Adicionar Mais</button>
</div>
  <div class="col-md-9">  

<div class="input-group input_fields_wrap">
  <span class="input-group-addon" id="basic-addon3">Doutor(a): </span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="mytext[]">
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="mytext[]"><a href="#" class="remove_field">Excluir</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
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
                                  <button id="botao-salvar" name="botao-salvar" type="button" class="btn btn-success">Salvar</button>
                              </div>
</div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
