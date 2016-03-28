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
    return "Página en construccion";
});

Route::group(['prefix' => 'admin'], function () {

	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');
    Route::resource('roles','RoleController');
	Route::resource('permissions','PermissionController', ['only' => ['index', 'edit', 'update']]);
    Route::resource('users','UserController');

});

