 
 @section('sidebar-vertical')
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
               <!--  area destina ao nome do usuario,foto e status -->

           <div class="painel-do-usuario">
          <div class="pull-left image" >
            <img src="/imagens/avatar/{{Auth::user()->avatar}}" class="img-circle" alt="Imagem do usuário" >
          </div>
          <div class="informacao-esquerda">
 @if (Auth::guest())
            <p>admin@admin.com</p>
            <a href="#" style="color:#c18a8a;"><i class="fa fa-circle text-success"style="color:red;"></i>Desconectado</a>
            @else
            
            <p>{{$nomeReduzido= str_limit(Auth::user()->name, 20) }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            @endif
          </div>
        </div>
        <!--    fim da area  -->
                <li class="sidebar-brand">
                    <a href="#"><span class=" fa fa-dashboard" aria-hidden="true"></span>
                      <span>Administração</span>
                    </a>

                </li>
                 <li>
                    <a href="{{route('perfil.index')}}"><span class=" fa fa-user" aria-hidden="true"></span>
                      <span>Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('consultaUsuario.index')}}"><span class=" fa fa-stethoscope" aria-hidden="true"></span>
                      <span>Consultas</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('exame.index')}}"><span class=" fa fa-medkit" aria-hidden="true"></span>
                      <span>Exames</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('agenda.index')}}"><span class=" fa fa-calendar-check-o" aria-hidden="true"></span>
                      <span>Atendimento Agendado</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class=" fa fa-book" aria-hidden="true"></span>
                      <span>Histórico</span>
                    </a>
                </li>
               
            </ul>
        </div>
         <!--  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">mostrar</a> -->
           
     <script>
   /* $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });*/
    </script>
    
        @endsection