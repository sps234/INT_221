<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController2 extends Controller
{
    //

    public function login ( Request $request ) {
        $user = $request->user;
        $pwd = $request->password;

        $request->session()->put( 'user', $user );

        $request->session()->put('allData', $request->input() );

        // if ( $request->session()->has( $user ) ){
        //     return view('profile1');
        // }
        return view('profile1', [ 'user' => $user ]);
    }

    public function logout( Request $request ) {
        $user = $request->session()->get('user');
        $request->session()->pull(  $user );

        // echo $request->session()->get('user');
        // echo session()->get('user');
        // echo session('user');

        return view( '/user2');
    }

    public function login2( Request $request ) {
        $request->session()->flash( 'message', 'Login successful' );
        return redirect('/login-1');
    }

    public function upload1( Request $request ) {
        $path = $request->file('file')->store('public');
        // return $path;
        // $url = asset('storage/' . basename($path));
        // return $url;
        $fileNameArr = explode( "/", $path );
        $fileName = $fileNameArr[1];

        // return view( 'display1');
        return view( 'display1', ['fileName'=> $fileName ]);
        // return $path;
    }
}
