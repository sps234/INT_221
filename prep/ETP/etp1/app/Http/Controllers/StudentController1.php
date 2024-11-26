<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController1 extends Controller
{
    //

    public function addStudent( Request $request ) {
        $name = $request->input("name");
        $email = $request->input("email");

        $student = new Student( );
        $student->name = $name;
        $student->email = $email;
        $student->save();

        if ( $student ) {
            return "New student has been added successfully";
        }
        return "Student addition failed";
    }
}
