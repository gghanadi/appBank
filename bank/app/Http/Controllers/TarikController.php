<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\History;
use App\Models\nasabah;

use Illuminate\Http\Request;

class TarikController extends Controller
{
    public function index(){
        return view('tarik');
    }

    public function tarik_uang(Request $req){
        $norek = Auth::user()->norekening;
        $req->merge([
            'name' => Auth::user()->name,
            'norekening'=> $norek,
            'jenis_transaksi'=>'DEBIT'
        ]);
        $insert = $req->validate([
            'name' => 'required',
            'norekening'=>'required',
            'jenis_transaksi'=>'required',
            'loan'=>'required'
        ]);
        History::create($insert);
        $users = DB::table('nasabahs')->where('norekening','=',$norek)->get('loan');
        $history = DB::select("select loan from histories where norekening = '$norek' order by id desc limit 1 ");
        $total = (json_decode($users[0]->loan))  -  (json_decode($history[0]->loan));
        if((json_decode($users[0]->loan))  <  (json_decode($history[0]->loan)) ){
            return back()->with('ErrorSaldo','Saldo anda tidak mencukupi untuk di tarik!');
        }
        nasabah::where('norekening',$norek)
                ->update(['loan'=>$total]);
        return redirect('/');

    }
}
