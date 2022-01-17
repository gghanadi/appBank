<?php

namespace App\Http\Controllers;
use App\Models\History;
use App\Models\nasabah;
use DB;
use Auth;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        return view('store');
    }

    public function store_money(Request $req){
        $norek = Auth::user()->norekening;
        $req->merge([
            'name' => Auth::user()->name,
            'norekening'=> $norek,
            'jenis_transaksi'=>'KREDIT'
        ]);
        $insert = $req->validate([
            'name' => 'required',
            'norekening'=>'required',
            'jenis_transaksi'=>'required',
            'loan'=>'required'
        ]);
        History::create($insert);
        $users = DB::table('nasabahs')->where('norekening','=',$norek)->get('loan');
        $history = DB::table('histories')->where('norekening','=',$norek)->get('loan');
        $total = (json_decode($users[0]->loan))  +  (json_decode($history[0]->loan));
        nasabah::where('norekening',$norek)
                ->update(['loan'=>$total]);
        return view('home')->with('norek');

    }
}
