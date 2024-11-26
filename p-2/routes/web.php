<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInsertController;

Route::get('/', function () {
    return view('welcome');
});


// 07/10/24
// Route::get('/stu', [StudentInsertController::class, 'insert_form']);
// Route::post('/insert', [StudentInsertController::class,'insert']);
// Route::get( '/view-records', [ StudentInsertController::class], 'student_list' );


// 14/10/24
// Route::view( '/form', 'student.insert_form' );
// Route::post( '/register', [StudentInsertController::class, 'insert' ] );

// Route::view( '/form-2', 'student.insert_form2' );
// Route::post( '/insert2', [StudentInsertController2::class, 'insert2'] );

// form validation


// Session
// 23/10/24

Route::get( 'get-session', [SessionController::class, 'getSession'] );
Route::get( 'put-session', [SessionController::class, 'storeSession'] );
Route::get( 'del-session', [SessionController::class, 'deleteSession'] );


// 06/11/24


?>
