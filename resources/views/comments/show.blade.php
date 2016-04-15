@extends('app')

@section('content')

    <div class="row" id="view-comment">
        <div class="col-md-8 col-md-offset-1">
            <span class="label label-default">8 Comentarios</span>
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('comments.form')
                </div>
            </div>
        </div>
    </div>

    <comments></comments>

    <template id="comments-template">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-3">
                            <h5><span class="fa fa-user"></span> Mariano Rajoy</h5>
                        </div>
                        <div class="col-md-9">

                            <h3><span class="fa fa-clock-o"></span>
                                <small>Hace 5 minutos</small>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci culpa cum debitis
                                dignissimos distinctio eaque eum expedita incidunt ipsum, iusto, laboriosam maxime
                                nam, non provident repellat sed suscipit tempora?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

@endsection

@section('scripts')
    <script src="{{ asset('js/comment.js') }}"></script>
@endsection