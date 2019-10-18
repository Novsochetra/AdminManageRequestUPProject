<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $table = 'role_permission';
    protected $fillable = ['can_create', 'can_read', 'can_update', 'can_delete'];
    
    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function permission() {
        return $this->belongsTo('App\Permission');
    }
}
