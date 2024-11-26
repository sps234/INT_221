<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController1;
use App\Http\Middleware\SetLanguage1;
use App\Http\Controllers\MailController1;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\StudentController1;

Route::get('/', function () {
    return view('welcome');
});


//v8 - routing

// Route::get( '/home', function () {
//     return view ('home');
// });

Route::view( '/home', 'home' );

//dynamic route
Route::get( '/about/{name}', function ($name) {
    // echo $name;
    return view('about', [ 'fname' => $name]);
});

// redirection
Route::redirect( '/about', '/home' );


//v9 - controller
Route::get( '/user1', [UserController1::class, 'getUser'] );
Route::get( '/user1/{name}', [UserController1::class, 'getUserName'] );
// Route::get( '/admin/login', [UserController1::class, 'adminLogin'] );


//v10 - nested view
Route::get( '/admin-login',[ UserController1::class,'adminLogin'] );


//v11 - blade template - check user1.blade.php file


//v12 - subview -- check header.blade.php and home.blade.php


//v13 - component -- check message-banner.blade.php and user1.blade.php


//v14 -form -- check user-form-1.blade.php
Route::view( '/user-form' , 'user-form-1' );
Route::get( '/addUser1', [UserController1::class, 'addUser']);

//v15 -form handling
Route::view( '/user-form-2' , 'user-form-2' );
Route::post( '/addUser2' , [UserController1::class,'addUser2'] );




// v39 - localization
Route::get( '/home-2/{lang}', function($lang ) {
    App::setLocale( $lang );
    return view( 'home' );
});


// v40 - adv localization

// Route::get( '/setLang/{lang}', function ( $lang ) {
//     // App::setLocale( $lang );
//     Session::put( 'lang', $lang );
//     return redirect( '/home-3' );
// });

Route::middleware('SetLang1')->group( function () {

    Route::get( '/setLang/{lang}', function ( $lang ) {
        // App::setLocale( $lang );
        Session::put( 'lang', $lang );
        return redirect()->back();
    });

    Route::view( '/home-3', 'home' );

});


// v64 - mail
Route::get( '/send-mail', [MailController1::class, 'sendMail'] );


// v16 - 18 form validation, error message, old input, custom validation,  custom validation rule
Route::view( '/user-form-3', 'user-form-1' );
Route::post( '/addUser3', [UserController1::class, 'addUser3'] );


// v19 - url generation
Route::view( '/home-2', 'home2' );
Route::view( '/home-21', 'home2' );


// v35 - HTTP Request class - check UserConroller1.php and /user-form-2


// v36 - session
Route::view( '/login-1', 'user2' );
Route::post( '/login-1', [UserController2::class, 'login'] );
Route::get( '/logout-1', [UserController2::class,'logout'] );
Route::view( '/profile-1', 'profile1' );


// v37 - flash session
Route::post( '/flash-login', [ UserController2::class, 'login2' ] );


//v38 - file upload
Route::view( '/upload-1', 'upload' );
Route::post( '/upload-1', [UserController2::class, 'upload1'] );


// v41 - inserting data
Route::view( '/add-student', 'add-student' );
Route::post( '/add-student', [StudentController1::class, 'addStudent'] );


// database

use App\Http\Controllers\UserController3;

Route::get( '/user-form', [UserController3::class, 'userForm'] );
Route::post( '/user-form', [UserController3::class, 'addUser'] );
Route::get( '/show-user/{id?}', [UserController3::class, 'showUser'] );
Route::view( '/edit-user/{id}', 'user.edit' );
Route::put( '/edit-user/{id}', [UserController3::class, 'editUser'] );
Route::view( '/delete-user/{name}', 'user.delete' );
Route::delete( '/delete-user/{name}', [UserController3::class, 'deleteUser'] );
Route::get( '/user-list', [UserController3::class, 'userList'] );
