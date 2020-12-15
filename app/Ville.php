<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function demandeurs()
    {
        return $this->hasMany(Demandeur::class);
    }

    public function professionnels()
    {
        return $this->hasMany(Professionnel::class);
    }

    public function zoneDeTravailles()
    {
        return $this->belongsToMany(Professionnel::class, 'zone_de_travailles',
            'ville_id', 'professionnel_id');
    }

}
