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
        $data = History::where("norekening","=","$user")->orderBy("created_at","desc")->paginate(5);
        return view('history',compact('data'));
    }
}
