<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-user', function () {
    return view('addUser');
});

Route::post('/add-user', [UserController::class, 'insertAndShow'])->name('add-user');
