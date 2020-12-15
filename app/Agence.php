<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = ['nom_societe', 'nom_contact', 'demandeur_id'];

    public function demandeur()
    {
        return $this->belongsTo(Demandeur::class);
    }
}
