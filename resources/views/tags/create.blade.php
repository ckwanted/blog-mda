@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials.messages')
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Tag</h3>
                </div>
                <div class="panel-body">
                
                {!! Form::open(['url' => 'admin/tags', 'class' => 'form-horizontal']) !!}

                    @include('tags.form', ['button' => 'Agregar'])

                {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>

@endsection