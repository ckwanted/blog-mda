@extends('app')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($articles as $article)
            <div class="post-preview">
                <a href="{{ url('articles/show/'.$article->id) }}">
                    <h2 class="post-title">
                        {{ $article->title }}
                    </h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="/img/articles/{{ $article->image }}" class="img-responsive" alt="Responsive image">
                        </div>
                    </div></br>
                </a>
                    <h2>
                        <small>{{ $article->summary }}</small>
                    </h2>
                <p class="post-meta">Publicado por
                    <a href="#">{{ $article->user->name }}</a>
                    {{ $article->published }}
                    <span class="fa fa-comment pull-right label label-default"> {{ $article->count_comments }} Comentarios</span>
                </p>
            </div>
            <hr>
            @endforeach

        </div>
    </div>

@endsection