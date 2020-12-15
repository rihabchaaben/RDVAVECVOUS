<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = ['designation', 'quantite', 'prix_unitaire', 'devis_id'];

    public function devi()
    {
        return $this->belongsTo(Devis::class);
    }

}
