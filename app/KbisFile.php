<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KbisFile extends Model
{
    const KBIS = 1;
    const ASSURENCE = 2;

    protected $table = 'kbis';
    protected $fillable = ['url', 'type', 'note', 'professionnel_id'];

    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class);
    }

}
