<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singleQuestion extends Model
{
    use HasFactory;

    protected $fillable = ([
        'form_id', 'description', 'status',
    ]);
 

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }

    // public function questionAnswers()
    // {
    //     return $this->hasMany(questionAnswer::class);
    // }
 
}
