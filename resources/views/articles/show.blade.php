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

                @foreach( $article->tags as $tag)
                    <form action="{{url('articles/search')}}" method="POST">
                        {{csrf_field()}}
                                <button type="submit" name='tag' value='{{$tag->name}}' class="label label-info tag"># {{ $tag->name }}</button>
                    </form>
                @endforeach

            </div>

        </div>

    </div>
    <hr>
    @include('comments.show')



@endsection