@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <form action="">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Por favor escriba su nombre.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Por favor escriba el comentario."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection