@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Área de <span style="color:gold">Consultas</span></div>

                <div class="panel-body">
                    Nesta página, será possivel ao usuário verificar todos os tipos de consultas disponiveis no sistema e o médico de cada tipo de consulta.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
