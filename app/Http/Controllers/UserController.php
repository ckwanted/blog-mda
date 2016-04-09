<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct() {
        
        $this->middleware('auth');
        $this->authorize('admin');
    }
    
    public function index()
    {
        $users = User::all();
        
        return view('users.index',compact('users'));
    }

    public function create()
    {
        $roles = Role::orderBy('name', 'asc')->lists('name', 'id');

        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
        ]);

        return redirect('admin/users/create')->with('message', 'Usuario añadido correctamente');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::orderBy('name', 'asc')->lists('name', 'id');

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/admin/users');
    }
}
