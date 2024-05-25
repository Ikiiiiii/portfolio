<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function daftar(){
        return view('register');
    }
    
    function create(Request $req){

        $validate = $this->validate($req, [ 
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',

        ] );

        $validate['password'] = bcrypt($req->password);

        User::create($validate);

        return redirect('login');
    }
    
    function login(){
        return view('login');
    }
    
    function auth(request $req){
        $scredentials = $req->only('email','password');
        
        if(Auth::attempt($scredentials)){
            return redirect()->intended('admin');
        }

        return redirect()->back();
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

    
}
