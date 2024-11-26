<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController3 extends Controller
{
    //

    public function userForm() {
        return view('user.insert1');
    }

    public function addUser( Request $request) {

        $name = $request->input('name');

        DB::table('user1')->insert(['name' => $name]);

        return "Record inserted successfully";
    }

    public function showUser(Request $request, $id) {
        $User = DB::table('user1')->where( 'id' , $id )->first();
        if ( $User ) {
            return $User;
        }
        return "Record not found";
    }

    public function editUser( Request $request, $id ) {
        $name = $request->input("name");
        $User = DB::table("user1")->where( "id" , $id )->update(["name"=> $name]);
        if ( $User ) {
            return "User updated id :".$User;
        }
        return "Record not found";

    }

    public function deleteUser( Request $request, $name ) {
        $user = DB::table('user1')->where('name', $name)->delete();
        if ( $user ) {
            return 'User deleted :'.$name;
        }
        return 'Record not found';
    }


    public function userList() {
        $users = DB::table('user1')->get();
        if ( $users ) {
            return view( 'user.users', ['users' => $users ] );
        }
        return 'No record found';
    }
}
