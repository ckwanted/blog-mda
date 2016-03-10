<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand">Blog Personal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
    @if(Auth::user() == null)
      <ul class="nav navbar-nav">
        <li><a href="{{ url('admin/articles') }}">Artículos</a></li>
        <li><a href="{{ url('admin/commensts') }}">Comentarios</a></li>
        <li><a href="{{ url('admin/users') }}">Usuarios</a></li>
        <li><a href="{{ url('admin/roles') }}">Roles</a></li>
        <li><a href="{{ url('admin/permissions') }}">Permisos</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
            <li><a><span class="label label-default">Usuario: Pepe</span></a></li>
            <li><a href="{{ url('/') }}" target="_blank">Ver Sitio</a></li>
            <li><a href="{{ url('auth/logout') }}">Logout</a></li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

