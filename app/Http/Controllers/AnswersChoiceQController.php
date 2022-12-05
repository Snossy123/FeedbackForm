<?php

namespace App\Http\Controllers;

use App\Models\answersChoiceQ;
use App\Models\choiceQuestion;
use Illuminate\Http\Request;

class AnswersChoiceQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($answers, $chQ_id)
    {  
        foreach ($answers as $a) {
            $achoiceQ = new answersChoiceQ(); 
            $achoiceQ->choice_question_id = $chQ_id;
            $achoiceQ->description = $a; 
            $achoiceQ->save(); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\answersChoiceQ   $form
     * @return \Illuminate\Http\Response
     */
    public function show(answersChoiceQ $achQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\answersChoiceQ   $form
     * @return \Illuminate\Http\Response
     */
    public function edit(answersChoiceQ $achQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\answersChoiceQ  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, answersChoiceQ $achQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\answersChoiceQ   $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(answersChoiceQ $achQ)
    {
        //
    }

    public function choiceQuestion(){
        return $this->belongTo(choiceQuestion::class, 'choiceQuestion_id', 'id');
    }
}
