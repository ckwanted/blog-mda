@extends('app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('content')

 @if ($tag == null)
        No se han encontrado resultados para la búsqueda
    @else
        <table id="data_table" class="table table-hover" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Fecha de Publicacion</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tag->articles as $article)
                <tr>
                    <td><h4><a href="{{ url('articles/show/'. $article->id ) }}">
                        {{ $article->title }}</a></h4></td>
                    <td>{{ $article->user->name }}</td>
                    <td>{{ $article->created_at }}</td>

                </tr>
            @endforeach

            </tbody>
        </table>

    @endif
@endsection
{{--

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#data_table').DataTable();
        });
    </script>

@endsection--}}
