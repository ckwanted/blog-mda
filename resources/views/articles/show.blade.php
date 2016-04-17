@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h1>{{ $article->title }}</h1>
            <hr>
            <h3>Autor: <span class="lead"> {{ $article->user->name }}</span></h3>
            <small>{{ $article->published }}</small>

            <div class="text-justify">
                <img src="/img/articles/{{ $article->image }}" id="art-img" class="img-rounded col-xs-12 col-md-5">
                <p>
                    {{ $article->body }}
                </p>
            </div>

            <div class="well nt col-md-12" id="tags">
                @foreach( $article->tags as $tags)
                    #<span class="label label-success"><a href="#">{{ $tags->name }}</a></span>
                @endforeach
            </div>

        </div>

    </div>
    <hr>
    @include('comments.show')



@endsection