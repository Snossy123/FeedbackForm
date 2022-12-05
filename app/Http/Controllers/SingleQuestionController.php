<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\singleQuestion;
use Illuminate\Http\Request;

class SingleQuestionController extends Controller
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
        foreach ($questions as $q) {
            $singleQ = new singleQuestion(); 
            $singleQ->form_id = $form_id;
            $singleQ->description = $q; 
            $singleQ->save(); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\singleQuestion  $form
     * @return \Illuminate\Http\Response
     */
    public function show(singleQuestion $sQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\singleQuestion  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(singleQuestion $sQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\singleQuestion  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, singleQuestion $sQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\singleQuestion  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(singleQuestion $sQ)
    {
        //
    }

}
