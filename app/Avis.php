<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

    public static function getAvis($id)
    {
        return self::whereHas('professionnel', function ($query) use ($id) {
            $query->where('professionnel_id', $id);
        })->groupBy('professionnel_id')->sum('note');
    }
}
