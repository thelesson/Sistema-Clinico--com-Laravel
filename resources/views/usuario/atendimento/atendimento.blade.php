@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Área de <span style="color:lime">Atendimento agendado</span></div>

                <div class="panel-body">
                    Nesta página, será possivel ao usuário verificar a data disponivel para <span style ="color:lime">atendimento, consulta clinica ou realização de exames.</span><br/>
                    Foto do Exemplo da página:
                    <img src="/imagens/img-agenda/modelo-agendamento-proposta.png"  style="max-width: 100%;">

                   <br/><br/>  Modal Proposto para agendamento:<br/><br/> 
                     <img src="/imagens/img-agenda/modelo-modal-agendamento-proposta.png">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
