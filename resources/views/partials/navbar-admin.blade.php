<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand">Blog Personal</a>
    </div>

    @if(Auth::user())
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('admin/articles') }}">Artículos</a></li>
        <li><a href="{{ url('admin/commensts') }}">Comentarios</a></li>
        <li><a href="{{ url('admin/users') }}">Usuarios</a></li>
        <li><a href="{{ url('admin/roles') }}">Roles</a></li>
        <li><a href="{{ url('admin/permissions') }}">Permisos</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
            <li><a><span class="label label-default">Usuario: {{ Auth::user()->name }}</span></a></li>
            <li><a href="{{ url('/') }}" target="_blank">Ver Sitio</a></li>
            <li><a href="{{ url('admin/logout') }}">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    @endif
  </div><!-- /.container-fluid -->
</nav>

