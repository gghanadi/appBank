<?php

namespace App\Http\Controllers;
use Auth;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $norek = Auth::user()->norekening;
        $data = DB::select("select norekening, loan from nasabahs where norekening = '$norek'");
        return view('home',compact('data'));
    }
}
