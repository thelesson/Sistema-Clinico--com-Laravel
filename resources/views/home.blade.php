@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
           <div class="panel panel-success" style="
    background-color: rgba(223, 240, 216, 0.34);
">
                <div class="panel-heading">Bem vindo <span style="color:blue">paciente03</span></div>

                <div class="panel-body">
                   
    <div class="row">
        <div class="panel-heading">Consulte nossos <span style="color:green">Serviços</span></div>

    </div>
   <div class="row" style="
    display: -webkit-inline-box;
    display: -webkit-inline-box;
    margin-left: 0px;
    display: block;
">
        <div class="col-sm-3 animated infinite pulse" id="cartao" style="
    width: 1030px;
    height: 250px;
    margin-bottom: 21px;
    padding-left: 0px;
">
            <div class="card" style="
    width: 1002.22222px;
    height: 252px;
    margin-bottom: 21px;
    background-color: rgba(80, 75, 67, 0.72);
    color: rgb(252, 251, 255);
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="
                    background-image: url(http://cache2.asset-cache.net/xd/472436845.jpg?v=1&amp;c=IWSAsset&amp;k=2&amp;d=62CA815BFB1CE480F337F2115D47007BD1DB44E5599D888AAD6023B5C688A3344061EC98AAA55B5E);
                    background-size: cover;
                    "></canvas>
                <div class="avatar">
                   <img src="/imagens/misc/exames_medico.jpg">   
                </div>
                <div class="content">
                    <p>Consulte nossos Serviçs Médicos<br>
                       Contamos com profissionais altamente qualificados, para atender a sua necessicade</p>
                        
                    <p><a href="http://localhost:8000/admin/exames/cadastro" role="button" class="btn btn-default">Acessar</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3" id="cartao" style="
    width: 664px;
    height: 250px;
    border-right-width: 10px;
">
            <div class="card" style="
    width: 635.22222px;
    height: 252px;
    margin-right: 10px;
    background-color: rgba(187, 204, 220, 0.86);
    color: #020b4d;
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="
                    background-image: url('/imagens/misc/blur-01.jpg');
                    background-size: cover;
                    /* color: #9e1c0d; */
                    "></canvas>
                <div class="avatar">
                      <img src="/imagens/misc/checklist.jpg">   
                </div>
                <div class="content">
                    <p>Exames e Procedimentos<br>
                       Consulte exames nossos exames disponiveis</p>
                    <p><a href="http://localhost:8000/exame" role="button" class="btn btn-default">Acessar</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3" id="cartao" style="
    width: 351px;
    height: 250px;
    margin-left: 0px;
    /* background-color: #318a6c; */
">
            <div class="card" style="
    width: 317.22222px;
    height: 252px;
    background-color: #020b4d;
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="    background-image: url('/imagens/misc/medical_esta2.jpg');
                    background-size: cover;"></canvas>
                <div class="avatar">
                      <img src="/imagens/misc/medical_esta.jpg">   
                </div>
                <div class="content">
                    <p>Estástisticas e Relatórios<br>
                       Acompanhe suas evoluções
                    </p><p><button type="button" class="btn btn-default">Acessar</button></p>
                </div>
            </div>
        </div>
          <div class="col-sm-3" id="cartao" style="
    width: 301px;
    height: 250px;
    margin-left: 0px;
    margin-top: 25px;
">
            <div class="card" style="
    width: 272.22222px;
    height: 252px;
    background-color: rgba(227, 1, 28, 0.96);
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="
                    background-image: url('http://cuidarebr.com.br/natal/wp-content/uploads/2016/03/medicamentos.jpg');
                    background-size: cover;
                    "></canvas>
                <div class="avatar">
                      <img src="http://www.norteandovoce.com.br/wp-content/uploads/2016/04/Campanha-de-arrecada%C3%A7%C3%A3o-de-medicamentos-em-Votuporanga-Norteando-Voc%C3%AA2.jpg">   
                </div>
                <div class="content">
                    <p>Medicamentos<br>Consulte informações sobre medicamentos precritos pelo seu médico</p><p><button type="button" class="btn btn-default">Acessar</button></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3" id="cartao" style="
    width: 707px;
    height: 250px;
    margin-left: 0px;
    margin-top: 25px;
">
            <div class="card" style="
    width: 679.22222px;
    height: 252px;
    background-color: #333333;
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="
                    background-image: url('https://michaelhyatt.com/wp-content/uploads/2009/12/iStock_000003401233Small.jpg');
                    background-size: cover;
                    "></canvas>
                <div class="avatar">
                      <img src="http://bestfriendtagquestions.com/wp-content/uploads/2014/06/Questions-Images-300x197.jpg">   
                </div>
                <div class="content">
                    <p>Perguntas e Respostas<br>Veja algumas das perguntas mais questionadas em nossos consultórios</p><p><button type="button" class="btn btn-default">Acessar</button></p>
                </div>
            </div>
        </div>
    </div>
</div>


<img class="src-image" src="/imagens/avatar/1481598726.png">

<img class="src-image" src="/imagens/avatar/1481643938.png">

<img class="src-image" src="/imagens/avatar/1481511727.png">
               

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
               <script>
             

$( "[id=cartao]" ).hover(
  function() {
    $( this ).addClass( "animated infinite pulse" );
  }, function() {
    $( this ).removeClass( "animated infinite pulse" );
  }
);
   </script>
            </div>
        </div>
    </div>
</div>
@endsection
