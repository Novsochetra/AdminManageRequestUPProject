<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Ticket extends Model
{
    use Notifiable, HasApiTokens;

    protected $table = 'tickets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'status', 'request_by', 'solve_by',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
