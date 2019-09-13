<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use Notifiable, HasApiTokens;

    protected $table = 'comments';

    protected $fillable = [
        'ticket_id', 
        'user_id',
        'content', 
        'created_at', 
        'updated_at'
    ];
    
    public function ticket()
    {
      return $this->belongsTo('App\Ticket');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    

}
