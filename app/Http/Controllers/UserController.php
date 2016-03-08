<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        dd("index");
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        dd("usuario creado correctamente ...");
    }

    public function show($id)
    {
        dd("Show $id");
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();
        dd("usuario editado correctamente ...");
    }

    public function destroy($id)
    {
        //
    }
}
