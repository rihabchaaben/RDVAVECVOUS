<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialDemande extends Model
{
    public function demandes()
    {
        return $this->belongsTo(Demande::class);
    }
}
