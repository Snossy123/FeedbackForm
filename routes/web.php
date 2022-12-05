<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\FormReplyController;
use App\Models\Form;
use App\Models\formReply;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/form/publish', [FormController::class, 'store']);

Route::get('/feedback/{formTitle}', function ($formTitle) {
    $data = Form::all();
    $state = 0; 
    if (count($data)){$state = 1; $data=$data[0];}
    return view('feedback', [
        'form'=>$data,
        'state'=>$state,
    ]);
});

Route::get('/form/retrieve', [FormController::class, 'show']);

Route::post('/form/update', [FormController::class, 'update']);

// Route::post('/form/submit', [FormReplyController::class, 'store']);
