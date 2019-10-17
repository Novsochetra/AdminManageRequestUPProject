<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function ticket() {
        return $this->belongsTo('App\Ticket');
    }

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }
}
