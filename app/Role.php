<?php

namespace App;
use App\Permission;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable=['slug', 'name'];

    public function permissions() {

        return $this->belongsToMany(Permission::class);
    }
    
    public function users() {

        return $this->hasMany(User::class);
    }

}
