<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message', 'proposition_id', 'from_id', 'to_id','readed_at'];

    public function proposition()
    {
        return $this->belongsTo(Proposition::class);
    }

    public function userFrom()
    {
        return $this->belongsTo(User::class, 'from_id');
    }

    public function userTo()
    {
        return $this->belongsTo(User::class, 'to_id');
    }

    public function notifications()
    {
        return $this->morphMany('App\Notification', 'notifiable');
    }
}
