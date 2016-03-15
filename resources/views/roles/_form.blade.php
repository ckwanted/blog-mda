
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug">
        </div>
    </div>

    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
        </div>
    </div>
    <h4>Permisos</h4>
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
            <li><span><input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}</span></li>
        @endforeach
    </ul>
    <div class="form-group">
        <input type="submit" name="Añadir" value="Añadir" class="btn btn-default">
        <a href="{{ route('admin.roles.index') }}" class="btn btn-warning">Cancelar</a>
    </div>