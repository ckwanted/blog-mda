@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials.messages')
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Editar Usuario</h3>
                </div>
                <div class="panel-body">
                
                {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                    @include('users.form', ['button' => 'Actualizar'])

                {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>

@endsection