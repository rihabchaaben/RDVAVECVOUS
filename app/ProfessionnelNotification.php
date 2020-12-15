<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionnelNotification extends Model
{
    protected $fillable = ['notifiable_id', 'notifiable_type', 'user_id'];

    public function notifiable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
