<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('welcome');
});


route::get('/',function (){
    return view('login');
});
