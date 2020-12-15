<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{
    const INIT = 0;
    const REFUSE = 1;
    const ACCEPTE = 2;
    const ATTENTE = 3;
    const ANNULER = 4;
    const DEVIS = 5;
    const FACTURE = 6;

    protected $fillable = ['professionnel_id', 'demande_id', 'status','coupon'];

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function devis()
    {
        return $this->hasOne(Devis::class);
    }

    public function notification()
    {
        return $this->morphMany('App\Notification', 'notifiable');
    }

    public static function demandeStatus($model, $id, $status)
    {
        return self::whereHas('demande', function ($query) use ($id, $model) {
            $query->where($model, $id);
        })->whereIn('status', $status)->count();
    }
}
