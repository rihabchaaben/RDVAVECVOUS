<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    protected $fillable = ['code_promo'];

    public function professionnels()
    {
        return $this->belongsToMany(Professionnel::class);
    }
}
