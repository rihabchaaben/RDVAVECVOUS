<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardless extends Model
{
    protected $table = 'cardless';

    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }
}
