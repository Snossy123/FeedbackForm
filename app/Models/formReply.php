<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formReply extends Model
{
    use HasFactory;
 

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    // public function questionAnswers()
    // {
    //     return $this->hasMany(questionAnswer::class);
    // }

    // public function questionChoices()
    // {
    //     return $this->hasMany(questionChoice::class);
    // }

}
