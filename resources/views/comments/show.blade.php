    <div class="row" id="view-comment">
        <div class="col-md-8 col-md-offset-1">
            <span class="label label-default">{{ $article->count_comments }} Comentarios</span>
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('comments.form')
                </div>
            </div>
        </div>
        <comments :article_id="{{ $article->id }}"></comments>
    </div>

    <template id="comments-template">
        <div class="row" v-for="comment in list">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-3">
                            <h5><span class="fa fa-user"></span> @{{ comment.username }}</h5>
                        </div>
                        <div class="col-md-9">

                            <h3><span class="fa fa-clock-o"></span>
                                <small>@{{ comment.created_at }}</small>
                            </h3>
                            <p>@{{ comment.body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

@section('scripts')
    <script src="{{ asset('js/vue.min.js') }}"></script>
    <script src="{{ asset('js/comment.js') }}"></script>
@endsection