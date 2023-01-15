<?php

namespace App\Http\Controllers;

use App\Models\User;
use Error;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm(){
        return view('register');
    }
    public function register(Request $request){
            //validation
            $data=  $request->validate([
                "name"=>'required|string|max:100',
                "email"=>'required|email|unique:users,email',
                "password"=>'required|string|min:6|confirmed'
            ]);

            $data['password']= bcrypt($data['password']);

            //Create
            User::create($data);
        //Redirect
      return redirect(url('login'));
    }

    public function loginForm(){
        return view('login');
    }
    public function login(Request $request){

        //Validation
        $data=  $request->validate([
            "email"=>'required|email',
            "password"=>'required|string|min:6'
        ]);
        //Check if email and password is in database

       $is_login =  Auth::attempt(["email"=>$data['email'] ,"password"=>$data['password'] ]);
       if($is_login !=true){
        return redirect(url('login'));
       }

        //Redirect To
        return redirect(url('home'));


    }
    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }
}
