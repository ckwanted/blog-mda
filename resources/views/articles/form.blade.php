<div class="form-group">
    <label class="control-label col-md-2">Titulo</label>
    <div class="col-md-10">
    	{!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-2">Contenido</label>
    <div class="col-md-10">
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-10">
    	{!! Form::submit($button, ['class' => 'btn btn-primary']) !!}
    	{!! link_to('admin/articles', 'Cancelar', ['class' => 'btn btn-default']) !!}
    </div>
</div>