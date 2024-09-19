<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;

use App\Models\Question;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

route::get('/',function (){
    return view('login');
});


// Route::resource('/student',StudentController::class);


//One to one relation routes
Route::get('/student', [StudentController::class, 'create']);
Route::get('/contact', [ContactController::class, 'show']);


//One to many relation routes
Route::get('/test', [QuestionController::class, 'showdata']);
