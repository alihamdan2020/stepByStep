<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('/',[HomeController::class,'mainPage'])->name('home');
route::get('/show/{id}',[HomeController::class,'showDetails'])->name('showDetails');

route::get('/{lang}',[HomeController::class,'changLang'])->name('changeLanguage');


route::get('/aboutUs',function(){
    return view ("about");
})->name("aboutUs");

route::get('/faq',function(){
    return view ("faq");
})->name('FAQ');


route::get("login",[userController::class,'showLogInPage'])->name("login");
route::post("check",[userController::class,'checkUser'])->name("checkuser");
route::post("signup",[userController::class,'signUpUser'])->name("signup");
route::get("register",[userController::class,'userRegister'])->name("register");
route::get("signout",[userController::class,'signOut'])->name("signout");

