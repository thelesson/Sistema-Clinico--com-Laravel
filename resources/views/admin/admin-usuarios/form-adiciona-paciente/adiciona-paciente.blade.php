@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-success" style="
    margin-bottom: 22px;
    background-color: rgba(183, 204, 151, 0.71);
    border: 4px solid rgba(212, 227, 193, 0.54);
    border-radius: 4px;
    box-shadow: 0 2px 2px rgba(198, 217, 167, 0.72);


            ">
                <div class="panel-heading">Adicionar Usuário</div>
                   <ol class="breadcrumb panel-heading">
                      <li><a href="{{route('consulta.usuario.index')}}">Usuários</a></li>
                      <li><a href="{{route('adiciona.usuario.index')}}">Perfil de Usuário</a></li>
                      <li class="active">Adicionar Paciente</li>
                   </ol>

                <div class="panel-body">
              
                        <script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})</script>
                        <div>
<form enctype="multipart/form-data"      class="formulario-de-inclusao"   role="form" method="POST"  action="{{route('postCriaPaciente.index')}}">

                          {{ csrf_field() }}
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist"><li role="presentation" class="active"><a href="#acesso" aria-controls="acesso" role="tab" data-toggle="tab" >Dados de Acesso</a></li>
    <li role="presentation"><a href="#dados_pessoais" aria-controls="dados_pessoais" role="tab" data-toggle="tab">Dados Pessoais</a></li>
    <li role="presentation"><a href="#dados_complementares" aria-controls="dados_complementares" role="tab" data-toggle="tab">Dados Complementares</a></li>
    <li role="presentation"><a href="#convenios" aria-controls="convenios" role="tab" data-toggle="tab">Convênios</a></li>
    <li role="presentation"><a href="#prontuario" aria-controls="prontuario" role="tab" data-toggle="tab">Prontuário Médico</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="acesso">
 <hr>
                  <h4>Cadastro de Acesso ao sistema</h4> 
                  @if(Session::has('mensagem_sucesso_cadastro'))
                  <div class="alert alert-success">{{Session::get('mensagem_sucesso_cadastro')}}</div>
                  @endif
                  @if(Session::has('mensagem_sucesso_cadastro2'))
                  <div class="alert alert-danger">{{Session::get('mensagem_sucesso_cadastro2')}}</div>
                  @endif
                  <hr>
                   
                         

                          <div class="form-group form-usuario col-md-12">
                              <label for="mHidden" class="col-md-4 control-label">Matricula</label>

                              <div class="col-md-2">

<input id="mHidden" type="hidden" disabled class="form-control" name="mHidden" value ="{{$matriculaNova=substr_replace($matricula, '', 0,-10)}}" >
<input id="matriculaTeste" type="hidden" class="form-control" name="matriculaTeste" value ="{{$matriculak=substr_replace($matriculaNova,'',6)}}" >
   
            <input id="matriculaPaciente" type="text" disabled class="form-control" name="matriculaPaciente" value ="{{ $matriculaX=substr_replace($matriculaNova,'',6)}}" >

<!--  -->
                
                              </div>
                          </div>


 <div class="form-group form-usuario col-md-12">
                              <label for="sem-acesso" class="col-md-4 control-label">Usuário sem acesso ao sistema</label>

                              <div class="col-md-2">
                                  
                     <label for="info" class="btn btn-success">Sim <input type="checkbox" id="info" class="badgebox"><span class="badge">&check;</span></label>
                
                              </div>
                          </div>



                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="name" class="col-md-4 control-label">Nome Completo</label>
                              <div class="col-md-6">
                                  <input id="name" type="text"  class="form-control" name="name" autocomplete="off" value="{{ old('name') }}" >
                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <script type="text/javascript">
                        
                            $(document).ready( function(){
    $('#name').keyup(function (e) {
                          var nome = e.target.value;
                          //document.getElementById('txtstart').value = date_today;
                           $("#recebeNome").val(nome);
                          });
});
                        </script>

                                 <!--  value="{{old('name')}}" para trazer valor armazenado no input -->

                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                              </div>
                          </div>
                         <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="email" class="col-md-4 control-label">Email</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                
                              </div>
                          </div> 
                           <!-- <div class="form-group form-usuario col-md-12">
                              <label for="email-geral-acesso-confirma" class="col-md-4 control-label">Confirmar email-geral</label>

                              <div class="col-md-6">
                                  <input id="email-geral-acesso-confirma" type="email-geral" class="form-control" name="email-geral-acesso" >

                
                              </div>
                          </div> -->
                           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="password" class="col-md-4 control-label">Senha</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password"  >
 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                
                              </div>
                          </div>
                           <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
 @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                
                              </div>
                          </div> 

                           <div class="form-group form-usuario col-md-12">
                             
                              <div class="col-md-10" style="float:right;">
                              <script type="text/javascript">
                               /* $(document).ready(function (){
                                      validate();
                                      $('#name, #email, #password,#password-confirm').change(validate);
                                });
                                function validate(){
                                     if ($('#name').val().length > 0 &&
                                         $('#email').val().length > 0 &&
                                         $('#password').val().length > 0 &&
                                         $('#password-confirm').val().length > 0) {
                                              $('#dados_pessoais').tab('show');
                                    }
                                     else {
                                      ??
                                    }
                              }*/ 
                              $(document).ready(function (){
                                      validate();
                                      $('#name, #email, #password,#password-confirm').change(validate);
                                      /* $("a[data-toggle='tab'").prop('disabled', true);
    $("a[data-toggle='tab'").each(function () {
        $(this).prop('data-href', $(this).attr('href')); // hold you original href
        $(this).attr('href', '#'); // clear href
    });                
    $("a[data-toggle='tab'").addClass('disabled-link');
    $("a[data-toggle='tab'").css( 'cursor', 'none' );*/
                             });
                               
                                function validate(){
                                

                                     if ($('#name').val().length > 0 &&
                                         $('#email').val().length > 0 &&
                                         $('#password').val().length > 0 &&
                                         $('#password-confirm').val().length > 0) {
                                         /*$("a[data-toggle='tab'").prop('disabled', false);
    $("a[data-toggle='tab'").each(function () {
        $(this).attr('href', $(this).prop('data-href')); // restore original href
    });
    $("a[data-toggle='tab'").removeClass('disabled-link');
    $('selector').css( 'cursor', 'pointer' );*/

                                    }
                                     else {
                                     
                                    }

  } 
 

                                                               
                           
                              </script>
                                 <button id="botao-salvar-adiciona-acesso" name="botao-salvar-adiciona-acesso" type="reset" class="btn btn-danger">Limpar</button>
                              <button id="botao-salvar-adiciona-acesso" name="botao-salvar-adiciona-acesso" type="button" class="btn btn-secondary">Salvar e adicionar outro</button>
                              <button id="botao-salvar-continua-acesso" name="botao-salvar-continua-acesso" type="button" class="btn btn-secondary">Salvar e continuar editando</button>
                                  <button id="botao-salvar-acesso" name="botao-salvar-acesso" type="submit" class="btn btn-success">Salvar</button>
                              </div>
                              </div>
  </div>
    <div role="tabpanel" class="tab-pane"  id="dados_pessoais">
     
 <hr>
                  <h4>Cadastro de Usuário - GERAL</h4>
                  <hr>
                 

                         <div class="form-group form-usuario col-md-12">
                              <label for="nome" class="col-md-4 control-label">Nome</label>

                              <div class="col-md-6">
                                  <input  type="text" id="recebeNome" class="form-control" name="nome" disabled="" value="{{ old('name') }}">

                
                              </div>
                          </div>


      <div class="form-group form-usuario col-md-12">
      <label for="avatar" class="col-md-4 control-label">Avatar</label>
                      <input type="file" name="avatar" value="{{ old('avatar') }}">
                      
                      
                       </div>
                          <br>

                         <div class="form-group{{ $errors->has('nascimento') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="nascimento" class="col-md-4 control-label">Data de Nascimento</label>

                              <div class="col-md-6">
                                  <input id="nascimento" type="date" class="form-control" name="nascimento"  value="{{ old('nascimento') }}">
@if ($errors->has('nascimento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nascimento') }}</strong>
                                    </span>
                                @endif
                
                              </div>
                          </div>

                            <div class="form-group{{ $errors->has('radio') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="sexo" class="col-md-4 control-label">Sexo</label>

                              <div class="col-md-6">
                          <label class="form-check-inline">
                           <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Masculino" @if (old('radio') ==  'Masculino') checked="checked" @endif > Masculino
                          </label>
                          <label class="form-check-inline">
                          <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Feminino" @if (old('radio')  == 'Feminino') checked="checked" @endif > Feminino
                          </label>
                          @if ($errors->has('radio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('radio') }}</strong>
                                    </span>
                                @endif
                          </div>
                          </div>
                          <div class="form-group form-usuario col-md-12">
                              <label for="emailc" class="col-md-4 control-label">Email Secundário</label>

                              <div class="col-md-6">
                                  <input id="emailcx" type="email" class="form-control" name="emailcx" value="{{ old('emailcx') }}" >

                
                              </div>
                          </div>
                          <div class="form-group form-usuario col-md-12">
                              <label for="observacoes" class="col-md-4 control-label">Observações</label>

                              <div class="col-md-6">
                               <textarea class="form-control" id="observacoes" name="observacoes" rows="5" ">{{ old('observacoes') }}</textarea>
                               <small><i>*essa informação será visivel apenas para você</i></small>
                                  
                              </div>
                          </div>
                          <div class="form-group form-usuario col-md-12">
                       <label for="seletor-conheceu" class="col-md-4 control-label">Como conheceu</label>
  <div class="col-md-3">
                       <select id="tipoq" name="tipoq" class="select-box-customizado  show-tick" data-style="btn-info" value="{{ old('tipoq') }}">
     <option @if ( old('tipoq') == 'Encaminhamento'+' '+'Médico') selected="selected" @endif >Encaminhamento Médico</option>
    <option value="Guia Médico" @if ( old('tipoq') == 'Guia Médico') selected="selected" @endif >Guia Médico</option>
    <option @if ( old('tipoq') == 'Hospital') selected="selected" @endif>Hospital</option>
    <option value="Indicação de Paciente" @if ( old('tipoq') == 'Indicação de Paciente') selected="selected" @endif >Indicação de Paciente</option>
    <option  @if ( old('tipoq') == 'Internet') selected="selected" @endif >Internet</option>
    <option @if ( old('tipoq') == 'Outro') selected="selected" @endif >Outro</option>
  </select>



  </div>
   <label for="seletor-conheceu-obs" class="col-md-1 control-label">Observação</label>
  <div class="col-md-2">
     <input id="seletor-conheceu-obs" type="tex" class="form-control" name="seletor-conheceu-obs">

  </div>
  </div>
  <div class="col-md-12">
  <hr>
  <h4>TELEFONES</h4>
  <hr>
  </div>
    <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="celular" class="col-md-4 control-label">Celular</label>

                              <div class="col-md-6">
                                <input id="celular" type="tel" class="form-control" name="celular" placeholder="1-(555)-555-5555"  value="{{ old('celular') }}">
                                    @if ($errors->has('celular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                              </div>

                             
                          </div>
      <div class="form-group{{ $errors->has('residencial') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="residenciaç" class="col-md-4 control-label">Residencial</label>

                              <div class="col-md-6">
                                <input id="residencial" type="tel" class="form-control" name="residencial" placeholder="1-(555)-555-5555" value="{{ old('residencial') }}" >
                                   @if ($errors->has('residencial'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('residencial') }}</strong>
                                    </span>
                                @endif
                              </div>
                              </div>
                            <div class="form-group form-usuario col-md-12">
                              <label for="comercial" class="col-md-4 control-label">Comercial</label>

                              <div class="col-md-6">
                                <input id="comercial" type="tel" class="form-control" name="comercial" placeholder="1-(555)-555-5555" >
                                  
                              </div>
                              </div>

                          <div class="col-md-12">
  <hr>
  <h4>Endereços</h4>
  <hr>
  </div>
  <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="cep" class="col-md-4 control-label">Cep</label>

 <script type="text/javascript" >


        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
               // $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#bairro").val("...");
                      $("#cidade-select").val("...");
                       $("#estado-select").val("...");
                       // $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade-select").val(dados.localidade);
                                $("#estado-select").val(dados.uf);
                               
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    


                              <div class="col-md-6">
                                <input id="cep" type="tel" class="form-control" name="cep" placeholder="_______-__"  value="{{ old('cep') }}">
                                  @if ($errors->has('cep'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                @endif
                              </div>
                              </div>
 <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }} form-usuario col-md-12">
                              <label for="endereco" class="col-md-4 control-label">Endereco</label>

                              <div class="col-md-4">
                                <input id="endereco" type="text" class="form-control" name="endereco" placeholder="Rua, avenida,etc"  value="{{ old('endereco') }}">
                                   @if ($errors->has('endereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif
                              </div>
                              <label for="endereco" class="col-md-1 control-label">Numero</label>

                              <div class="col-md-1">
                                <input id="endereco-num" type="tel" class="form-control" name="endereco-num" placeholder="ex:89" value="{{ old('endereco-num') }}" >
                                  
                              </div>
                              </div>

                              <div class="form-group form-usuario col-md-12">
                              <label for="complemento" class="col-md-4 control-label">Complemento</label>

                              <div class="col-md-3">
                                <input id="complemento" type="text" class="form-control" name="complemento" placeholder="condominio, lote, etc" value="{{ old('complemento') }}" >
                                  
                              </div>
                              <label for="bairro" class="col-md-1 control-label">Bairro</label>

                              <div class="col-md-2 {{ $errors->has('bairro') ? ' has-error' : '' }}">

                                <input id="bairro" type="tel" class="form-control" name="bairro" placeholder="Copacabana" value="{{ old('bairro') }}" >
                                  @if ($errors->has('bairro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                                @endif
                              </div>
                              </div>
                                <script src="/vendor/artesaos/cidades/js/scripts.js"></script>  
                                <div class="form-group form-usuario col-md-12">
                              <label for="estado-select" class="col-md-4 control-label">Estado</label>
   

                              <div class="col-md-2{{ $errors->has('estado-select') ? ' has-error' : '' }}">
                                <!-- <select id="estado-select"  default="RJ" name="estado-select" class="select-box-customizado  show-tick" data-style="btn-info" ">

  </select> -->
   <input id="estado-select" type="text" class="form-control" name="estado-select" placeholder="Rj" value="{{ old('estado-select') }}" >
    @if ($errors->has('estado-select'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado-select') }}</strong>
                                    </span>
                                @endif
                                  
                              </div>
                              <label for="cidade" class="col-md-1 control-label">Cidade</label>

                              <div class="col-md-3 {{ $errors->has('cidade-select') ? ' has-error' : '' }} ">
                            <!--    <select id="cidade-select" name="cidade-select" class="select-box-customizado  show-tick" data-style="btn-info" ">
   
  </select>-->
 <input id="cidade-select" type="text" class="form-control" name="cidade-select" placeholder="Copacabana"  value="{{ old('cidade-select') }}">
   @if ($errors->has('cidade-select'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cidade-select') }}</strong>
                                    </span>
                                @endif
                 

                                  
                              </div>

                              </div>
<script>
        $('#estado-select').ufs({
            onChange: function(uf){
                $('#cidade-select').cidades({uf:uf});
            }
        });
     </script>
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                              <div class="form-group form-usuario col-md-12">
                             
                              <div class="col-md-10" style="
    margin-top: 20px;
    float:right;
">
                                <button id="botao-salvar-adiciona-acesso" name="botao-salvar-adiciona-acesso" type="reset" class="btn btn-danger">Limpar</button>
                              <button id="botao-salvar-adiciona" name="botao-salvar-adiciona" type="button" class="btn btn-secondary">Salvar e adicionar outro</button>
                              <button id="botao-salvar-continua" name="botao-salvar-continua" type="button" class="btn btn-secondary">Salvar e continuar editando</button>
                                  <button id="botao-salvar" name="botao-salvar" type="button" class="btn btn-success">Salvar</button>
                              </div>
                              </div>
                              
                          
                  
    </div>
    <div role="tabpanel" class="tab-pane" id="dados_complementares">
      
<hr>
                  <h4>Dados Complementares</h4>
                  <hr>
                 <form class="formulario-de-inclusao" role="form" method="POST" action="{{route('postCriaPaciente.index')}}">
                          {{ csrf_field() }}

                          <div class="form-group form-usuario col-md-12">
                              <label for="naturalidade" class="col-md-2 control-label">Naturalidade</label>

                              <div class="col-md-4">
                                  <input id="naturalidade" type="text" class="form-control" name="naturalidade" value="{{ old('naturalidade') }}" >

                
                              </div>
                              <label for="nacionalidade" class="col-md-2 control-label">Nacionalidade</label>

                              <div class="col-md-4">
                                  <select id="nacionalidade-select" name="nacionalidade-select" class="select-box-customizado  show-tick" data-style="btn-info" style="float:right;width:293px;" value="{{ old('nacionalidade') }}">
     <option @if ( old('nacionalidade-select') == 'Brasileira') selected="selected" @endif >Brasileira</option>
    <option @if ( old('nacionalidade-select') == 'Americana') selected="selected" @endif>Americana</option>
    <option @if ( old('nacionalidade-select') == 'Inglesa') selected="selected" @endif>Inglesa</option>
    <option @if ( old('nacionalidade-select') == 'Francesa') selected="selected" @endif>Francesa</option>
    <option @if ( old('nacionalidade-select') == 'Japonesa') selected="selected" @endif>Japonesa</option>
    <option value ="Outra nacionalidade" @if ( old('nacionalidade-select') == 'Outra nacionalidade') selected="selected" @endif>Outra nacionalidade</option>
  </select>


                
                              </div>
                          </div>
                          <br> <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>

                           <div class="form-group form-usuario col-md-12">
                              <label for="cor" class="col-md-2 control-label">Cor</label>

                              <div class="col-md-4">
                                    <select id="cor-select" name="cor-select" class="select-box-customizado  show-tick" data-style="btn-info" style="float:right;width:293px;" value="{{ old('cor-select') }}">
    <option @if ( old('cor-select') == 'Branca') selected="selected" @endif>Branca</option>
      <option @if ( old('cor-select') == 'Negra') selected="selected" @endif>Negra</option>
     <option @if ( old('cor-select') == 'Amarela') selected="selected" @endif>Amarela</option>
    <option @if ( old('cor-select') == 'Parda') selected="selected" @endif>Parda</option>
   
  </select>



                
                              </div>
                               <label for="estado-civil" class="col-md-2 control-label">Estado Civil</label>

                              <div class="col-md-4">
                                    <select id="estado-civil-select" name="estado-civil-select" class="select-box-customizado  show-tick" data-style="btn-info" style="float:right;width:293px;" value="{{ old('estado-civil-select') }}">
     <option @if ( old('estado-civil-select') == 'Solteiro') selected="selected" @endif>Solteiro</option>
    <option  @if ( old('estado-civil-select') == 'Casado') selected="selected" @endif>Casado</option>
    <option  @if ( old('estado-civil-select') == 'Divorciado') selected="selected" @endif>Divorciado</option>
    <option  @if ( old('estado-civil-select') == 'Viuvo') selected="selected" @endif>Viuvo</option>
    <option  value= "União Estavel" @if ( old('estado-civil-select') == 'União Estavel') selected="selected" @endif>União Estável</option>
    <option  @if ( old('estado-civil-select') == 'Outro') selected="selected" @endif>Outro</option>
  </select>



                
                              </div>
                          </div>

                           <div class="form-group form-usuario col-md-12">
                            <label for="quebra" class="col-md-12 control-label"></label></div>
                             <div class="form-group form-usuario col-md-12">
                              <label for="cpf" class="col-md-2 control-label">Cpf</label>

                              <div class="col-md-4">
                                  <input id="cpf" type="tel" class="form-control" name="cpf" value="{{ old('cpf') }}">

                
                              </div>
                              <label for="rg" class="col-md-2 control-label">Rg</label>

                              <div class="col-md-4">
                                   <input id="rg" type="tel" class="form-control" name="rg" value="{{ old('rg') }}">


                
                              </div>
                          </div>
<div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>

                          <div class="form-group form-usuario col-md-12">
                              <label for="escolaridade_paciente" class="col-md-2 control-label">Escolaridade</label>

                              <div class="col-md-4">
                                    <select id="escolaridade_paciente" name="escolaridade_paciente" class="select-box-customizado  show-tick" data-style="btn-info" style="float:right;width:293px;" value="{{ old('escolaridade_paciente') }}">
     <option>Nenhuma</option>
    <option>Ensino Fundamental</option>
    <option>Ensino FUndamental Incompleto</option>
    <option>Ensino Médio</option>
    <option>Ensino Medio Imcompleto</option>
    <option>Ensino Superior</option>
    <option>Ensino Superior Imcompleto</option>
    <option>Pós Graduação</option>
    <option>Mestrado</option>
    <option>Doutorado</option>

  </select>



                
                              </div>
                               <label for="profissao_paciente" class="col-md-2 control-label">Profissão</label>

                              <div class="col-md-4">
                                   

 								<input id="profissao_paciente" type="text" class="form-control" name="profissao_paciente" value="{{ old('profissao_paciente') }}" >

                
                              </div>
                          </div>
                          <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>

                          <div class="form-group form-usuario col-md-12">
                              <label for="obito" class="col-md-4 control-label">Óbito</label>

                              <div class="col-md-2">
                                  
                     <label for="info2" class="btn btn-success" style="float:right;">Sim <input type="checkbox" id="info2" class="badgebox"><span class="badge">&check;</span></label>
                              </div>
                          </div>
                          <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>

                            <div class="form-group form-usuario col-md-12">
                             
                              <div class="col-md-10" style="float:right;">
                                <button id="botao-salvar-adiciona-acesso" name="botao-salvar-adiciona-acesso" type="reset" class="btn btn-danger">Limpar</button>
                              <button id="botao-salvar-adiciona-acesso" name="botao-salvar-adiciona-acesso" type="button" class="btn btn-secondary">Salvar e adicionar outro</button>
                              <button id="botao-salvar-continua-acesso" name="botao-salvar-continua-acesso" type="button" class="btn btn-secondary">Salvar e continuar editando</button>
                                  <button id="botao-salvar-acesso" name="botao-salvar-acesso" type="submit" class="btn btn-success">Salvar</button>
                              </div>
                              </div>
                         


    </div>
    <div role="tabpanel" class="tab-pane" id="convenios">
    <hr>
                  <h4>Convênios</h4>
                  <hr>
    
                          <div class="form-group form-usuario col-md-12">
                              <label for="convennio" class="col-md-2 control-label">Convenio</label>

                              <div class="col-md-4">
                                    <select id="convenio-select" name="convenio-select" class="select-box-customizado  show-tick" data-style="btn-info" style="float:right;width:293px;">
     <option>Virá da table_Convenios</option>
  </select>



                
                              </div>
                               <label for="convenio-select-plano" class="col-md-2 control-label">Plano do Convenio</label>

                              <div class="col-md-4">
                                    <select id="convenio-select-plano" name="convenio-select-plano" class="select-box-customizado  show-tick" data-style="btn-info" style="float:right;width:293px;">
     <option>Plano do convenio selecionado</option>
   
  </select>



                
                              </div>
                          </div>
                              <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>

                        <div class="form-group form-usuario col-md-12">
                              <label for="carteirinha" class="col-md-2 control-label">Número da Carteirinha</label>

                              <div class="col-md-4">
                                  <input id="carteirinha" type="tel" class="form-control" name="carteirinha" >

                
                              </div>
                              <label for="validade-carteirinha" class="col-md-2 control-label">Validade</label>

                              <div class="col-md-4">
                                   <input id="validade-carteirinha" type="date" class="form-control" name="validade-carteirinha" >


                
                              </div>
                          </div>
                            <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>

 <div class="form-group form-usuario col-md-12">
                              <label for="acomodacao" class="col-md-2 control-label">Acomodação</label>

                              <div class="col-md-4">
                                  <input id="acomodacao" type="text" class="form-control" name="acomodacao" placeholder="Ex:Leito, Apartamento, Enfermaria...">

                
                              </div>
                              
                          </div>
                           <div class="form-group form-usuario col-md-12">
                              <label for="quebra" class="col-md-12 control-label"></label></div>

                              <div class="form-group form-usuario col-md-12">
                             
                              <div class="col-md-10" style="float:right;">
                                <button id="botao-salvar-adiciona-acesso" name="botao-salvar-adiciona-acesso" type="reset" class="btn btn-danger">Limpar</button>
                              <button id="botao-salvar-adiciona-acesso" name="botao-salvar-adiciona-acesso" type="button" class="btn btn-secondary">Salvar e adicionar outro</button>
                              <button id="botao-salvar-continua-acesso" name="botao-salvar-continua-acesso" type="button" class="btn btn-secondary">Salvar e continuar editando</button>
                                  <button id="botao-salvar-acesso" name="botao-salvar-acesso" type="submit" class="btn btn-success">Salvar</button>
                              </div>
                              </div>

        

    </div>
       <div role="tabpanel" class="tab-pane" id="prontuario">
       	
       		<hr>
<h3>Cadastro de Prontuário</h3>
<h5><i>O cadastro da Anamnese, exame fisico e/ou Hipotese diagnóstica seão armazenados como ficha inicial do paciente. A inclusão do prontuário do paciente a ser cadastrado, contabilizará como uma consulta. * Obs: Para inclusão de hipotese diagnóstica é necessário possui número do conselho a qual pertece ou vincular algum profissional de saúde, caso o cadastrante seja admin do sistema.</i></h5>
       		<hr>
       		 <div class="form-group form-usuario col-md-12">
       		 <h3 class="h3-atendimento">Iniciar aconsulta agora?</h3>

        <p class="p-cartao"><a href="#" class="btn btn-primary botao-card" role="button" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar Consulta</a> 
       		 </div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Atenção</h4>
      </div>
      <div class="modal-body">
        <p>Antes de proseguir é nescessário cadastrar paciente. Deseja Continuar?&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        <button id="botao-salvar-acesso" name="botao-salvar-acesso-modal" type="submit" class="btn btn-success">Salvar</button>

         
      </div>
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
</div>
@endsection