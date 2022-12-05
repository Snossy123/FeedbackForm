<?php

namespace App\Http\Controllers;

use App\Models\questionAnswer;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    public function store($questions, $replyform_id)
    {
        foreach ($questions as $q=>$ans) {
            $singleQ = new questionAnswer(); 
            $singleQ->formReply_id = $replyform_id;
            $singleQ->singleQuestion_id = $q; 
            $singleQ->answer = $ans; 
            $singleQ->save(); 
        }
    }
}
