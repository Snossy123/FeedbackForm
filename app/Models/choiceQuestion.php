<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choiceQuestion extends Model
{
    use HasFactory;

    protected $fillable = ([
        'form_id', 'description', 'status',
    ]);


    public function form()
    {
        return $this->belongsTo(Form::class);
    }


    public function answersChoiceQs()
    {
        return $this->hasMany(answersChoiceQ::class);
    } 

    // public function questionChoices()
    // {
    //     return $this->hasMany(questionChoice::class);
    // }
 
}
