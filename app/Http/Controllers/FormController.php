<?php

namespace App\Http\Controllers;

use App\Models\choiceQuestion;
use App\Models\Form;
use App\Models\singleQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
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
    public function store(Request $request)
    {
        // insert new form
        $form = new Form();
        $form->title = $request['title'];
        $form->description = $request['description'];
        $form->save();
        // insert new single questions
        $singleQ = new SingleQuestionController();
        $singleQ->store($request['singleQ'], $form->id); 
        // insert new choice questions
        $choiceQ = new ChoiceQuestionController();
        $choiceQ->store($request['choiceQ'], $form->id); 
        
        
        return response()->json(["status"=>true, "msg"=>"Form published successfully", "title"=>$form->title]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        return response()->json(["forms"=>Form::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        foreach ($request['forms'] as $id => $status) {
            DB::table('forms')->where('id', '=', $id)->update(array('status'=>$status));
        }
        return response()->json(["status"=>true, "msg"=>"Forms updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }

}
