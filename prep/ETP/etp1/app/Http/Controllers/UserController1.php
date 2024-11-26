<?php

namespace App\Http\Controllers;

use App\Rules\PascalCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController1 extends Controller
{
    //
    function getUser () {
        // return "Hello from UserController1";
        return view( 'user1');
    }

    function getUserName( $name ) {
        // return "Hello from UserController1, $name";
        $users = ['a', 'b', 'c'];
        return view( 'user1', [ 'name' => $name , 'users'=> $users ] );
    }

    // nested view
    function adminLogin( ) {
        if ( View::exists('admin.login') ) {
            return view( 'admin.login' );
        }
        else {
            return "No such view exists";
        }
    }

    function addUser( Request $request ) {
        $name = $request->name;
        $email = $request->email;
        $city = $request->city;

        echo " Name: $name <br> Email: $email <br> City: $city <br>";

        return "Form submitted";
    }

    function addUser2( Request $request ) {
        // $skill = $request->skill;
        // print_r( $skill );
        // return $request->input();
        // return response()->json( $request->all() );

        // $jsonArr = [
        //     "path" => $request->path(),
        //     "url" => $request->url(),
        //     "fullurl" => $request->fullurl(),
        //     "ip" => $request->ip(),
        //     "userAgent"=> $request->userAgent()
        // ];
        // return $jsonArr;


        echo "Request method is: " . $request->method() . "<br>";
        echo "Request path is: " . $request->path() . "<br>";
        echo "Request url is: " . $request->url() . "<br>";
        echo "Request ip is: " . $request->ip() . "<br>";
        echo "collect all input: " . $request->collect() . "<br>";
        echo "Request is ajax: " . $request->ajax() . "<br>";
        echo "Request is pjax: " . $request->pjax() . "<br>";
        echo "Request is secure: " . $request->secure() . "<br>";
        echo "Request user " . $request->user() . "<br>";

        if ( $request->isMethod("POST") ) {
            echo "Request is POST <br>";
        }
        else {
            echo "Request is not POST <br>";
        }
    }


    function addUser3( Request $request ) {
        $name = $request->input('name');
        $email = $request->email;
        $city = $request->get('city');

        $validated = $request->validate( [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'city' =>  [ 'required', new PascalCase ]
        ]
        ,
        [
            'name.required' => 'Name should not not empty',
            'name.min' => 'Name should be minimum of 5 characters',
        ]
        );

        if ( $validated  )  {
            return 'Validated';
        }
        return 'Not validated';
    }

}
