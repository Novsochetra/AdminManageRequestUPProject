<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use Notifiable;
    protected $table = 'status';

    protected $fillable = [
        'name', 'color'
    ];

    public function tickets() {
        return $this->hasMany('App\Ticket');
    }
}
