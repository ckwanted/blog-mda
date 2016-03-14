@extends('app')

@section('content')

    <div class="container">

        <h2>Crear Usuario:</h2>
        <hr/>

        <form action="{{route('admin.users.store')}}" method="POST">

            <div class="form-group">
                <label for="store_name">Nombre:</label>
                <input type="text" id="store_name" class="form-control" name="name" placeholder="nombre" required/>
            </div>

            <div class="form-group">
                <label for="store_email">Email:</label>
                <input type="email" id="store_email" class="form-control" name="email" placeholder="email" required/>
            </div>

            <div class="form-group">
                <label for="store_password">Password:</label>
                <input type="password" id="store_password" class="form-control" name="password" placeholder="password" required/>
            </div>

            <div class="form-group">
                <label for="store_role">Rol:</label>
                <select id="store_role" class="form-control" name="role_id">
                    <option value="1">Editor</option>
                </select>
            </div>

            {!! csrf_field() !!}
            <input type="submit" value="crear usuario"/>

        </form>
    </div>

@endsection