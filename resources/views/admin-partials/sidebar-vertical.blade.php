 
 @section('sidebar-vertical')

 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
           <!--  area destina ao nome do usuario,foto e status -->

           <div class="painel-do-usuario">
          <div class="pull-left image" >
            <img  src="/imagens/avatar/{{Auth::user()->avatar}}" class="img-circle" alt="Imagem do usuário" >
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
                       <a href="{{route('consulta.usuario.index')}}"><span class=" fa fa-book" aria-hidden="true"></span>
                      <span>Usuários</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('ListaPaciente.index')}}"><span class=" fa fa-bed" aria-hidden="true"></span>
                      <span>Pacientes</span>
                    </a>
                </li>
               
                <li>
                      <a href="{{route('exameHome.index')}}"><span class=" fa fa-calendar-check-o" aria-hidden="true"></span>
                      <span>Exames</span>
                    </a>
                </li>
                <li>
                <a href="{{route('servicoMedico.index')}}"><span class=" fa fa-user-md" aria-hidden="true"></span>
                      <span>Serviços Médicos</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class=" fa fa-briefcase" aria-hidden="true"></span>
                      <span>Profissionais da Saude</span>
                    </a>
                </li>
                 <li>
                    <a href="#"><span class="fa fa-calendar-check-o" aria-hidden="true"></span>
                      <span>Agenda</span>
                    </a>
                </li>
                <li>
                      <a href="{{route('consulta.medicamentos.index')}}"><span class=" fa fa-medkit" aria-hidden="true"></span>
                      <span>Medicamentos</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class=" fa fa-cog" aria-hidden="true"></span>
                      <span>Configurações</span>
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