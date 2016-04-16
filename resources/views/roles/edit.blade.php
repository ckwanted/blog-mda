@extends('app')
@section('styles')
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet"/>
@stop
@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h4 class="section-heading">Editar Rol</h4>

            @include('partials.messages')
            {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id], 'id' => 'contactForm']) !!}

                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label for="slug">Slug</label>
                        {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Slug']) !!}
                    </div>
                </div>

                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('permission_list', 'Permisos:')!!}<br>
                    {!! Form::select('permission_list[]', $permissions, $role_permission, ['class' => 'form-control', 'multiple' => 'multiple']) !!}

                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('admin.roles.index') }}" class="btn btn-warning">Cancelar</a>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
