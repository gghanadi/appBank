<?php

namespace App\Http\Controllers;
use DB;
use App\Models\History;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        $data = History::all();
        return view('history',compact('data'));
    }
}
