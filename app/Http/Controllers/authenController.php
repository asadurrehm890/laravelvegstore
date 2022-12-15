<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class authenController extends Controller
{
    public function login(){
      return view('admin.login');
    }
    public function register(){
      return view('admin.register');
    }

    public function registerpost(Request $req){
      $req->validate([
           'rname'=>'required',
           'remail' => 'required',
           'rpassword' => 'required',
       ]);
      User::create([
        'name'=>$req->rname,
        'email'=>$req->remail,
        'password'=>Hash::make($req->rpassword),
      ]);

      return redirect()->route('login');
    }


    public function loginuser(Request $req){
       $req->validate([
         'email'=>'required',
         'password'=>'required',
         ]);
         $credentials = $req->only('email', 'password');
         if (Auth::attempt($credentials)) {
           
             return redirect()->route('home')
                         ->withSuccess('Signed in');
         }
          return redirect("login")->withSuccess('Login details are not valid');
    }

    public function setsuperuser(Request $req){
      $req->validate([
           'rname'=>'required',
           'remail' => 'required',
           'rpassword' => 'required',
       ]);

       User::create([
         'name'=>$req->rname,
         'email'=>$req->remail,
         'password'=>Hash::make($req->rpassword),
         'admin'=>true,
       ]);
       return redirect()->route('admin');
    }


}
