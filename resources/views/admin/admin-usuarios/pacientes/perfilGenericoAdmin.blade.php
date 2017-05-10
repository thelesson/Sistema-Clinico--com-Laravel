@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Perfil do Usuário</div>
           
                <div class="panel-body">
                 <div class="form-group form-usuario col-md-12">
                   
                    <img src="/imagens/avatar/{{$avatar}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px;">
                    <h2>{{$name}}</h2>
                   
                    <label>matricula:<small>{{$matricula}}</small></label><br>
                    <label>Idade:<small>25 anos e 4 meses</small></label><br>
                    <label>Primeira Consulta em:<small>12/12/2016</small></label>
<br>
                    <label>Convenio:<small> Unimed - Plano Diamante</small></label><br>
                    <div class="col-md-2" style="
    padding-right: 144px;
"></div>
                     <div class="col-md-5">
  <label>Status:<small style="color: #4ae20e;"> Ativo no Sistema</small></label>
  <label style="float:right;">Óbito:<small> Não</small></label>
  </div>
                    </div>
                    <div class="form-group form-usuario col-md-12" style="
    height: 50px;
    /* background-color: aliceblue; */
">
	                <hr>    

            <h3 style="
    text-align: center;
    background-color: rgba(198, 217, 167, 0.45);
">Dados Pessoais</h3>
            <hr>
            </div>
            <div class="form-group form-usuario col-md-12">
	                <hr>    

            <h4 style="
    background-color: rgba(229, 238, 215, 0.4);
    width: 180px;
">Dados Gerais</h4>
            </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:42px;">
             <label>Nasceu em: <small>09 de setembro de 1991</small></label>
             </div>
              <div class="col-md-5">
             <label>sexo: <small>masculino</small></label>
             </div>
             </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:42px;">
             <label>Como conheceu: <small>Encaminhamento Médico</small></label>
             </div>
              <div class="col-md-5">
             <label>Observação: <small>Encaminhado pelo Dr° Oliveira </small></label>
             </div>
             </div>
              <div class="form-group form-usuario col-md-12">
	                <hr>    

            <h4 style="
    background-color: rgba(229, 238, 215, 0.4);
    width: 180px;
">Telefones</h4>
            </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:42px;">
             <label>Residencial: <small>021 37154-586</small></label>
             </div>
              <div class="col-md-5">
             <label>Celular: <small>021 9 7259-3464</small></label>
             </div>
             </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:42px;">
             <label>Contato: <small>021 3715-4754 (Igor Rangel)</small></label>
             </div>
              <div class="col-md-5">
             <label>Comercial: <small>021 2220-2319 </small></label>
             </div>
             </div>
              <div class="form-group form-usuario col-md-12">
	                <hr>    

            <h4 style="
    background-color: rgba(229, 238, 215, 0.4);
    width: 180px;
">Enderecos</h4>

<div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Cep: <small>24457-120</small></label>
             </div>
              
             </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Endereço: <small>Rua Joaquim Bessa</small></label>
             </div>
              <div class="col-md-5">
             <label>Número: <small>148</small></label>
             </div>
             </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Complemento: <small>Condominio Trindade - Rua 06, cs 27</small></label>
             </div>
              <div class="col-md-5">
             <label>Bairro: <small>Trindade</small></label>
             </div>
             </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Estado: <small>Rio de Janeiro - Rj</small></label>
             </div>
              <div class="col-md-5">
             <label>Cidade: <small>São Gonçalo</small></label>
             </div>
             </div>
<div class="form-group form-usuario col-md-12" style="
    height: 50px;
    /* background-color: aliceblue; */
">
	                <hr>    

            <h3 style="
    text-align: center;
    background-color: rgba(198, 217, 167, 0.45);
">Dados Complementares</h3>
            <hr>
            </div>
            <div class="form-group form-usuario col-md-12">
	                <hr>    

            <h4 style="
    background-color: rgba(229, 238, 215, 0.4);
    width: 180px;
">Informações Complementares</h4>
            </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Naturalidade: <small>Macaé -Rj</small></label>
             </div>
              <div class="col-md-5">
             <label>Nacionalidade: <small>Brasileira</small></label>
             </div>
             </div>
              <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Cor: <small>Branco(a)</small></label>
             </div>
              <div class="col-md-5">
             <label>Estado Civil: <small>Solteiro(a)</small></label>
             </div>
             </div>
            </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
             <div class="col-md-5" style="padding-left:42px;">
             <label>Cpf: <small>141.439.327-09</small></label>
             </div>
               
              <div class="col-md-5">
             <label>Rg: <small>22.386.826-6</small></label>
             </div>
             </div>
              <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
             <div class="col-md-5" style="padding-left:42px;">
             <label>Escolaridade: <small>Ensino Superior</small></label>
             </div>
               
              <div class="col-md-5">
             <label>Profissão: <small>Militar</small></label>
             </div>
             </div>

             <div class="form-group form-usuario col-md-12" style="
    height: 50px;
    /* background-color: aliceblue; */
">
	                <hr>    

            <h3 style="
    text-align: center;
    background-color: rgba(198, 217, 167, 0.45);
">Dados do Convênio</h3>
            <hr>
            </div>
             <div class="form-group form-usuario col-md-12">
	                <hr>    

            <h4 style="
    background-color: rgba(229, 238, 215, 0.4);
    width: 180px;
">Convênio</h4>
            </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Convênio: <small>Unimed</small></label>
             </div>
              <div class="col-md-5">
             <label>Plano: <small>Diamante</small></label>
             </div>
             </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Numero da Carteirinha: <small>022.2016-99</small></label>
             </div>
              <div class="col-md-5">
             <label>Validade: <small>Válido até 28 de Janeiro de 2017</small></label>
             </div>
             </div>
             <div class="form-group form-usuario col-md-12">
             <div class="col-md-2"></div>
               <div class="col-md-5" style="padding-left:32px;">
             <label>Acomodação: <small>Leito</small></label>
             </div>
              
             </div>
            </div>
             </div>
            
            </div>
                </div>
            </div>
       
@endsection
