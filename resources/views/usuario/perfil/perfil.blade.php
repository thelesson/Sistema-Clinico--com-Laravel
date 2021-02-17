@extends('layouts.app')
@include ('admin-partials.sidebar-vertical-usuario')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil do Usuário</div>

                <div class="panel-body">
                    <img src="/imagens/avatar/{{$user->avatar}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right:25px;">
                    <h2>{{$user->name}}</h2>
                    <form enctype="multipart/form-data" action="{{route('perfil.index')}}" method="POST">
                    <label>Atualizar imagem do perfil</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
