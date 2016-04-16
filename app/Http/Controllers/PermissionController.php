<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permission;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermissionController extends Controller {

	public function __construct() {
		
        $this->middleware('auth');
        $this->authorize('admin');
    }

    public function index() {

    	$permissions = Permission::all();

    	return view('permissions.index', compact('permissions'));
    }
}
