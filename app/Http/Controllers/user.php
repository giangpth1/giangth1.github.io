<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function showLogin(){
        return view('pages.login');
    }

    public function showRegister(){
        return view('pages.register');
    }

    public function Logout(Request $request){
        $request->session()->forget('username');
        return view("pages.index");

    }

    public function Register() {

    }
}
