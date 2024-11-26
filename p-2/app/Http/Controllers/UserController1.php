<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    //
    public function profile() {

        $profileUrl = route('profile');
        return view('user.profile', ['profileUrl' => $profileUrl ]);
    }

    public function show() {

        return view('user.show', ['userId'=> $id]);
    }
}
