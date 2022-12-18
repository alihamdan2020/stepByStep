<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    function mainPage(){
        $users=DB::table('users')
        ->select('*')
        ->get();
        return view("index",['users'=>$users]);
    }

    function changLang($language){
        $users=DB::table('users')
        ->select('*')
        ->get();
        App::setlocale($language);
        return view("index",['users'=>$users]);

    }
    function showDetails($id){
        $users=DB::table('users')
        ->where('id',$id)
        ->select('*')
        ->get();
        return view("show",['users'=>$users]);
    }
}
