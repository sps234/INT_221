<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //

    public function insertAndShow( Request $request  ) {

        $name = $request->input('name');
        $email = $request->input('email');
        $roles = $request->input('roles');

        DB::insert("insert into users2 (Name, Email, Role) VALUES (?, ?, ?)", [
            $name, $email, $roles
        ]);


        $admins = DB::select("SELECT * FROM users2 WHERE Role = 'admin'");
        $editors = DB::select("SELECT * FROM users2 WHERE Role = 'editor'");
        $viewers = DB::select("SELECT * FROM users2 WHERE Role = 'viewer'");


        return view('usersByRole', ['admins' => $admins,'editors' => $editors,'viewers' => $viewers]);
    }
}
