<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Notification extends Model
{

//    protected $casts = [
//        'readed_at' => 'datetime:Y-m-d',
//    ];
    protected $fillable = ['id', 'notifiable_id', 'notifiable_type', 'user_id', 'readed_at'];

    public function notifiable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNotificationType($type)
    {
        return $this->where('notifiable_type', $type);
    }
}
