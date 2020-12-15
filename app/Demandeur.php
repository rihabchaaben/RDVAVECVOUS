<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{

    protected $fillable = ['nom', 'adresse', 'cp', 'ref', 'ville_id', 'user_id', 'telephone', 'mobile', 'avatar'];

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }


    public function vips()
    {
        return $this->hasOne(VipProfessionnel::class);
    }

    public function agence()
    {
        return $this->hasOne(Agence::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vip()
    {
        return $this->belongsToMany(Professionnel::class, 'vip_professionnels',
            'demandeur_id', 'professionnel_id');
    }
}
