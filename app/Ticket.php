<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function attachments() {
        return $this->hasMany('App\Attachment');
    }

    public function status() {
        $this->belongsTo('App\Status');
    }

    public function priority() {
        return $this->belongsTo('App\Priority');
    }




}
