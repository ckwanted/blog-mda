@extends('app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de Comentarios</h3>
                </div>
                <div class="panel-body">
                    <table id="data_table" class="table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Fecha de Publicación</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->username }}</td>
                                <td>{{ $comment->body }}</td>
                                <td>{{ $comment->created_at }}</td>
                                <td>
                                    <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST"
                                          style="display: inline-block">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <button class="btn-danger" type="submit">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data_table').DataTable();
        } );
    </script>

@endsection