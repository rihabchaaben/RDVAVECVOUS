<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['text', 'type', 'questionnaire_id'];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
