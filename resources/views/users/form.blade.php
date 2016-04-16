<div class="form-group">
    <label class="control-label col-md-2">Nombre</label>
    <div class="col-md-10">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">Correo</label>
    <div class="col-md-10">
    	{!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">Contraseña</label>
    <div class="col-md-10">
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">Rol</label>
    <div class="col-md-10">
        {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-10">
    	{!! Form::submit($button, ['class' => 'btn btn-primary']) !!}
    	{!! link_to('admin/users', 'Cancelar', ['class' => 'btn btn-default']) !!}
    </div>
</div>