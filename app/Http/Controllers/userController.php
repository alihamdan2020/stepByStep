<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function showLogInPage(){
        return view("user/login");
    }

    function checkUser(Request $req){
        $req->validate([
            "email"=>"required|email",
            "password"=>"required"
        ],
        [
            "email.required"=>"username is required",
            "email.email"=>"valid email",
            "password.required"=>"password is required"
        ]
    );

    // $user=db::table("my_users")
    //         ->where("username",$req->input("email"))
    //         ->where("password",$req->input("password"))
    //         ->get();


    // if(count($user)==1)
    // return redirect("/");
    // else
    // return redirect("login")->with("message","wrong username or passwprd");

    $cred=$req->only("email","password");

     if(Auth::attempt($cred))
     return redirect("/");
     else
     return redirect("login")->with("message","wrong username or passwprd");


    }

    function userRegister(){
        return view("user/register");
    }

    function signUpUser(request $req){
        $req->validate([
            "email"=>"required|email|unique:users",
            "password"=>"required|min:5"
        ],
        [
            "email.required"=>"username is required",
            "email.email"=>"valid email",
            "email.unique"=>"this email already exist",
            "password.required"=>"password is required",
            "password.min"=>"min length = 5"
        ]
    );


    $data=$req->all();
    User::create([
        'name' => "hhhhhhhhhhhhh",
        'email' => $data['email'],
        'password' => hash::make($data['password']),
]);
return redirect('login')->with('message','Your credential has bedd added good, log in please');
    
    }

    function signOut(){
        session()->flush();
        return redirect("login");
    }
}
