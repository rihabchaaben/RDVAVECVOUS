<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    const REFUSE = 1;
    const ACCEPTE = 2;
    const ATTENTE = 3;
    const PAYE = 4;
    protected $fillable = ['montant', 'proposition_id', 'tax', 'valable_until', 'condition_paiement', 'professionnel_id', 'status'];

    //cast used in toArray() or toJson() output
    protected $casts = [
        'created_at' => 'datetime:Y/m/d',
        'valable_until' => 'datetime:D/m/y',
    ];

    public function proposition()
    {
        return $this->belongsTo(Proposition::class);
    }

    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }

    public function designations()
    {
        return $this->hasMany(Designation::class);
    }

    public function notifications()
    {
        return $this->morphMany('App\Notification', 'notifiable');
    }

    public function getHtAttribute()
    {
        return $this->attributes['montant'] + $this->attributes['montant'] * $this->attributes['tax'] / 100;
    }
}
