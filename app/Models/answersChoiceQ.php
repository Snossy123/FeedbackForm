<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answersChoiceQ extends Model
{
    use HasFactory;

    protected $fillable = ([
        'choiceQuestion_id', 'description', 'status',
    ]);

    /**
     * Get the choiceQuestion that owns the answersChoiceQ
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function choiceQuestion()
    {
        return $this->belongsTo(choiceQuestion::class);
    }


    // public function questionChoices()
    // {
    //     return $this->hasMany(questionChoice::class);
    // }
 
}
