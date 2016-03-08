<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PermissionTableSeeder extends Seeder
{

	/**
     * Formatea el campo slug de los permisos a create.user
     *
     * @return String
     */
	private function formatSlug($table, $action) {

    	return $action.'.'.str_singular($table);
    }

    /**
     * Formatea el campo slug de los permisos a Create User
     *
     * @return String
     */
    private function formatName($table, $action) {
    	
    	return studly_case($action).' '.studly_case(str_singular($table));
    }

    /**
     * Agrega un permiso a la BD
     *
     * @return void
     */
    private function addPermission($table, $value)
    {
    	DB::table('permissions')->insert([
			'slug' => $this->formatSlug($table, $value), 
			'name' => $this->formatName($table, $value), 
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$array_permissions = config('permissions.tables');

        foreach ($array_permissions as $table => $action) {
    		foreach ($action as $value) {
	    		$this->addPermission($table, $value);
    		}
    	}
    }
}
