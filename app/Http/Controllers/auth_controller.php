<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class auth_controller extends Controller
{
    //
    function signup(Request $request){
        // Check if the username already exists
        $existinguser = person::where('username', $request -> username)->first();
        if($existinguser){
            // Username already exists, redirect back with error message
            return redirect()->back()->with('error', 'Username already exists.');
        }
        // Create a new person instance
        $person = new person();
        $person->username = $request->username;
        $person->name = $request->name;
        $person->password = $request->password;
        $person->securityquestion = $request->securityquestion;
        $person->save();
        return view('/auth');
    }
    function login(Request $request){
        $existing_username = person::where('username',$request -> username) -> exists();
        $existing_password = person::where('password',$request -> password) -> exists();
        if ($existing_username && $existing_password) {
            $person = person::where('username', $request->username)->first();
            $username = $person -> username;
            $password = $person -> password;
            if($username == "admin" && $password == "admin@tales"){
                return view('admin');
            }
            else{
                return view('user');
            }
        }
        else{
            return redirect()->back()->with('error', 'Wrong credentials');
        }
    }
}
