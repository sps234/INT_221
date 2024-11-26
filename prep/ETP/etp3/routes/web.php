<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get( '/send', function() {
    \Illuminate\Support\Facades\Mail::to('saumyapratap2345+test@gmail.com')->send( new \App\Mail\JobPosted());
    return 'Done';
});
