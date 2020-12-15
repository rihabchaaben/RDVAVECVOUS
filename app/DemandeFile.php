<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandeFile extends Model
{
    protected $fillable = ['nom', 'extension', 'type', 'url','demande_id'];

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }
}
