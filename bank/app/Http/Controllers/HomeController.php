<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $norek = Auth::user()->norekening;
        return view('home',compact('norek'));
    }
}
