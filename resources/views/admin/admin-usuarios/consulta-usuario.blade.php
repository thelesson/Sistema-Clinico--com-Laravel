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
                <div class="panel-heading">Usuários Cadastrados no sistema</div>
 <ol class="breadcrumb panel-heading">
                      <li><a href="{{route('consulta.usuario.index')}}">Usuários</a></li>
                      <li class="active">Consultar</li>
                   </ol>
                <div class="panel-body">
                @if(Session::has('mensagem_sucesso_delete_admin'))
                  <div class="alert alert-success">{{Session::get('mensagem_sucesso_delete_admin')}}</div>
                  
                    @elseif(Session::has('mensagem_erro_delete_admin'))
                  <div class="alert alert-success">{{Session::get('mensagem_erro_delete_admin')}}</div>
                    @elseif(Session::has('mensagem_sucesso_delete_user'))
                  <div class="alert alert-success">{{Session::get('mensagem_sucesso_delete_user')}}</div>
                  @elseif(Session::has('mensagem_erro_delete_user'))
                  <div class="alert alert-success">{{Session::get('mensagem_erro_delete_user')}}</div>
                  @else
                    <span></span>
                  @endif
  <div class="grupo-topo-formulario">                
<a class="btn btn-primary" href="{{route('adiciona.usuario.index')}}">Adicionar</a>


<div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Filtrar por ...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Ir!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>
  </br><br/>

                   <table class="table lista-user">

  <thead class="thead-default">
    <tr>
      <th>Ação</th>
      <th>#</th>
      <th>Matricula</th>
      <th>Avatar</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Tipo</th>
      <th>Função</th>
     
     
    </tr>
  </thead>
  <tbody>

           @foreach ($admins as $user2)
              <tr  class="lista" id="dados{{$user2->id}}">
          <td>
  

                        
                        <div class="material-switch pull-right">
                            <input id="del{{$user2->id}}" name="del{{$user2->id}}" type="checkbox"/>
                            <label for="del{{$user2->id}}" class="label-danger"></label>
                        </div>
            
</td>
      <td scope="row">{{$conta++}}</td>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <td>{{$user2->id }}</td>
      <td style="width: 73px;
    padding-right: 0px;"><img src="/imagens/avatar/{{$user2->avatar }}" style="width: 100%;
             max-width: 45px;
             height: auto;
             border-radius: 50%;"></td>
      <td>{{$nomeusuario= str_limit($user2->name, 20) }}</td>
      <td>{{$user2->email }}</td>
       <td style="width: 150px;
    padding-right: 0px;">{{$usuario_tipo_adm}}</td>
      <td>
          <a class="btn btn-info" href="{{ route('detalhesAdmin.index', $user2->id) }}">Detalhes</a>
          <a class="btn btn-default" href="#">Editar</a>
          <a class="btn btn-danger" href="{{ route('deletarUsuarios.index', $user2->id) }}"><i class="fa fa-trash-o"></i></a>

      </td>

    </tr>
     
   <script type="text/javascript">
$(document).ready(function(){
  
  /* ao clicar na div com id="box" executa a função */
  $("#del{{$user2->id}}").bind('change',function(){
    if( $("#del{{$user2->id}}").is(':checked') ){
 $("#dados{{$user2->id}}").css("background","rgba(191, 83, 41, 0.51)");
  $("#table-delete").css("visibility","visible");
    } else {
       $("#dados{{$user2->id}}").css("background","rgba(183, 204, 151, 0.71)");
        $("#table-delete").css("visibility","hidden");
    }
  
   });

 
    
  });
  

</script>
    @endforeach
<script type="text/javascript">
$(document).ready(function teste(){
  
  /* ao clicar na div com id="box" executa a função */

           if ($("input[name|='dados']").prop("checked")==false){
 
          $("#table-delete").css("visibility","hidden");
        }
      
      
  
   });

    
  

</script>
    @foreach ($usuarios as $user)
   
    <tr  class="lista" id="dados{{$user->id}}">
     <td>
   <div class="material-switch pull-right">
      <input id="del{{$user->id}}" name="del{{$user->id}}" type="checkbox"/>
        <label for="del{{$user->id}}" class="label-danger"></label>
      </div>
            
</td>
      <th scope="row">{{$conta++}}</th>
      <td>{{$user->matriculaPaciente }}</td>
       <td style="width: 73px;
    padding-right: 0px;"><img src="/imagens/avatar/{{$user->avatar }}" style="width: 100%;
             max-width: 45px;
             height: auto;
             border-radius: 50%;"></td>
      <td>{{$nomeusuario= str_limit($user->name, 20) }}</td>
      <td>{{$user->email }}</td>
      <td>{{$usuario_tipo_user}}</td>
      <td>
          <a class="btn btn-info" href="{{ route('detalhesPaciente.index', $user->id) }}">Detalhes</a>
          <a class="btn btn-default" href="#">Editar</a>
          <a class="btn btn-danger" href="{{ route('deletarUsuarios.index', $user->id) }}""><i class="fa fa-trash-o"></i></a>

      </td>

    </tr>
    
   <script type="text/javascript">
$(document).ready(function(){
  
  /* ao clicar na div com id="box" executa a função */
  $("#del{{$user->id}}").bind('change',function(){
    if( $("#del{{$user->id}}").is(':checked') ){
 $("#dados{{$user->id}}").css("background","rgba(191, 83, 41, 0.51)");
  $("#table-delete").css("visibility","visible");
    }


     else {
      
      $("#dados{{$user->id}}").css("background","rgba(183, 204, 151, 0.71)");
 
    }

  
   });

    
   
    
  });
  

</script>

    @endforeach
   
 
  </tbody>
  
</table>
<table class="d animated  tada " id="table-delete" style="
    width: 100%;
    
">
  <thead>
    <tr>
      <th align="center" valign="middle" style="text-align:center!important;">Deletar todos os elementos selecionados?</th>
    </tr>
  </thead>
  <tbody> 
    <tr>
     <td align="center" valign="middle"> <a class="btn btn-danger x" style="width: 291px;" href="http://localhost:8000/admin/consulta/usuario/8"><i class="fa fa-trash-o">Deletar</i></a>
     </td>
    </tr>
  </tbody>
  </table>
   
<div class="paginacao" align="center">
{!! $usuarios->links()!!}

</div>

</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection