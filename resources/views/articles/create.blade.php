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

                <label>Tags:
                    <input type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#modalTag" value="añadir tag"/>
                </label>

                <select id="tag_list" class="form-control" name="tag_list[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                {!! Form::submit('Añadir', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('articles.index') }}" class="btn btn-warning">Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    @include('partials.new-tag')
@endsection

@section('scripts')
    <script>
        $(function() {

            $("#newTag").click(function() {

                var tag = $(this).parent().prev().find("input");
                var token = $("#contactForm").find("input").val();

                if(tag.val().length) {

                    $.ajax({
                        url      : '/tag',
                        headers  : {'X-CSRF-TOKEN' : token},
                        type     : 'POST',
                        datatype : 'json',
                        data     : {'tag' : tag.val()}
                    }).success(function(response) {

                        var msj = null;

                        if(response.ok != null) {
                            msj = $('<div class="alert alert-success" role="alert">Tag creado correctamente ...</div>');
                            tag.val("");
                            $("#tag_list").append("<option value="+response.ok.id+">"+response.ok.name+"</option>");
                        }
                        else {
                            msj = $('<div class="alert alert-danger" role="alert">El tag ya existe ...</div>');
                        }
                        tag.before(msj);
                        msj.delay(3000).fadeOut(300);

                    });

                }

            });

        });
    </script>
@endsection