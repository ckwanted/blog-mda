@extends('app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
<<<<<<< HEAD
                    <h3 class="panel-title">Lista de Roles</h3>
                </div>
                <div class="panel-body">
                    <table table id="data_table" class="table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Slug</th>
                            <th>Nombre</th>
=======
                    <h3 class="panel-title">Lista de roles</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ url('admin/roles/create') }}"
                    >
                        <button class="btn-default" type="submit">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>

                    <table id="data_table" class="table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Permiso</th>
>>>>>>> b30506c6231ac9c5451b13335ea60e9d3d49090b
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
<<<<<<< HEAD
                                <td>{{ $role->slug }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    {{--<div class="btn-group">
                                        <a href="{{ url('admin/permissions/'. $permission->id . '/edit') }}" class="btn btn-default">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                    </div>--}}
=======
                                <td>{{ $role->name }}</td>
                                <td>
                                @foreach($role->permissions as $permission)
                                    <li>{{ $permission->name }}</li>
                                @endforeach
                                </td>
                                <td>

                                    <a href="{{ url('admin/roles/'. $role->id . '/edit') }}"
                                    >
                                        <button class="btn-primary" type="submit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </a>
                                    <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST"
                                          style="display: inline-block">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <button class="btn-danger" type="submit">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
>>>>>>> b30506c6231ac9c5451b13335ea60e9d3d49090b
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
<<<<<<< HEAD
        $(document).ready(function() {
            $('#data_table').DataTable();
        } );
=======
        $(document).ready(function () {
            $('#data_table').DataTable();
        });
>>>>>>> b30506c6231ac9c5451b13335ea60e9d3d49090b
    </script>

@endsection