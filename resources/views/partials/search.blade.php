<form action="{{url('articles/search/')}}" method="POST">
    {{csrf_field()}}
    <div id="search-div">
    <div class="col-xs-12 col-md-3 col-md-offset-8">
        <div class="input-group stylish-input-group">
            {!! Form::text('tag', null, ['class' =>'form-control','id' => 'tag', 'placeholder' => 'Search...']) !!}

            <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
        </div>
    </div></div>
</form>