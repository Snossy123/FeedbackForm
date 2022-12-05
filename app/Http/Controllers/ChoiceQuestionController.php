<?php

namespace App\Http\Controllers;

use App\Models\answersChoiceQ;
use App\Models\choiceQuestion;
use Illuminate\Http\Request;

class ChoiceQuestionController extends Controller
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
    public function store($questions, $form_id)
    { 
        foreach ($questions as $q=>$val) {
            $choiceQ = new choiceQuestion(); 
            $choiceQ->form_id = $form_id;
            $choiceQ->description = $q; 
            $choiceQ->save();
            
            // insert new answer choice question
            $achoiceQ = new AnswersChoiceQController();
            $achoiceQ->store($val, $choiceQ->id);  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\choiceQuestion   $form
     * @return \Illuminate\Http\Response
     */
    public function show(choiceQuestion $chQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\choiceQuestion   $form
     * @return \Illuminate\Http\Response
     */
    public function edit(choiceQuestion $chQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\choiceQuestion  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, choiceQuestion $chQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\choiceQuestion   $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(choiceQuestion $chQ)
    {
        //
    }

}
