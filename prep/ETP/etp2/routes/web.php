<?php

use App\Http\Controllers\EmailController1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get( '/send-mail', [EmailController1::class,'sendMail'] );
