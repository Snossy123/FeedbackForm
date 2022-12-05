<?php

namespace App\Http\Controllers;

use App\Models\questionChoice;
use Illuminate\Http\Request;

class QuestionChoiceController extends Controller
{
    public function store($questions, $replyform_id)
    {
        foreach ($questions as $q=>$ans) {
            $chQ = new questionChoice(); 
            $chQ->formReply_id = $replyform_id;
            $chQ->choiceQuestion_id = $q; 
            $chQ->answersChoiceQ_id = $ans; 
            $chQ->save(); 
        }
    }
}
