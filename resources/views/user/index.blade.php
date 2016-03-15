@extends('app')

@section('content')
    <table class="table-responsive table">
        <head>
            <th>Nombre</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </head>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form action="{{route('admin.users.destroy', $user->id)}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="submit" class="btn btn-danger" value="eliminar"/>
                    </form>
                </td>
                <td>
                    <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary">editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection