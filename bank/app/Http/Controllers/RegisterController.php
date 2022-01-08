<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function add(Request $req){
        return view('login');
    }
}
