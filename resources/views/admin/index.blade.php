@extends('layouts.app')
@include ('admin-partials.sidebar-vertical')
@section('content')
<div class="container" id="home-admin">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default" id="painel-admin-default">
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <div class="panel-body" id="painel-admin">
                <div class="row">
                  
                
                  <div class="col-md-2">
                    <div class="row" id="linha-admin">
                            <span class=" fa fa-users" aria-hidden="true"></span>
                            <span>Total de Usuários</span></div>
                    <div class="row" id="linha-admin"><h1 id="linha-admin-h1">{{$total_usuarios}} </h1></div>
                    <div class="row" id="linha-admin"><h3 id="linha-admin-h3"><span class=" fa fa-angle-double-up animated infinite tada " aria-hidden="true">+17</span> no ultimo mes</h3></div>
                  </div>
                  <div class="col-md-2">
                    <div class="row " id="linha-admin">
                            <span class=" fa fa-user" aria-hidden="true"></span>
                            <span>Total de Pacientes</span></div>
                    <div class="row" id="linha-admin"><h1 id="linha-admin-h1">{{$total_pacientes}} </h1></div>
                    <div class="row " id="linha-admin"><h3 id="linha-admin-h3"><span class=" fa fa-angle-double-up animated infinite tada " aria-hidden="true">+12</span> na ultima semana</h3></div>
                  </div>
                    <div class="col-md-2">
                    <div class="row" id="linha-admin">
                            <span class="fa fa-user-secret" aria-hidden="true"></span>
                            <span>Administradores</span></div>
                    <div class="row" id="linha-admin"><h1 id="linha-admin-h1">{{$total_admin}} </h1></div>
                    <div class="row" id="linha-admin"><h3 id="linha-admin-h3" style="color:black;"> <span class=" fa fa-circle-o animated infinite tada" style="color:red;"></span> Há mais de um mes</h3></div>
                  </div>
                  <div class="col-md-2">

                    <div class="row" id="linha-admin">
                    
                            <span class=" fa fa-user-md" aria-hidden="true"></span>
                            <span>Funcionários</span></div>
                    <div class="row" id="linha-admin"><h1 id="linha-admin-h1">10 </h1></div>
                    <div class="row" id="linha-admin"><h3 id="linha-admin-h3"><span class=" fa fa-angle-double-up animated infinite tada " aria-hidden="true">>+5</span> há 3 semanas</h3></div>
                  </div>
                  <div class="col-md-4" style="
    background-color: rgba(198, 217, 167, 0.61);
    padding-bottom: 15px;
">
                    <div class="row" id="linha-admin" >
                          <!--   <span class=" fa fa-user" aria-hidden="true"></span> -->
                            <h1 class="  " style="text-align:center">Atendimento</h1></div>
                            <div class=" animated  shake" id="time"></div>

                    <div class="row" id="linha-admin" >
                     <div class="col-md-5">
                         <h1 id="linha-admin-h1">10</h1>
                          <div class="row" id="linha-admin"><h3 id="linha-admin-h3"><span>+3</span>consultas realizadas hoje</h3></div>
                     </div>
                     <div class="col-md-7" id="comp-marquee">
                     <div class="row marquee " id="linha-admin" ><h3  id="linha-admin-h3"><span class="fa fa-plus-circle  animated infinite tada"> 34</span> Consultas previstas agendadas</h3><h3 id="linha-admin-h3"><span class="fa fa-arrow-circle-up  animated infinite pulse">  7 Pacientes</span>  aguardando atendimento</h3><h3 id="linha-admin-h3"><span class="fa fa-clock-o animated infinite pulse" style="color:rgba(179, 179, 5, 0.8);"> 25 minutos</span> é o tempo médio de atendimento</h3><h3 id="linha-admin-h3"><span class="fa fa-stethoscope animated infinite pulse"> 1</span> Exame(s) solicitado(s) hoje</h3><h3 id="linha-admin-h3"><span class="fa fa-medkit animated infinite pulse"> 3</span> Medicamento(s) prescrito hoje</h3>
                     <h3 id="linha-admin-h3"><span class="fa fa-angle-double-down animated infinite pulse" style="color:red;"> 6</span> Pacientes faltaram/cancelaram consulta hoje</h3></div>
                     
                         
                     </div>
                     
   
                   
                  </div>
                  <div class="row" id="linha-admin">
                          <div class="alert alert-success" role="alert" style="
    margin-top: 6px;
">
  <strong>Próximo Atendimento</strong> inicia-se em 30 minutos 
</div><button type="button" class="btn btn-secondary btn-sm" style="
    width: 328px; background-color: #20895e;color:white;
"><span class="fa fa-plus-circle">Detalhes</span></button>
                     </div>
                 
<script>
$( "[id=linha-admin-h1]" ).hover(
  function() {
    $( this ).addClass( "animated infinite shake" );
  }, function() {
    $( this ).removeClass( "animated infinite shake" );
  }
);
   </script>
               

                </div>
                <div class="col-md-8">
                    
                </div>
                    

                </div>
                <div class="row"></br><h1>Atividades Recentes</h1></br></div>
                <div class="row">
                    <div class="table-responsive">
                <table class="table table-hover">
                  
                  <tbody>
                    <tr>
                      <td><i class="pull-right fa fa-eye"></i> Hoje, 09:12 - <span class=" fa fa-plus animated infinite pulse" style="color: green;">Adicionado </span> Paciente( Fulano Beltrano Jr ) ao sistema.</td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-eye"></i> Hoje, 12:23 - <span class=" fa fa-plus animated infinite pulse" style="color: green;">Adicionado </span> novo Medicamento( Dipirona) adicionado ao sistema </td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-eye"></i> Ontem, 22:20 -<span class=" fa fa-pencil animated infinite pulse" style="color: blue;">Alterado </span> nome do usuário: "Dr° Darlan COunnto", para: "Dr° Darlan S. Couto".</td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-eye"></i> Ontem - <span class="fa fa-plus animated infinite pulse" style="color: green;">Adicionado</span>  novo serviço médico( Cardiologia)  ao sistema</td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-eye"></i> 2 Dias Atrás - <span class=" fa fa-trash-o animated infinite pulse" style="color: red;">Excluido</span> Exame(Urina) do sistema</td>
                    </tr>
                    <tr>
                      <td><i class="pull-right fa fa-eye"></i> 2 Dias Atrás -<span class=" fa fa-plus animated infinite pulse" style="color: green;">Adicionado</span> Exame(Urina) no sistema</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                </div>
            </div>
        </div>
    </div>

        <script>
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
    </script>
</div>
@endsection


