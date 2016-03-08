@extends('app')

@section('body')

    <div class="container">

        <h2>Editar Usuario: {{$user->name}}</h2>
        <hr/>

        <form action="{{route('admin.user.update', $user->id)}}" method="POST">

            <div class="form-group">
                <label for="store_name">Nombre:</label>
                <input type="text" id="store_name" class="form-control" name="name" placeholder="nombre" value="{{$user->name}}" required/>
            </div>

            <div class="form-group">
                <label for="store_email">Email:</label>
                <input type="email" id="store_email" class="form-control" name="email" placeholder="email" value="{{$user->email}}" required/>
            </div>

            <div class="form-group">
                <label for="store_password">Password:</label>
                <input type="password" id="store_password" class="form-control" name="password" placeholder="password" required/>
            </div>

            <div class="form-group">
                <label for="store_role">Rol:</label>
                <select id="store_role" class="form-control" name="role_id">
                    <option value="1">Rol1</option>
                </select>
            </div>

            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="PUT"/>
            <input type="submit" value="editar usuario"/>

        </form>
    </div>

@endsection