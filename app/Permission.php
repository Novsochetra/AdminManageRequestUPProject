<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';
    protected $fillable = ['name'];

    public function roles() {
        return $this->hasManyThrough('App\Role', 'App\RolePermission');
    }

}
