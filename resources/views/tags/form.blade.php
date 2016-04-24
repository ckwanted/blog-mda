<div class="form-group">
    <label class="control-label col-md-2">Nombre</label>
    <div class="col-md-10">
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-10">
    	{!! Form::submit($button, ['class' => 'btn btn-primary']) !!}
    	{!! link_to('admin/tags', 'Cancelar', ['class' => 'btn btn-default']) !!}
    </div>
</div>