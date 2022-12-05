<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ([
        'title', 'description', 'status'
    ]);

    public function singleQuestions()
    {
        return $this->hasMany(singleQuestion::class);
    }
 

    public function choiceQuestions()
    {
        return $this->hasMany(choiceQuestion::class);
    }

    public function formReplys()
    {
        return $this->hasMany(formReply::class);
    }


}
