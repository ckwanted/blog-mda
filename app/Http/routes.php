<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	/*$data_config = config('permissions.tables');

    	foreach ($data_config as $table => $action) {
    		foreach ($action as $value) {
    			echo "\n".$value.'.'.str_singular($table);
    		}
    		
    	}*/
    return view('app');
});
Route::resource('roles','RoleController');
Route::resource('permissions','PermissionController', ['only' => ['index', 'edit', 'update']]);