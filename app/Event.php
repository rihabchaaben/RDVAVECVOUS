<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = [
        'start_date',
        'end_date',
        // your other new column
    ]   ;

    protected $fillable = ['titre', 'start_date', 'end_date', 'demande_id'];

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

}
