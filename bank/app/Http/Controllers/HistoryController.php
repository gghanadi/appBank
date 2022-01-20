<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        $user = Auth::user()->norekening;
        $data = History::where("norekening","=","$user")->get();
        return view('history',compact('data'));
    }
}
