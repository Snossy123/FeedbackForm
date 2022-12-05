<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionAnswer extends Model
{
    use HasFactory;

    protected $fillable = ([
        'answer'
    ]);

    public function formReply()
    {
        return $this->belongsTo(formReply::class);
    }


    // public function singleQuestion()
    // {
    //     return $this->belongsTo(singleQuestion::class);
    // }
}
