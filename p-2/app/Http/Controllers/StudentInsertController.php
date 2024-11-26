<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInsertController extends Controller
{
    //

    public function insert_form(){
        return view('student.insert_form');
        }

        public function insert(Request $request){
            $name = $request->input('student_name');

            //INsert Operation.
            DB::insert("insert into students(name) values(?)", [$name]);
            return "Record inserted done!<a href='/form'>click here to go back</a>";
        }

        // public function show( ) {
        //     $data = DB::select( 'select * from students');
        //     return "Select command run";
        // }

        public function student_list() {
            $students = DB::select( 'select from students ' );
            return view( 'student.student_list', ['students' => $students ] );
        }

        public function edit( $id ) {
            $student = DB::table( 'student' )->where( 'id', $id )->first();
            return view( 'student.student_edit', ['student' => $student ] );
        }

        public function update( Request $request, $id )  {
            $name = $request->input('student_name');
            DB::update( 'update student set name=? where id=?', [ $name, $id]);
            return "Record upadated successfully";
        }

        public function delete( $id ) {
            DB::delete("delete from student where id = ?", [$id]);
            return "Record deleted successfully";
        }



}
