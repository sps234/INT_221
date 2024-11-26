<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\AdminController;

// Route::get('/user-form', function() {
//     return view('user_form');
// });

// Route::post( 'get-userdata', function( Request $request )  {
//     // dd( $request->all() );
//     dd( $request ::all() ); // this will also work
// });

Route::get('/', function () {
    return view('welcome');
});


// get the input data & redirect - 21/08/24

// Route::post( 'get-userdata2', function( Request $request )  {
//     return redirect('user-form')->with('message', 'Data received successfully');
// });

// Route::post( 'get-userdata3', function( Request $request )  {

//     $name = $request->input('name');
//     $age = $request->input('age');
//     $contact = $request->input('contact');
//     return 'Name is '. $name . ' Age is '.$age.' Contact '.$contact;
// });

// Route::get( 'user-form2', function() {
//     $title = 'Resume Form';
//     return view('user_form2', ['title' => $title]);
// });



// optional parameter - 26/08/24
// Route::view( '/sample-page', 'page' );

// Route::get( 'opt/{id}/{type?}', function ( $id, $type = "" ) {
//     if ( $id==1 && $type == "mon" ) {
//         return "<h1>Today is Monday<h1>";
//     }
//     else if ( $id==2 || $type == "tuesday" ) {
//         return "<h1>Today is Tuesday</h1>";
//     }
//     else if ( $id==3 || $type == null ) {
//         return "<h1>Today is Wednesday</h1>";
//     }
//     else {
//         return "<h1>Invalid Day</h1>";
//     }
// });


// name parameter - 28/08/24

// Route::get( 'opt/{id}/{type?}', function ( $id, $type = "" ) {
//     if ( $id==1 && $type == "mon" ) {
//         return "<h1>Today is Monday<h1>";
//     }
//     else if ( $id==2 || $type == "tuesday" ) {
//         return "<h1>Today is Tuesday</h1>";
//     }
//     else if ( $id==3 || $type == null ) {
//         return "<h1>Today is Wednesday</h1>";
//     }
//     else {
//         return "<h1>Invalid Day</h1>";
//     }
// })->name('name');


// group grouping

// Route::get( 'photo/img', function() {
//     return '<h1> this is my img page</h1>';
// });


// Route::group( ['prefix' => 'photo'], function( ) {
//     Route::get( '/img', function () {
//         return '<h1> this is image page</h1>';
//     });
//     Route::get( '/vid', function() {
//         return '<h1> this is vid page</h1>';
//     });
// });


// 28/08/24 , middleware - w1
// Route::get( 'month/{num}', function ( $num ) {
//     if ( $num == 1 ) {
//         return '<h1>Jan</h1>';
//     }
//     else if ( $num == 2 ) {
//         return '<h1>Feb</h1>';
//     }
//     else if ( $num == 3  ) {
//         return '<h1> Mar</h1>';
//     }
// }
// );
// )->middleware(\App\Http\Middleware\Month::class);


// middleware w2
// Route::middleware(['Month'])->group(function () {
//     Route::get('/dashboard', function () {
//         return '<h1>Dashboard</h1>';
//     });

//     Route::get('/users', function () {
//         return '<h2>Users</h2>';
//     });
// });


// Route::get('/link',[Month::class,'method'])->name('mon')->middleware('Month');


// 11-12, 09/09/24, create controller

// Route::get( '/login', [Logincontroller::class, 'login_form'] );
// Route::post( '/login', [LoginController::class, 'login_process' ] );
// Route::get( '/if', [HomeController::class, 'if' ] );


// task - passing routing parameters controllers
// Route::get( '/post/{id}', [ UserController::class, 'show' ] );


// middleware controller routing - 11/09/14, 9am-10am
// Route::get('/month/{num}', [MonthController::class, 'numMonth']);


// middleware

Route::get('/month/{num}', [MonthController::class, 'numMonth'])->middleware('Month');

// Route::get( '/role/{id}', [ AdminController::class, 'role' ] );
Route::get( '/role/{id}', [ AdminController::class, 'role' ] )->middleware('Role');



// blade template - 16/09/24, 10:00am
Route::get( '/default', function ( ) {
    return view('layouts.default');
} );

?>



