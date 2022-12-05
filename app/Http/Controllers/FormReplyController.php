<?php

namespace App\Http\Controllers;

use App\Models\formReply;
use Illuminate\Http\Request;

class FormReplyController extends Controller
{
    public function store(Request $request){
        // insert new reply 
        $reply = new formReply();
        $reply->form_id = $request['formId'];
        $reply->save(); 
        // insert new answer single questions
        $singleQ = new QuestionAnswerController();
        $singleQ->store($request['singleQ'], $reply->id); 
        // insert new answer choice questions
        $choiceQ = new QuestionChoiceController();
        $choiceQ->store($request['choiceQ'], $reply->id); 
        
        return response()->json(["status"=>true, "msg"=>"Thanks for your feedback", "title"=>$reply->title]);
    }
}
