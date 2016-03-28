<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog MDA</title>
        @include('partials.styles')
        <style>
        .center {
            text-align: center
        }
        </style>
    </head>
</html>

<div class="container">
    <div class="well well-middle">
        <h3 class="text-danger center">Opss!! No esta autorizado a ver esta página</h3>
        <a class="btn btn-default" href="{{ url('/') }}" role="button">Atrás</a>
    </div>
</div>