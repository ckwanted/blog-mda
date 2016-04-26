@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h4 class="section-heading">Añadir Artículo</h4>
            @include('partials.messages')
            {!! Form::open(array('route' => 'admin.articles.store', 'id' => 'contactForm', 'enctype'=> 'multipart/form-data')) !!}
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="title">Título</label>
                    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Título', 'required']) !!}
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="name">Contenido</label>
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body', 'placeholder' => 'Contenido', 'required']) !!}
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12">
                    <label for="file">Imagen:</label>
                    <input type="file" name="file" required/>
                </div>
            </div>
            <div class="form-group">

                <label>Tags:</label>

                <select id="tag_list" class="form-control" name="tag_list[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                {!! Form::submit('Añadir', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.articles.index') }}" class="btn btn-warning">Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    @include('partials.new-tag')
@endsection
