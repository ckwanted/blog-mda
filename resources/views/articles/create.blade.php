@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h4 class="section-heading">Añadir Artículo</h4>
            @include('partials.messages')
            {!! Form::open(array('route' => 'articles.store', 'id' => 'contactForm')) !!}
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="slug">Título</label>
                    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Título']) !!}
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="name">Contenido</label>
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body', 'placeholder' => 'Contenido']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('tag_list', 'Tags:')!!}<br>
                {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}

            </div>
            <div class="form-group">
                {!! Form::submit('Añadir', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('articles.index') }}" class="btn btn-warning">Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection