<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VipProfessionnel extends Model
{
    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);

    }

    public function demandeurs()
    {
        return $this->hasMany(Demandeur::class);
    }

    public function notification()
    {
        return $this->morphMany('App\Notification', 'notifiable');
    }

}
