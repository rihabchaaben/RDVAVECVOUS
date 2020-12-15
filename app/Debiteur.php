<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debiteur extends Model
{
    protected $fillable = ['nom', 'adress', 'cp', 'ville', 'pays', 'iban', 'bic', 'numero_jacent', 'professionnel_id', 'type'];

   // protected $hidden = ['iban', 'bic'];

    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }

    public function getDecryptedBicAttribute()
    {
        return decrypt($this->attributes['bic']);
    }

    public function getDecryptedIbanAttribute()
    {
        return decrypt($this->attributes['iban']);
    }
}
