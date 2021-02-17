@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-success"
            style="
    margin-bottom: 22px;
    background-color: rgba(183, 204, 151, 0.71);
    border: 4px solid rgba(212, 227, 193, 0.54);
    border-radius: 4px;
    box-shadow: 0 2px 2px rgba(198, 217, 167, 0.72);


            ">
                <div class="panel-heading">Área de <span style="color:blue">Exames Laboratoriais</span></div>

                <div class="panel-body">
                   
    <div class="row">
        <div class="panel-heading">Consulte aqui os  Exames  Laboratoriais <span style="color:green">Disponiveis</span></div>

    </div>
    <div class="row" style="
    display: -webkit-inline-box;
    display: -webkit-inline-box;
    margin-left: 95px;
    display: block;
">
@foreach($usuarios as $t)
<div class="form-group-col-md-12">
        <div class="col-sm-3" id="cartao"  style="
    width: 270px;
    height: 250px;
    margin-top: 25px;
">
            <div class="card" style="
    width: 242px;
    height: 252px;
        background-color: {{$t->cor_de_fundo}};
        color:white;
        margin-top: 5px;
           box-shadow: inset 1px 2px 30px -1px rgba(0, 0, 0, 0.56);
">
                <canvas class="header-bg" width="250" height="70" id="header-blur" style="    background-image: url(/imagens/misc/{{$t->avatar_fundo}});
                    background-size: cover;"></canvas>
                <div class="avatar">
                   <img src="/imagens/misc/{{$t->avatar}}">   
                </div>
                <div class="content">
                    <p>{{$t->nome_exame}}<br>
                      {{$t->sub_titulo}}</p>
                        
                    <p><a  href ="{{ route('ExameMedico.index')}}" role="button" class="btn btn-default">Acessar</a></p>
                </div>
            </div>
        </div>
        </div>

       @endforeach
      
    </div>
     {!! $usuarios->links()!!}
</div>


<img class="src-image" src="/imagens/avatar/1481598726.png">


               

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
               <script>
             

$( "[id=cartao]" ).hover(
  function() {
    $( this ).addClass( "animated infinite tada" );
  }, function() {
    $( this ).removeClass( "animated infinite tada" );
  }
);
   </script>
            </div>
        </div>
    </div>
</div>
@endsection
