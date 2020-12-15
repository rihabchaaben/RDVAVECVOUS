<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
	public function zoneDeTravailles()
    {
        return $this->belongsToMany(Professionnel::class, 'zone_de_travailles',
            'departement_id', 'professionnel_id');
    }

    public function villes()
    {
        return $this->hasMany(Ville::class);
    }

    public function professionnels()
    {
        return $this->hasMany(Professionnel::class);
    }
}
