<?php

namespace App\Http\Controllers;
use DB;
use App\Models\nasabah;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function add(Request $req){
      $norek = mt_rand(1000,9999);
      $req->merge([
        'role' => 3,
        'norekening' => $norek
      ]);
      $validation = $req->validate([
            'name' =>'required',
            'pin' => 'required|min:3|max:6',
            'namaibukandung' => 'required',
            'phone'=> 'required',
            'norekening'=> 'required',
            'loan' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
        ]);
        $validation2 = $req->validate([
          'username' => 'required',
          'name' =>'required',
          'role' => 'required',
          'norekening' => 'required',
          'password' => 'required|min:4|max:10',
          'email' => 'required|unique:users|email:dns',
        ]);
      $validation2['password'] = bcrypt($validation2['password']);
      $validation['pin'] = bcrypt($validation['pin']);
      User::create($validation2);
      nasabah::create($validation);
      return view('/login');
    }
}
