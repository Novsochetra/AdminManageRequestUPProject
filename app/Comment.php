<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function attachments() {
        return $this->hasMany('App\Attachment');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }
}
