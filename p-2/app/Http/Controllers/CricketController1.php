<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CricketController1 extends Controller
{
    //
    public function create() {
        return view( 'cricket.create');
    }

    public function show() {
        return view('cricket-form1');
    }

    public function insert( Request $request ) {

        $name = $request->input( 'name' );

    }


}
