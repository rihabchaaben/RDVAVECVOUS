<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoPayment extends Model
{
    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }

    public function proposition()
    {
        return $this->belongsTo(Proposition::class);
    }
}
