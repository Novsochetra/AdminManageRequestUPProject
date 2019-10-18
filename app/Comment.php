<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = ['content'];

    public function attachments() {
        return $this->hasMany('App\Attachment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function ticket() {
        return $this->belongsTo('App\Ticket');
    }


}
