<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //14/10/24, 11-12

    public function register( Request $request ) {
        $validated_data = $request->validate( [

            'name' => 'required|regex:/^[A-Z]+$/i|string|max:255',
            'email' => 'required|email|unique:users,email',
            'contact' => 'nullable|numeric',
            'dob' => 'required|date|before:-18years',
            'password' => 'required|string|min:8|max:255|confirmed',
            'image' => 'rquired|image|mimes:jped,jpg,gif|max:2048'
        ]);
        return $validated_data;
    }


}
