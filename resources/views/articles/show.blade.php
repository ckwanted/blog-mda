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
    <div class="row">
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your like button code -->
        <div class="col-md-offset-2">
            <div class="fb-like" data-href="http://www.desarrolloweb.com/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
        </div>
    </div>
    <hr>
    @include('comments.show')



@endsection