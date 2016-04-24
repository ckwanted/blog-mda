@extends('app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <div class="row">
        @include('partials.messages')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Lista de etiquetas</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('admin/tags/create') }}">
                        <button class="btn-default" type="submit">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>

                    <table id="data_table" class="table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->name }}</td>
                                <td>

                                    <a href="{{ url('admin/tags/'. $tag->id . '/edit') }}"
                                    >
                                        <button class="btn-primary" type="submit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </a>
                                    <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST"
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
        $(document).ready(function () {
            $('#data_table').DataTable();
        });
    </script>

@endsection