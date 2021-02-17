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
                <div class="panel-heading">Área de <span style="color:green">Exames Laboratoriais</span></div>

                <div class="panel-body">
                   
    <div class="row">
        

    </div>
    <div class="row" style="
    display: -webkit-inline-box;
    display: -webkit-inline-box;
    margin-left: 95px;
">
        <div class="col-sm-3" id="cartao"  style="
    width: 270px;
    height: 250px;
">
            <div class="card" style="
    width: 242px;
    height: 252px;
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="    background-image: url(http://cache2.asset-cache.net/xd/472436845.jpg?v=1&amp;c=IWSAsset&amp;k=2&amp;d=62CA815BFB1CE480F337F2115D47007BD1DB44E5599D888AAD6023B5C688A3344061EC98AAA55B5E);
                    background-size: cover;"></canvas>
                <div class="avatar">
                   <img src="/imagens/misc/exames_medico.jpg">   
                </div>
                <div class="content">
                    <p>Inclusão de Exames <br>
                       Cadastre novos exames laboratoriais no sistema</p>
                        
                    <p><a  href ="{{ route('ExameMedico.index')}}" role="button" class="btn btn-default">Acessar</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3" id="cartao" style="
    width: 270px;
    height: 250px;
">
            <div class="card" style="
    width: 242px;
    height: 252px;
">
                <canvas class="header-bg" width="250" height="70" id="header-blur"  style="    background-image: url('/imagens/misc/blur-01.jpg');
                    background-size: cover;"></canvas>
                <div class="avatar">
                      <img src="/imagens/misc/checklist.jpg">   
                </div>
                <div class="content">
                    <p>Lista de Exames  <br>
                       Consulte, edita ou exclua exames cadastrados no sistema</p>
                    <p><a  href ="{{ route('listaExameAdmin.index')}}" role="button" class="btn btn-default">Acessar</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3"  id="cartao" style="
    width: 270px;
    height: 250px;
">
            <div class="card" style="
    width: 242px;
    height: 252px;
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="    background-image: url('/imagens/misc/medical_esta2.jpg');
                    background-size: cover;"></canvas>
                <div class="avatar">
                      <img src="/imagens/misc/medical_esta.jpg">   
                </div>
                <div class="content">
                    <p>Estástisticas<br>
                       Consulte as estastisticas do exames disponiveis.
                    <p><button type="button" class="btn btn-default">Acessar</button></p>
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
