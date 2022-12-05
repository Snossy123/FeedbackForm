<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionChoice extends Model
{
    use HasFactory;


    public function formReply()
    {
        return $this->belongsTo(formReply::class);
    }

    // public function choiceQuestion()
    // {
    //     return $this->belongsTo(choiceQuestion::class);
    // }

    // public function answersChoiceQ()
    // {
    //     return $this->belongsTo(answersChoiceQ::class);
    // }
}
