<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'option_questions';

    protected $fillable = ['text', 'question_id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
