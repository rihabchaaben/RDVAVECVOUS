<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = ['nom', 'type'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
