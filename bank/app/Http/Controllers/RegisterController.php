<?php

namespace App\Http\Controllers;
use DB;
use App\Models\nasabah;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function add(Request $req){
      $validation = $req->validate([
            'name' =>'required',
        ]);
      nasabah::create($validation);
    }
}
