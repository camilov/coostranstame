
<div class="container">
 <nav class="navbar navbar-default navbar-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    <!--  @if(Auth::user())  -->
         
 
       
        <li><a href="#">Inicio </a></li>
        <li><a href="{{route('users.index')}}">Usuario</a></li>
        <li><a href="{{route('tercero.index')}}">Terceros</a></li>
        <li><a href="{{route('zona.index')}}">Zonas</a></li>
        <li><a href="{{route('transportador.index')}}">Transportador </a></li>
        <li><a href="{{route('guia.index')}}">Guias manual</a></li>
        <li><a href="{{route('asignacion.index')}}">Asignacion guias</a></li>
        <li><a href="{{route('cuadre.create')}}">Cuadre principal</a></li>
        <li><a href="#">Servicio al cliente</a></li>
        <li><a href="#">Reportes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toogle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >{{Auth::user()->name}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--<li><a href="route('auth.logout')">Salir</a></li>-->
            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                              Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          </ul>
          
        </li>
        
      </ul>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

     <section class="section-admin">
          
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">@yield('title')</h3>
            </div>
            <div class="panel-body">
               
                
                @yield('content')
            </div>
        </div>
           
       </section>
   <!--    @endif-->
</div>
 
        
      