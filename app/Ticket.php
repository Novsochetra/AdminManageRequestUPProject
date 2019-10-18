<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    
    protected $table = 'tickets';

    protected $fillable = [
        'title', 'description'
    ];

    public function attachments() {
        return $this->hasMany('App\Attachment');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function status() {
        return $this->belongsTo('App\Status');
    }

    public function priority() {
        return $this->belongsTo('App\Priority');
    }

    public function requester() {
        return $this->hasOne('App\User', 'id', 'request_by');
    }

    public function solver() {
        return $this->hasOne('App\User', 'id', 'solve_by');
    }
    




}
