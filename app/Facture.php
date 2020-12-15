<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{

    protected $fillable = ['mois','annee','nombre_rdv','professionnel_id'];

    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }

 
    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

}
