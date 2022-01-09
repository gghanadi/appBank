<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function add(Request $req){
      $validation = $req->validate([
            'name' =>'required'
        ]);
        dd('berhasil');
       DB::table('nasabahs')->create($validation);
    }
}
